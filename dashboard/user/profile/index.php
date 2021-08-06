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
              <div id="user-profile">
                <div class="row">
                  <div class="col-12">
                    <div class="card profile-with-cover">
                      <div class="card-img-top img-fluid bg-cover height-400" style="background: url('<?php echo BASE_URL . '/assets/dashboard/' ?>images/carousel/22.jpg') 50%;"></div>
                          <div class="media profil-cover-details w-100" style="margin-top: 310px;">
                              <div class="media-left pl-2 pt-2">
                                  <a href="#" class="profile-image">
                                  <img src="<?php echo BASE_URL . '/assets/dashboard/' ?>images/portrait/small/avatar-s-8.png" class="rounded-circle img-border height-100"
                                  alt="Card image">
                                  </a>
                              </div>
                              <div class="media-body pt-3 px-2">
                                  <div class="row">
                                      <div class="col">
                                          <h3 class="card-title">Jose Diaz</h3>
                                      </div>
                                      <div class="col text-right">
                                          <a href="<?php echo BASE_URL . '/dashboard/user/profile/edit.php'?>" class="btn btn-primary d-"><i class="la la-cog"></i> Edit</a>
                          
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <nav class="navbar navbar-light navbar-profile align-self-end" style="background-color: transparent !important; z-index: -1;">
                              <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse" aria-expanded="false"
                              aria-label="Toggle navigation"></button>
                              <nav class="navbar navbar-expand-lg">
                                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                      <ul class="navbar-nav mr-auto">
                                          <li class="nav-item active">
                                          <a class="nav-link" href="#"><i class="la la-line-chart"></i> Timeline <span class="sr-only">(current)</span></a>
                                          </li>
                                          <li class="nav-item">
                                          <a class="nav-link" href="#"><i class="la la-user"></i> Profile</a>
                                          </li>
                                          <li class="nav-item">
                                          <a class="nav-link" href="#"><i class="la la-briefcase"></i> Projects</a>
                                          </li>
                                          <li class="nav-item">
                                          <a class="nav-link" href="#"><i class="la la-heart-o"></i> Favourites</a>
                                          </li>
                                          <li class="nav-item">
                                          <a class="nav-link" href="#"><i class="la la-bell-o"></i> Notifications</a>
                                          </li>
                                      </ul>
                                  </div>
                              </nav>
                          </nav>
                    </div>
                  </div>
                </div>
              </div>
              <div class="content-detached content-left">
                <div class="content-body">
    	        <!-- With Labels and Badges start -->
                <section id="using-labels-badges">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Personal Details</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Every information provided here is save. You can edit them by clicking the edit profile above.</p>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <span class="badge badge-info badge-pill float-right">Email</span>
                                                johndoe@email.com
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-info badge-pill float-right">Full Name</span>
                                                John Doe
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-info badge-pill float-right">Phone Number</span>
                                                +234 (0) 000 0000
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-info badge-pill float-right">Home Address</span>
                                                5th Ave. Briagri, HT54 I87, Benin City. Nigeria
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-info badge-pill float-right">Address II(Optional)</span>
                                                5th Ave. Briagri, HT54 I87, Benin City. Nigeria
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-info badge-pill float-right">Zip Code</span>
                                                HT54 I87
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-info badge-pill float-right">State/Region</span>
                                                Benin City
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-info badge-pill float-right">Country</span>
                                                Nigeria
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Social Details</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Every information provided here is save. You can edit them by clicking the edit profile above.</p>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <span class="text-dark float-right"><i class="ft-twitter"></i></span>
                                                <a href="https://twitter.com/johndoe12">@johndoe12</a>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="text-dark float-right"><i class="ft-facebook"></i></span>
                                                <a href="https://facebook.com/JohnDoe120">John Doe</a> 
                                            </li>
                                            <li class="list-group-item">
                                                <span class="text-dark float-right"><i class="la la-linkedin-square"></i></span>
                                                <a href="https://linkedin.com/johndoe1267">Engr. John Doe</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Billing Details</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Every information provided here is save. You can edit them by clicking the edit profile above.</p>
                                        <ul class="list-group">
                                            
                                        <li class="list-group-item">
                                                <span class="badge badge-warning badge-pill float-right">Email</span>
                                                johndoe@email.com
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-warning badge-pill float-right">Full Name</span>
                                                John Doe
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-warning badge-pill float-right">Phone/FAX Number</span>
                                                +234 (0) 000 0000
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-warning badge-pill float-right">Residentail Address</span>
                                                5th Ave. Briagri, HT54 I87, Benin City. Nigeria
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-warning badge-pill float-right">Occupation</span>
                                                Accountant
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-warning badge-pill float-right">Zip Code</span>
                                                HT54 I87
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-warning badge-pill float-right">State/Region</span>
                                                Benin City
                                            </li>
                                            <li class="list-group-item">
                                                <span class="badge badge-warning badge-pill float-right">Country</span>
                                                Nigeria
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- With Labels and Badges end -->
                </div>
              </div>
              <div class="sidebar-detached sidebar-right" ,=",">
                <div class="sidebar">
                  <div class="project-sidebar-content">
                <section id="using-labels-badges">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Overview</h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <p>Every information provided here is save. You can edit them by clicking the edit profile above.</p>
                                            <ul class="list-group text-right">
                                                <li class="list-group-item">
                                                    <span class="badge badge-success badge-pill float-left">Joined</span>
                                                    Tue, 12 May 2021
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="badge badge-success badge-pill float-left">Last Login</span>
                                                    Tue, 12 May 2021
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="badge badge-success badge-pill float-left">Time</span>
                                                    13:54:32
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="badge badge-success badge-pill float-left">Login IP</span>
                                                    197.189.225
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="badge badge-success badge-pill float-left">Username</span>
                                                    John12
                                                </li>
                                            </ul>
                                            <div class="text-center mt-1">
                                                <a href="#" class="btn btn-danger">Not Me</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
                  </div></div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include(ROOT_PATH . '/app/includes/links_dash_bottom.php'); ?>
<script src="<?php echo BASE_URL . '/assets/dashboard/' ?>js/scripts/gallery/photo-swipe/photoswipe-script.js"
  type="text/javascript"></script>
</body>
</html>