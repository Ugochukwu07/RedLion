<?php 
include('../path.php');

$title = 'Sign Up';
?>
<!DOCTYPE html>
<html lang="en">
<?php include(ROOT_PATH . '/app/includes/links_open_top.php'); ?>

<body>

 <div class="wrapper">

<!--=================================
 preloader -->

<div id="pre-loader">
    <img src="images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
 preloader -->


<?php include(ROOT_PATH . '/app/includes/header_open.php');?>


<!--=================================
page-title-->

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/bg/02.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1><i class="fa fa-user"></i> Sign Up</h1>
          <p>We know the secret of your success</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span><i class="fa fa-user"></i>  Sign Up</span> </li>
       </ul>
     </div>
     </div>
  </div>
</section>

<!--=================================
page-title -->


<!--=================================
 Signup-->

<section class="white-bg page-section-ptb">
  <div class="container">
    <div class="row">
       <div class="col-lg-12 col-md-12">
        <div class="section-title text-center">
            <h6 class="">Signup with your id or social media</h6>
            <h2 class="title-effect">Signup to your Account</h2>
          </div>
      </div>
    </div>
     <div class="row justify-content-center">
       <div class="col-lg-6 col-md-8">
        <div class="pb-50 clearfix">
          <div class="row">
             <div class="section-field mb-20 col-sm-6">
               <label class="mb-10" for="name">First name* </label>
                 <input id="name" class="web form-control" type="text" placeholder="First name" name="web">
              </div>
               <div class="section-field mb-20 col-sm-6">
               <label class="mb-10" for="name">Last name* </label>
                 <input id="name" class="web form-control" type="text" placeholder="Last name" name="web">
              </div>
            </div>
            <div class="section-field mb-20">
                 <label class="mb-10" for="name">Email* </label>
                  <input type="email" placeholder="Email*" class="form-control" name="email">
             </div>
            <div class="section-field mb-20">
             <label class="mb-10" for="Password">Password* </label>
               <input id="Password" class="Password form-control" type="password" placeholder="Password" name="Password">
            </div>
              <a href="#" class="button">
                <span>Signup</span>
                <i class="fa fa-check"></i>
             </a>
             <p class="mt-20 mb-0">Don't have an account? <a href="login-01.html"> Create one here</a></p>
          </div>
           <hr />
          <div class="login-social mt-50 text-center clearfix">
            <h4 class="theme-color mb-30">Signup with Social media</h4>
            <ul>
                <li><a class="fb" href="#"><i class="fa fa-facebook"></i> Log in Facebook</a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i> Log in Twitter</a></li>
                <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i> Log in google+</a></li>
            </ul>
          </div>
        </div>
      </div>
  </div>
</section>

<!--=================================
 Signup-->


<?php include(ROOT_PATH . '/app/includes/footer_open.php'); ?>

</div>



<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<?php include(ROOT_PATH . '/app/includes/links_open_bottom.php'); ?>
</body>
</html>
