<?php
include_once 'includes/load.php';
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
          <li class="breadcrumb-item active">Manage Users</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

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
                  <th>Status</th>
                  <th>Last Login</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>User User</td>
                  <td>User123</td>
                  <td>Active</td>
                  <td>12/2/2024 2:22 AM</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info btn-xs" title="Edit" data-toggle="tooltip">
                        <i class="ri-edit-2-line"></i>
                      </a>
                      <a class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-delete-bin-line"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>User User</td>
                  <td>User123</td>
                  <td>Active</td>
                  <td>12/2/2024 2:22 AM</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info btn-xs" title="Edit" data-toggle="tooltip">
                        <i class="ri-edit-2-line"></i>
                      </a>
                      <a class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-delete-bin-line"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>User User</td>
                  <td>User123</td>
                  <td>Active</td>
                  <td>12/2/2024 2:22 AM</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info btn-xs" title="Edit" data-toggle="tooltip">
                        <i class="ri-edit-2-line"></i>
                      </a>
                      <a class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-delete-bin-line"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>User User</td>
                  <td>User123</td>
                  <td>Active</td>
                  <td>12/2/2024 2:22 AM</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info btn-xs" title="Edit" data-toggle="tooltip">
                        <i class="ri-edit-2-line"></i>
                      </a>
                      <a class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-delete-bin-line"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>User User</td>
                  <td>User123</td>
                  <td>Active</td>
                  <td>12/2/2024 2:22 AM</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-info btn-xs" title="Edit" data-toggle="tooltip">
                        <i class="ri-edit-2-line"></i>
                      </a>
                      <a class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-delete-bin-line"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                  
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