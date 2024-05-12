<?php
include 'includes/load.php';
include 'header.php';
include 'sidebar.php';
$kitchen_cat = find_kitchen_product();
?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Categories Dashboard</h1>
        <?php echo display_msg($msg); ?>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="body_page.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Kitchen Categories</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <?php foreach ($kitchen_cat as $kit_cat) { ?>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo remove_junk($kit_cat['name']); ?></h5>
                    </div>
                </div>
                </a>
            </div>
            <?php } ?>  
        </div>
    </section>
</main>
<?php
include 'footer.php';
?>