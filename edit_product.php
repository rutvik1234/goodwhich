<?php
$page_title = 'Edit product';
include_once 'includes/load.php';
include 'header.php';
include 'sidebar.php';
// Checkin What level user has permission to view this page
// page_require_level(1);
$product = find_by_id('products',(int)$_GET['id']);
$all_categories = find_all('categories');
$all_photo = find_all('media');
if(!$product){
    $session->msg("d","Missing product id.");
    redirect('product.php');
  }
  ?>
  <?php
   if(isset($_POST['product'])){
      $req_fields = array('product-title','product-categorie','product-quantity');
      validate_fields($req_fields);

      if(empty($errors)){
        $p_name  = remove_junk($db->escape($_POST['product-title']));
        $p_cat   = (int)$_POST['product-categorie'];
        $p_qty   = remove_junk($db->escape($_POST['product-quantity']));
        
        $query   = "UPDATE products SET";
       $query  .=" name ='{$p_name}', quantity ='{$p_qty}', categorie_id ='{$p_cat}'";
       $query  .=" WHERE id ='{$product['id']}'";
       $result = $db->query($query);
               if($result && $db->affected_rows() === 1){
                 $session->msg('s',"Product updated ");
                 redirect('product.php', false);
               } else {
                 $session->msg('d',' Sorry failed to updated!');
                 redirect('edit_product.php?id='.$product['id'], false);
               }

   } else{
       $session->msg("d", $errors);
       redirect('edit_product.php?id='.$product['id'], false);
   }
   }
?>
<?php


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

            <form class="row g-3" method="post" action="edit_product.php?id=<?php echo (int)$product['id'] ?>" enctype="multipart/form-data">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="product-title" value="<?php echo remove_junk($product['name']);?>" id="floatingName" placeholder="Your Name">
                  <label for="floatingFirstName">Product Title</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                <select class="form-control" name="product-categorie">
                    <option value=""> Select a categorie</option>
                   <?php  foreach ($all_categories as $cat): ?>
                     <option value="<?php echo (int)$cat['id']; ?>" <?php if($product['categorie_id'] === $cat['id']): echo "selected"; endif; ?> >
                       <?php echo remove_junk($cat['name']); ?></option>
                   <?php endforeach; ?>
                 </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" name="product-quantity" value="<?php echo remove_junk($product['quantity']); ?>" id="floatingEmail" placeholder="Your Email">
                  <label for="floatingMobile">Quentity</label>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" name="product" class="btn btn-primary">Submit</button>
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