<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../assets/images/fav.png" type="image/x-icon">
        <title><?php echo isset($page_title) ? $page_title : 'Book MY Makeup'; ?></title>
        <meta name="keywords" content="BMM, bookmymakeup.in, Makeup, Ladies Salon, Gents Salon, Bridal Makeup, Haircut, Global Colouring, Hair Styling, Facials & Rituals, Hair Treatments">
        <meta name="description" content="Book My Makeup is a Beauty and Make-up service company, dedicated to providing the best of products and services to its global clientele">
        <meta name="language" content="EN" />
        <meta name="copyright" content="Book My Makeup" />
        <meta name="web_content_type" content="Makeup" />
        <meta name="author" content="Book My Makeup" />
        <meta name="City" content="Delhi" />
        <meta name="country" content="India" />
        <meta name="web_author" content="Book My Makeup" />
        <meta name="robots" content="index, follow" />
        <meta name="classification" content="Makeup" />
        <meta name="distribution" content="global" />
        <meta name="rating" content="safe for kids" />
        <meta name="doc-type" content="public" />
        <meta name="Identifier-URL" content="https://bookmymakeup.in/" />
        <meta name="contactName" content="Book My Makeup" />
        <meta name="contactOrganization" content="Book My Makeup" />

        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/owl.carousel.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/toastr.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/custom.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/css/responsive.css">
        <script type="text/javascript" src="<?php echo $base_url; ?>assets/js/jquery.min.js"></script>
        <script src="https://www.google.com/recaptcha/api.js"></script>
    </head>

    <body>
        <input type="hidden" id="base_url" value="<?php echo $base_url; ?>" />
        <div class="responsive-rgba text-right">
        </div>
        <div class="responsive-nav">
            <div class="responsive-nav-header">
                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-pink loginBtn">Sign In</a>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-pink registerBtn">Sign Up</a>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled">
                <li>
                    <a href="#"> Salon <span class="float-right"><i class="fas fa-plus plus-icon"></i></span> </a>
                    <ul class="list-unstyled pl-3 responsive-dropdown">
                        <li>
                            <a href="#">Ladies <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="<?php echo $base_url; ?>ladies-hair-styling">Hair Styling</a></li>
                                <li><a href="<?php echo $base_url; ?>ladies-hair-styling">Make Up</a></li>
                                <li><a href="<?php echo $base_url; ?>ladies-hair-styling">Hair Texture</a></li>
                                <li><a href="<?php echo $base_url; ?>ladies-hair-styling">Hair Treatments</a></li>
                                <li><a href="<?php echo $base_url; ?>ladies-hair-styling">Facials & Rituals</a></li>
                                <li><a href="<?php echo $base_url; ?>ladies-hair-styling">Hand & Feet</a></li>
                                <li><a href="<?php echo $base_url; ?>ladies-hair-styling">Nail Care</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Salons <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="<?php echo $base_url; ?>hair-masters">Hair Masters</a></li>
                                <li><a href="#">Looks</a></li>
                                <li><a href="#">Geetanjali</a></li>
                                <li><a href="#">VLCC</a></li>
                                <li><a href="#">Jawed habib</a></li>
                                <li><a href="#">Toni & Guy</a></li>
                                <li><a href="#">F Salon</a></li>
                                <li><a href="#">Alps Beauty</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Offers <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Free Hair Cut</a></li>
                                <li><a href="#">50% off on Manicure</a></li>
                                <li><a href="#">50% off on Pedicure</a></li>
                                <li><a href="#">Free Makeup Trial</a></li>
                                <li><a href="#">Free Nail Care</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Locations <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Rajouri Garden</a></li>
                                <li><a href="#">Punjabi Bagh</a></li>
                                <li><a href="#">Janakpuri</a></li>
                                <li><a href="#">Chandigarh</a></li>
                                <li><a href="#">Vasant Vihar</a></li>
                                <li><a href="#">Pitampura</a></li>
                                <li><a href="#">Dwarka</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"> Makeup Artist <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                    <ul class="list-unstyled pl-3 responsive-dropdown">
                        <li>
                            <a href="#">Services <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Pre Bridal</a></li>
                                <li><a href="#">Bridal Makeup</a></li>
                                <li><a href="#">Groom Makeup</a></li>
                                <li><a href="#">Family Makeup</a></li>
                                <li><a href="#">Light Makeup</a></li>
                                <li><a href="#">Air Brush Bridal</a></li>
                                <li><a href="#">HD Makeup</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Events <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Mehandi/Sagan</a></li>
                                <li><a href="#">Wedding/Reception </a></li>
                                <li><a href="#">Fashion Show</a></li>
                                <li><a href="#">E Commerce Shoot</a></li>
                                <li><a href="#">Pre Wedding Shoot</a></li>
                                <li><a href="#">Baby Shower</a></li>
                                <li><a href="#">Corporate Events</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Packages <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Family</a></li>
                                <li><a href="#">Eco </a></li>
                                <li><a href="#">Gold</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Recommended <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Priyanka Sharma</a></li>
                                <li><a href="#">Anshika Sharma</a></li>
                                <li><a href="#">Bushra Shahid</a></li>
                                <li><a href="#">Manju</a></li>
                                <li><a href="#">Neha Sharma</a></li>
                                <li><a href="#">Manjari</a></li>
                                <li><a href="#">Afsheen</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Offers <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Free Hair Cut</a></li>
                                <li><a href="#">50% off on Manicure</a></li>
                                <li><a href="#">50% off on Pedicure</a></li>
                                <li><a href="#">Manju</a></li>
                                <li><a href="#">Free Makeup Trial</a></li>
                                <li><a href="#">Free Nail Care</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Bridal Makeup <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                    <ul class="list-unstyled pl-3 responsive-dropdown">
                        <li>
                            <a href="#">Services <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="<?php echo $base_url; ?>ladies-hair-styling">Hair Styling</a></li>
                                <li><a href="#">Make Up</a></li>
                                <li><a href="#">Hair Texture</a></li>
                                <li><a href="#">Hair Treatments</a></li>
                                <li><a href="#">Hand & Feet</a></li>
                                <li><a href="#">Pre Bridal</a></li>
                                <li><a href="#">Party Makeup</a></li>
                                <li><a href="#">Engagement Makeup</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Bridal Package <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Silver</a></li>
                                <li><a href="#">Gold</a></li>
                                <li><a href="#">Platinum</a></li>
                                <li><a href="#">Diamond</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">BMM Cards <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="cards">Membership Cards</a></li>
                                <li><a href="cards">Gift Cards</a></li>
                                <li><a href="cards">Flexi Cards</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pre Bridal Package <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Silver</a></li>
                                <li><a href="#">Gold</a></li>
                                <li><a href="#">Platinum</a></li>
                                <li><a href="#">Diamond</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Salons <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Hair Masters</a></li>
                                <li><a href="#">Looks</a></li>
                                <li><a href="#">Geetanjali</a></li>
                                <li><a href="#">VLCC</a></li>
                                <li><a href="#">Jawed habib</a></li>
                                <li><a href="#">Toni & Guy</a></li>
                                <li><a href="#">F Salon</a></li>
                                <li><a href="#">Alps Beauty</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Locations <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Rajouri Garden</a></li>
                                <li><a href="#">Punjabi Bagh</a></li>
                                <li><a href="#">Janakpuri</a></li>
                                <li><a href="#">Chandigarh</a></li>
                                <li><a href="#">Vasant Vihar</a></li>
                                <li><a href="#">Pitampura</a></li>
                                <li><a href="#">Dwarka</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Occasions<span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Mehandi </a></li>
                                <li><a href="#">Sagan </a></li>
                                <li><a href="#">Party Reception </a></li>
                                <li><a href="#">Wedding </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Makeup Academy</a>
                </li> 
                <li>
                    <a href="#">Cards</a>
                </li> 
                <li>
                    <a href="#">I'm Beautiful </a>
                </li> 

                <li><a href="<?php echo $base_url; ?>blog">BMM TV</a></li>
                <!-- <li><a href="<?php echo $base_url; ?>blog">Quick Booking </a></li> -->
                <li>
                    <a href="#">Offers <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                    <ul class="list-unstyled pl-3 responsive-dropdown">
                        <li>
                            <a href="#">Top Offers <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Salon</a></li>
                                <li><a href="#">Makeup Artist</a></li>
                                <li><a href="#">Salon at Home</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Today's Deal</a>
                        </li>
                        <li>
                            <a href="#">Deals of the Month <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">50% off on Party Makeup</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Festive Offers <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Karwa Chauth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">One Rupee Offers</a>
                        </li>
                        <li>
                            <a href="#">Cashback Offers <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">10% Cashback on 5000</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Coupons <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                            <ul class="list-unstyled pl-3 responsive-dropdown">
                                <li><a href="#">Extra 10% OFF on ICICI Bank Cards.</a></li>
                            </ul>
                        </li>
                        <!-- <li>
                        <a href="#">Star of the Month</a>                    
                    </li> -->
                    </ul>
                </li>
                <li><a href="<?php echo $base_url; ?>blog">Blog</a></li>
                <li>
                    <a href="#">BMM PRO </a>
                </li> 
            </ul>
        </div>
        <?php
//    if (strpos(dirname($_SERVER['PHP_SELF']), '/pro') === false) {
        ?>
        <div class="top-stripe">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-left">
                            <ul>
                                <li><i class="fa fa-map-marker-alt"></i> Location</li>
                                <li><span class="location-custom-modal-btn"> New Delhi</span></li>
                                <li> <b>Attractive Offers & Deals.</b></li>
                            </ul>
                        </div>
                        <ul class="float-right">
                            <li>
                                <a href="<?php echo $base_url; ?>get-app"><i class="fas fa-mobile-alt"></i> Get APP</a>
                            </li>
                            <li><a href="<?php echo $base_url; ?>virtual-consultation"> <i class="far fa-comments"></i>Makeup Consultant</a></li>
                            <li>
                                <i class="fa fa-phone-alt"></i> &nbsp; 844 855 4942
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
//    }
        ?>
        <header>
            <div class="container-fluid header-container">
                <div class="row m-0">
                    <div class="menu-bar">
                        <a href="#" class="d-block">
                            <i class="fas fa-bars icons"></i>
                        </a>
                    </div>
                    <div class="col-md-3 col-7">
                        <a href="<?php echo $base_url; ?>" class="logo"><img src="<?php echo $base_url; ?>assets/images/logo.png" class="img-fluid" alt=""></a>
                    </div>
                    <?php
//                if (strpos(dirname($_SERVER['PHP_SELF']), '/pro') === false) {
                    ?>
                    <div class="col-md-5 offset-md-1 autocomplete-box-parent">
                        <div class="autocomplete-box">
                            <i class="fa fa-search"></i>
                            <input class="form-control advancedAutoComplete" type="text" autocomplete="off" placeholder="Salons, Makeup Artists, Bridal Makeup" />
                        </div>
                    </div>

                    <div class="col-md-3 col-1 responsive-search-bar">
                        <a href="#" class="d-block">
                            <i class='fa fa-search'></i>
                        </a>
                    </div>
                    <div class="col-md-3 col-3">
                        <div class="top-right-list">

                            <div class="top-right-list-item">
                                <div class="custom-dropdown dropdown-before-login">
                                    <div class="custom-dropdown-btn">
                                        <a class="sign-up loginBtn"><i class="far fa-user-circle float-left mr-2"></i> <span> Login </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="custom-dropdown dropdown-after-login d-custom-none">
                                    <div class="custom-dropdown-btn">
                                        <a class="username"><i class="far fa-user-circle float-left mr-2"></i> <span> Login </span>
                                        </a>
                                    </div>
                                    <div class="custom-dropdown-item">
                                        <ul>
                                            <li><a href="<?php echo $base_url; ?>user/profile"><i class="fa fa-user"></i> <span>My Profile</span></a></li>
                                            <li><a href="<?php echo $base_url; ?>user/my-bookings"><i class="fa fa-users"></i> <span>Bookings</span></a></li>
                                            <li><a href="<?php echo $base_url; ?>user/offers"><i class="fa fa-money-bill-wave"></i> <span>Offers</span></a></li>
                                            <li><a href="<?php echo $base_url; ?>user/membership"><i class="fa fa-user-plus"></i> <span> Membership</span></a></li>
                                            <li><a href="#" onclick="logout();"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="top-right-list-item top-right-icon" onclick="common.wishlistRedirect();">
                                <i class="far fa-heart text-pink icons"></i>
                            </div>

                            <div class="top-right-list-item top-right-icon">
                                <a onclick='common.cartRedirect();' class="cart-anchor">
                                    <i class="fas fa-shopping-bag text-pink icons"></i>
                                    <span class="cart-count-circle">0</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <?php
//                }
                    ?>
                </div>

            </div>
        </div>
        <?php
//        if (strpos(dirname($_SERVER['PHP_SELF']), '/pro') === false) {
        ?>
        <nav>
            <div class="container-fluid">
                <ul>
                    <li><a href="#">Salon</a>
                        <div class="submenu">

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="loading-wrapper">
                                        <img src="assets/images/loader.gif" alt="loading">
                                    </div>
                                    <div id="salonServices">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <img src="<?php echo $base_url; ?>assets/images/submenu-salon-female-img.jpg" alt="" class="img-fluid">
                                </div>
                            </div>


                        </div>
                    </li>
                    <li><a href="#">Makeup Artist </a>
                        <div class="submenu">

                            <div class="">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="loading-wrapper">
                                            <img src="assets/images/loader.gif" alt="loading">
                                        </div>
                                        <div id="makeupArtistServices">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <img src="<?php echo $base_url; ?>assets/images/wedding-pre-bridal-nav-img.jpg" alt="" class="img-fluid">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </li>

                    <li><a href="<?php echo $base_url; ?>bridal-makeup-consultation-form">Bridal Makeup</a>
                        <div class="submenu">

                            <div class="">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="loading-wrapper">
                                            <img src="assets/images/loader.gif" alt="loading">
                                        </div>
                                        <div id="bridalMakeupServices">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <img src="<?php echo $base_url; ?>assets/images/makeup-artist-nav-img.jpg" alt="" class="img-fluid">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </li>

                    <li><a href="#">Men's</a>
                        <div class="submenu">

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="loading-wrapper">
                                        <img src="<?php echo $base_url; ?>assets/images/loader.gif" alt="loading">
                                    </div>
                                    <div id="gentsServices">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <img src="<?php echo $base_url; ?>assets/images/submenu-salon-male-img.jpg" alt="" class="img-fluid">
                                </div>
                            </div>


                        </div>
                    </li>


                    <li><a href="<?php echo $base_url; ?>makeup-academy">Makeup Academy</a></li>

                    <li><a href="<?php echo $base_url; ?>cards">Cards </a></li>
                    <li><a href="<?php echo $base_url; ?>im-beautiful">I'm Beautiful &nbsp; <i class="fa fa-heart heart-icon"></i> </a>

                    <li>
                        <a href="<?php echo $base_url; ?>bmm-tv"> BMM TV</a>
                    </li>
                    <!-- <li>
                        <a href="<?php echo $base_url; ?>book-appointment"> Quick Booking &nbsp; <i class="fa fa-calendar-alt"></i> </a>
                    </li> -->
                    <li class="active-offer-nav"><a href="offers">Offers</a>

                    </li>

                    <li><a href="<?php echo $base_url; ?>blog">Blog </a>
                    </li>

                    <li class="p-relative">
                        <a href="<?php echo $base_url; ?>pro/index">BMM PRO
                            <!-- <span class="new-tag new">FREE</span> -->
                        </a>
                    </li>


                </ul>
            </div>
        </nav>
        <?php
//        }
        ?>
    </header>

    <div class="location-custom-modal">
        <div class="location-modal-close"><i class="fa fa-times"></i></div>
        <div class="text-center mt-4">
            <h2 class="h2-heading">Choose your City</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mt-4">

                    <div class="input-group search-bar-main">
                        <i class="fa fa-map-marker-alt seacrh-icons"></i>
                        <input type="text" class="form-control" id="searchInput" placeholder="Enter your city name" aria-label="" aria-describedby="basic-addon1">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                Use My Current Location
                            </button>
                        </div>
                        <div class="city-list">
                            <ul>
                                <li>New Delhi</li>
                                <li>Delhi</li>
                                <li>Noida</li>
                                <li>Ghaziabad</li>
                                <li>Faridabad</li>
                                <li>Gurugram</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <div class="text-center">
                        <h5>Major Cities</h5>
                    </div>

                    <div class="row location-area-list mt-4">
                        <div class="col-md-6">
                            <h6>Delhi NCR</h6>
                            <ul>
                                <li>New Delhi</li>
                                <li>Delhi</li>
                                <li>Noida</li>
                                <li>Ghaziabad</li>
                                <li>Faridabad</li>
                                <li>Gurugram</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Maharastra</h6>
                            <ul>
                                <li>Mumbai</li>
                                <li>Navi Mumbai</li>
                                <li>Brady House</li>
                                <li>Pune</li>
                                <li>Nagpur</li>
                                <li>Nasik</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Punjab</h6>
                            <ul>
                                <li>Amritsar</li>
                                <li>Ludhiana</li>
                                <li>Patiala</li>
                                <li>Chandigarh</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Haryana</h6>
                            <ul>
                                <li>Sonipat</li>
                                <li>Panipat</li>
                                <li>Karnal</li>
                                <li>Gurugram</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Rajasthan</h6>
                            <ul>
                                <li>Jaipur</li>
                                <li>Udaipur</li>
                                <li>Bikaner</li>
                                <li>Kota</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Uttar Pradesh</h6>
                            <ul>
                                <li>Varanasi</li>
                                <li>Lucknow</li>
                                <li>Kanpur</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <!-- Login Modal -->
    <div class="modal auth-modal" id="loginModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <section class="login-section p-0">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="login">
                        <form class="login-form" id="loginForm">
                            <div class="form-group">
                                <div class="form-heading">Sign In</div>
                                <div class="form-group mt-3">
                                    <label>Mobile Number / Email id</label>
                                    <input type="text" class="form-control" name="email_mobile">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group text-center auth-btns">
                                    <button type="submit" id="signInBtn" class="btn login-btn">Sign In</button>
                                    <div class="or-text">
                                        <span>OR</span>
                                    </div>
                                    <button type="button" id="user-signin-with-otp-btn" class="btn login-btn">Sign In with OTP</button>
                                </div>
                                <p class="text-white">Don't Have An Account? <span class="registerBtn cursor-pointer">Join Now</span></p>
                            </div>
                        </form>
                        <form class="login-form login-pro-form d-custom-none" id="loginStepTwo">
                            <div class="form-heading">Sign In - Verify OTP</div>
                            <div class="register-steps register-step2 mt-3">
                                <div class="form-group">
                                    <label for="otp_text text-center"> <span id="otp-mobile"></span> On this mobile number you'll receive an OTP</label>
                                    <input type="text" id="otp_text" placeholder="Enter OTP" class="form-control mt-3" maxlength="6" name="otp">
                                </div>
                                <div class="form-group"></div>
                                <label class="resend-seconds"> <span class></span> sec</label>
                                <div class="cursor-pointer user-login-resend-btn">Resend OTP</div>
                                <div class="form-group text-center mt-3">
                                    <div class="user-go-back-btn btn login-btn">Go Back</div>
                                    <button type="submit" id="verifyOTP" class="btn login-btn">Verify OTP</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal auth-modal" id="registerModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <section class="login-section p-0">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="login">
                        <form class="login-form" id="registerStepOne">
                            <div class="form-group">
                                <div class="form-heading">Register</div>
                                <div class="row mt-3">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" name="gender">
                                                <option value="female">Female</option>
                                                <option value="male">Male</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile_no" maxlength="10">
                                </div>
                                <div class="form-group">
                                    <label>Email Id</label>
                                    <input type="text" class="form-control" name="email_id">
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" id="registerBtn" class="btn login-btn">Register</button>
                                </div>
                                <p class="text-white">Have An Account? <span class="loginBtn cursor-pointer">Click here to Sign In</span></p>
                            </div>
                        </form>

                        <form class="login-form login-pro-form d-custom-none" id="registerStepTwo">
                            <div class="form-heading">Registration - Verify OTP</div>
                            <div class="register-steps register-step2 mt-3">
                                <div class="font-weight-bold h6 mb-2 text-light" id="send-otp-text"></div>
                                <div class="form-group">
                                    <label for="otp_text">OTP</label>
                                    <input type="text" id="otp_text" placeholder="Enter OTP" class="form-control" maxlength="6" name="otp">
                                </div>
                                <div class="form-group"></div>
                                <label class="register-resend-seconds"> <span class></span> sec</label>
                                <div class="cursor-pointer user-register-resend-btn">Resend OTP</div>
                                <div class="form-group text-center mt-3">
                                    <div class="user-go-back-btn btn login-btn">Go Back</div>
                                    <button type="submit" id="verifyOTP" class="btn login-btn">Verify OTP</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </section>

            </div>
        </div>
    </div>
