<?php
include_once 'includes/load.php';
include 'header.php';
include 'sidebar.php';
// Checkin What level user has permission to view this page
// page_require_level(1);
$all_categories = find_all('categories');
$all_photo = find_all('media');
?>
<?php
if (isset($_POST['add_product'])) {
  $req_fields = array('product-title', 'product-categorie', 'product-quantity');
  validate_fields($req_fields);
  if (empty($errors)) {
    $p_name  = remove_junk($db->escape($_POST['product-title']));
    $p_cat   = remove_junk($db->escape($_POST['product-categorie']));
    $p_qty   = remove_junk($db->escape($_POST['product-quantity']));
    $p_image = ($_FILES['file_upload']);

    $file_name = $p_image['name'];
    $file_path = $p_image['tmp_name'];
    $file_error = $p_image['error'];

    if ($file_error == 0) {
      $file_dest = 'uploads/products'.$file_name;

      move_uploaded_file($file_path,$file_dest);
    

    $date    = make_date();
    $query  = "INSERT INTO products (";
    $query .= " name,quantity,categorie_id,date,image";
    $query .= ") VALUES (";
    $query .= " '{$p_name}', '{$p_qty}', '{$p_cat}', '{$date}', '{$file_dest}'";
    $query .= ")";
    $query .= " ON DUPLICATE KEY UPDATE name='{$p_name}'";
    if ($db->query($query)) {
      $session->msg('s', "Product added ");
      redirect('add_product.php', false);
    } else {
      $session->msg('d', ' Sorry failed to added!');
      redirect('add_product.php', false);
    }
  } else {
    $session->msg("d", $errors);
    redirect('add_product.php', false);
  }
}
}

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Products</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Products</li>
        <li class="breadcrumb-item active">Add Products</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-8">
        <?php echo display_msg($msg); ?>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Products Form</h5>

            <form class="row g-3" method="post" action="add_product.php" enctype="multipart/form-data">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="product-title" id="floatingName" placeholder="Your Name">
                  <label for="floatingFirstName">Product Title</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <select class="form-control" name="product-categorie">
                    <option value="">Select Product Category</option>
                    <?php foreach ($all_categories as $cat) { ?>
                      <option value="<?php echo (int)$cat['id'] ?>">
                        <?php echo $cat['name'] ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-9">
              <div class="form-floating">
                <input type="file" name="file_upload" multiple="multiple" class="btn btn-primary btn-file"/>
              </div>
                </div>
                <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="product-quantity" id="floatingEmail" placeholder="Your Email">
                  <label for="floatingMobile">Quentity</label>
                </div>
              </div>

              <div class="text-center">
                <button type="submit" name="add_product" class="btn btn-primary">Submit</button>
              </div>
              </div>
              
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>
</main><!-- End #main -->

<?php
include 'footer.php';
?>