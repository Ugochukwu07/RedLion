<?php 
include('../../../path.php');


$title = 'Dashboard';
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <?php include(ROOT_PATH . '/app/includes/links_top_dash.php'); ?>
    <body class="vertical-layout vertical-menu-modern 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
        
        <?php include(ROOT_PATH . '/app/includes/header_nav_dash.php'); ?>
        <?php include(ROOT_PATH . '/app/includes/dash/sidebar.php');?>
                <div class="app-content content">
                    <div class="content-wrapper">
                        <div class="content-header row">
                        </div>
                        <div class="content-body">
                            <!-- main starts -->
                            <section id="configuration">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">All Orders</h4>
                                            </div>
                                            <div class="card-content collapse show">
                                                <div class="card-body card-dashboard">
                                                    <p class="card-text"></p>
                                                    <table class="table table-striped table-bordered zero-configuration">
                                                        <thead>
                                                            <!-- {'status':[
                                                                            'submitted':['meaning' => 'if user just made an order for enquiry', 'action' => 'contact'],
                                                                            'pending':['meaning' => 'if order is accepted and information is sent', 'action' => 'pay'],
                                                                            'active':['meaning' => 'when payment is successful and the product is being attennded to', 'contact'],
                                                                            'completed': ['meaning' => 'when the order is completed', 'action' => 'Review']
                                                                            ]
                                                                    } -->
                                                            <tr>
                                                                <th>Status</th>
                                                                <th>Product</th>
                                                                <th>Quantity</th>
                                                                <th>Price Range per</th>
                                                                <th>Price Range Total</th>
                                                                <th>Price per</th>
                                                                <th>Price Total</th>
                                                                <th>Order Date</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><i class="fas fas-check"></i></td>
                                                                <td>Balanciaga</td>
                                                                <td>6</td>
                                                                <td>$40-$50</td>
                                                                <td>$80-$150</td>
                                                                <td>$47</td>
                                                                <td>$67</td>
                                                                <td>2011/04/25</td>
                                                                <td><a href="#" class="btn btn-outline-primary btny">Submitted</a></td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td>Status</td>
                                                                <td>Product</td>
                                                                <td>Quantity</td>
                                                                <td>Price Range per</td>
                                                                <td>Price Range Total</td>
                                                                <td>Price per</td>
                                                                <td>Price Total</td>
                                                                <td>Order Date</td>
                                                                <td>Action</td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
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
                
        <?php $links = array(LTABLES); include(ROOT_PATH . '/app/includes/links_dash_bottom.php'); ?>
        
        <script>
            $(document).ready(function() {
                $('.zero-configuration').DataTable();
            });
        </script>
        <script src="<?php echo BASE_URL . '/assets/dashboard/' ?>js/scripts/gallery/photo-swipe/photoswipe-script.js" type="text/javascript"></script>
    </body>
</html>