<?php
session_start();
include_once("Connection.php");
if(!isset($_SESSION['name']))
{
    header("location:login.php");}
?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 17:59:26 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Frosto || News and Promotion</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!--All Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- datepicker css -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <!-- timepicker css -->
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <!-- nivo-slider css -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="cart-wraper">
        <!--header slider area are start-->
        <div class="header-slider-area common-page">
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="mymenu.php">Menu</a></li>
                                    <li><a href="news.php">News and Promotions</a></li>
                                    <li><a href="orderonline.php">Order Online</a></li>
                                    <li><a href="cart.php">Cart</a></li>
                                    <li><a href="about-us.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="login.php">Login</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--mobile menu area end-->

            <!--header menu area are start-->
            <div class="header-menu-area">
                <!--header-area are start-->
                <div class="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 hidden-xs">
                                <div class="search-phone">
                                    <ul>
                                        <li><span style="color:white"><i class="fa fa-phone" aria-hidden="true"></i> 9655770461, 8680896643</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="logo">
                                    <a href="index.php"><img src="img/logoft.png" alt=""></a>
                                </div>
                            </div>
                            <!--<div class="col-md-4 col-sm-4 hidden-xs">
						<div class="social-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>-->
                        </div>
                    </div>
                </div>
                <!--header-area are end-->

                <!-- Main menu area are start  -->
                <div id="sticker" class="menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="mymenu.php">Menu<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <div class="mega-menu mega-2">
                                                    <span>
										  <a href="mymenu.php#indian">
											 <span>Indian</span>
                                                    <img src="img/mega1.jpg" alt="">
                                                    </a>
                                                    </span>
                                                    <span>
										  <a href="mymenu.php#tandoori">
											 <span>Tandoori</span>
                                                    <img src="img/mega2.jpg" alt="">
                                                    </a>
                                                    </span>
                                                    <span>
										  <a href="mymenu.php#chinese">
											 <span>Chinese</span>
                                                    <img src="img/mega3.jpg" alt="">
                                                    </a>
                                                    </span>
                                                    <span>
										  <a href="mymenu.php#hotbreads">
											 <span>Hot Breads</span>
                                                    <img src="img/mega4.jpg" alt="">
                                                    </a>
                                                    </span>
                                                    <span>
										  <a href="mymenu.php#beverages">
											 <span>Beverages</span>
                                                    <img src="img/mega5.jpg" alt="">
                                                    </a>
                                                    </span>
                                                </div>
                                            </li>
                                            <li><a href="orderonline.php">Order Online</a></li>
                                            <li><a href="cart.php">Cart</a></li>
                                            <li><a href="checkout.php">Checkout</a></li>
                                            <li><a href="news.php">News and Promotions</a></li>
                                            <li><a href="about-us.php">About</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="#"><?php  echo $_SESSION['name']; ?></a></li>
                                        <li><a href="logout.php">Logout</a></li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main menu area are end  -->
            </div>
            <!--header menu area are end-->

            <!-- home slider start -->
            <div class="slider-container">
                <div class="bread-main">
                    <div class="bred-hading text-center">
                        <h1>Coupons and Offers</h1>
                    </div>
                    <ol class="breadcrumb">
                        <li class="home"><a title="Go to Home Page" href="index.php">Home</a></li>
                        <li class="active">Coupons and Offers</li>
                    </ol>
                </div>
            </div>
        </div>

        <?php $sql = "select discount, code from coupon where user ='{$_SESSION['user']}'";
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_array($result)) {
        $code = $row['code'];
        $discount = $row['discount'];
        if($code!='null'){
        echo'
        <div class="event-area blog-area pt60 pb60 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-8 col-xs-12">
                        <div class="total-event">
                            <div class="event-prodcut">
                                <div class="bg-content"></div>
                                <div class="ep-content text-center">
                                    <div class="ep-heading">
                                        <h1><a href="#">Offers for You</a></h1>
                                    </div>
                                    
                                    <div class="sm-des">
                                       <b> Coupon Code</b> - '.$code.'<br/>
                                      <b>  Discount</b> - '.$discount.'%
                                    </div>
                                    <div class="find-more text-center">
                                        <a class="com-btn" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                                            </div>
                </div>
            </div>
        </div>';}}?>
        <!-- cart are end-->

        <!--footer area are start-->
        <div class="footer-area pt60 pb60">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer text-center">
                            <div class="sosa-icon">
                                <img src="img/icon/icon-service.png" alt="">
                            </div>
                            <h1>Delivery Service</h1>
                            <div class="address">
                                <span>
                                No. 11a, Kangayanellore Road, Opposite VIT College,<br>
                                 Vaibhav Nagar, Katpadi, Vellore, Tamil Nadu 632014<br>
                                <span class="email">apnadhaba@gmail.com</span>
                                </span>
                                <div class="phone-no">
                                    <span>9655770461, 8680896643</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer footer-middle text-center">
                            <div class="sosa-icon">
                                <img src="img/icon/icon-time.png" alt="">
                            </div>
                            <h1>Opening Time</h1>
                            <div class="service-time">
                                <h2>Everday</h2>
                                <span>9.30 AM - 11.00 PM</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer text-center">
                            <div class="sosa-icon">
                                <img src="img/icon/icon-letter.png" alt="">
                            </div>
                            <h1>Subscribe Us</h1>
                            <div class="detail-subs">
                                Subscribe to the <span>Apna Dhaba</span> newsletter to get <br> regular update about offers
                            </div>
                            <form action="#">
                                <div class="input-box">
                                    <input class="newslatter" type="email" placeholder="Enter your Email-Id " name="newlatter">
                                    <button title="Subscribe" type="submit" class="button"><i class="fa fa-paper-plane-o"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer area are end-->

        <!--Copyright area are start-->
        <div class="copyright-info pt60 pb60">
            <div class="container">
                <div class="row">
                    <a href="index.php"><img src="img/logoft.png" alt=""></a>
                    <p>Copyright © 2017 -<a href="http://onestdevelopers.com/">Onest Developers. </a>All rights reserved. </p>
                </div>
            </div>
        </div>
        <!--Copyright area are end-->
    </div>
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- datepicker js -->
    <script src="js/bootstrap-datepicker.js"></script>
    <!-- timepicker js -->
    <script src="js/jquery.timepicker.min.js"></script>
    <!-- meanmenu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- jquery-ui js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- nivo.slider js -->
    <script src="lib/js/jquery.nivo.slider.pack.js"></script>
    <script src="lib/js/nivo-active.js"></script>
    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <!-- Sticky JS -->
    <script src="js/jquery.sticky.js"></script>
    <!-- venobox js -->
    <script src="lib/venobox/venobox.js"></script>
    <!-- plugins js -->
    <script src="js/plugins.js"></script>
    <!-- main js -->
    <script src="js/main.js"></script>
</body>

<!-- Mirrored from demo.designshopify.com/html_lavie/lavie_resturant/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2016 17:59:26 GMT -->

</html>
