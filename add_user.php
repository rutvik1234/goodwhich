<?php
  $page_title = 'Add User';
  require_once('includes/load.php');
 
  $groups = find_all('user_groups');
?>
<?php
  if(isset($_POST['add_user'])){

   $req_fields = array('name','phone','email','username','password' );
   validate_fields($req_fields);

   if(empty($errors)){
       $name   = remove_junk($db->escape($_POST['name']));
       $phone   = remove_junk($db->escape($_POST['phone']));
       $email   = remove_junk($db->escape($_POST['email']));
       $username   = remove_junk($db->escape($_POST['username']));
       $password   = remove_junk($db->escape($_POST['password']));
       
       $password = sha1($password);
        $query = "INSERT INTO users (";
        $query .="name,phone,email,username,password,status";
        $query .=") VALUES (";
        $query .=" '{$name}', '{$phone}', '{$email}','{$username}', '{$password}' ,'1'";
        $query .=")";
        if($db->query($query)){
          //sucess
          $session->msg('s',"User account has been creted! ");
          redirect('add_user.php', false);
        } else {
          //failed
          $session->msg('d',' Sorry failed to create account!');
          redirect('add_user.php', false);
        }
   } else {
     $session->msg("d", $errors);
      redirect('add_user.php',false);
   }
 }
?>
<?php
include 'header.php';
include 'sidebar.php';
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">User Management</li>
          <li class="breadcrumb-item active">Add Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
      <?php echo display_msg($msg); ?>
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add User Form</h5>

              <form class="row g-3" method="POST" action="add_user.php">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="name" placeholder="Your Name">
                    <label for="floatingFirstName">Full Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="Your Email">
                    <label for="floatingEmail">Email Id</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingEmail" name="phone" placeholder="Your Email">
                    <label for="floatingMobile">Mobile Number</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingEmail" name="username" placeholder="Your Email">
                    <label for="floatingUserId">UserId</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>
                </div>
                
                
               
                <div class="text-center">
                  <button type="submit" name="add_user" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
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