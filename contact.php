<?php 
include('path.php');

$title = 'Contact Us';
?>
<!DOCTYPE html>
<html lang="en">

<?php include(ROOT_PATH . '/app/includes/links_open_top.php'); ?>

<body class="st-container st-effect-3">



    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="assets/open/assets/open/images/pre-loader/loader-01.svg" alt="">
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
                                <h1><i class="fa fa-mouse-pointer"></i> Contact Us</h1>
                                <p>We know the secret of your success</p>
                            </div>
                            <ul class="page-breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                                <li><span><i class="fa fa-mouse-pointer"></i> Contact</span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!--=================================
  page-title -->


            <!--=================================
   map-->

            <section class="white-bg contact-3 o-hidden clearfix">
                <!-- =============================== -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 contact-add gray-bg h-100">
                            <div class="text-center">
                                <i class="ti-map-alt"></i>
                                <h4 class="mt-15">Address</h4>
                                <p>17504 Carlton Cuevas Rd, Gulfport, MS, 3950</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 contact-add theme-bg h-100">
                            <div class="text-center">
                                <i class="ti-mobile text-white"></i>
                                <h4 class="text-white mt-15">Call Us</h4>
                                <p class="text-white">+(704) 279-1249</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 contact-add  black-bg h-100">
                            <div class="text-center">
                                <i class="ti-email text-white"></i>
                                <h4 class="text-white mt-15">Email Us</h4>
                                <p class="text-white">letstalk@webster.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid pos-r">
                    <div class="row  full-height">
                        <div class="col-lg-6 map-side g-map" id="map" data-type='black'>
                            <div class="contact-map">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-5">
                            <div class="contact-3-info page-section-ptb">
                                <div class="clearfix">
                                    <div class="section-title mb-0">
                                        <h6>let's work together</h6>
                                        <h2 class="title-effect">Contact Us</h2>
                                    </div>
                                    <p class="mb-50">It would be great to hear from you! If you got any questions, please do not hesitate to send us a message. We are looking forward to hearing from you! We reply within <span class="tooltip-content" data-original-title="Mon-Fri 10am–7pm (GMT +1)"
                                            data-toggle="tooltip" data-placement="top"> 24 hours!</span></p>
                                    <div id="formmessage">Success/Error Message Goes Here</div>
                                    <form id="contactform" role="form" method="post" action="php/contact-form.php">
                                        <div class="contact-form clearfix">
                                            <div class="section-field">
                                                <input id="name" type="text" placeholder="Name*" class="form-control" name="name">
                                            </div>
                                            <div class="section-field">
                                                <input type="email" placeholder="Email*" class="form-control" name="email">
                                            </div>
                                            <div class="section-field">
                                                <input type="text" placeholder="Phone*" class="form-control" name="phone">
                                            </div>
                                            <div class="section-field textarea">
                                                <textarea class="input-message form-control" placeholder="Comment*" rows="7" name="message"></textarea>
                                            </div>
                                            <!-- Google reCaptch-->
                                            <div class="g-recaptcha section-field clearfix" data-sitekey="[Add your site key]"></div>
                                            <div class="section-field submit-button">
                                                <input type="hidden" name="action" value="sendEmail" />
                                                <button id="submit" name="submit" type="submit" value="Send" class="button"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                    <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="images/pre-loader/loader-02.svg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!--=================================
  map -->

            <!--=================================
 ADDRESS -->

            <section class="page-section-ptb contact-2 gray-bg">
                <div class="container">
                    <div class="row mb-30">
                        <div class="col-12">
                            <div class="office-1 p-5 white-bg">
                                <h2 class="mb-30">New york</h2>
                                <div class="touch-in">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="media">
                                                <div class="feature-icon media-icon mr-4">
                                                    <span class="ti-map-alt theme-color"></span>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="text-back">ADDRESS</h5>
                                                    <p class="mb-0">17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="media">
                                                <div class="feature-icon media-icon mr-4">
                                                    <span class="ti-mobile theme-color"></span>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="text-back">PHONE</h5>
                                                    <p class="mb-0">+(704) 279-1249</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="media">
                                                <div class="feature-icon media-icon mr-4">
                                                    <span class="ti-email theme-color"></span>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="text-back">EMAIL</h5>
                                                    <p class="mb-0">letstalk@webster.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="office-1 p-5 white-bg">
                                <h2 class="mb-30">London</h2>
                                <div class="touch-in">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4">
                                            <div class="media">
                                                <div class="feature-icon media-icon mr-4">
                                                    <span class="ti-map-alt theme-color"></span>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="text-back">ADDRESS</h5>
                                                    <p class="mb-0">17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="media">
                                                <div class="feature-icon media-icon mr-4">
                                                    <span class="ti-mobile theme-color"></span>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="text-back">PHONE</h5>
                                                    <p class="mb-0">+(704) 279-1249</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4">
                                            <div class="media">
                                                <div class="feature-icon media-icon mr-4">
                                                    <span class="ti-email theme-color"></span>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="text-back">EMAIL</h5>
                                                    <p class="mb-0">letstalk@webster.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--=================================
   contact -->
<?php include(ROOT_PATH . '/app/includes/footer_open.php');?>
        </div>
    </div>
    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    <?php include(ROOT_PATH . '/app/includes/links_open_bottom.php'); ?>
</body>

</html>