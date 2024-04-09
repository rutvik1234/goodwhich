  <?php
  include 'header.php';
  include 'sidebar.php';
  
  ?>

  

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="body_page.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <a href="kithchen_categories.php">
                  <div class="card-body">
                    <h5 class="card-title">Kitchen <span>| Ask for Products</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">
              <a href="store_page.php">
                <div class="card-body">
                  <h5 class="card-title">Store <span>| Supplier of products</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                  </div>
                </div>
              </a>
              </div>
            </div>

            <!-- End Revenue Card -->
            
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

        </div><!-- End Right side columns -->

      </div>


      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">
                <a href="product_status.php">
                <div class="card-body">
                  <h5 class="card-title">Status <span>| See Products Status</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                  </div>
                </div>
                </a>
              </div>
            </div><!-- End Sales Card -->

        
            

            <!-- End Revenue Card -->
            
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
<?php
include 'footer.php';
?>
 