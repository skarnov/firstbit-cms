<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo $title; ?></title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/private/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/private/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/private/css/skin-green.css">
        <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script>
            function check_delete()
            {
                var chk = confirm('Are You Want To Delete This');
                if (chk)
                {
                    return true;
                } else
                {
                    return false;
                }
            }
        </script>
    </head>

    <body class="hold-transition skin-green sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="<?php echo base_url(); ?>eticket_admin" class="logo">
                    <span class="logo-mini"><b>First</b></span>
                    <span class="logo-lg"><b>1stbit E - Ticket</b></span>
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span><?php echo $this->session->userdata('admin_name'); ?> <i class="caret"></i></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header bg-light-blue">
                                        <img src="<?php echo base_url(); ?>asset/public/logo.png" />
                                        <p>
                                            <?php echo $this->session->userdata('admin_name'); ?>
                                            <small>Member since <?php echo $this->session->userdata('admin_date_time'); ?></small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo base_url(); ?>eticket_admin/edit_admin/<?php echo $this->session->userdata('admin_id'); ?>" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url(); ?>eticket_admin/logout" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="active treeview">
                            <a href="<?php echo base_url(); ?>eticket_admin">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo base_url(); ?>" target="_blank">
                                <i class="fa fa-home"></i> <span>View Website</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-life-ring"></i> <span>Trip Management</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>eticket_admin/add_trip"> Add New Trip</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/manage_trip"> Manage Trip</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-road"></i> <span>Seat Management</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>eticket_admin/add_seat"> Add New Seat</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/manage_seat"> Manage Seat</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-ticket"></i> <span>Ticket Management</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>eticket_admin/add_ticket"> Add New Ticket</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/manage_ticket"> Manage Ticket</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bus"></i> <span>Bus Management</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>eticket_admin/add_bus"> Add New Bus</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/add_bus_type"> Add New Bus Type</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/add_brand"> Add New Bus Brand</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/manage_bus"> Manage Bus</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/manage_bus_type"> Manage Bus Type</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/manage_brand"> Manage Bus Brand</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-map-marker"></i> <span>Route Management</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>eticket_admin/add_route"> Add New Route</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/manage_route"> Manage Route</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-car"></i> <span>Coach Management</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>eticket_admin/add_coach"> Add New Coach</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/manage_coach"> Manage Coach</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo base_url(); ?>eticket_admin/manage_customer">
                                <i class="fa fa-user"></i> <span>Customer Manager</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-suitcase"></i> <span>Banner Manager</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>eticket_admin/add_banner"> Add New Banner</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/manage_banner"> Manage Banner</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-newspaper-o"></i> <span>News Manager</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>eticket_admin/add_news"> Add New News</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/manage_news"> Manage News</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-certificate"></i> <span>Coupon Manager</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>eticket_admin/add_coupon"> Add New Coupon</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/manage_coupon"> Manage Coupon</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cart-arrow-down"></i> <span>Sales Management</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>eticket_admin/sales_report"> Sales Report</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/manage_sale"> Manage Sales</a></li>
                                <li><a href="<?php echo base_url(); ?>eticket_admin/manage_order"> Order Management</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="<?php echo base_url(); ?>eticket_admin/about">
                                <i class="fa fa-adjust"></i> <span>About</span>
                            </a>
                        </li>
                    </ul>
                </section>
            </aside>
            <?php echo $dashboard; ?>
            <footer class="main-footer">
                <strong>Copyright © <a href="<?php echo base_url(); ?>">1stbit</a></strong> All Rights Reserved.
            </footer>
        </div>
        <script src="<?php echo base_url(); ?>asset/private/js/jQuery-2.1.4.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/private/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>asset/private/js/app.min.js"></script>
        <script type="text/javascript">
            var xmlhttp = false;
            try {
                xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (E) {
                    xmlhttp = false;
                }
            }
            if (!xmlhttp && typeof XMLHttpRequest !== 'undefined') {
                xmlhttp = new XMLHttpRequest();
            }
            function customerSearch(search)
            {
                if (search) {
                    serverPage = '<?php echo base_url(); ?>eticket_admin/customer_search/' + search + '/';
                    xmlhttp.open("GET", serverPage);
                    xmlhttp.onreadystatechange = function ()
                    {
                        document.getElementById('search_customer').innerHTML = xmlhttp.responseText;
                    };
                    xmlhttp.send(null);
                }
            }
            function orderSearch(search)
            {
                if (search) {
                    serverPage = '<?php echo base_url(); ?>eticket_admin/order_search/' + search + '/';
                    xmlhttp.open("GET", serverPage);
                    xmlhttp.onreadystatechange = function ()
                    {
                        document.getElementById('search_order').innerHTML = xmlhttp.responseText;
                    };
                    xmlhttp.send(null);
                }
            }
        </script>
    </body>
</html>