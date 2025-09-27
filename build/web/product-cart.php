<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">


    <!-- product-cart07:06-->

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

        <link rel="stylesheet" href="css/notification.css" />
    </head>

    <body class="product-cart checkout-cart blog" onload="loadCartItems(); checkSignIn();">



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
            <div id="mobile_search" class="d-flex">
                <div id="mobile_search_content">
                    <form method="get" action="#">
                        <input type="text" name="s" value="" placeholder="Search">
                        <button >
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <div class="desktop_cart">
                    <div class="blockcart block-cart cart-preview tiva-toggle">
                        <div class="header-cart tiva-toggle-btn">
                            <span class="cart-products-count">1</span>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class="dropdown-content">
                            <div class="cart-content">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="img/product/5.jpg" alt="Product">
                                                </a>
                                            </td>
                                            <td>
                                                <div class="product-name">
                                                    <a href="product-detail.html">Organic Strawberry Fruits</a>
                                                </div>
                                                <div>
                                                    2 x
                                                    <span class="product-price">£28.98</span>
                                                </div>
                                            </td>
                                            <td class="action">
                                                <a class="remove" href="#">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <td colspan="2">Total:</td>
                                            <td>£92.96</td>
                                        </tr>

                                        <tr>
                                            <td colspan="3" class="d-flex justify-content-center">
                                                <div class="cart-button">
                                                    <a href="product-cart.html" title="View Cart">View Cart</a>
                                                    <a href="product-checkout.html" title="Checkout">Checkout</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <li >
                                    <a href="index.html" class="parent">Home</a>

                                </li>

                                <li>
                                    <a href="#" class="parent">Pages</a>
                                    <div class="dropdown-menu">
                                        <ul>

                                            <li class="item">
                                                <a href="product-list-sidebar-left.php" title="Blog Detail">Product List</a>
                                            </li>
                                            <li class="item">
                                                <a href="blog-list-sidebar-right.html" title="Category Blog (Right column)">Blog List</a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>

                                <li>
                                    <a href="contact.html" class="parent">Contact US</a>
                                </li>
                                 <li class="nav-link">
                                    <a href="product-cart.php" onclick="viewCart();"class="parent">Shopping Cart</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                    <!-- search-->
                    <div id="search_widget" class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex">
                        <form method="get" action="#">
                            <input   type="text" name="s" value="" placeholder="Search ..." class="ui-autocomplete-input" autocomplete="off">
                            <button  type="submit">
                                <a href="product-list-sidebar-left.php"> <i  class="fa fa-search"></i> </a> 
                            </button>
                        </form>

                        <!-- acount  -->
                        <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                            <div class="myaccount-title">
                                <a href="#acount" data-toggle="collapse" class="acount">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span class="" id="st-quick-link1"><b>Hi <span id="li"></span> </b></span>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div id="acount" class="collapse">
                                <div class="account-list-content">
                                    <div>
                                        <ul class="quick-link" id="st-quick-link">

                                            <li id="st-quick-link-li-1"><a class="login" href="user-login.php" rel="nofollow" title="Log in to your customer account">
                                                    <i class="fa fa-sign-in"></i>
                                                    <span>Sign in</span>
                                                </a></li>
                                            <li id="st-quick-link-li-2"><a class="register" href="user-register.php" rel="nofollow" title="Register Account">
                                                    <i class="fa fa-user"></i>
                                                    <span>Register Account</span>
                                                </a></li>
                                        </ul>

                                    </div> 
                                    <div>
                                        <a class="login" href="user-acount.php" rel="nofollow" title="Log in to your customer account">
                                            <i class="fa fa-cog"></i>
                                            <span>My Account</span>
                                        </a>
                                    </div>

                                    <div>
                                        <a class="check-out" href="product-checkout.html" rel="nofollow" title="Checkout">
                                            <i class="fa fa-check" aria-hidden="true"></i>
                                            <span>Checkout</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="user-wishlist.html" title="My Wishlists">
                                            <i class="fa fa-heart"></i>
                                            <span>My Wishlists</span>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="product-list-sidebar-left.php" title="My Wishlists">
                                            <i class="fa fa-inbox"></i>
                                            <span>My Products</span>
                                        </a>
                                    </div>

                                    <div class="">
                                        <a href="user-login.php" id="st-button-1" class="btn btn-outline-primary" >
                                            &nbsp;&nbsp;&nbsp; <i class="fa fa-sign-in"> </i> <span id="st-button-2"> &nbsp; &nbsp; Sign In &nbsp;&nbsp; </span>&nbsp; <i class="fa fa-user"></i>&nbsp;&nbsp;</a>
                                    </div>
                                    <div id="desktop_currency_selector" class="currency-selector groups-selector hidden-sm-down">
                                        <ul class="list-inline">
                                            <li>
                                                <a title="Euro" rel="nofollow" href="#">EUR</a>
                                            </li>
                                            <li class="current list-inline-item">
                                                <a title="British Pound Sterling" rel="nofollow" href="#">GBP</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="desktop_language_selector" class="language-selector groups-selector hidden-sm-down">
                                        <ul class="list-inline">
                                            <li class="list-inline-item current">
                                                <a href="#">
                                                    <img class="img-fluid" src="img/home/home1-flas.jpg" alt="English" width="16" height="11">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="img-fluid" src="img/home/home1-flas2.jpg" alt="Italiano" width="16" height="11">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="img-fluid" src="img/home/home1-flas3.jpg" alt="Français" width="16" height="11">
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    <img class="img-fluid" src="img/home/home1-flas4.jpg" alt="Español" width="16" height="11">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="desktop_cart">
                            <div class="blockcart block-cart cart-preview tiva-toggle">
                                <div class="header-cart tiva-toggle-btn">
                                    <span class="cart-products-count">1</span>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                                <div class="dropdown-content">
                                    <div class="cart-content">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="product-image">
                                                        <a href="product-detail.html">
                                                            <img src="img/product/5.jpg" alt="Product">
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="product-name">
                                                            <a href="product-detail.html">Organic Strawberry Fruits</a>
                                                        </div>
                                                        <div>
                                                            2 x
                                                            <span class="product-price">£28.98</span>
                                                        </div>
                                                    </td>
                                                    <td class="action">
                                                        <a class="remove" href="#">
                                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="total">
                                                    <td colspan="2">Total:</td>
                                                    <td>£92.96</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="3" class="d-flex justify-content-center">
                                                        <div class="cart-button">
                                                            <a href="product-cart.html" title="View Cart">View Cart</a>
                                                            <a href="product-checkout.html" title="Checkout">Checkout</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- main content -->
        <div class="main-content" id="cart-main">
            <!-- main -->
            <div id="wrapper-site">
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
                                        <span>Shopping Cart</span>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </nav>
                <h1 class=" offset-lg-5 mt-6">Shopping Cart</h1>

                <div class="container">
                    <div class="row">




                        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 onecol">
                            <section id="main">




                                <div class="cart-grid row">
                                    <div class="col-lg-8 col-xs-12 check-info">
                                        <div class="cart-container" >
                                            <div class="cart-overview js-cart " id="cart-item-container">
                                                <hr>

                                                <ul class="cart-items mb-3" id="cart-item-row">


                                                    <li class="cart-item" id="cart-item-row">
                                                         <hr>
                                                        <div class="product-line-grid row justify-content-between">
                                                            <!--  product left content: image-->
                                                            <div class="product-line-grid-left col-md-2">
                                                                <span class="product-image media-middle">
                                                                    <a href="#" id="cart-item-a">
                                                                        <img class="img-fluid"
                                                                             src="img/empty.svg" id="cart-item-img"
                                                                             alt="Organic Strawberry Fruits">
                                                                    </a>
                                                                </span>
                                                            </div>
                                                            <div class="product-line-grid-body col-md-6">
                                                                <div class="product-line-info">
                                                                    <b><a class="label" href="product-detail.html"
                                                                       data-id_customization="0" id="cart-item-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></b> 
                                                                </div>
                                                                <div class="product-line-info ">
                                                                    <span
                                                                        class="label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price
                                                                        :</span>
                                                                    <span class="value">
                                                                    </span><span id="cart-item-price"></span>
                                                                </div>



                                                                <div class="product-line-info">
                                                                    <span
                                                                        class="label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seller
                                                                        :</span>
                                                                    <span class="value" id="cart-item-seller"></span>
                                                                </div>
                                                                <div class="product-line-info">
                                                                    <span
                                                                        class="label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delivery
                                                                        Free</span>
                                                                    <span class="value">Rs.<?php echo $ship; ?>.00</span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="product-line-grid-right text-center product-line-actions col-md-4">
                                                                <div class="row">
                                                                    <div class="col-md-4 col qty">
                                                                        <div class="label">Qty:</div>
                                                                        <div class="quantity">
                                                                            <input id="cart-item-qty" type="number" 
                                                                                   value=""
                                                                                   class="input-group form-control"
                                                                                   onchange="changeQTY();"
                                                                                   id="qty_num">


                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 col price">
                                                                        <div class="label">Total:</div>
                                                                        <div class="product-price total">
                                                                            <span id="cart-item-subtotal"></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-3 col text-xs-right align-self-end">
                                                                        <div class="cart-line-product-actions ">
                                                                            <a class="remove-from-cart" rel="nofollow"
                                                                               onclick="deleteFromCart();" data-link-action="delete-from-cart"
                                                                               data-id-product="1">
                                                                                <i class="fa fa-trash-o"
                                                                                   aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </li>

                                                </ul>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="cart-grid-right col-xs-12 col-lg-4">


                                        <div id="block-reassurance">
                                            <ul>
                                                <li>
                                                    <div class="block-reassurance-item">
                                                        <img src="img/product/check1.png"
                                                             alt="Security policy (edit with Customer reassurance module)">
                                                        <span>Security policy (edit with Customer reassurance module)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-reassurance-item">
                                                        <img src="img/product/check2.png"
                                                             alt="Delivery policy (edit with Customer reassurance module)">
                                                        <span>Delivery policy (edit with Customer reassurance module)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-reassurance-item">
                                                        <img src="img/product/check3.png"
                                                             alt="Return policy (edit with Customer reassurance module)">
                                                        <span>Return policy (edit with Customer reassurance module)</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="cart-summary">
                                            <div class="product-price total">
                                                <div class="cart-summary-products">
                                                    <div class="summary-label ">There are <span id="cart-total-qty"></span> item in your cart</div>
                                                </div>
                                                <hr />
                                                <div class="" id="cart-subtotal-products">

                                                    <div class="product-line-info">

                                                    </div><span class="label js-subtotal">
                                                        Total items :
                                                    </span>
                                                    <span class="value">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="cart-total"></span></span>
                                                </div>
                                                <div class="product-line-info" id="cart-subtotal-shipping">
                                                    <span class="label">
                                                        Total Shipping :
                                                    </span>
                                                    <span class="value">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo $shipping; ?> .00</span>
                                                    <div>
                                                        <small class="value"></small>
                                                    </div>
                                                </div>
                                                <hr />
                                                <div class="product-line-info cart-total">
                                                    <span class="label">Total :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="cart-total1"></span>
                                                    <span class="value">(tax incl.)</span>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="mt-3 mb-3 d-grid col-12">

                                            <a href="product-checkout.html" class=" btn btn-warning  ">
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  CheckOut&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </a>
                                        </div>
                                    </div>

                                </div>


                            </section>
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
        <script src="js/cart.js"></script>
        <script src="js/index.js"></script>
        <script src="script.js"></script>
        <script src="js/notification.js"></script>
        <script src="js/sweetalert.js"></script>
    </body>


    <!-- product-cart07:12-->

</html>