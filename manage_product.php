<?php
$page_title = 'All Product';
include_once "includes/load.php";
$products = join_product_table();
include 'header.php';
include 'sidebar.php';

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Product Manage</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Product</li>
        <li class="breadcrumb-item active">Manage Products</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
      <?php echo display_msg($msg); ?>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Products</h5>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Product Name</th>
                  <th>Categories</th>
                  <th>In Stoke</th>
                  <th data-type="date" data-format="YYYY/DD/MM">Added date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($products as $product){?>
                <tr>
                <th scope="row"><?php echo count_id(); ?></th>
                <td> <img class="img-avatar img-circle" src="<?php echo $product['image']; ?>" alt="Image" width="100" height="100"></td>
                <td> <?php echo remove_junk($product['name']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['categorie']); ?></td>
                <td class="text-center"> <?php echo remove_junk($product['quantity']); ?></td>
                <td class="text-center"> <?php echo read_date($product['date']); ?></td>
                  <td>
                    <div class="btn-group">
                      <a href="edit_product.php?id=<?php echo (int)$product['id'];?>" class="btn btn-info btn-xs" title="Edit" data-toggle="tooltip">
                        <i class="ri-edit-2-line"></i>
                      </a>
                      <a href="delete_product.php?id=<?php echo (int)$product['id'];?>" class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-delete-bin-line"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <?php }?>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<?php
include 'footer.php';
?>