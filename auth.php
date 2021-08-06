<?php include('path.php');

$title = 'Sign Up/Sign In';
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
 login-->

            <section class="page-section-ptb bg-overlay-white-70 login-signup parallax" style="background: url(images/login/07.jpg);">
                <div class="container">
                    <div class="row no-gutter">
                        <div class="col-md-5">
                            <div class="login-box-02 bg-overlay-black-70 parallax" style="background: url(images/login/01.jpg);">
                                <div class="pb-50 pos-r clearfix">
                                    <h4 class="mb-20 text-white"> Login here </h4>
                                    <p class="mb-30 text-white">Welcome back, Please login to your account believing in yourself and those around you. </p>
                                    <div class="section-field mb-20">
                                        <label class="mb-10 text-white" for="name">User name* </label>
                                        <input id="name" class="web form-control" type="text" placeholder="User name" name="web">
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10 text-white" for="Password">Password* </label>
                                        <input id="Password" class="Password form-control" type="password" placeholder="Password" name="Password">
                                    </div>
                                    <div class="section-field">
                                        <div class="custom-control custom-checkbox mb-30">
                                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                            <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                        </div>
                                    </div>
                                    <a href="#" class="button btn-block">
                                        <span>Log in</span>
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <div class="login-social text-center clearfix pos-r">
                                    <ul>
                                        <li><a class="fb" href="#"> Facebook</a></li>
                                        <li><a class="twitter" href="#"> Twitter</a></li>
                                        <li><a class="pinterest" href="#"> google+</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="login-box-02 theme-bg">
                                <div class="pb-50 clearfix">
                                    <h4 class="mb-20 text-white">Or signup for free</h4>
                                    <p class="mb-30 text-white">Sign-up for free trial now and build custom solutions. </p>
                                    <div class="row">
                                        <div class="section-field mb-20 col-sm-6">
                                            <label class="mb-10 text-white" for="name">First name* </label>
                                            <input id="name" class="web form-control" type="text" placeholder="First name" name="web">
                                        </div>
                                        <div class="section-field mb-20 col-sm-6">
                                            <label class="mb-10 text-white" for="name">Last name* </label>
                                            <input id="name" class="web form-control" type="text" placeholder="Last name" name="web">
                                        </div>
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10 text-white" for="name">Email* </label>
                                        <input type="email" placeholder="Email*" class="form-control" name="email">
                                    </div>
                                    <div class="section-field mb-20">
                                        <label class="mb-10 text-white" for="Password">Password* </label>
                                        <input id="Password" class="Password form-control" type="password" placeholder="Password" name="Password">
                                    </div>
                                    <a href="#" class="button white">
                                        <span>Signup</span>
                                        <i class="fa fa-check"></i>
                                    </a>
                                </div>
                                <p class="text-white">by signing up, you agree to our <a class="text-black" href="#"> Terms and conditions </a> & <a class="text-black" href="#"> Privacy policy </a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--=================================
   login-->

            <!--=================================
Our Clients  -->

            <section class="our-clients theme-bg text-white page-section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="owl-carousel" data-items="5" data-sm-items="4" data-xs-items="3" data-xx-items="2">
                                <div class="item">
                                    <img class="mx-auto img-fluid" src="images/clients/light/06.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="mx-auto img-fluid" src="images/clients/light/07.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="mx-auto img-fluid" src="images/clients/light/08.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="mx-auto img-fluid" src="images/clients/light/09.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="mx-auto img-fluid" src="images/clients/light/10.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="mx-auto img-fluid" src="images/clients/light/06.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="mx-auto img-fluid" src="images/clients/light/08.png" alt="">
                                </div>
                                <div class="item">
                                    <img class="mx-auto img-fluid" src="images/clients/light/09.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--=================================
Our Clients -->
            <!--================================= footer -->
            <footer class="footer page-section-pt">
                <div class="container">
                    <div class="footer-contact white-bg">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 bottom-m3">
                                <div class="contact-box">
                                    <div class="contact-icon">
                                        <i class="ti-direction-alt"></i>
                                    </div>
                                    <div class="contact-info">
                                        <div class="text-center">
                                            <h5 class="mt-10 mb-10">17504 Carlton Cuevas Rd, </h5>
                                            <span>Gulfport, MS, 39503</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 bottom-m3">
                                <div class="contact-box">
                                    <div class="contact-icon">
                                        <i class="ti-headphone-alt"></i>
                                    </div>
                                    <div class="contact-info">
                                        <div class="text-center">
                                            <h5 class="mt-10 mb-10">+(704) 279-1249</h5>
                                            <span>Mon-Fri 8:30am-6:30pm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="contact-box">
                                    <div class="contact-icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="contact-info">
                                        <div class="text-center">
                                            <h5 class="mt-10 mb-10"> letstalk@webster.com</h5>
                                            <span>24 X 7 online support</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row top">
                        <div class="col-lg-6 col-md-6">
                            <img class="img-fluid" id="logo-footer" src="images/logo-dark.png" alt="">
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="social text-left sm-mt-0 text-md-right xs-mt-20">
                                <ul>
                                    <li>
                                        <a href="#"> <i class="fa fa-facebook"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <i class="fa fa-twitter"></i> </a>
                                    </li>

                                    <li>
                                        <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                    </li>

                                    <li>
                                        <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="divider mt-50 mb-50"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 sm-mt-30">
                            <div class="about-content">
                                <h6 class="mb-20 text-uppercase">about us</h6>
                                <p>Webster is the most enticing, creative, modern and multipurpose Premium HTML5 Template suitable for any business or corporate websites. Build whatever you like with the Webster. It has endless possibilities for creating
                                    stunning websites no matter what type of business is!</p>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 sm-mt-30 sm-mb-30">
                            <h6 class="mb-20 text-uppercase">Useful Links</h6>
                            <div class="usefull-link">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-4">
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Service</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <ul>
                                            <li><a href="#">Contact Us</a></li>
                                            <li><a href="#">Create Account</a></li>
                                            <li><a href="#">Company Philosophy</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <ul>
                                            <li><a href="#">Corporate Culture</a></li>
                                            <li><a href="#">Portfolio</a></li>
                                            <li><a href="#">Client Management</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copyright gray-bg mt-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="text-left">
                                    <li class="list-inline-item"><a href="#">Terms & Conditions </a> &nbsp;&nbsp;&nbsp;|</li>
                                    <li class="list-inline-item"><a href="#">API Use Policy </a> &nbsp;&nbsp;&nbsp;|</li>
                                    <li class="list-inline-item"><a href="#">Privacy Policy </a> </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="text-left text-md-right xs-mt-15">
                                    <p> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Webster </a> All Rights Reserved </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <!--=================================
footer -->
        </div>
    </div>



    <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

    <!--=================================
jquery -->

    <!-- jquery -->
    <script src="assets/open/js/jquery-3.4.1.min.js"></script>

    <!-- plugins-jquery -->
    <script src="assets/open/js/plugins-jquery.js"></script>

    <!-- plugin_path -->
    <script>
        var plugin_path = 'assets/open/js/';
    </script>

    <!-- Google recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- REVOLUTION JS FILES -->
    <script src="assets/open/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/open/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="assets/open/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/open/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/open/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/open/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/open/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/open/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/open/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/open/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/open/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!-- revolution custom -->
    <script src="assets/open/revolution/js/revolution-custom.js"></script>

    <!-- custom -->
    <script src="assets/open/js/custom.js"></script>



</body>

</html>