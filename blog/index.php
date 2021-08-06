<?php 
include('../path.php');

$title = 'Blog Post';
?>
<!DOCTYPE html>
<html lang="en">

<?php include(ROOT_PATH . '/app/includes/links_open_top.php'); ?>

<body class="st-container st-effect-3">



    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="<?php echo BASE_URL . '/'?>assets/open/images/pre-loader/loader-01.svg" alt="">
        </div>

        <!--=================================
 preloader -->

        <div class="st-pusher">

           <?php include(ROOT_PATH . '/app/includes/header_open.php'); ?>

            <!--=================================
page-title-->

            <section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/02.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title-name">
                                <h1><i class="fa fa-database"></i> Blog Posts</h1>
                                <p>We know the secret of your success</p>
                            </div>
                            <ul class="page-breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><span><i class="fa fa-database"></i> Blog Posts</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!--=================================
  page-title -->


            <!--=================================
   masnary blog-->

            <section class="white-bg blog masonry-main page-section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="sidebar-widget">
                                <h6 class="mb-20">Search</h6>
                                <div class="widget-search">
                                    <i class="fa fa-search"></i>
                                    <input type="search" class="form-control" placeholder="Search...." />
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h6 class="mt-40 mb-20">About the blog</h6>
                                <p>We are the <strong> webster </strong> dolor sit ametLorem Ipsum Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, <br/> <br/> Consequat ipsum, nec sagittis sem nibh id elit nibh vel velit auctor aliquet.
                                    sem nibh Aenean sollicitudin, </p>
                            </div>
                            <div class="sidebar-widget">
                                <h6 class="mt-40 mb-20">Recent Posts </h6>
                                <div class="recent-post clearfix">
                                    <div class="recent-post-image">
                                        <img class="img-fluid" src="images/blog/01.jpg" alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a>
                                        <span><i class="fa fa-calendar-o"></i> September 30, 2018</span>
                                    </div>
                                </div>
                                <div class="recent-post clearfix">
                                    <div class="recent-post-image">
                                        <img class="img-fluid" src="images/blog/02.jpg" alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a>
                                        <span><i class="fa fa-calendar-o"></i> September 30, 2018</span>
                                    </div>
                                </div>
                                <div class="recent-post clearfix">
                                    <div class="recent-post-image">
                                        <img class="img-fluid" src="images/blog/03.jpg" alt="">
                                    </div>
                                    <div class="recent-post-info">
                                        <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a>
                                        <span><i class="fa fa-calendar-o"></i> September 30, 2018</span>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-40">
                                <h6 class="mt-40 mb-20">Quick contact</h6>
                                <form class="gray-form">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputphone" placeholder="Email">
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" placeholder="message"></textarea>
                                    </div>
                                    <a class="button" href="#">Submit</a>
                                </form>
                            </div>
                        </div>
                        <!-- ================================== -->
                        <div class="col-lg-9">
                            <div class="masonry columns-2">
                                <div class="grid-sizer"></div>
                                <div class="masonry-item">
                                    <div class="blog-entry mb-10">
                                        <div class="entry-image clearfix">
                                            <img class="img-fluid" src="<?php echo BASE_URL . '/assets/open/images/blog/'?>01.jpg" alt="">
                                        </div>
                                        <div class="blog-detail">
                                            <div class="entry-title mb-10">
                                                <a href="<?php echo BASE_URL . '/blog/signle.php'?>">Blogpost With Image</a>
                                            </div>
                                            <div class="entry-meta mb-10">
                                                <ul>
                                                    <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                                                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                                    <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                                                </ul>
                                            </div>
                                            <div class="entry-content">
                                                <p>Consectetur, assumenda provident lorem ipsum dolor sit amet.</p>
                                            </div>
                                            <div class="entry-share clearfix">
                                                <div class="entry-button">
                                                    <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="social list-style-none float-right">
                                                    <strong>Share : </strong>
                                                    <ul>
                                                        <li>
                                                            <a href="#"> <i class="fa fa-facebook"></i> </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> <i class="fa fa-twitter"></i> </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- ================================================ -->
                            </div>
                            <div class="entry-pagination mt-20">
                                <nav aria-label="Page navigation example text-center">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--=================================
   masnary blog-->

 
<?php include(ROOT_PATH . '/app/includes/footer_open.php');?>
        </div>
    </div>



    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    <?php include(ROOT_PATH . '/app/includes/links_open_bottom.php'); ?>
</body>

</html>