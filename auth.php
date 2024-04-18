<?php include_once('includes/load.php'); ?>
<?php
$req_fields = array('username','password' );
validate_fields($req_fields);
$username = remove_junk($_POST['username']);
$password = remove_junk($_POST['password']);

if(empty($errors)){
  $user = authenticate($username, $password);
  if($user){
    //create session with id
     $session->login($user);
    //Update Sign in time
     updateLastLogIn($user);
     $session->msg("s", "Welcome to Inventory Management System");
     header("location:body_page.php");

  } else {
    $session->msg("d", "Sorry Username/Password incorrect.");
    header("location:index.php");
  }

} else {
   $session->msg("d", $errors);
   header("location:index.php");
}

?>