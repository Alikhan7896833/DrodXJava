<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">


    <!-- user-login11:10-->

    <head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DrodX Store</title>

        <meta name="keywords" content="Furniture, Decor, Interior">
        <meta name="description" content="Furnitica - Minimalist Furniture HTML Template">
        <meta name="author" content="tivatheme">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

        <!-- libs CSS -->
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="libs/nivo-slider/css/nivo-slider.css">
        <link rel="stylesheet" href="libs/nivo-slider/css/animate.css">
        <link rel="stylesheet" href="libs/nivo-slider/css/style.css">
        <link rel="stylesheet" href="libs/font-material/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="libs/slider-range/css/jslider.css">
        <link rel="stylesheet" href="libs/owl-carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="libs/slick-slider/css/slick.css">
        <link rel="stylesheet" href="libs/slick-slider/css/slick-theme.css">

        <!-- Template CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/reponsive.css">

        <link rel="stylesheet" type="text/css" href="css/notification.css">
    </head>

    <body class="user-login blog">
        <header>



  <div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

                <!-- menu left -->
                <div id="mobile_mainmenu" class="item-mobile-top">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>

                <!-- logo -->
                <div class="mobile-logo">
                    <a href="index.html">
                        <img class="logo-mobile img-fluid" src="img/home/logo-mobie.png" alt="Prestashop_Furnitica">
                    </a>
                </div>

                <!-- menu right -->
                <div class="mobile-menutop" data-target="#mobile-pagemenu">
                    <i class="zmdi zmdi-more"></i>
                </div>
            </div>

            <!-- search -->

        </div>

        <!-- header desktop -->
        <div class="header-top d-xs-none ">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-sm-2 col-md-2 d-flex align-items-center">
                        <div id="logo">
                            <a href="index.html">
                                <img class="img-fluid" src="img/home/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- menu -->
                    <div class="main-menu col-sm-4 col-md-5 align-items-center justify-content-center navbar-expand-md">
                        <div class="menu navbar collapse navbar-collapse">
                            <ul class="menu-top navbar-nav">
                                <li class="nav-link">
                                    <a href="index.html" class="parent">Home</a>

                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- search-->


                </div>
            </div>
        </div>



          


        </header>

        <!-- main content -->
        <div class="main-content">
            <div class="wrap-banner">

                <!-- breadcrumb -->
                <nav class="breadcrumb-bg">
                    <div class="container no-index">
                        <div class="breadcrumb">
                            <ol>
                                <li>
                                    <a href="index.html">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Login</span>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </nav>

            </div>

            <!-- main -->
            <div id="wrapper-site">
                <div id="content-wrapper" class="full-width">
                    <div id="main">
                        <div class="container">
                            <h1 class="text-center title-page">Log In</h1>
                            <p class="b2 mb--10">Sign in to DrodX Store to access your account and manage your trades &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; securely.</p>

                         <p class="text-danger" id="message"></p> 

<!--                            <div class="title-cust title-error" id="msgdiv"></div>
                            <div class="wrapper-notification">
                                <div class="icons icon-error"></div>
                                <div class="message message-text-error" id="msg"></div>
                            </div>-->
                           
                            <div class="login-form">
                                <form id="customer-form" action="#" method="post">
                                    <div>
                                        <input type="hidden" name="back" value="my-account">
                                        <div class="form-group no-gutters">
                                            <input class="form-control" id="email" type="email" placeholder=" Email" value="">
                                        </div>
                                        <div class="form-group no-gutters">
                                            <div class="input-group js-parent-focus">
                                                <input class="form-control js-child-focus js-visible-password" id="password" type="password" value="" placeholder="Password" value="<?php echo $email; ?>">
                                            </div>
                                        </div>
                                        <div class="no-gutters text-center" class="col-6">
                                            <div class="forgot-password">
                                                <a href="#" rel="nofollow" onclick="forgotPassword();">
                                                    Forgot your password? 
                                                </a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                <input class="form-check-input" type="checkbox" id="rememberme" />
                                                <label class="form-check-label">Remember Me</label>


                                                <div>

                                                </div>

                                            </div>


                                        </div>
                                    </div>



                                </form>
                                <div class="clearfix">
                                    <div class="text-center no-gutters">
                                        <input type="hidden" name="submitLogin" value="1">
                                        <button type="button" onclick="signIn();" class="btn btn-secondary">
                                          &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sign in &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                        </button>

                                        <button type="button" class=" btn btn-warning" onclick="changeView1();"> &nbsp; &nbsp;New to DrodX Store? Join Now &nbsp; &nbsp;</button>

                                    </div>
                                </div>

                                <a href="verify-account.html" type="button" class=" col-12 mt-1 btn btn-success" > &nbsp; &nbsp;Verify Your Account &nbsp; &nbsp;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    

        <!-- back top top -->
        <div class="back-to-top">
            <a href="#">
                <i class="fa fa-long-arrow-up"></i>
            </a>
        </div>




        <!-- Page Loader -->
        <div id="page-preloader">
            <div class="page-loading">
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>

        <!-- Vendor JS -->
        <script src="libs/jquery/jquery.min.js"></script>
        <script src="libs/popper/popper.min.js"></script>
        <script src="libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="libs/nivo-slider/js/jquery.nivo.slider.js"></script>
        <script src="libs/owl-carousel/owl.carousel.min.js"></script>
        <script src="libs/slider-range/js/tmpl.js"></script>
        <script src="libs/slider-range/js/jquery.dependClass-0.1.js"></script>
        <script src="libs/slider-range/js/draggable-0.1.js"></script>
        <script src="libs/slider-range/js/jquery.slider.js"></script>
        <script src="libs/slick-slider/js/slick.min.js"></script>

        <!-- Template JS -->
        <script src="js/theme.js"></script>
        <script src="js/sign-in.js"></script>

       <script src="js/sweetalert.js"></script>

        <script src="js/notification.js"></script>
    </body>


    <!-- user-login11:10-->

</html>