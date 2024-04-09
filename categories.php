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
      <div class="col-lg-4">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Add Categories</h5>

            <form class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                  <label for="floatingFirstName">First Name</label>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
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
                  <th scope="col">Added Date</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>2016-05-25</td>
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
                  <th scope="row">2</th>
                  <td>2014-12-05</td>
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
                  <th scope="row">3</th>
                  <td>2011-08-12</td>
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
                  <th scope="row">4</th>
                  <td>2012-06-11</td>
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
                  <th scope="row">5</th>
                  <td>2011-04-19</td>
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
          </div>
        </div>

      </div>
    </div>
  </section>
</main><!-- End #main -->

<?php
include 'footer.php';
?>