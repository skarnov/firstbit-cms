<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo base_url(); ?>asset/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo base_url(); ?>asset/public/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url(); ?>asset/public/css/datepicker.css" rel="stylesheet" type="text/css" media="all" />
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <!-- Start Header-->
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="indicat">
               
                    </div>
                    <div class="detail">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">My Account
                                <span class="caret"></span>
                            </button>
                            <?php 
                                $customer_id=$this->session->userdata('customer_id');
                                if($customer_id==NULL)
                                {    
                            ?>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>customer_login">Login</a></li>
                                    <li><a href="<?php echo base_url(); ?>eticket/register">Create Account</a></li>
                                </ul>
                            <?php
                                }
                                else
                                {
                            ?>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo base_url(); ?>customer_area">Dashboard</a></li>
                                    <li><a href="#">Upcoming Trips</a></li>
                                    <li><a href="#">Past Trips</a></li>
                                    <li><a href="#">Canceled Trips</a></li>
                                    <li><a href="<?php echo base_url(); ?>eticket/logout">Logout</a></li>
                                </ul>
                            <?php
                                }
                            ?>
                            
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="header-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="navbar-brand logo">
                                    <h1><a href="<?php echo base_url(); ?>"><span>1stbit - Eticket</span></a></h1>
                                </div>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <nav class="link-effect-4" id="link-effect-4"> 
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="<?php echo base_url(); ?>" data-hover="Home">Home </a></li>
                                        <li><a href="about.html" data-hover="About">About</a></li>
                                        <li><a data-hover="Services" href="services.html">Services</a></li>
                                        <li><a data-hover="Gallery" href="gallery.html">Gallery</a></li>
                                        <li><a  href="codes.html" data-hover="codes">Codes</a></li>
                                        <li><a data-hover="Contact" href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div><!-- Navbar Collapse -->
                        </div><!-- Container Fluid -->
                    </nav>
                    <div class="clearfix"></div>
                </div>	
            </div> 
        </div>
        <?php echo $home; ?>
        <!---Start Footer--->
        <div class="footer-section">
            <div class="container">
                <div class="col-md-3 footer-grid">
                    <h4>Newsletter</h4>
                    <p>Lorem Ipsum available, but the majority have suffe red by injected humour, randomised words which don't look even.</p>
                    <form action="#" method="post">
                        <input type="text" name="Email" placeholder="enter email address" required>
                        <input type="submit" value="Go">
                    </form>
                </div>
                <div class="col-md-3 footer-grid">
                    <h4>Support</h4>
                    <ul>
                        <li>Support Page</li>
                        <li>Ticket System</li>
                        <li>Client Login</li>
                        <li>Community Forums</li>
                        <li>Contact Page</li>
                    </ul>
                </div>
                <div class="col-md-3 footer-grid">
                    <h4>Contact</h4>
                    <p><i class="glyphicon glyphicon-home" aria-hidden="true"></i>86/6 (5th floor, Right Side), Road # 06 Shekhertek</p>
                    <p>Mohammadpur, Dhaka- 1207</p>
                    <p><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:support@1stbitbd.com"> support@1stbitbd.com</a></p>
                    <p><i class="glyphicon glyphicon-phone" aria-hidden="true"></i>8801716138136, 8801717152797, 8801716243607, 8801712385066</p>
                </div>
                <div class="col-md-3 footer-grid">
                    <h4>Company</h4>
                    <ul>
                        <li>All Services</li>
                        <li>Water Damage Repair</li>
                        <li>Broken Glass Repairs</li>
                        <li>Mac & PC Repair</li>
                        <li>Consectetur adipiscing</li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!---End Footer--->
        <!---Copyright--->
        <div class="copy-section">
            <div class="container">
                <p>&copy; 2016 1stbit . All Rights Reserved | Developed by Labtrio</p>
            </div>
        </div>
        <!---End Copyright--->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/public/css/easy-responsive-tabs.css " />
        <!--JS-->
        <script src="<?php echo base_url(); ?>asset/public/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/public/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>asset/public/js/responsiveslides.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/public/js/easyResponsiveTabs.js"></script>
        <script src="<?php echo base_url(); ?>asset/public/js/bootstrap-datepicker.js"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true
                });
            });
            $(document).ready(function () {
                $('#parentVerticalTab').easyResponsiveTabs({
                    type: 'vertical', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true, // 100% fit in a container
                    closed: 'accordion', // Start closed if in accordion view
                    tabidentify: 'hor_1', // The tab groups identifier
                    activate: function (event) { // Callback function if tab is switched
                        var $tab = $(this);
                        var $info = $('#nested-tabInfo2');
                        var $name = $('span', $info);
                        $name.text($tab.text());
                        $info.show();
                    }
                });
            });
            // Start Date Picker //
            var nowTemp = new Date();
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
            var checkin = $('#dpd1').datepicker({
                onRender: function (date) {
                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
                }
            })
                    .on('changeDate', function (ev) {
                        if (ev.date.valueOf() > checkout.date.valueOf()) {
                            var newDate = new Date(ev.date);
                            newDate.setDate(newDate.getDate() + 1);
                            checkout.setValue(newDate);
                        }
                        checkin.hide();
                        $('#dpd2')[0].focus();
                    }).data('datepicker');
            var checkout = $('#dpd2').datepicker({
                onRender: function (date) {
                    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                }
            }).on('changeDate', function (ev) {
                checkout.hide();
            }).data('datepicker');
            // End Date Picker //

            //Search Route
            $(document).ready(function () {
                $("#startpoint").keyup(function () {
                    $.ajax(
                            {
                                type: "POST",
                                url: "<?php echo base_url(); ?>eticket/route_startpoint_search/",
                                data: 'search=' + $(this).val(),
                                beforeSend: function () {
                                    $("#startpoint").css("background", "#FFF url(asset/public/LoaderIcon.gif) no-repeat 165px");
                                },
                                success: function (data) {
                                    $("#startpoint-suggesstion-box").show();
                                    $("#startpoint-suggesstion-box").html(data);
                                    $("#startpoint").css("background", "#FFF");
                                }
                            }
                    );
                });
            });
            function selectItem(val) {
                $("#startpoint").val(val);
                $("#startpoint-suggesstion-box").hide();
            }

            $(document).ready(function () {
                $("#endpoint").keyup(function () {
                    $.ajax(
                            {
                                type: "POST",
                                url: "<?php echo base_url(); ?>eticket/route_endpoint_search/",
                                data: 'endpoint_search=' + $(this).val(),
                                beforeSend: function () {
                                    $("#endpoint").css("background", "#FFF url(asset/public/LoaderIcon.gif) no-repeat 165px");
                                },
                                success: function (data) {
                                    $("#endpoint-suggesstion-box").show();
                                    $("#endpoint-suggesstion-box").html(data);
                                    $("#endpoint").css("background", "#FFF");
                                }
                            }
                    );
                });
            });
            function selectItemEndpoint(val) {
                $("#endpoint").val(val);
                $("#endpoint-suggesstion-box").hide();
            }
            //End of Search Route

            function cartDistroy() {
                <?php $this->cart->destroy(); ?>
            }

            // Selected Seat        
            $(function () {
                $(".book").click(function () {     
                    $(this).addClass("confirm_ticket");
                });
            });
            // End of Selected Seat
        </script>
    </body>
</html>