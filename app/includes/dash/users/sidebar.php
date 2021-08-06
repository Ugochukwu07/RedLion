        <!-- Categories -->
        
        <li class="navigation-header">
          <span data-i18n="nav.dashboard.categories">Categories</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="Categories"></i>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-tags"></i><span class="menu-title" data-i18n="nav.cat.main">Fashion Designs</span></a>
            <ul class="menu-content">
                <li class=" nav-item"><a href="#"><i class="la la-database"></i><span class="menu-title" data-i18n="nav.cat.orders.main">Orders</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/fashion/?p=pending' ?>" data-i18n="nav.cat.orders.fashion.pending">Pending Orders<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/fashion/?p=completed' ?>" data-i18n="nav.cat.orders.fashion.completed">Completed Orders<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/fashion/' ?>" data-i18n="nav.cat.orders.fashion.pending">All Orders<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-tag"></i><span class="menu-title" data-i18n="nav.cat.cat.main">Categories</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/services/fashion/?cat=mens-wear' ?>" data-i18n="nav.cat.cat.fashion.men">Mens' Wear<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/services/fashion/' ?>" data-i18n="nav.cat.cat.fashion.women">Womens' Wear<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/services/fashion/' ?>" data-i18n="nav.cat.cat.fashion.all">All cat<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-thumb-tack"></i><span class="menu-title" data-i18n="nav.cat.request.main">Personalize</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/fashion/new.php?a=fashion' ?>" data-i18n="nav.cat.request.new">Request<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/fashion/?a=submitted' ?>" data-i18n="nav.cat.request.submitted">Submitted<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-magic"></i><span class="menu-title" data-i18n="nav.cat2.main">Make Ups</span></a>
            <ul class="menu-content">
                <li class=" nav-item"><a href="#"><i class="la la-database"></i><span class="menu-title" data-i18n="nav.cat.orders.main">Orders</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/makeup/pending.php' ?>" data-i18n="nav.cat2.orders.makeup.pending">Pending Orders<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/makeup/completed.php' ?>" data-i18n="nav.cat2.orders.makeup.completed">Completed Orders<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/makeup/' ?>" data-i18n="nav.cat.orders.makeup.pending">All Orders<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-tag"></i><span class="menu-title" data-i18n="nav.cat2.cat.main">Categories</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/services/makeup/' ?>" data-i18n="nav.cat2.cat.makeup.men">Make 1<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/services/makeup/' ?>" data-i18n="nav.cat2.cat.makeup.women">Make 2<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/services/makeup/' ?>" data-i18n="nav.cat2.cat.makeup.all">Make 3<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-thumb-tack"></i><span class="menu-title" data-i18n="nav.cat.request.main">Personalize</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/makeup/new/' ?>" data-i18n="nav.cat.request.new">Request<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                        <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/makeup/new/submitted.php' ?>" data-i18n="nav.cat.request.submitted">Submitted<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <!-- End Categories -->
        <!-- Payments -->

        <li class="navigation-header">
          <span data-i18n="nav.dashboard.payments">Payments</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="Payments"></i>
        </li>
        <li class=" nav-item"><a href="<?php echo BASE_URL . '/dashboard/user/payment/pending.php'?>"><i class="la la-bank"></i><span class="menu-title" data-i18n="nav.pend.main">Pending</span><span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
        <li class=" nav-item"><a href="#"><i class="la la-credit-card"></i><span class="menu-title" data-i18n="nav.cat.history.main">History</span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/payment/completed.php' ?>" data-i18n="nav.cat.history.completed">Completed Payments<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/payment/' ?>" data-i18n="nav.cat.history.all">All Payments<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
            </ul>
        </li>
        <li class=" nav-item"><a href="#"><i class="la la-refresh"></i><span class="menu-title" data-i18n="nav.cat.refunds.main">Refunds</span></a>
            <ul class="menu-content">
                <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/payment/refunds/pending.php' ?>" data-i18n="nav.cat.refunds.pending">Pending Refunds<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/payment/refunds/completed.php' ?>" data-i18n="nav.cat.refunds.completed">Completed Refunds<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
                <li><a class="menu-item" href="<?php echo BASE_URL . '/dashboard/user/payment/refunds/' ?>" data-i18n="nav.cat.refunds.all">All Refunds<span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
            </ul>
        </li>

        <!-- End Payments -->
        <!-- Messages -->
        <li class="navigation-header">
          <span data-i18n="nav.dashboard.contact">Contact</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="Contact"></i>
        </li>
        <li class=" nav-item"><a href="<?php echo BASE_URL . '/dashboard/user/contact/new.php'?>"><i class="la la-envelope"></i><span class="menu-title" data-i18n="nav.contact.main">Contact Admin</span></a></li>
        <li class=" nav-item"><a href="<?php echo BASE_URL . '/dashboard/user/contact/sent.php'?>"><i class="la la-envelope-square"></i><span class="menu-title" data-i18n="nav.sent.main">Sent Messages</span><span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>
        <li class=" nav-item"><a href="<?php echo BASE_URL . '/dashboard/user/notification.php'?>"><i class="la la-bell"></i><span class="menu-title" data-i18n="nav.notification.main">Notifications</span><span class="badge badge badge-pill badge-danger float-right mr-auto">2</span></a></li>

        <!-- End Messages -->
        <!-- Others -->
        <li class="navigation-header">
          <span data-i18n="nav.dashboard.others">Others</span><i class="la la-ellipsis-h ft-minus" data-toggle="tooltip"
          data-placement="right" data-original-title="Others"></i>
        </li>
        <li class=" nav-item"><a href="<?php echo BASE_URL . '/logout.php'?>"><i class="la la-sign-out"></i><span class="menu-title" data-i18n="nav.logout.main">Logout</span></a></li>
        <li class=" nav-item"><a style="color: transparent;" href="<?php echo BASE_URL . '/'?>"><i class="la la-sign-out"></i><span class="menu-title" data-i18n="nav.logout.main">.</span></a></li>

        <!-- End Others -->