<?php 
include('../../../path.php');


$title = 'Dashboard';
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <?php include(ROOT_PATH . '/app/includes/links_top_dash.php'); ?>
    <body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
        
        <?php include(ROOT_PATH . '/app/includes/header_nav_dash.php'); ?>
        <?php include(ROOT_PATH . '/app/includes/dash/sidebar.php');?>
                <div class="app-content content">
                    <div class="content-wrapper">
                        <div class="content-header row">
                        </div>
                        <div class="content-body">
                            <!-- main starts -->
                            
                            <!-- main  -->
                        </div>
                    </div>
                </div>
        <?php include(ROOT_PATH . '/app/includes/links_dash_bottom.php'); ?>
        <script src="<?php echo BASE_URL . '/assets/dashboard/' ?>js/scripts/gallery/photo-swipe/photoswipe-script.js" type="text/javascript"></script>
    </body>
</html>