  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
        target="_blank">PIXINVENT </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>


  <!-- BEGIN VENDOR JS-->
  <script src="<?php echo BASE_URL . '/assets/dashboard/' ?>vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <?php 
  foreach($links as $link){
    include($link);
  }
  
  ?>
  <!-- BEGIN MODERN JS-->
  <script src="<?php echo BASE_URL . '/assets/dashboard/' ?>js/core/app-menu.js" type="text/javascript"></script>
  <script src="<?php echo BASE_URL . '/assets/dashboard/' ?>js/core/app.js" type="text/javascript"></script>
  <script src="<?php echo BASE_URL . '/assets/dashboard/' ?>js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->

  <!-- BEGIN PAGE LEVEL JS-->
  <script src="<?php echo BASE_URL . '/assets/dashboard/' ?>js/scripts/pages/timeline.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->