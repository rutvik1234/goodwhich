<?php
$page_title = 'Edit User';
require_once('includes/load.php');
// Checkin What level user has permission to view this page
//  page_require_level(1);
include 'header.php';
include 'sidebar.php';

$e_user = find_by_id('users', (int)$_GET['id']);
$groups  = find_all('user_groups');
if (!$e_user) {
    $session->msg("d", "Missing user id.");
    redirect('manage_user.php');
}
?>

<?php
//Update User basic info
  if(isset($_POST['update'])) {
    $req_fields = array('name','username','level');
    validate_fields($req_fields);
    if(empty($errors)){
             $id = (int)$e_user['id'];
           $name = remove_junk($db->escape($_POST['name']));
       $username = remove_junk($db->escape($_POST['username']));
       $email = remove_junk($db->escape($_POST['email']));
       $phone = remove_junk($db->escape($_POST['phone']));
          $level = (int)$db->escape($_POST['level']);
      
            $sql = "UPDATE users SET name ='{$name}', username ='{$username}',user_level='{$level}',email='{$email}',phone='{$phone}' WHERE id='{$db->escape($id)}'";
         $result = $db->query($sql);
          if($result && $db->affected_rows() === 1){
            $session->msg('s',"Acount Updated ");
            redirect('manage_user.php?id='.(int)$e_user['id'], false);
          } else {
            $session->msg('d',' Sorry failed to updated!');
            redirect('manage_user.php?id='.(int)$e_user['id'], false);
          }
    } else {
      $session->msg("d", $errors);
      redirect('manage_user.php?id='.(int)$e_user['id'],false);
    }
  }
?>
<?php
// Update user password
if(isset($_POST['update-pass'])) {
  $req_fields = array('password');
  validate_fields($req_fields);
  if(empty($errors)){
           $id = (int)$e_user['id'];
     $password = remove_junk($db->escape($_POST['password']));
     $h_pass   = sha1($password);
          $sql = "UPDATE users SET password='{$h_pass}' WHERE id='{$db->escape($id)}'";
       $result = $db->query($sql);
        if($result && $db->affected_rows() === 1){
          $session->msg('s',"User password has been updated ");
          redirect('manage_user.php?id='.(int)$e_user['id'], false);
        } else {
          $session->msg('d',' Sorry failed to updated user password!');
          redirect('manage_user.php?id='.(int)$e_user['id'], false);
        }
  } else {
    $session->msg("d", $errors);
    redirect('manage_user.php?id='.(int)$e_user['id'],false);
  }
}

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
            <div class="col-lg-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Edit User Form</h5>
                        <strong>Update <?php echo remove_junk(ucwords($e_user['name'])); ?> Account</strong>

                        <form class="row g-3 clearfix" method="post" action="edit_user.php?id=<?php echo (int)$e_user['id']; ?>">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingName" name="name" placeholder="Your Name" value="<?php echo remove_junk(ucwords($e_user['name'])); ?>">
                                    <label for="floatingFirstName">Full Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="floatingEmail" name="email" placeholder="Your Email" value="<?php echo remove_junk(ucwords($e_user['email'])); ?>">
                                    <label for="floatingEmail">Email Id</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingEmail" name="phone" placeholder="Your Mobile" value="<?php echo remove_junk(ucwords($e_user['phone'])); ?>">
                                    <label for="floatingMobile">Mobile Number</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingEmail" name="username" placeholder="Your UserId" value="<?php echo remove_junk(ucwords($e_user['username'])); ?>">
                                    <label for="floatingUserId">UserId</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-sm-10">
                                    <select class="form-select" name="level" aria-label="Default select example">
                                    <?php foreach ($groups as $group ) { ?>
                                        <option <?php if($group['group_level'] === $e_user['user_level']) echo 'selected="selected"';?> value="<?php echo $group['group_level'];?>"><?php echo ucwords($group['group_name']);?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="update" class="btn btn-primary">Update Profile</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Add User Form</h5>
                        <strong>Change <?php echo remove_junk(ucwords($e_user['name'])); ?> password</strong>
                        <form class="row g-3" action="edit_user.php?id=<?php echo (int)$e_user['id']; ?>" method="post">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                                    <label for="floatingPassword">Password</label>

                                    <button type="submit" name="update-pass" class="btn btn-primary">Password Reset</button>
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