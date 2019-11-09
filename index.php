<!-- Setting global document root -->
<?php
    $global = $_SERVER["DOCUMENT_ROOT"] . '/sevron/template/global/';
?>

<html lang="en">
    <head>
        <?php include($global . 'head.php'); ?>
    </head>
    
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading"  >
        <?php include($global . 'header.php'); ?>

        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
            <div class="kt-container  kt-container--fluid  kt-grid kt-grid--ver">

                <?php include($global . 'sidebar.php'); ?>
                                    
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <?php include ('subheader.php')?>
                
                    <?php include ('template/components/compliance-banner.php') ?>

                    <section class="dashboard-cards">
                        <div class="container-fluid">
                            <div class="row mt-4">
                                <?php include ('template/dashboard-cards/improve-score.php'); ?>
                                <?php include ('template/dashboard-cards/assessment-summary.php'); ?>
                                <?php include ('template/dashboard-cards/substance-summary.php'); ?>
                            </div>
                            <div class="row">
                                <?php include ('template/dashboard-cards/performance-summary.php'); ?>
                                <?php include ('template/dashboard-cards/rolling-rates.php'); ?>
                                <?php include ('template/dashboard-cards/riddor-summary.php'); ?>
                            </div>
                            <div class="row">
                                <?php include ('template/dashboard-cards/daily-tasks.php'); ?>
                                <?php include ('template/dashboard-cards/organisation-structure.php'); ?>
                            </div>
                            <div class="row">
                                <?php include ('template/dashboard-cards/incidents-summary.php'); ?>
                                <?php include ('template/dashboard-cards/top-accident-types.php'); ?>
                                <?php include ('template/dashboard-cards/recent-assessments.php'); ?>
                            </div>
                        </div>
                    </section>

                    <?php include('template/home_modal.php') ?>
                </div>
                
            </div>
        </div>

        <?php include($global . 'footer.php'); ?>

    </body>
    <!-- end::Body -->
</html>