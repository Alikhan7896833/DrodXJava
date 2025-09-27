

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">


    <!-- user-register11:10-->

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

    <body class="user-register blog">


        <!-- header left mobie -->
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






        <!-- main -->
        <div id="wrapper-site">
            <div class="container">
                <div class="row">
                    <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                        <div id="main">
                            <div id="content" class="page-content">
                                <div class="register-form text-center">
                                    <h1 class="text-center title-page">Create Account</h1>

                                    <p class="b2 mb--10">Create a new DrodX Store account to start shopping and manage your trades with ease.</p>
                                    <div class="col-6 d-none d-lg-block background"></div>

                                    <p class="text-danger" id="message"></p> 


                                    <!--                                    <div class="title-cust title-error" id="msgdiv"></div>
                                                                        <div class="wrapper-notification">
                                                                            <div class="icons icon-error"></div>
                                                                            <div class="message message-text-error" id="msg"></div>
                                                                        </div>-->
                                    <!--                                    <p>ERROR</p>-->
                                    <!-- <div class="col-12 d-none" id="msgdiv">
                                        <div class="alert alert-danger" role="alert" id="msg">
        
                                        </div>
                                    </div> -->
                                    <form action="#" id="customer-form" class="js-customer-form" method="post">
                                        <div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" id="first_name" type="text" placeholder="First name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" id="last_name" type="text" placeholder="Last name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <input class="form-control" id="email" type="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <div class="input-group js-parent-focus">
                                                        <input class="form-control js-child-focus js-visible-password" id="password" type="password" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <div class="clearfix">
                                            <div>
                                                <button type="button" onclick="signUp();" class="btn btn-secondary" data-link-action="sign-in">
                                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sign Up  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                </button>
                                                <button type="button" class="btn btn-success" data-link-action="sign-in" onclick="changeView();">
                                                    Already have an account? Sign In
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer-one">
        <div class="inner-footer">
            <div class="container">
                <div class="footer-top col-lg-12 col-xs-12">
                    <div class=" row">
                        <div class="nov-html col-lg-4 col-sm-12 col-xs-12">
                            <div class="block">
                                <div class="block-content">
                                    <p class="logo-footer">
                                        <img class="img-fluid" src="img/home/logo.png" alt="logo">
                                    </p>
                                    <p class="content-logo">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua. Ut enim ad minim
                                    </p>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-content">
                                    <ul>
                                        <li>
                                            <a href="#">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Reasons to shop</a>
                                        </li>
                                        <li>
                                            <a href="#">What our customers say</a>
                                        </li>
                                        <li>
                                            <a href="#">Meet the teaml</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact our buyers</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="block">
                                <div class="block-content">
                                    <p class="img-payment ">
                                        <img class="img-fluid" src="img/home/payment-footer.png" alt="img">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="nov-html col-lg-4 col-sm-6">
                            <div class="block m-top">
                                <div class="title-block">
                                    Contact Us
                                </div>
                                <div class="block-content">
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Address :</span>
                                        </div>
                                        <div class="content-contact address-contact">
                                            <p>123 Suspendis matti, Visaosang Building VST District NY Accums, North American
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <span>Email :</span>
                                        </div>
                                        <div class="content-contact mail-contact">
                                            <p>support@domain.com</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <span>Hotline :</span>
                                        </div>
                                        <div class="content-contact phone-contact">
                                            <p>+0012-345-67890</p>
                                        </div>
                                    </div>
                                    <div class="contact-us">
                                        <div class="title-content">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <span>Opening Hours :</span>
                                        </div>
                                        <div class="content-contact hours-contact">
                                            <p>Monday - Sunday / 08.00AM- 19.00</p>
                                            <span>(Except Holidays)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tiva-modules col-lg-4 col-md-6">
                            <div class="block m-top">
                                <div class="block-content">
                                    <div class="title-block">Newsletter</div>
                                    <div class="sub-title">Sign up to our newsletter to get the latest articles, lookbooks voucher codes direct
                                        to your inbox
                                    </div>
                                    <div class="block-newsletter">
                                        <form action="#" method="post">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="email" value="" placeholder="Enter Your Email">
                                                <span class="input-group-btn">
                                                    <button class="effect-btn btn btn-secondary " name="submitNewsletter" type="submit">
                                                        <span>subscribe</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <input type="hidden" name="action" value="0">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="block m-top1">
                                <div class="block-content">
                                    <div class="social-content">
                                        <div class="title-block">
                                            Follow us on
                                        </div>
                                        <div id="social-block">
                                            <div class="social">
                                                <ul class="list-inline mb-0 justify-content-end">
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-google"></i>
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item mb-0">
                                                        <a href="#" target="_blank">
                                                            <i class="fa fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="block m-top1">
                                <div class="block-content">
                                    <div class="payment-content">
                                        <div class="title-block">
                                            Payment accept
                                        </div>
                                        <div class="payment-image">
                                            <img class="img-fluid" src="img/home/payment.png" alt="img">
                                        </div>
                                    </div>
                                    <!-- Popup newsletter -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
    </div>

    <!-- menu mobie left -->


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
    <script src="js/sign-up.js"></script>
    <script src="js/sweetalert.js"></script>
    <script src="js/notification.js"></script>

</body>


<!-- user-register11:10-->

</html>