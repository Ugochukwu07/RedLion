<?php 
include('../../../path.php');


$title = 'Edit Your Profile';
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
                            <!-- Basic form layout section start -->
                            <section id="basic-form-layouts">
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title" id="hidden-label-tooltips">Edit Your Profile</h4>
                                            </div>
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <div class="card-text">
                                                        <p>
                                                            Here you can edit your profile. Lorem ipsum dolor sit amet consectetur.
                                                        </p>
                                                    </div>
                                                    <form class="form">
                                                        <div class="form-body">
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-12 mb-2">
                                                                    <label class="sr-only" for="firstname">First Name</label>
                                                                    <input type="text" id="firstname" class="form-control" placeholder="First Name"
                                                                    name="firstname" data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" data-title="First Name(Important)">
                                                                </div>
                                                                <div class="form-group col-md-6 col-12 mb-2">
                                                                    <label class="sr-only" for="lastname">First Name</label>
                                                                    <input type="text" id="lastname" class="form-control" placeholder="Last Name"
                                                                    name="lastname" data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" data-title="Last Name(Important)">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-12 mb-2">
                                                                    <label class="sr-only" for="email">Email:</label>
                                                                    <input type="email" id="email" class="form-control" placeholder="Email"
                                                                    name="email" data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" data-title="Email(Important)">
                                                                </div>
                                                                <div class="form-group col-md-6 col-12 mb-2">
                                                                    <label class="sr-only" for="phone">Phone Number</label>
                                                                    <input type="text" id="phone" class="form-control" placeholder="Phone Number"
                                                                    name="phone" data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" data-title="Phone Number(Important)">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-12 col-12 mb-2">
                                                                    <label class="" for="dob">Date Of Birth</label>
                                                                    <input type="date" id="dob" class="form-control" name="dob" data-toggle="tooltip"
                                                                    data-trigger="hover" data-placement="top" data-title="Date Of Birth">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-md-6 col-12 mb-2">
                                                                    <label class="sr-only" for="password">Password:</label>
                                                                    <input type="password" id="password" class="form-control" placeholder="Password"
                                                                    name="password" data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" data-title="Password">
                                                                </div>
                                                                <div class="form-group col-md-6 col-12 mb-2">
                                                                    <label class="sr-only" for="confirm-password">Confirm Password</label>
                                                                    <input type="text" id="confirm-password" class="form-control" placeholder="Confirm Password"
                                                                    name="confirm-password" data-toggle="tooltip" data-trigger="hover"
                                                                    data-placement="top" data-title="Confirm Password">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 text-center">
                                                                    
                                                                    <input type="submit" class="btn btn-primary btny" value="Update">
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