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
                            <section id="basic-form-layouts">
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title" id="hidden-label-tooltips">Request a Fashion Quote</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-text">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium consequatur fugiat cupiditate!</p>
                                                    </div>
                                                    <form class="form">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="form-group col-md-12 col-12 mb-2">
                                                                    <label class="" for="categories">Categories</label>
                                                                    <select name="categories" disabled id="categories" class="form-control" data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" data-title="Categories(Important)">
                                                                        <option value="1" selected>Fashion</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-12 col-12 mb-2">
                                                                    <label class="sr-only" for="subject">Subject</label>
                                                                    <input type="text" id="subject" class="form-control" placeholder="Subject *"
                                                                    name="subject" data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" data-title="Subject(Important)">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-12 col-12 mb-2">
                                                                    <label class="" for="description">Full Description:</label>
                                                                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Description"
                                                                    data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Description(Important)"></textarea>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="row">
                                                                <div class="col-12 text-center">
                                                                    
                                                                    <input type="submit" class="btn btn-info btny" value="Request">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- main  -->
                        </div>
                    </div>
                </div>
        <?php include(ROOT_PATH . '/app/includes/links_dash_bottom.php'); ?>
        <script src="<?php echo BASE_URL . '/assets/dashboard/' ?>js/scripts/gallery/photo-swipe/photoswipe-script.js" type="text/javascript"></script>
    </body>
</html>