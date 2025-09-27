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
    </head>

    <body class="user-acount">





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
                                    <a href="user-account.php">
                                        <span>My Account</span>
                                    </a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </nav>
                <div class="col-12">
                    <div class="row">

                        <div class="col-12 bg-body rounded mt-4 mb-4">
                            <div class="row g-2">

                                <div class="col-md-3 border-end">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">

                                            <img src="img/new_user.svg" class="rounded mt-5" style="width: 150px;" id="img" />
                                            
                                       

                                        <span class="fw-bold"></span>
                                        <span class="fw-bold text-black-50"></span>

                                        <input type="file" class="d-none" id="profileimage" />
                                        <label for="profileimage" class="btn btn-primary mt-5" onclick="changeProfileImg();">Update Profile Image</label>

                                    </div>
                                </div>



                                <div class="col-md-8 border-end">
                                    <div class="p-5 py-5">

                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="fw-bold">Profile Settings</h4>
                                        </div>

                                        <div class="content" id="block-history">
                                            <table class="std table">
                                                <tbody>
                                                    <tr>
                                                        <th class="first_item col-6">First Name :</th>
                                                        <td> <input id="fname" type="text" class="form-control" value="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="first_item">Last Name :</th>
                                                        <td> <input id="lname" type="text" class="form-control" value="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="first_item">Mobile:</th>
                                                        <td> <input id="mobile" type="text" class="form-control" value="" />

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="first_item">Password:</th>
                                                        <td><input type="password" class="form-control" value="" readonly />
                                                        </td>
                                                    </tr>
                                                    </tr>
                                                    <tr>
                                                        <th class="first_item">Email:</th>
                                                        <td> <input type="text" class="form-control" readonly value="" /></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="first_item">Registered Date:</th>
                                                        <td> <input type="text" class="form-control" readonly value="" />
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="first_item">Address Line 01:</th>
                                                        <td>

                                                                <input id="line1" type="text" class="form-control" value="" />
                                                           
                                                                
                                                              
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="first_item">Address Line 02:</th>
                                                        <td>
                                                            <input id="line1" type="text" class="form-control" value="" />
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <th class="first_item">Province:</th>
                                                        <td><select class="form-select" id="province">
                                                                <option value="0">Select Province</option>

                                                                    <option value="" 
                                                                            
                                                                    </option>
                                                                                
                                                            </select></td>

                                                    </tr>
                                                    <tr>
                                                        <th class="first_item">District:</th>
                                                        <td><select class="form-select" id="district">
                                                                <option value="0">Select District</option>

                                                                    <option value=""
                                                                 
                                                                           
                                                                    </option>
                                                                                

                                                            </select></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="first_item">City:</th>
                                                        <td> <select class="form-select" id="city">
                                                                <option value="0">Select City</option>

                                                                    <option value="" 
                                                                            selected

                                                                </option>


                                                            </select></td>
                                                    </tr>


                                                    <tr>
                                                        <th class="first_item">Postal Code:</th>
                                                        <td>
                                                   

                                                            <input id="pcode" type="text" class="form-control" value="" />

                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="first_item">Gender:</th>
                                                        <td> <input type="text" class="form-control" value="" readonly /></td>
                                                    </tr>

                                                </tbody>


                                            </table>

                                            <div class="col-12 d-grid mt-2">
                                                <button class="btn btn-primary" onclick="updateProfile();">Update My Profile</button>
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
    <?php include "footer.php"; ?>

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
    <script src="js/theme.js"></script>

    <script src="script.js"></script>
</body>


<!-- user-acount11:10-->

</html>