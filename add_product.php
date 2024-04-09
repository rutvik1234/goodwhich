<?php
include 'header.php';
include 'sidebar.php';
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Products</li>
          <li class="breadcrumb-item active">Add Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-8">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Products Form</h5>

              <form class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingFirstName">Product Title</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name">
                    <label for="floatingLastName">Categories</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                    <label for="floatingEmail">Product Image</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="email" class="form-control" id="floatingEmail" placeholder="Your Email">
                    <label for="floatingMobile">Quentity</label>
                  </div>
                </div>
               
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
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