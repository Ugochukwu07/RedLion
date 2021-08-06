<?php 
include('../../path.php');


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
              <!-- DOM - jQuery events table -->
              <section id="dom">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Recent Orders</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                          <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                          <p class="card-text">Events</p>
                          <table class="table table-striped table-bordered dom-jQuery-events">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                              </tr>
                              <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                              </tr>
                              <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                              </tr>
                              <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                              </tr>
                              <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                              </tr>
                            </tfoot>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- DOM - jQuery events table -->
              <div class="content-detached content-left">
                <div class="content-body">
                  <section class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-head">
                          <div class="card-header">
                            <h4 class="card-title">Products/Services Order Review</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                              <span class="badge badge-default badge-warning">Mobile</span>
                              <span class="badge badge-default badge-success">New</span>
                              <span class="badge badge-default badge-info">iOS</span>
                            </div>
                          </div>
                          <div class="px-1">
                            <ul class="list-inline list-inline-pipe text-center p-1 border-bottom-grey border-bottom-lighten-3">
                              <li>Project Owner:
                                <span class="text-muted">Margaret Govan</span>
                              </li>
                              <li>Start:
                                <span class="text-muted">01/Feb/2017</span>
                              </li>
                              <li>Due on:
                                <span class="text-muted">01/Oct/2017</span>
                              </li>
                              <li><a href="#" class="text-muted" data-toggle="tooltip" data-placement="bottom"
                                title="Export as PDF"><i class="la la-file-pdf-o"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <!-- project-info -->
                        <div id="project-info" class="card-body row">
                          <div class="project-info-count col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="project-info-icon">
                              <h2>12</h2>
                              <div class="project-info-sub-icon">
                                <span class="la la-user"></span>
                              </div>
                            </div>
                            <div class="project-info-text pt-1">
                              <h5>Project Users</h5>
                            </div>
                          </div>
                          <div class="project-info-count col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="project-info-icon">
                              <h2>160</h2>
                              <div class="project-info-sub-icon">
                                <span class="la la-calendar-check-o"></span>
                              </div>
                            </div>
                            <div class="project-info-text pt-1">
                              <h5>Project Task</h5>
                            </div>
                          </div>
                          <div class="project-info-count col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="project-info-icon">
                              <h2>20</h2>
                              <div class="project-info-sub-icon">
                                <span class="la la-bug"></span>
                              </div>
                            </div>
                            <div class="project-info-text pt-1">
                              <h5>Project Bug</h5>
                            </div>
                          </div>
                        </div>
                        <!-- project-info -->
                        <div class="card-body">
                          <div class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                            <span>Egal's Eye View Of Project Status</span>
                          </div>
                          <div class="row py-2">
                            <div class="col-lg-6 col-md-12">
                              <div class="insights px-2">
                                <div>
                                  <span class="text-info h3">82%</span>
                                  <span class="float-right">Tasks</span>
                                </div>
                                <div class="progress progress-md mt-1 mb-0">
                                  <div class="progress-bar bg-info" role="progressbar" style="width: 82%" aria-valuenow="25"
                                  aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                              <div class="insights px-2">
                                <div>
                                  <span class="text-success h3">78%</span>
                                  <span class="float-right">TaskLists</span>
                                </div>
                                <div class="progress progress-md mt-1 mb-0">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 78%" aria-valuenow="25"
                                  aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row py-2">
                            <div class="col-lg-6 col-md-12">
                              <div class="insights px-2">
                                <div>
                                  <span class="text-warning h3">68%</span>
                                  <span class="float-right">Milestones</span>
                                </div>
                                <div class="progress progress-md mt-1 mb-0">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="25"
                                  aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                              <div class="insights px-2">
                                <div>
                                  <span class="text-danger h3">62%</span>
                                  <span class="float-right">Bugs</span>
                                </div>
                                <div class="progress progress-md mt-1 mb-0">
                                  <div class="progress-bar bg-danger" role="progressbar" style="width: 62%" aria-valuenow="25"
                                  aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
              <div class="sidebar-detached sidebar-right" ,=",">
                <div class="sidebar">
                  <div class="project-sidebar-content">
                    <!-- Project Users -->
                    <div class="card">
                      <div class="card-header mb-0">
                        <h4 class="card-title">Order Handlers</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                          <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-content">
                        <div class="card-content">
                          <div class="card-body  py-0 px-0">
                            <div class="list-group">
                              <a href="javascript:void(0)" class="list-group-item">
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span class="avatar avatar-sm avatar-online rounded-circle">
                                      <img src="<?php echo BASE_URL . '/assets/dashboard/' ?>images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                                  </div>
                                  <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Margaret Govan</h6>
                                    <p class="font-small-2 mb-0 text-muted">Project Owner</p>
                                  </div>
                                </div>
                              </a>
                              <a href="javascript:void(0)" class="list-group-item">
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span class="avatar avatar-sm avatar-busy rounded-circle">
                                      <img src="<?php echo BASE_URL . '/assets/dashboard/' ?>images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span>
                                  </div>
                                  <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Bret Lezama</h6>
                                    <p class="font-small-2 mb-0 text-muted">Project Manager</p>
                                  </div>
                                </div>
                              </a>
                              <a href="javascript:void(0)" class="list-group-item">
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span class="avatar avatar-sm avatar-online rounded-circle">
                                      <img src="<?php echo BASE_URL . '/assets/dashboard/' ?>images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span>
                                  </div>
                                  <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Carie Berra</h6>
                                    <p class="font-small-2 mb-0 text-muted">Senior Developer</p>
                                  </div>
                                </div>
                              </a>
                              <a href="javascript:void(0)" class="list-group-item">
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span class="avatar avatar-sm avatar-away rounded-circle">
                                      <img src="<?php echo BASE_URL . '/assets/dashboard/' ?>images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span>
                                  </div>
                                  <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Eric Alsobrook</h6>
                                    <p class="font-small-2 mb-0 text-muted">UI Developer</p>
                                  </div>
                                </div>
                              </a>
                              <a href="javascript:void(0)" class="list-group-item">
                                <div class="media">
                                  <div class="media-left pr-1">
                                    <span class="avatar avatar-sm avatar-busy rounded-circle">
                                      <img src="<?php echo BASE_URL . '/assets/dashboard/' ?>images/portrait/small/avatar-s-7.png" alt="avatar"><i></i></span>
                                  </div>
                                  <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Berra Eric</h6>
                                    <p class="font-small-2 mb-0 text-muted">UI Developer</p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--/ Project Users -->
                    <!-- ad -->
                    <div class="card">
                      <section id="image-gallery" class="card">
                        <div class="card-header">
                          <h4 class="card-title">Sponsored ADs</h4>
                          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                          <div class="card-body  my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                            <div class="row mb-0">
                              <figure class="col-12" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="<?php echo BASE_URL . '/assets/dashboard/' ?>images/gallery/1.jpg" itemprop="contentUrl" data-size="480x360">
                                  <img class="img-thumbnail img-fluid" src="<?php echo BASE_URL . '/assets/dashboard/' ?>images/gallery/1.jpg"
                                  itemprop="thumbnail" alt="Image description" />
                                </a>
                              </figure>
                            </div>
                          </div>
                          <!--/ Image grid -->
                          <!-- Root element of PhotoSwipe. Must have class pswp. -->
                          <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
                            <!-- Background of PhotoSwipe. 
                          It's a separate element as animating opacity is faster than rgba(). -->
                            <div class="pswp__bg"></div>
                            <!-- Slides wrapper with overflow:hidden. -->
                            <div class="pswp__scroll-wrap">
                              <!-- Container that holds slides. 
                              PhotoSwipe keeps only 3 of them in the DOM to save memory.
                              Don't modify these 3 pswp__item elements, data is added later on. -->
                              <div class="pswp__container">
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                                <div class="pswp__item"></div>
                              </div>
                              <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                              <div class="pswp__ui pswp__ui--hidden">
                                <div class="pswp__top-bar">
                                  <!--  Controls are self-explanatory. Order can be changed. -->
                                  <div class="pswp__counter"></div>
                                  <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                  <button class="pswp__button pswp__button--share" title="Share"></button>
                                  <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                  <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                                  <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                                  <!-- element will get class pswp__preloader-active when preloader is running -->
                                  <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                      <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                  <div class="pswp__share-tooltip"></div>
                                </div>
                                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                                </button>
                                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                                </button>
                                <div class="pswp__caption">
                                  <div class="pswp__caption__center"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- PhotoSwipe -->
                      </section>
                    </div>
                  </div>
                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  <?php 
  $links = array(LPHOTOS, LPROJECT, LTABLES, LCHARTS);
  ?>
<?php include(ROOT_PATH . '/app/includes/links_dash_bottom.php'); ?>
<script src="<?php echo BASE_URL . '/assets/dashboard/' ?>js/scripts/gallery/photo-swipe/photoswipe-script.js"
  type="text/javascript"></script>
</body>
</html>