<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<html lang="zxx">


    <!-- product-detail06:46-->

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


        <link rel="stylesheet" href="style1.css" />
        <link rel="stylesheet" href="css/notification.css" />
    </head>

    <body id="product-detail" onload="loadProduct(); checkSignIn();">
        <!--<body id="product-detail"  >-->
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
                                                    <span>Product View</span>
                                                </a>
                                            </li>
                                           
                                        </ol>
                                    </div>
                                </div>
                            </nav>
                            <div class="container">
                                <div class="content">
                                    <div class="row">

                                        <div class="col-sm-12 col-lg-12 col-md-12">
                                            <div class="main-product-detail">
                                                <h2 id="product-title"></h2>
                                                <div class="product-single row">
                                                    <div class="product-detail col-xs-12 col-md-5 col-sm-5">

                                                        <div class="page-content" id="content">
                                                            <div class="images-container">
                                                                <div class="js-qv-mask mask tab-content border">
                                                                    <div id="item1" class="tab-pane fade active in show">
                                                                        <img src="img/empty.svg" id="image1" alt="img">
                                                                    </div>
                                                                    <div id="item2" class="tab-pane fade">
                                                                        <img src="img/empty.svg" id="image2" alt="img">
                                                                    </div>
                                                                    <div id="item3" class="tab-pane fade">
                                                                        <img src="img/empty.svg" id="image3" alt="img">
                                                                    </div>

                                                                    <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                                        <i class="fa fa-expand"></i>
                                                                    </div>
                                                                </div>
                                                                <ul class="product-tab nav nav-tabs d-flex">
                                                                    <li class="active col">
                                                                        <a href="#item1" data-toggle="tab" aria-expanded="true" class="active show">
                                                                            <img id="image1-thumb" src="img/empty.svg" alt="img">
                                                                        </a>
                                                                    </li>
                                                                    <li class="col">
                                                                        <a href="#item2" data-toggle="tab">
                                                                            <img id="image2-thumb" src="img/empty.svg" alt="img">
                                                                        </a>
                                                                    </li>
                                                                    <li class="col">
                                                                        <a href="#item3" data-toggle="tab">
                                                                            <img id="image3-thumb" src="img/empty.svg" alt="img">
                                                                        </a>
                                                                    </li>

                                                                </ul>
                                                                <!--                                                                <div class="js-qv-mask mask tab-content border">
                                                                                                                                    <div id="item1" class="tab-pane fade active in show">
                                                                                                                                        <div class="mainImg" id="mainImg">
                                                                                                                                              <img src="img/product/1.jpg" alt="img">
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                
                                                                                                                                </div>
                                                                                                                            </div>
                                                                
                                                                
                                                                                                                            <div class="product-detail col-xs-12 col-md-4 col-sm-4">
                                                                                                                                <ul class="product-tab nav nav-tabs d-flex">
                                                                
                                                                                                                                    <li class="active col">
                                                                                                                                        <a href="#item1" data-toggle="tab"
                                                                                                                                           aria-expanded="true" class="active show">
                                                                                                                                            <img src="" alt="img" id="image1" onclick="loadMainImg">
                                                                                                                                        </a>
                                                                                                                                    </li>
                                                                
                                                                                                                                    <li class="active col">
                                                                                                                                        <a href="#item1" data-toggle="tab"
                                                                                                                                           aria-expanded="true" class="active show">
                                                                                                                                            <img src=""  alt="img" id="image2" >
                                                                                                                                        </a>
                                                                                                                                    </li>
                                                                                                                                    <li class="col">
                                                                                                                                        <a href="#item2" data-toggle="tab">
                                                                                                                                            <img src="img/empty.svg" id="image3" alt="img">
                                                                                                                                        </a>
                                                                                                                                    </li>
                                                                                                                                 
                                                                
                                                                
                                                                
                                                                                                                                </ul>-->

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="product-info  col-md-7 col-sm-7">
                                                        <div class="detail-description">
                                                            <div class="price-del" >
                                                                <span class="price"> Rs.   </span>    <span  id="product-price" class="price"> #####</span>

                                                                <span class="float-right">
                                                                    <span class="availb">Availability: </span>
                                                                    <span class="check">
                                                                        <i class="fa fa-check-square-o"
                                                                           aria-hidden="true"></i>IN STOCK</span>
                                                                </span>
                                                            </div>
                                                            <p class="">Published On -  <span id="product-published-on"></span>
                                                            </p>

                                                            <div class="option has-border  size-color">

                                                                <p><span class="content2 fa fa-check " ></span> <b class="title">Brand : </b>


                                                                    <span id="product-category"></span>

                                                                </p>
                                                                <p> <span class="content2 fa fa-check " ></span><b class="title">Model : </b>
                                                                    <span class="content2">
                                                                        <span id="product-model"></span>
                                                                    </span>
                                                                </p>
                                                                  <p><span class="content2 fa fa-check " ></span> <b class="title">Size : </b>
                                                                    <span class="content2">
                                                                        <span id="product-size"></span>
                                                                    </span>
                                                                </p>

                                                                <p><span class="content2 fa fa-check " ></span> <b class="title">In Stock : </b>
                                                                    <span class="content2">

                                                                        <span id="product-qty"> </span> Units
                                                                    </span>

                                                                </p>

                                                                <p><span class="content2 fa fa-check " ></span> <b class="title">Seller : </b>
                                                                    <span class="content2">

                                                                        <span id="product-seller"></span>

                                                                    </span>

                                                                </p>
                                                                <p ><span class="content2 fa fa-check " ></span> <b class="title">Color : </b>
                                                                    <span class="content2 " >
                                                                        <span id="product-color"></span>
                                                                     
                                                               

                                                                    </span>

                                                                </p>


                                                            </div>
                                                            <div class="has-border cart-area">
                                                                <div class="product-quantity">
                                                                    <div class="qty">
                                                                        <div class="input-group">
                                                                            <div class="quantity">
                                                                                <span class="control-label">QTY : </span>
                                                                                <input
                                                                                     id="add-to-cart-qty"
                                                                                    type="text" name="qty" pattern="[0-9]"
                                                                                    value="1"
                                                                                    class="input-group form-control">

                                                                                <span class="input-group-btn-vertical">
                                                                                    <button
                                                                                        onclick='qty_inc'
                                                                                        class="btn btn-touchspin js-touchspin bootstrap-touchspin-up"
                                                                                        type="button">
                                                                                        +
                                                                                    </button>
                                                                                    <button onclick="qty_dec();"
                                                                                            class="btn btn-touchspin js-touchspin bootstrap-touchspin-down"
                                                                                            type="button">
                                                                                        -
                                                                                    </button>
                                                                                </span>
                                                                            </div>
                                                                            <span>
                                                                                <a href="#" id="add-to-cart-main"
                                                                                   class="btn-secondary button btn add-to-cart add-item offset-lg-3">
                                                                                    <i class="fa fa-shopping-cart"
                                                                                       aria-hidden="true"></i>
                                                                                    <span>Add to cart</span></a>
                                                                                <a id="payhere-payment" type="submit"
                                                                                   onclick="window.location='product-checkout.html'"
                                                                                   class="btn-warning button btn add-to-cart add-item offset-lg-1">
                                                                                    <i class="fa fa-shopping-cart"
                                                                                       aria-hidden="true"></i>
                                                                                    <span>Buy Now</span></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                <p class="product-minimal-quantity">
                                                                </p>
                                                            </div>
                                                            <div class="d-flex2 has-border">
                                                                <div class="btn-group">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-share"></i>
                                                                        <span>Share</span>
                                                                    </a>
                                                                    <a href="#" class="email">
                                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                        <span>SEN TO A FRIEND</span>
                                                                    </a>
                                                                    <a href="#" class="print">
                                                                        <i class="zmdi zmdi-print"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="rating-comment has-border d-flex">
                                                                <div class="review-description d-flex">
                                                                    <span>REVIEW :</span>
                                                                    <div class="rating">
                                                                        <div class="star-content">
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                            <div class="star"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="read after-has-border">
                                                                    <a href="#review">
                                                                        <i class="fa fa-commenting-o color"
                                                                           aria-hidden="true"></i>
                                                                        <span>READ REVIEWS (3)</span>
                                                                    </a>
                                                                </div>
                                                                <div class="apen after-has-border">
                                                                    <a href="#review">
                                                                        <i class="fa fa-pencil color"
                                                                           aria-hidden="true"></i>
                                                                        <span>WRITE A REVIEW</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="review">
                                                                <ul class="nav nav-tabs">
                                                                    <li class="active">
                                                                        <a data-toggle="tab" href="#description"
                                                                           class="active show">Description</a>
                                                                    </li>

                                                                    <li>
                                                                        <a data-toggle="tab" href="#review">Reviews (2)</a>
                                                                    </li>
                                                                </ul>

                                                                <div class="tab-content">
                                                                    <div id="description"
                                                                         class="tab-pane fade in active show">
                                                                        <p id="product-description">
                                                                           
                                                                        </p>

                                                                    </div>

                                                                    <div id="review" class="tab-pane fade">
                                                                        <div class="col-12 col-lg-12">
                                                                            <div class="row border border-1 border-dark rounded overflow-scroll me-0"
                                                                                 style="height: 200px;">

                                                                                <?php
                                                                                $feedback_rs = Database::search("SELECT * FROM `feedback` INNER JOIN `user` ON 
                                                                                                            feedback.user_email=user.email WHERE `product_id`='" . $pid . "'");

                                                                                $feedback_num = $feedback_rs->num_rows;

                                                                                for ($y = 0; $y < $feedback_num; $y++) {
                                                                                    $feedback_data = $feedback_rs->fetch_assoc();
                                                                                    ?>
                                                                                    <div class=" row col-12">


                                                                                        <div class="col-8">
                                                                                            <?php echo $feedback_data["fname"] . " " . $feedback_data["lname"]; ?>
                                                                                        </div>
                                                                                        <div class="col-2">

                                                                                            <?php
                                                                                            if ($feedback_data["type"] == 1) {
                                                                                                ?><span
                                                                                                    class="badge bg-success">Positive</span><?php
                                                                                                } else if ($feedback_data["type"] == 2) {
                                                                                                    ?><span
                                                                                                    class="badge bg-warning">Neutral</span><?php
                                                                                                } else if ($feedback_data["type"] == 3) {
                                                                                                    ?><span
                                                                                                    class="badge bg-danger">Negative</span><?php
                                                                                                }
                                                                                                ?>

                                                                                        </div>
                                                                                        <div class=" col-2 text-end">
                                                                                            <label
                                                                                                class="form-label  text-black-50"><?php echo $feedback_data["date"]; ?></label>
                                                                                        </div>


                                                                                        <div class="col-8 ">
                                                                                            <b><?php echo $feedback_data["feed"]; ?></b>
                                                                                        </div>

                                                                                    </div>

                                                                                    <?php
                                                                                }
                                                                                ?>

                                                                            </div>

                                                                        </div>
                                                                       
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

<div class="related">
                                                <div class="title-tab-content  text-center">
                                                    <div class="title-product justify-content-start">
                                                        <h2>Related Products</h2>
                                                    </div>
                                                </div>
                                                <div  >
                                                    <div class="tab-content row" id="similar-product-main">
                                                        <div class="item text-center col-md-2" id="similar-product">
                                                            <div class="product-miniature ">
                                                                <div class=" border border">
                                                                    <a href="#" id="similar-product-a1">
                                                                        <img class="img-fluid image-cover" src="img/product/1.jpg" id="similar-product-image" alt="img">
                                                                        
                                                                    </a>
                                                                    
                                                                </div>
                                                                <div class="product-description">
                                                                    <div class="product-groups">
                                                                        <div class="product-title">
                                                                            <a href="product-detail.html"id="similar-product-title">Nulla et justo non augue</a>
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
                                                                                <span id="similar-product-price" class="price">£28.08</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-buttons d-flex justify-content-center">
                                                                        <form action="#" method="post" class="formAddToCart">
                                                                            <a class="add-to-cart" href="#" id="similar-product-add-to-cart" data-button-action="add-to-cart">
                                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                            </a>
                                                                        </form>
                                                                        <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                                        </a>
                                                                        <a href="#"id="similar-product-a2" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                            <i class="fa fa-eye" aria-hidden="true"></i>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
    <!-- back top top -->
    <div class="back-to-top">
        <a href="#">
            <i class="fa fa-long-arrow-up"></i>
        </a>
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
    <script src="js/index.js"></script>
    <script src="js/single-product.js"></script>
    <script src="js/notification.js"></script>
    <script src="script.js"></script>
     <script src="js/sweetalert.js"></script>
   <!--<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>-->
</body>


<!-- product-detail07:06-->

</html>


