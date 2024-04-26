<?php
  $page_title = 'Manage User';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  //  page_require_level(1);
   $all_users = find_all_user();
?>
<?php
$page_title = "Manage Users";
include 'header.php';
include 'sidebar.php';

?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Users Table</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">User Management</li>
        <li class="breadcrumb-item active">Manage Users</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <?php echo display_msg($msg); ?>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Users</h5>


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>user role</th>
                  <th>Status</th>
                  <th>Last Login</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $all_users = find_all_user();
                foreach ($all_users as $a_user) { 
                ?>
                  <tr>
                    <th scope="row"><?php echo count_id(); ?></th>
                    <td><?php echo remove_junk(ucwords($a_user['name'])) ?></td>
                    <td><?php echo remove_junk(ucwords($a_user['username'])) ?></td>
                    <td class="text-center"><?php echo remove_junk(ucwords($a_user['group_name'])) ?></td>
                    <td class="text-center">
                      <?php if ($a_user['status'] === '1') : ?>
                        <span class="label label-success"><?php echo "Active"; ?></span>
                      <?php else : ?>
                        <span class="label label-danger"><?php echo "Deactive"; ?></span>
                      <?php endif; ?>
                    </td>
                    <td><?php echo read_date($a_user['last_login']) ?></td>

                    <td>
                      <div class="btn-group">
                        <a href="edit_user.php?id=<?php echo (int)$a_user['id']; ?>" class="btn btn-info btn-xs" title="Edit" data-toggle="tooltip">
                          <i class="ri-edit-2-line"></i>
                        </a>
                        <a href="delete_user.php?id=<?php echo (int)$a_user['id']; ?>" class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
                          <i class="ri-delete-bin-line"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                <?php } ?>

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