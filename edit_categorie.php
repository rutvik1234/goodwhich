
<?php
  $page_title = 'Edit categorie';
  require_once('includes/load.php');
?>
<?php
  //Display all catgories.
  $categorie = find_by_id('categories',(int)$_GET['id']);
  if(!$categorie){
    $session->msg("d","Missing categorie id.");
    redirect('categorie.php');
  }
?>

<?php
if(isset($_POST['edit_cat'])){
  $req_field = array('categorie-name');
  validate_fields($req_field);
  $cat_name = remove_junk($db->escape($_POST['categorie-name']));
  if(empty($errors)){
        $sql = "UPDATE categories SET name='{$cat_name}'";
       $sql .= " WHERE id='{$categorie['id']}'";
     $result = $db->query($sql);
     if($result && $db->affected_rows() === 1) {
       $session->msg("s", "Categorie sucessfuly updated");
       redirect('categorie.php',false);
     } else {
       $session->msg("d", "Sorry! Failed to Update");
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

            <form class="row g-3" method="POST" action="edit_categorie.php?id=<?php echo (int)$categorie['id'];?>">
              <div class="col-md-12">
                <div class="form-floating">
                  <input type="text" class="form-control" name="categorie-name" value="<?php echo remove_junk(ucfirst($categorie['name']));?>" id="floatingName" placeholder="Your Name">
                  <label for="floatingFirstName">Categories Name</label>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" name="edit_cat" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- End #main -->

<?php
include_once 'footer.php';
?>
