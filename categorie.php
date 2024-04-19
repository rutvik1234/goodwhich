<?php
  $page_title = 'All categories';
  include "includes/load.php";
  
  $all_categories = find_all('categories')
?>
<?php
 if(isset($_POST['add_cat'])){
   $req_field = array('categorie-name');
   validate_fields($req_field);
   $cat_name = remove_junk($db->escape($_POST['categorie-name']));
   if(empty($errors)){
      $sql  = "INSERT INTO categories (name)";
      $sql .= " VALUES ('{$cat_name}')";
      if($db->query($sql)){
        $session->msg("s", "Successfully Added New Category");
        redirect('categorie.php',false);
      } else {
        $session->msg("d", "Sorry Failed to insert.");
        redirect('categorie.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('categorie.php',false);
   }
 }
?>
<?php
include 'header.php';
include 'sidebar.php';
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Categories</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Categories</li>

      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
    <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
      <div class="col-lg-4">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Categories</h5>

            <form class="row g-3" method="POST" action="categorie.php">
              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="categorie-name" id="floatingName" placeholder="Your Name">
                  <label for="floatingFirstName">Categories Name</label>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" name="add_cat" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>

      </div>

      <div class="col-lg-8">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Categories</h5>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Categories</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach ($all_categories as $cat){?>
                <tr>
                  <th scope="row"><?php echo count_id();?></th>
                  <td><?php echo remove_junk(ucfirst($cat['name'])); ?></td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info btn-xs" href="edit_categorie.php?id=<?php echo (int)$cat['id'];?>" title="Edit" data-toggle="tooltip">
                      <i class="ri-edit-2-line"></i>
                      </a>
                      <a class="btn btn-danger btn-xs" href="delete_categorie.php?id=<?php echo (int)$cat['id'];?>"" title="Delete" data-toggle="tooltip">
                      <i class="ri-delete-bin-line"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>
</main><!-- End #main -->

<?php
include_once 'footer.php';
?>