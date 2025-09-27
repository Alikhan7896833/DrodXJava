<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="en">


    <!-- user-acount11:10-->

    <head>
        <!-- Basic Page Needs -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DrodX Store</title>

        <meta name="keywords" content="DrodX Store">
        <meta name="description" content="DrodX Store">
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

    <body class="user-acount" onload="loadFeatures();  checkSignIn();">

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
                                    <a href="product-list-sidebar-left.php">
                                        <span>My Products</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>Add New Product</span>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </nav>
                <div class="acount head-acount">
                    <div class="container">
                        <div id="main">
                            <h1 class="title-page">Add New Product</h1>




                            <p class="text-danger" id="message"></p>

                            <form class="account-details-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Category :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            <select class="col-8 form-select text-center" id="categorySelect"
                                                    onchange="updateModels();">
                                                <option value="0">Select Category</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Model:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            <select class="col-8 form-select text-center" id="modelSelect">
                                                <option value="0">Select Model</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Size :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            <select class="col-8 form-select text-center" id="sizeSelect">
                                                <option value="0">Select Size</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="">
                                            <label style="font-size:">Color:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                            <select class="col-lg-8 form-select text-center" id="colorSelect">
                                                <option value="0">Select Color</option>

                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group">
    <!--                                            <input type="text" class="form-control" placeholder="Add new Colour"
                                                style="font-size: 12px;" />
                                            <button class="btn btn-outline-primary" type="button" style="font-size: 12px;">+
                                                Add</button>-->
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" value="" id="title">
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="form-group">Product Description</label>
                                            </div>
                                            <div class="col-12">
                                                <textarea cols="5" rows="2" class="form-control" id="description"></textarea>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <div class="input-group mb-2 mt-2">
                                                <span class="input-group-text">Rs.</span>
                                                <input type="text" pattern="^\d+(\.\d{2})?$" class="form-control" id="price" />
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control" min="0" value="0" id="quantity">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Delivery cost Within Colombo</label>
                                            <div class="input-group mb-2 mt-2">
                                                <span class="input-group-text">Rs.</span>
                                                <input type="text" class="form-control" id="dwc" />
                                                <span class="input-group-text">.00</span>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Delivery cost out of Colombo</label>
                                            <div class="input-group mb-2 mt-2">
                                                <span class="input-group-text">Rs.</span>
                                                <input type="text" class="form-control" id="doc" />
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class=" col-12 col-lg-12">
                                            <div class=" offset-lg-5 col-12">
                                                <label class="form-label fw-bold" style="font-size: 20px;">Add Product
                                                    Images</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-4">
                                                    <label>Image 1</label>
                                                    <input class="form-control b2" type="file" accept="image/*" id="image1">
                                                </div>
                                                <div class="col-4 ">
                                                    <label>Image 2</label>
                                                    <input class="form-control b2" type="file" accept="image/*" id="image2">
                                                </div>
                                                <div class="col-4 b">
                                                    <label>Image 3</label>
                                                    <input class="form-control b2" type="file" accept="image/*" id="image3">
                                                </div>



                                            </div>


                                        </div>
                                        <button type="button" onclick="productListing();" class="btn btn-primary col-12 ">
                                            Add Product
                                        </button>


                                    </div>


                                </div>


                            </form>





                        </div>

                    </div>
                </div>





                <!-- footer -->
                <?php include "footer.php"; ?>

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
                <script src="js/my-account.js"></script>
                <script src="js/index.js"></script>
                <script src="script.js"></script>

                <script src="js/notification.js"></script>
                <script src="js/add-products.js"></script>

<!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>-->

                <script src="js/sweetalert.js"></script>



                </body>


                <!-- user-acount11:10-->

                </html>