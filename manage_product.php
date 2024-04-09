<?php
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
                <tr>
                  <th scope="row">1</th>
                  <td>Product 1</td>
                  <td>Categories 1</td>
                  <td>22</td>
                  <td>12/2/2024</td>
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
                  <td>Product 1</td>
                  <td>Categories 1</td>
                  <td>22</td>
                  <td>12/2/2024</td>
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
                  <td>Product 1</td>
                  <td>Categories 1</td>
                  <td>22</td>
                  <td>12/2/2024</td>
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
                  <td>Product 1</td>
                  <td>Categories 1</td>
                  <td>22</td>
                  <td>12/2/2024</td>
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
                  <td>Product 1</td>
                  <td>Categories 1</td>
                  <td>22</td>
                  <td>12/2/2024</td>
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
                  <td>Product 1</td>
                  <td>Categories 1</td>
                  <td>22</td>
                  <td>12/2/2024</td>
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