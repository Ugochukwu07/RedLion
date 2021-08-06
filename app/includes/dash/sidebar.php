  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="main-menu menu-fixed menu-dark bg-purple bg-darken-3 menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class="navigation-header">
          <span data-i18n="nav.dashboard.overview">Overview</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="Overview"></i>
        </li>
        <li class=" nav-item"><a href="<?php echo BASE_URL . '/dashboard/user/'?>"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span></a></li>
        <li class=" nav-item"><a href="<?php echo BASE_URL . '/dashboard/user/profile/'?>"><i class="la la-user"></i><span class="menu-title" data-i18n="nav.profile.main">Profile</span></a></li>
        
        <!-- for the main time -->
        <?php include(ROOT_PATH . '/app/includes/dash/users/sidebar.php'); ?>
        <!-- //for the main time -->
        
      </ul>
    </div>
  </div>