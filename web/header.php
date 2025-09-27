<?php
include "connection.php";

?>
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
    <title>Furnitica - Minimalist Furniture HTML Template</title>

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
</head>

<body>

    <?php
    session_start();
    ?>
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
                        <a href="index-2.php">
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
                                <a href="#" onclick="viewCart();" class="parent">Shopping Cart</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- search-->
                <div class="col-sm-6 col-md-5 align-items-center justify-content-end d-flex">


                    <select class="form-select col-sm-2 col-md-5  " style="max-width: 250px;" id="basic_search_select">
                        <option value="0">All Categories</option>
                        <?php

                        $category_rs = Database::search("SELECT * FROM `category`");
                        $category_num = $category_rs->num_rows;

                        for ($x = 0; $x < $category_num; $x++) {
                            $category_data = $category_rs->fetch_assoc();
                        ?>
                            <option value="<?php echo $category_data["cat_id"]; ?>">
                                <?php echo $category_data["cat_name"]; ?>
                            </option>
                        <?php
                        }

                        ?>
                    </select>
                    <div class="col-12 col-lg-2 d-grid">
                        <button class="btn btn-primary mt-3 mb-3" onclick="basicSearch(0);">Search</button>
                    </div>
                    <div>
                        <button onclick="basicSearch(0);" >
                            <i class="fa fa-search"></i>
                        </button>
                    </div>



                    <!-- acount  -->
                    <div id="block_myaccount_infos" class="hidden-sm-down dropdown offset-2">

                        <?php
                        // session_start();

                        if (isset($_SESSION["u"])) {
                            $data = $_SESSION["u"];
                        ?>
                            <a href="#acount" data-toggle="collapse" class="acount">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class=""><b>Hi </b><?php echo $data["fname"]; ?></span>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <!-- <span class="" onclick="signout();">Signout</span> | -->


                            <div id="acount" class="collapse">
                                <div class="account-list-content">
                                    <div>
                                        <a class="login" href="user-acount.php" rel="nofollow" title="Log in to your customer account">
                                            <i class="fa fa-cog"></i>
                                            <span>My Account</span>
                                        </a>
                                    </div>
                                    <!-- <div>
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

                            </div> -->

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
                            </div>

                        <?php

                        } else {
                            // 
                        ?>
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
                                        <!-- <div>
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

                                        </div> -->
                                        <!-- 
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
                                        </div> -->

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

                        <?php
                        }

                        ?>






                    </div>
                    <div class="desktop_cart">
                        <div class="blockcart block-cart cart-preview tiva-toggle">
                            <div class="header-cart tiva-toggle-btn">
                                <span class="cart-products-count">1</span>
                                <i class="fa fa-shopping-cart" onclick="window.location='product-cart.php';" aria-hidden="true" ></i>
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
    </div>

    <!-- Vendor JS -->
    <script src="libs/jquery/jquery.min.js"></script>
    <script src="libs/popper/popper.min.js"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="libs/owl-carousel/owl.carousel.min.js"></script>

    <!-- Template JS -->
    <script src="js/theme.js"></script>

    <script src="script.js"></script>


</body>


<!-- index06:45-->

</html>