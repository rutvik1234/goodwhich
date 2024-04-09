<?php
include 'header.php';
include 'sidebar.php';
?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Product Status Data</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="body_page.php">Home</a></li>
        <li class="breadcrumb-item"><a href="body_page.php">Dashboard</li></a>
        <li class="breadcrumb-item active">Status</li>
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
                  <th>Product</th>
                  <th>Qty</th>
                  <th>Status</th>
                  <th>Reciver</th>
                  <th>Order Time</th>
                  <th>delete</th>
                  <th>complete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Rice Bowl</td>
                  <td>2</td>
                  <td><b>Pending</b></td>
                  <td>Mrs. xyz</td>
                  <td>02:21</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-delete-bin-line"></i>
                      </a>
                    </div>
                  </td>
                  <td>
                    <div>
                      <a class="btn btn-success btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-check-double-line"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Rice Bowl</td>
                  <td>2</td>
                  <td><b>Pending</b></td>
                  <td>Mrs. xyz</td>
                  <td>02:21</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-delete-bin-line"></i>
                      </a>
                    </div>
                  </td>
                  <td>
                    <div>
                      <a class="btn btn-success btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-check-double-line"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Rice Bowl</td>
                  <td>2</td>
                  <td><b>Pending</b></td>
                  <td>Mrs. xyz</td>
                  <td>02:21</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-delete-bin-line"></i>
                      </a>
                    </div>
                  </td>
                  <td>
                    <div>
                      <a class="btn btn-success btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-check-double-line"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Rice Bowl</td>
                  <td>2</td>
                  <td><b>Pending</b></td>
                  <td>Mrs. xyz</td>
                  <td>02:21</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-delete-bin-line"></i>
                      </a>
                    </div>
                  </td>
                  <td>
                    <div>
                      <a class="btn btn-success btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-check-double-line"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Rice Bowl</td>
                  <td>2</td>
                  <td><b>Pending</b></td>
                  <td>Mrs. xyz</td>
                  <td>02:21</td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-danger btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-delete-bin-line"></i>
                      </a>
                    </div>
                  </td>
                  <td>
                    <div>
                      <a class="btn btn-success btn-xs" title="Delete" data-toggle="tooltip">
                        <i class="ri-check-double-line"></i>
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