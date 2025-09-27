<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="zxx">


    <!-- index06:45-->

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

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="libs/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="libs/font-material/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="libs/nivo-slider/css/nivo-slider.css">
        <link rel="stylesheet" href="libs/nivo-slider/css/animate.css">
        <link rel="stylesheet" href="libs/nivo-slider/css/style.css">
        <link rel="stylesheet" href="libs/owl-carousel/assets/owl.carousel.min.css">

        <!-- Template CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/reponsive.css">
        <link rel="stylesheet" href="css/notification.css" />


    </head>

    <body id="home" onload="checkSignIn();">

        <!-- header left mobie -->
        <div class="header-mobile d-md-none">
            <div class="mobile hidden-md-up text-xs-center d-flex align-items-center justify-content-around">

                <!-- menu left -->
                <div id="mobile_mainmenu" class="item-mobile-top">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>

                <!-- logo -->
                <div class="mobile-logo">
                    <a href="index-2.html">
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
                            <a href="index-2.html">
                                <img class="img-fluid" src="img/home/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>

                    <!-- menu -->
                    <div class="main-menu col-sm-4 col-md-5 align-items-center justify-content-center navbar-expand-md">
                        <div class="menu navbar collapse navbar-collapse">
                            <ul class="menu-top navbar-nav">
                                <li class="nav-link">
                                    <a href="index-2.php" class="parent">Home</a>

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
                                <li>
                                    <a href="product-cart.php" onclick="viewCart();" class="parent">Shopping Cart</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- search-->
                    <div id="search_widget" class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex">
                        <form method="get" action="#">
                            <input type="text" name="s" value="" placeholder="Search ..." class="ui-autocomplete-input" autocomplete="off">
                            <button type="submit">
                                <i class="fa fa-search"></i>
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
        <!--        <div class="header-top d-xs-none ">
                    <div class="container">
                        <div class="row">
                             logo 
                            <div class="col-sm-2 col-md-2 d-flex align-items-center">
                                <div id="logo">
                                    <a href="index-2.php">
                                        <img class="img-fluid" src="img/home/logo.png" alt="logo">
                                    </a>
                                </div>
                            </div>
        
                             menu 
                            <div class="main-menu col-sm-4 col-md-5 align-items-center justify-content-center navbar-expand-md">
                                <div class="menu navbar collapse navbar-collapse">
                                    <ul class="menu-top navbar-nav">
                                        <li class="nav-link">
                                            <a href="index-2.php" class="parent">Home</a>
        
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
                                        <li>
                                            <a href="#" onclick="viewCart();" class="parent">Shopping Cart</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
        
                             search
                            <div class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex">
        
        
                                <select class="form-select col-sm-2 col-md-4  " style="max-width: 250px;" id="basic_search_select">
                                    <option value="0">All Categories</option>
        
                                    <option value="<?php echo $category_data["cat_id"]; ?>">
        <?php echo $category_data["cat_name"]; ?>
                                    </option>
        
        
                                </select>
                                <div class="col-12 col-lg-1 d-grid">
                                    <button class="btn btn-primary mt-3 mb-3" onclick="basicSearch(0);">Search</button>
                                </div>
                                <div>
                                    <button onclick="basicSearch(0);" >
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
        
        
        
                                 acount  
                                <div id="block_myaccount_infos" class="hidden-sm-down dropdown offset-1 col-12 col-lg-4 d-grid">
        
        
                                    <a href="#acount" data-toggle="collapse" class="acount">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span class="" id="st-quick-link2"><b>Hi <span id="li"></span> </b></span>
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                     <span class="" onclick="signout();">Signout</span> | 
        
        
                                    <div id="acount" class="collapse">
                                        <div class="account-list-content">
                                      
                                            <div>
                                                <ul class="quick-link" id="st-quick-link">
        
                                                    <li id="st-quick-link-li-1"><a class="login" href="user-login.html" rel="nofollow" title="Log in to your customer account">
                                                            <i class="fa fa-sign-in"></i>
                                                            <span>Sign in</span>
                                                        </a></li>
                                                    <li id="st-quick-link-li-2"><a class="register" href="user-register.html" rel="nofollow" title="Register Account">
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
                                                <a href="user-wishlist.php" title="My Wishlists">
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
                                                <a href="#" id="" class="btn btn-outline-primary" onclick="signout();">
                                                    &nbsp;&nbsp;&nbsp; <i class="fa fa-sign-in"> </i> <span> &nbsp; &nbsp; Sign Out &nbsp;&nbsp; </span>&nbsp; <i class="fa fa-user"></i>&nbsp;&nbsp;</a>
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
                                    </div>-->





        <!--
        
                                            <div id="block_myaccount_infos" class="hidden-sm-down dropdown">
                                                <div class="myaccount-title">
            
            
                                                    <a href="#acount" data-toggle="collapse" class="acount">
                                                        <i class="fa fa-user" aria-hidden="true"></i>
                                                        <span>Account</span>
                                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                                <div id="acount" class="collapse">
                                                    <div class="account-list-content">
                                                        <div>
                                                            <a class="login" href="user-acount.php" rel="nofollow" title="Log in to your customer account">
                                                                <i class="fa fa-cog"></i>
                                                                <span>My Account</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a class="check-out" href="user-login.php" rel="nofollow" title="Checkout">
                                                                <i class="fa fa-sign-in"></i>
                                                                <span>Sign in</span>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <a href="user-register.php" title="My Wishlists">
                                                                <i class="fa fa-user"></i>
                                                                <span>Register Account</span>
                                                            </a>
                                                        </div>
                                                         <div>
                                                            <ul class="quick-link" id="st-quick-link">
            
                                                                <li id="st-quick-link-li-1"><a class="login" href="user-login.html" rel="nofollow" title="Log in to your customer account">
                                                                        <i class="fa fa-sign-in"></i>
                                                                        <span>Sign in</span>
                                                                    </a></li>
                                                                <li id="st-quick-link-li-2"><a class="register" href="user-register.html" rel="nofollow" title="Register Account">
                                                                        <i class="fa fa-user"></i>
                                                                        <span>Register Account</span>
                                                                    </a></li>
                                                            </ul>
            
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
            
                                                        <div class="align-items-center justify-content">
                                                            <a href="user-login.html" id="st-button-1" class="btn btn-outline-primary">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-sign-in"> </i> <span> &nbsp; &nbsp;&nbsp; Sign In &nbsp;&nbsp; </span>&nbsp;&nbsp;&nbsp; <i class="fa fa-user"></i>&nbsp;&nbsp;</a>
                                                        </div>
            
            
                                                        <div id="desktop_currency_selector" class="currency-selector groups-selector hidden-sm-down">
                                                            <ul class="list-inline">
                                                                <li>
                                                                    <a title="Euro" rel="nofollow" href="#">EUR</a>
                                                                </li>
                                                                <li class="current list-inline-item">
                                                                    <a title="British Pound Sterling" rel="nofollow" href="#">GBP</a>
                                                                </li>
                                                                <li class="current list-inline-item">
                                                                    <a title="British Pound Sterling" rel="nofollow" href="#">RS</a>
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
            
          
        -->





    </div>
    <!--                        <div class="desktop_cart">
                                <div class="blockcart block-cart cart-preview tiva-toggle">
                                    <div class="header-cart tiva-toggle-btn">
                                        <span class="cart-products-count">1</span>
                                        <i class="fa fa-shopping-cart" onclick="window.location = 'product-cart.php';" aria-hidden="true" ></i>
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
                            </div>-->
</div>
</div>
</div>
</div>
</div>

<!-- main content -->
<div class="main-content">
    <div class="wrap-banner" id="basicSearchResult">


        <!-- slide show -->
        <div class="section banner">
            <div class="tiva-slideshow-wrapper">
                <div id="tiva-slideshow" class="nivoSlider">
                    <a href="#">
                        <img class="img-responsive" src="img/home/home1-banner1.jpg" title="#caption1"
                             alt="Slideshow image">
                    </a>
                    <a href="#">
                        <img class="img-responsive" src="img/home/home1-banner2.jpg" title="#caption2"
                             alt="Slideshow image">
                    </a>
                    <a href="#">
                        <img class="img-responsive" src="img/home/home1-banner3.jpg" title="#caption3"
                             alt="Slideshow image">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- main -->
    <div id="wrapper-site ">
        <div id="content-wrapper" class="full-width">
            <div id="main">
                <section class="page-home">
                    <div class="container">

                        <!-- delivery form -->
                        <div class="section policy-home col-lg-12 col-xs-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="block">
                                        <div class="block-content">
                                            <div class="policy-item">
                                                <div class="policy-content iconpolicy1">
                                                    <img src="img/home/home1-policy.png" alt="img">
                                                    <div class="policy-name mb-5">FREE DELIVERY FROM $ 250</div>
                                                    <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tiva-html col-lg-4 col-md-4">
                                    <div class="block">
                                        <div class="block-content">
                                            <div class="policy-item">
                                                <div class="policy-content iconpolicy2">
                                                    <img src="img/home/home1-policy2.png" alt="img">
                                                    <div class="policy-name mb-5">FREE INSTALLATION</div>
                                                    <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tiva-html col-lg-4 col-md-4">
                                    <div class="block">
                                        <div class="block-content">
                                            <div class="policy-item">
                                                <div class="policy-content iconpolicy3">
                                                    <img src="img/home/home1-policy3.png" alt="img">
                                                    <div class="policy-name mb-5">MONEY BACK GUARANTEED</div>
                                                    <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>




            <!-- Category Name -->

            <!--            <div class="container  border-primary">
                            <div class=" row">
                                <div class="tiva-row-wrap row">
                                    <div class="block-title-content">
                                        <h2 class="title-block">
            <?php echo $category_data2["cat_name"]; ?>
                                        </h2>
                                    </div>
            
            
                                </div>
            
            
                            </div>-->


            <!-- product living room -->
            <div class="container justify-content-center  ">
                <div class=" row ">
                    <div class="tiva-row-wrap  justify-content-center gap-4">

                        <div class="tab-content  ">
                            <div id="new" class=" fade in active show offset-lg-1 ">

                                <div class="item text-center " id="single-slide-container">



                                    <div class="product-miniature first-item js-product-miniature item-one">
                                        <div class="">
                                            <a  id="st-product-link-1" >
                                                <img id="st-product-image-1" href="#" class="img-fluid image-cover" src="img/product/1.jpg" alt="img" style="height: 200px;" >

                                            </a>

                                        </div>
                                        <div class="product-description">
                                            <div class="product-groups">
                                                <div class="product-title" >
                                                    <a id="st-product-title-1" href="product-detail.html">Nulla et justo non augue</a>
                                                </div>
                                                <div class="rating">
                                                    <div class="star-content">
                                                        <div class="star"></div>
                                                        <div class="star"></div>
                                                        <div class="star"></div>
                                                        <div class="star"></div>
                                                        <div class="star"></div>
                                                    </div>
                                                </div>
                                                <div class="product-group-price">
                                                    <div class="product-price-and-shipping">
                                                        <span id="st-product-price-1" class="price">£20.08</span>
                                                        <del class="regular-price">£28.68</del>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-buttons d-flex justify-content-center">
                                                <form action="#" method="post" class="formAddToCart">
                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                    </a>
                                                </form>
                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>
                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                    <!--                                            <div class="product-miniature  mb-8" id="st-product-link-1">
                                    
                                                                                    <a href="product-detail.html">
                                                                                        <img src=""
                                                                                             class="card-img-top img-thumbnail mt-2 "
                                                                                             style="height: 180px;" />
                                    
                                                                                    </a>
                                    
                                    
                                    
                                                                                    <div class="product-description">
                                                                                        <div class="product-groups">
                                                                                            <div class="product-title">
                                                                                                <a id="st-product-title-1"
                                                                                                   href="product-detail.html"></a>
                                                                                            </div>
                                                                                            <div class="rating">
                                                                                                <div class="star-content">
                                                                                                    <div class="star"></div>
                                                                                                    <div class="star"></div>
                                                                                                    <div class="star"></div>
                                                                                                    <div class="star"></div>
                                                                                                    <div class="star"></div>
                                                                                                </div>
                                                                                            </div>
                                    
                                                                                            <div class="product-group-price">
                                                                                                <div class="product-price-and-shipping">
                                                                                                    <span class="price">Rs.
                                    
                                                                                                        .00</span>
                                    
                                                                                                </div>
                                                                                                <del class="regular-price">£28.68</del>
                                                                                            </div>
                                    
                                                                                            <span class="card-text  fw-bold">In Stock</span><br />
                                                                                            <span
                                                                                                class="card-text  fw-bold"><?php echo $product_data["qty"]; ?>
                                                                                                Items
                                                                                                Available</span><br /><br />
                                                                                            <a href='<?php echo "product-detail.php?id=" . ($product_data["id"]); ?>'
                                                                                               class="col-12 mb-2 btn btn-warning">
                                                                                                Buy Now
                                                                                            </a>
                                                                                            <button class="col-6 btn btn-dark">
                                                                                                <i class="fa fa-shopping-cart text-white "
                                                                                                   onclick="addToCart(<?php echo $product_data['id']; ?>);"></i>
                                                                                            </button>
                                    
                                    
                                                                                            <span class="card-text  fw-bold">Out Of Stock</span><br />
                                                                                            <span class="card-text text-danger fw-bold">00 Items
                                                                                                Available</span><br /><br />
                                                                                            <a href='#' class="col-12 btn btn-warning disabled">
                                                                                                Buy Now
                                                                                            </a>
                                                                                            <button class="col-6 btn btn-dark  disabled">
                                                                                                <i class="fa fa-shopping-cart text-white "></i>
                                                                                            </button>
                                    
                                                                                                                                                    <button class="col-4 btn btn-outline-light border border-primary"
                                                                                                                                                            onclick='addToWatchlist;'>
                                                                                                                                                        <i class="fa fa-heart text-danger "
                                                                                                                                                           id="heart"></i>
                                                                                                                                                    </button>
                                                                                            
                                                                                                                                                    <button class="col-4 btn btn-outline-light  border border-primary"
                                                                                                                                                               onclick='addToWatchlist();'>
                                                                                                <i class="fa fa-heart text-dark "
                                                                                                   id="heart"></i>
                                                                                            </button>
                                    
                                                                                        </div>
                                    
                                                                                    </div>
                                                                                </div>-->
                                </div>
                            </div>
                        </div>




                    </div>
                    <!--///-->
                    <div class="tab-content  ">
                        <div id="new" class=" fade in active show offset-lg-1 ">

                            <div class="item text-center " id="single-slide-container">



                                <div class="product-miniature first-item js-product-miniature item-one">
                                    <div class="">
                                        <a  id="st-product-link-2" >
                                            <img id="st-product-image-2" href="#" class="img-fluid image-cover" src="img/product/1.jpg" alt="img" style="height: 200px;" >

                                        </a>

                                    </div>
                                    <div class="product-description">
                                        <div class="product-groups">
                                            <div class="product-title" >
                                                <a id="st-product-title-2" href="product-detail.html">Nulla et justo non augue</a>
                                            </div>
                                            <div class="rating">
                                                <div class="star-content">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="product-group-price">
                                                <div class="product-price-and-shipping">
                                                    <span id="st-product-price-2" class="price">£20.08</span>
                                                    <del class="regular-price">£28.68</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-buttons d-flex justify-content-center">
                                            <form action="#" method="post" class="formAddToCart">
                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </a>
                                            </form>
                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <!--                                            <div class="product-miniature  mb-8" id="st-product-link-1">
                                
                                                                                <a href="product-detail.html">
                                                                                    <img src=""
                                                                                         class="card-img-top img-thumbnail mt-2 "
                                                                                         style="height: 180px;" />
                                
                                                                                </a>
                                
                                
                                
                                                                                <div class="product-description">
                                                                                    <div class="product-groups">
                                                                                        <div class="product-title">
                                                                                            <a id="st-product-title-1"
                                                                                               href="product-detail.html"></a>
                                                                                        </div>
                                                                                        <div class="rating">
                                                                                            <div class="star-content">
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                            </div>
                                                                                        </div>
                                
                                                                                        <div class="product-group-price">
                                                                                            <div class="product-price-and-shipping">
                                                                                                <span class="price">Rs.
                                
                                                                                                    .00</span>
                                
                                                                                            </div>
                                                                                            <del class="regular-price">£28.68</del>
                                                                                        </div>
                                
                                                                                        <span class="card-text  fw-bold">In Stock</span><br />
                                                                                        <span
                                                                                            class="card-text  fw-bold"><?php echo $product_data["qty"]; ?>
                                                                                            Items
                                                                                            Available</span><br /><br />
                                                                                        <a href='<?php echo "product-detail.php?id=" . ($product_data["id"]); ?>'
                                                                                           class="col-12 mb-2 btn btn-warning">
                                                                                            Buy Now
                                                                                        </a>
                                                                                        <button class="col-6 btn btn-dark">
                                                                                            <i class="fa fa-shopping-cart text-white "
                                                                                               onclick="addToCart(<?php echo $product_data['id']; ?>);"></i>
                                                                                        </button>
                                
                                
                                                                                        <span class="card-text  fw-bold">Out Of Stock</span><br />
                                                                                        <span class="card-text text-danger fw-bold">00 Items
                                                                                            Available</span><br /><br />
                                                                                        <a href='#' class="col-12 btn btn-warning disabled">
                                                                                            Buy Now
                                                                                        </a>
                                                                                        <button class="col-6 btn btn-dark  disabled">
                                                                                            <i class="fa fa-shopping-cart text-white "></i>
                                                                                        </button>
                                
                                                                                                                                                <button class="col-4 btn btn-outline-light border border-primary"
                                                                                                                                                        onclick='addToWatchlist;'>
                                                                                                                                                    <i class="fa fa-heart text-danger "
                                                                                                                                                       id="heart"></i>
                                                                                                                                                </button>
                                                                                        
                                                                                                                                                <button class="col-4 btn btn-outline-light  border border-primary"
                                                                                                                                                           onclick='addToWatchlist();'>
                                                                                            <i class="fa fa-heart text-dark "
                                                                                               id="heart"></i>
                                                                                        </button>
                                
                                                                                    </div>
                                
                                                                                </div>
                                                                            </div>-->
                            </div>
                        </div>
                    </div>


                    <!--///3-->


                    <div class="tab-content  ">
                        <div id="new" class=" fade in active show offset-lg-1 ">

                            <div class="item text-center " id="single-slide-container">



                                <div class="product-miniature first-item js-product-miniature item-one">
                                    <div class="">
                                        <a  id="st-product-link-3" >
                                            <img id="st-product-image-3" href="#" class="img-fluid image-cover" src="img/product/1.jpg" alt="img" style="height: 200px;" >

                                        </a>

                                    </div>
                                    <div class="product-description">
                                        <div class="product-groups">
                                            <div class="product-title" >
                                                <a id="st-product-title-3" href="product-detail.html">Nulla et justo non augue</a>
                                            </div>
                                            <div class="rating">
                                                <div class="star-content">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="product-group-price">
                                                <div class="product-price-and-shipping">
                                                    <span id="st-product-price-3" class="price">£20.08</span>
                                                    <del class="regular-price">£28.68</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-buttons d-flex justify-content-center">
                                            <form action="#" method="post" class="formAddToCart">
                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </a>
                                            </form>
                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <!--                                            <div class="product-miniature  mb-8" id="st-product-link-1">
                                
                                                                                <a href="product-detail.html">
                                                                                    <img src=""
                                                                                         class="card-img-top img-thumbnail mt-2 "
                                                                                         style="height: 180px;" />
                                
                                                                                </a>
                                
                                
                                
                                                                                <div class="product-description">
                                                                                    <div class="product-groups">
                                                                                        <div class="product-title">
                                                                                            <a id="st-product-title-1"
                                                                                               href="product-detail.html"></a>
                                                                                        </div>
                                                                                        <div class="rating">
                                                                                            <div class="star-content">
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                            </div>
                                                                                        </div>
                                
                                                                                        <div class="product-group-price">
                                                                                            <div class="product-price-and-shipping">
                                                                                                <span class="price">Rs.
                                
                                                                                                    .00</span>
                                
                                                                                            </div>
                                                                                            <del class="regular-price">£28.68</del>
                                                                                        </div>
                                
                                                                                        <span class="card-text  fw-bold">In Stock</span><br />
                                                                                        <span
                                                                                            class="card-text  fw-bold"><?php echo $product_data["qty"]; ?>
                                                                                            Items
                                                                                            Available</span><br /><br />
                                                                                        <a href='<?php echo "product-detail.php?id=" . ($product_data["id"]); ?>'
                                                                                           class="col-12 mb-2 btn btn-warning">
                                                                                            Buy Now
                                                                                        </a>
                                                                                        <button class="col-6 btn btn-dark">
                                                                                            <i class="fa fa-shopping-cart text-white "
                                                                                               onclick="addToCart(<?php echo $product_data['id']; ?>);"></i>
                                                                                        </button>
                                
                                
                                                                                        <span class="card-text  fw-bold">Out Of Stock</span><br />
                                                                                        <span class="card-text text-danger fw-bold">00 Items
                                                                                            Available</span><br /><br />
                                                                                        <a href='#' class="col-12 btn btn-warning disabled">
                                                                                            Buy Now
                                                                                        </a>
                                                                                        <button class="col-6 btn btn-dark  disabled">
                                                                                            <i class="fa fa-shopping-cart text-white "></i>
                                                                                        </button>
                                
                                                                                                                                                <button class="col-4 btn btn-outline-light border border-primary"
                                                                                                                                                        onclick='addToWatchlist;'>
                                                                                                                                                    <i class="fa fa-heart text-danger "
                                                                                                                                                       id="heart"></i>
                                                                                                                                                </button>
                                                                                        
                                                                                                                                                <button class="col-4 btn btn-outline-light  border border-primary"
                                                                                                                                                           onclick='addToWatchlist();'>
                                                                                            <i class="fa fa-heart text-dark "
                                                                                               id="heart"></i>
                                                                                        </button>
                                
                                                                                    </div>
                                
                                                                                </div>
                                                                            </div>-->
                            </div>
                        </div>
                    </div>
                    <!--////4-->

                    <div class="tab-content  ">
                        <div id="new" class=" fade in active show offset-lg-1 ">

                            <div class="item text-center " id="single-slide-container">



                                <div class="product-miniature first-item js-product-miniature item-one">
                                    <div class="">
                                        <a  id="st-product-link-4" >
                                            <img id="st-product-image-4" href="#" class="img-fluid image-cover" src="img/product/1.jpg" alt="img" style="height: 200px;" >

                                        </a>

                                    </div>
                                    <div class="product-description">
                                        <div class="product-groups">
                                            <div class="product-title" >
                                                <a id="st-product-title-4" href="product-detail.html">Nulla et justo non augue</a>
                                            </div>
                                            <div class="rating">
                                                <div class="star-content">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="product-group-price">
                                                <div class="product-price-and-shipping">
                                                    <span id="st-product-price-4" class="price">£20.08</span>
                                                    <del class="regular-price">£28.68</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-buttons d-flex justify-content-center">
                                            <form action="#" method="post" class="formAddToCart">
                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </a>
                                            </form>
                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <!--                                            <div class="product-miniature  mb-8" id="st-product-link-1">
                                
                                                                                <a href="product-detail.html">
                                                                                    <img src=""
                                                                                         class="card-img-top img-thumbnail mt-2 "
                                                                                         style="height: 180px;" />
                                
                                                                                </a>
                                
                                
                                
                                                                                <div class="product-description">
                                                                                    <div class="product-groups">
                                                                                        <div class="product-title">
                                                                                            <a id="st-product-title-1"
                                                                                               href="product-detail.html"></a>
                                                                                        </div>
                                                                                        <div class="rating">
                                                                                            <div class="star-content">
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                            </div>
                                                                                        </div>
                                
                                                                                        <div class="product-group-price">
                                                                                            <div class="product-price-and-shipping">
                                                                                                <span class="price">Rs.
                                
                                                                                                    .00</span>
                                
                                                                                            </div>
                                                                                            <del class="regular-price">£28.68</del>
                                                                                        </div>
                                
                                                                                        <span class="card-text  fw-bold">In Stock</span><br />
                                                                                        <span
                                                                                            class="card-text  fw-bold"><?php echo $product_data["qty"]; ?>
                                                                                            Items
                                                                                            Available</span><br /><br />
                                                                                        <a href='<?php echo "product-detail.php?id=" . ($product_data["id"]); ?>'
                                                                                           class="col-12 mb-2 btn btn-warning">
                                                                                            Buy Now
                                                                                        </a>
                                                                                        <button class="col-6 btn btn-dark">
                                                                                            <i class="fa fa-shopping-cart text-white "
                                                                                               onclick="addToCart(<?php echo $product_data['id']; ?>);"></i>
                                                                                        </button>
                                
                                
                                                                                        <span class="card-text  fw-bold">Out Of Stock</span><br />
                                                                                        <span class="card-text text-danger fw-bold">00 Items
                                                                                            Available</span><br /><br />
                                                                                        <a href='#' class="col-12 btn btn-warning disabled">
                                                                                            Buy Now
                                                                                        </a>
                                                                                        <button class="col-6 btn btn-dark  disabled">
                                                                                            <i class="fa fa-shopping-cart text-white "></i>
                                                                                        </button>
                                
                                                                                                                                                <button class="col-4 btn btn-outline-light border border-primary"
                                                                                                                                                        onclick='addToWatchlist;'>
                                                                                                                                                    <i class="fa fa-heart text-danger "
                                                                                                                                                       id="heart"></i>
                                                                                                                                                </button>
                                                                                        
                                                                                                                                                <button class="col-4 btn btn-outline-light  border border-primary"
                                                                                                                                                           onclick='addToWatchlist();'>
                                                                                            <i class="fa fa-heart text-dark "
                                                                                               id="heart"></i>
                                                                                        </button>
                                
                                                                                    </div>
                                
                                                                                </div>
                                                                            </div>-->
                            </div>
                        </div>
                    </div>

                    <!--/////5-->
                    <div class="tab-content  ">
                        <div id="new" class=" fade in active show offset-lg-1 ">

                            <div class="item text-center " id="single-slide-container">



                                <div class="product-miniature first-item js-product-miniature item-one">
                                    <div class="">
                                        <a  id="st-product-link-5" >
                                            <img id="st-product-image-5" href="#" class="img-fluid image-cover" src="img/product/1.jpg" alt="img" style="height: 200px;" >

                                        </a>

                                    </div>
                                    <div class="product-description">
                                        <div class="product-groups">
                                            <div class="product-title" >
                                                <a id="st-product-title-5" href="product-detail.html">Nulla et justo non augue</a>
                                            </div>
                                            <div class="rating">
                                                <div class="star-content">
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                    <div class="star"></div>
                                                </div>
                                            </div>
                                            <div class="product-group-price">
                                                <div class="product-price-and-shipping">
                                                    <span id="st-product-price-5" class="price">£20.08</span>
                                                    <del class="regular-price">£28.68</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-buttons d-flex justify-content-center">
                                            <form action="#" method="post" class="formAddToCart">
                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </a>
                                            </form>
                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <!--                                            <div class="product-miniature  mb-8" id="st-product-link-1">
                                
                                                                                <a href="product-detail.html">
                                                                                    <img src=""
                                                                                         class="card-img-top img-thumbnail mt-2 "
                                                                                         style="height: 180px;" />
                                
                                                                                </a>
                                
                                
                                
                                                                                <div class="product-description">
                                                                                    <div class="product-groups">
                                                                                        <div class="product-title">
                                                                                            <a id="st-product-title-1"
                                                                                               href="product-detail.html"></a>
                                                                                        </div>
                                                                                        <div class="rating">
                                                                                            <div class="star-content">
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="star"></div>
                                                                                            </div>
                                                                                        </div>
                                
                                                                                        <div class="product-group-price">
                                                                                            <div class="product-price-and-shipping">
                                                                                                <span class="price">Rs.
                                
                                                                                                    .00</span>
                                
                                                                                            </div>
                                                                                            <del class="regular-price">£28.68</del>
                                                                                        </div>
                                
                                                                                        <span class="card-text  fw-bold">In Stock</span><br />
                                                                                        <span
                                                                                            class="card-text  fw-bold"><?php echo $product_data["qty"]; ?>
                                                                                            Items
                                                                                            Available</span><br /><br />
                                                                                        <a href='<?php echo "product-detail.php?id=" . ($product_data["id"]); ?>'
                                                                                           class="col-12 mb-2 btn btn-warning">
                                                                                            Buy Now
                                                                                        </a>
                                                                                        <button class="col-6 btn btn-dark">
                                                                                            <i class="fa fa-shopping-cart text-white "
                                                                                               onclick="addToCart(<?php echo $product_data['id']; ?>);"></i>
                                                                                        </button>
                                
                                
                                                                                        <span class="card-text  fw-bold">Out Of Stock</span><br />
                                                                                        <span class="card-text text-danger fw-bold">00 Items
                                                                                            Available</span><br /><br />
                                                                                        <a href='#' class="col-12 btn btn-warning disabled">
                                                                                            Buy Now
                                                                                        </a>
                                                                                        <button class="col-6 btn btn-dark  disabled">
                                                                                            <i class="fa fa-shopping-cart text-white "></i>
                                                                                        </button>
                                
                                                                                                                                                <button class="col-4 btn btn-outline-light border border-primary"
                                                                                                                                                        onclick='addToWatchlist;'>
                                                                                                                                                    <i class="fa fa-heart text-danger "
                                                                                                                                                       id="heart"></i>
                                                                                                                                                </button>
                                                                                        
                                                                                                                                                <button class="col-4 btn btn-outline-light  border border-primary"
                                                                                                                                                           onclick='addToWatchlist();'>
                                                                                            <i class="fa fa-heart text-dark "
                                                                                               id="heart"></i>
                                                                                        </button>
                                
                                                                                    </div>
                                
                                                                                </div>
                                                                            </div>-->
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>





        <!-- recent posts -->
        <div class="container">
            <div class="section recent-post">
                <div class="title-block">RECENT POST</div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item-post">
                            <div class="thumbnail-img">
                                <a href="blog-detail.html">
                                    <img src="img/home/home1-post1.jpg" alt="img">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-info">
                                    <span class="comment">
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                        <span>0 Comments</span>
                                    </span>
                                    <span class="datetime">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <span>April 12, 2018</span>
                                    </span>
                                </div>
                                <div class="post-title">
                                    <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                </div>
                                <div class="post-desc">
                                    Lorem ipsum dolor sit amet, consecte adipis cing elit, sed do
                                    eiusmod tempor
                                    incididunt ut labore et dolore magna
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item-post">
                            <div class="thumbnail-img">
                                <a href="blog-detail.html">
                                    <img src="img/home/home1-post2.jpg" alt="img">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-info">
                                    <span class="comment">
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                        <span>0 Comments</span>
                                    </span>
                                    <span class="datetime">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <span>April 12, 2018</span>
                                    </span>
                                </div>
                                <div class="post-title">
                                    <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                </div>
                                <div class="post-desc">
                                    Lorem ipsum dolor sit amet, consecte adipis cing elit, sed do
                                    eiusmod tempor
                                    incididunt ut labore et dolore magna
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item-post">
                            <div class="thumbnail-img">
                                <a href="blog-detail.html">
                                    <img src="img/home/home1-post3.jpg" alt="img">
                                </a>
                            </div>
                            <div class="post-content">
                                <div class="post-info">
                                    <span class="comment">
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                        <span>0 Comments</span>
                                    </span>
                                    <span class="datetime">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <span>April 12, 2018</span>
                                    </span>
                                </div>
                                <div class="post-title">
                                    <a href="blog-detail.html">Lorem ipsum dolor sit amet</a>
                                </div>
                                <div class="post-desc">
                                    Lorem ipsum dolor sit amet, consecte adipis cing elit, sed do
                                    eiusmod tempor
                                    incididunt ut labore et dolore magna
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- partner -->
            <div class="section introduct-logo">
                <div class="row">
                    <div class="tiva-manufacture  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                        <div class="block">
                            <div id="manufacture" class="owl-carousel owl-theme owl-loaded owl-drag">
                                <div class="item">
                                    <div class="logo-manu">
                                        <a href="#" title="view products">
                                            <img class="img-fluid" src="img/home/icon-logo1.jpg"
                                                 alt="img" />
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="logo-manu">
                                        <a href="#" title="view products">
                                            <img class="img-fluid" src="img/home/icon-logo2.jpg"
                                                 alt="img" />
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="logo-manu">
                                        <a href="#" title="view products">
                                            <img class="img-fluid" src="img/home/icon-logo3.jpg"
                                                 alt="img" />
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="logo-manu">
                                        <a href="#" title="view products">
                                            <img class="img-fluid" src="img/home/icon-logo4.jpg"
                                                 alt="img" />
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="logo-manu">
                                        <a href="#" title="view products">
                                            <img class="img-fluid" src="img/home/icon-logo5.jpg"
                                                 alt="img" />
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="logo-manu">
                                        <a href="#" title="view products">
                                            <img class="img-fluid" src="img/home/icon-logo6.jpg"
                                                 alt="img" />
                                        </a>
                                    </div>
                                </div>
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

<!-- Template JS -->
<script src="js/theme.js"></script>
<script src="js/index.js"></script>
<script src="js/cart.js"></script>
<script src="bootstrap.bundle.js"></script>
<script src="script.js"></script>
<script src="js/notification.js"></script>
</body>


<!-- index06:45-->

</html>