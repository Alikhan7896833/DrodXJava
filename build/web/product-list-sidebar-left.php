<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">


    <!-- product-list-sidebar-left10:55-->

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
        <link rel="stylesheet" href="libs/nivo-slider/css/nivo-slider.css">
        <link rel="stylesheet" href="libs/nivo-slider/css/animate.css">
        <link rel="stylesheet" href="libs/nivo-slider/css/style.css">
        <link rel="stylesheet" href="libs/font-material/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="libs/slider-range/css/jslider.css">
        <link rel="stylesheet" href="libs/owl-carousel/assets/owl.carousel.min.css">

        <!-- Template CSS -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/reponsive.css">
        <link rel="stylesheet" href="css/notification.css" />
    </head>

    <body id="product-sidebar-left" onload="loadData(); checkSignIn();">

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
                                <li class="nav-link">
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
                                <li>
                                    <a href="product-cart.php" onclick="viewCart();" class="parent">Shopping Cart</a>
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
        <div class="main-content">
            <div id="wrapper-site">
                <div id="content-wrapper">
                    <div id="main">
                        <div class="">

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
                                                    <span>My Product/Search</span>
                                                </a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </nav>
                            <div>
                                <div class="row">
                                    <h1 class=" offset-lg-5">My Products</h1>
                                    <button class="btn btn-warning fw-bold offset-lg-3 mt-3"
                                            onclick="window.location = 'addProduct.php'">Add Product</button>



                                    <div class="container">
                                        <div class="content">
                                            <div class="row">

                                                <div class="sidebar-3 sidebar-collection col-lg-3 col-md-4 col-sm-4">

                                                    <!-- category menu -->


                                                    <div class="sidebar-block title-block">
                                                        <div class="">Search</div><!--                                                        
                                                       <h4>Search</h4>-->
                                                        <hr style="width: 80%;" />
                                                        <!--<h4>Sort Products</h4>-->
                                                    </div>


                                                    <div class="sidebar-block">

                                                        <div class="new-item-content">
                                                            <h3 class="title-product">categories</h3>
                                                            <ul id="category-options">
                                                                <li id="category-li">
                                                                    <label class="check">
                                                                        <input type="checkbox">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <a id="category-a" href="#">
                                                                        <b>side table</b>
                                                                        <span class="quantity">(30)</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <label class="check">
                                                                        <input type="checkbox">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <a href="#">
                                                                        <b>floor lamp</b>
                                                                        <span class="quantity">(32)</span>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                        <div class="new-item-content">
                                                            <h3 class="title-product">Size</h3>
                                                            <ul id="size-options">
                                                                <li id="size-li">
                                                                    <label class="check">
                                                                        <input type="checkbox">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <a id="size-a" href="#">
                                                                        <b>side table</b>
                                                                        <span class="quantity">(30)</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <label class="check">
                                                                        <input type="checkbox">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                    <a href="#">
                                                                        <b>floor lamp</b>
                                                                        <span class="quantity">(32)</span>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </div>




                                                        <ul id="color-options">
                                                            <!--<li class="chosen" style="border-color: red;"><a style="background: red;" href="#" class="color-extra-02"></a></li>-->
                                                            <li id="color-li" style="border-color: red;"><a id="color-a" class="color-extra-02"></a></li>
                                                        </ul>

                                                        <div class="sidebar-block by-color">
                                                            <h3 class="title-product">By Color</h3>
                                                            <div>
                                                                <span class="left">
                                                                    <label id="color-options" class="color-item1"></label>
                                                                    <a id="color-a" href="#">
                                                                        <span>Blue

                                                                        </span>
                                                                    </a>
                                                                </span>
                                                                <span class="right">
                                                                    <label class="color-item2"></label>
                                                                    <a href="#">
                                                                        <span>Green

                                                                        </span>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="left">
                                                                    <label class="color-item3"></label>
                                                                    <a href="#">
                                                                        <span>Yellow

                                                                        </span>
                                                                    </a>
                                                                </span>
                                                                <span class="right">
                                                                    <label class="color-item4"></label>
                                                                    <a href="#">
                                                                        <span>Brown

                                                                        </span>
                                                                    </a>
                                                                </span>

                                                            </div>
                                                            <div>
                                                                <span class="left">
                                                                    <label class="color-item5"></label>
                                                                    <a href="#">
                                                                        <span>Pink

                                                                        </span>
                                                                    </a>
                                                                </span>
                                                                <span class="right">
                                                                    <label class="color-item6"></label>
                                                                    <a href="#">
                                                                        <span>Red

                                                                        </span>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>

                                                        <!--                                                            <div class="new-item-content">
                                                                                                                        <h3 class="title-product">Size</h3>
                                                                                                                        <ul>
                                                                                                                            <li>
                                                                                                                                <label class="check">
                                                                                                                                    <input type="checkbox">
                                                                                                                                    <span class="checkmark"></span>
                                                                                                                                </label>
                                                                                                                                <a href="#">
                                                                                                                                    <b>side table</b>
                                                                                                                                    <span class="quantity">(30)</span>
                                                                                                                                </a>
                                                                                                                            </li>
                                                                                                                            <li>
                                                                                                                                <label class="check">
                                                                                                                                    <input type="checkbox">
                                                                                                                                    <span class="checkmark"></span>
                                                                                                                                </label>
                                                                                                                                <a href="#">
                                                                                                                                    <b>floor lamp</b>
                                                                                                                                    <span class="quantity">(32)</span>
                                                                                                                                </a>
                                                                                                                            </li>
                                                        
                                                                                                                        </ul>
                                                                                                                    </div>-->

                                                        <div class="tiva-filter-price new-item-content sidebar-block">
                                                            <h3 class="title-product">By Price</h3>
                                                            <div id="block_price_filter" class="block">
                                                                <div class="block-content">
                                                                    <div id="slider-range" class="tiva-filter">
                                                                        <div class="filter-itemprice-filter">
                                                                            <div class="layout-slider">
                                                                                <input id="price-filter" name="price" value="0;100000" />
                                                                            </div>
                                                                            <div class="layout-slider-settings"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--                                                            <div class="col-12">
                                                                                                                        <label class="form-label fw-bold">Active Time</label>
                                                                                                                    </div>
                                                                                                                    <div class="col-12">
                                                                                                                        <hr style="width: 80%;" />
                                                                                                                    </div>
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="form-check">
                                                                                                                            <input class="form-check-input" type="radio" name="r1"
                                                                                                                                   id="n">
                                                                                                                            <label class="form-check-label" for="n">
                                                                                                                                Newest to oldest
                                                                                                                            </label>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="form-check">
                                                                                                                            <input class="form-check-input" type="radio" name="r1"
                                                                                                                                   id="o">
                                                                                                                            <label class="form-check-label" for="o">
                                                                                                                                Oldest to newest
                                                                                                                            </label>
                                                                                                                        </div>
                                                                                                                    </div>
                                                        
                                                                                                                    <div class="col-12">
                                                                                                                        <hr style="width: 80%;" />
                                                                                                                    </div>
                                                                                                                    <div class="col-12 m-3">
                                                                                                                        <label class="form-label fw-bold">By quantity</label>
                                                                                                                    </div>
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="form-check">
                                                                                                                            <input class="form-check-input" type="radio" name="r2"
                                                                                                                                   id="h">
                                                                                                                            <label class="form-check-label" for="h">
                                                                                                                                High to low
                                                                                                                            </label>
                                                                                                                        </div>
                                                                                                                    </div>
                                                        
                                                                                                                    <div class="col-12">
                                                                                                                        <div class="form-check">
                                                                                                                            <input class="form-check-input" type="radio" name="r2"
                                                                                                                                   id="l">
                                                                                                                            <label class="form-check-label" for="l">
                                                                                                                                Low to high
                                                                                                                            </label>
                                                                                                                        </div>
                                                                                                                    </div>-->

                                                        <div class="col-12 text-center mt-3 mb-3">
                                                            <div class="row g-3">
                                                                <div class="col-12 col-lg-6">
                                                                    <button class="btn btn-outline-success fw-bold" onclick="searchProducts(0);">Apply</button>
                                                                </div>
                                                                <div class="col-12 col-lg-6 ">
                                                                    <button class="btn btn-outline-primary fw-bold" onclick="clearSort();">Reset All</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>





                                                </div>
                                                <div class="col-sm-8 col-lg-9 col-md-8 product-container">


                                                    <div class="js-product-list-top firt nav-top">

                                                        <div class="d-flex justify-content-around row">
                                                            <div class="col col-xs-12 ">
                                                                <ul class="nav nav-tabs">
                                                                    <li>
                                                                        <a href="#grid" data-toggle="tab"
                                                                           class="fa fa-th-large"></a>
                                                                    </li>

                                                                </ul>

                                                            </div>
                                                            <div class="col col-xs-12">
                                                                <div class="d-flex sort-by-row justify-content-end">
                                                                    <div class="products-sort-order dropdown">
                                                                        <select class="select-title" id="st-sort">
                                                                            <option>Sort by</option>
                                                                            <option>Sort by Latest</option>
                                                                            <option>Sort by Oldest</option>
                                                                            <option>Sort by Name</option>
                                                                            <option>Sort by Price</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-content ">
                                                        <div id="grid" class="related ">
                                                            <div class="row"  id="st-product-container">
                                                                <div class="item text-center col-md-4" id="st-product">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class=" border">
                                                                            <a id="st-product-a" href="product-detail.html">
                                                                                <img  id="st-product-img-1" class="img-fluid image-cover"
                                                                                      src="img/product/1.jpg" alt="img">

                                                                            </a>

                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a  id="st-product-title" href="product-detail.html">Nulla et
                                                                                        justo non
                                                                                        augue</a>
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
                                                                                        <span  id="st-product-price"
                                                                                               class="price">£fgdfgfdg28.08</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post"
                                                                                      class="formAddToCart">
                                                                                    <input type="hidden" name="id_product"
                                                                                           value="1">
                                                                                    <a  id="add-to-cart-main" class="add-to-cart" href="#"
                                                                                        data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart"
                                                                                           aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#"
                                                                                   data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart"
                                                                                       aria-hidden="true"></i>
                                                                                </a>
                                                                                <a  id="st-product-a2" href="#"
                                                                                    class="quick-view hidden-sm-down"
                                                                                    data-link-action="quickview">
                                                                                    <i class="fa fa-eye"
                                                                                       aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>









                                                                <div class="item text-center col-md-4">
                                                                    <div
                                                                        class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class=" border">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover"
                                                                                     src="img/product/26.jpg" alt="img">

                                                                            </a>


                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et
                                                                                        justo non
                                                                                        augue</a>
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
                                                                                        <span class="price">£66.08</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post"
                                                                                      class="formAddToCart">
                                                                                    <input type="hidden" name="id_product"
                                                                                           value="1">
                                                                                    <a class="add-to-cart" href="#"
                                                                                       data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart"
                                                                                           aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#"
                                                                                   data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart"
                                                                                       aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#"
                                                                                   class="quick-view hidden-sm-down"
                                                                                   data-link-action="quickview">
                                                                                    <i class="fa fa-eye"
                                                                                       aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center col-md-4">
                                                                    <div
                                                                        class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class=" border">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover"
                                                                                     src="img/product/26.jpg" alt="img">

                                                                            </a>


                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et
                                                                                        justo non
                                                                                        augue</a>
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
                                                                                        <span class="price">£66.08</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post"
                                                                                      class="formAddToCart">
                                                                                    <input type="hidden" name="id_product"
                                                                                           value="1">
                                                                                    <a class="add-to-cart" href="#"
                                                                                       data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart"
                                                                                           aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#"
                                                                                   data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart"
                                                                                       aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#"
                                                                                   class="quick-view hidden-sm-down"
                                                                                   data-link-action="quickview">
                                                                                    <i class="fa fa-eye"
                                                                                       aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- pagination -->
                                                    <div class="pagination">
                                                        <div class="js-product-list-top ">
                                                            <div class="d-flex justify-content-around row">
                                                                <div class="showing col col-xs-12">
                                                                    <span>SHOWING 1-3 OF 3 ITEM(S)</span>
                                                                </div>
                                                                <div class="page-list col col-xs-12"  >
                                                                    <ul id="st-pagination-container">
                                                                        <li id="st-pagination-button"  >
                                                                            <a  rel="prev" href="" class="previous   js-search-link">
                                                                                Previous
                                                                            </a>
                                                                        </li>


                                                                        <li class="current active">
                                                                            <a rel="nofollow" href="#" class="disabled js-search-link">
                                                                                1
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a rel="nofollow" href="#" class="disabled js-search-link">
                                                                                2
                                                                            </a>
                                                                        </li>


                                                                        <li>
                                                                            <a rel="next" href="" class="disabled js-search-link">
                                                                                Next
                                                                            </a>
                                                                        </li>
                                                                    </ul>
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
                        </div>
                    </div>
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

                <!-- Template JS -->
                <script src="js/theme.js"></script>
                <script src="js/search.js"></script>
                <script src="js/index.js"></script>
                <script src="js/notification.js"></script>
                <script src="script.js"></script>
                <script src="js/sweetalert.js"></script>
                </body>


                <!-- product-list-sidebar-left10:55-->

                </html>