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

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/responsive.css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <div class="responsive-rgba text-right">
    </div>
    <div class="responsive-nav">
        <div class="row">
            <div class="col-6">
                <a href="login.php" class="btn btn-pink">Sign In</a>
            </div>
            <div class="col-6">
                <a href="register.php" class="btn btn-pink">Sign Up</a>
            </div>
        </div>
        <hr>
        <ul class="list-unstyled">
            <li>
                <a href="#"> Salon <span class="float-right"><i class="fas fa-plus plus-icon"></i></span> </a>
                <ul class="list-unstyled pl-3 responsive-dropdown">
                    <li>
                        <a href="#">Ladies <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="ladies-hair-styling.php">Hair Styling</a></li>
                            <li><a href="ladies-hair-styling.php">Make Up</a></li>
                            <li><a href="ladies-hair-styling.php">Hair Texture</a></li>
                            <li><a href="ladies-hair-styling.php">Hair Treatments</a></li>
                            <li><a href="ladies-hair-styling.php">Facials & Rituals</a></li>
                            <li><a href="ladies-hair-styling.php">Hand & Feet</a></li>
                            <li><a href="ladies-hair-styling.php">Nail Care</a></li>
                        </ul>
                    </li>
                    <!-- <li>
                    <a href="#">Gents <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                    <ul class="list-unstyled pl-3 responsive-dropdown">
                        <li><a href="#">Hair Cut & Finish</a></li>
                        <li><a href="#">Hair Color</a></li>
                        <li><a href="#">Hair Texture</a></li>
                        <li><a href="#">Hair Treatments</a></li>
                        <li><a href="#">Skin Care</a></li>
                        <li><a href="#">Beard Grooming</a></li>
                    </ul>
            </li> -->
                    <li>
                        <a href="#">Salons <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="hair-masters.php">Hair Masters</a></li>
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
                    <li><a href="/">Salon at Home</a>
                        <div class="submenu">
                            <div class="">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="menu-common-list">
                                            <div class="nav-submenu-title">Services</div>
                                            <ul>
                                                <li><a href="/ladies-hair-styling">Hair Styling</a></li>
                                                <li><a href="/ladies-hair-styling">Make Up</a></li>
                                                <li><a href="/ladies-hair-styling">Hair Texture</a></li>
                                                <li><a href="/ladies-hair-styling">Hair Treatments</a></li>
                                                <li><a href="/ladies-hair-styling">Facials &amp; Rituals</a></li>
                                                <li><a href="/ladies-hair-styling">Hand &amp; Feet</a></li>
                                                <li><a href="/ladies-hair-styling">Nail Care</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="menu-common-list">
                                            <div class="nav-submenu-title">Package</div>
                                            <ul>
                                                <li><a href="/package">Wellness</a></li>
                                                <li><a href="/package">Stress Buster</a></li>
                                                <li><a href="/package">Pre Bridal</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="menu-common-list">
                                            <div class="nav-submenu-title">BMM Cards</div>
                                            <ul>
                                                <li><a href="/bmm-card">Membership Cards</a></li>
                                                <li><a href="/bmm-card">Gift Cards</a></li>
                                                <li><a href="/bmm-card">Flexi Cards</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="menu-common-list">
                                            <div class="nav-submenu-title">Membership</div>
                                            <ul>
                                                <li><a href="/bmm-card">Silver</a></li>
                                                <li><a href="/bmm-card">Gold</a></li>
                                                <li><a href="/bmm-card">Platinum</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3"><img src="/images/salon-at-home-nav-img.jpg" alt="" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- <li>
                    <a href="#">BMM Cards <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                    <ul class="list-unstyled pl-3 responsive-dropdown">
                        <li><a href="#">Membership Cards</a></li>
                        <li><a href="#">Gifts Cards</a></li>
                        <li><a href="#">Flexi Cards</a></li>
                    </ul>
                </li> -->
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
                    <li><a href="/">Salon at Home</a>
                        <div class="submenu">
                            <div class="">
                                <div class="row">
                                    <div class="col-md">
                                        <div class="menu-common-list">
                                            <div class="nav-submenu-title">Services</div>
                                            <ul>
                                                <li><a href="/ladies-hair-styling">Hair Styling</a></li>
                                                <li><a href="/ladies-hair-styling">Make Up</a></li>
                                                <li><a href="/ladies-hair-styling">Hair Texture</a></li>
                                                <li><a href="/ladies-hair-styling">Hair Treatments</a></li>
                                                <li><a href="/ladies-hair-styling">Facials &amp; Rituals</a></li>
                                                <li><a href="/ladies-hair-styling">Hand &amp; Feet</a></li>
                                                <li><a href="/ladies-hair-styling">Nail Care</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="menu-common-list">
                                            <div class="nav-submenu-title">Package</div>
                                            <ul>
                                                <li><a href="/package">Wellness</a></li>
                                                <li><a href="/package">Stress Buster</a></li>
                                                <li><a href="/package">Pre Bridal</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="menu-common-list">
                                            <div class="nav-submenu-title">BMM Cards</div>
                                            <ul>
                                                <li><a href="/bmm-card">Membership Cards</a></li>
                                                <li><a href="/bmm-card">Gift Cards</a></li>
                                                <li><a href="/bmm-card">Flexi Cards</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="menu-common-list">
                                            <div class="nav-submenu-title">Membership</div>
                                            <ul>
                                                <li><a href="/bmm-card">Silver</a></li>
                                                <li><a href="/bmm-card">Gold</a></li>
                                                <li><a href="/bmm-card">Platinum</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3"><img src="/images/salon-at-home-nav-img.jpg" alt="" class="img-fluid"></div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- <li>
                    <a href="#">BMM Cards <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                    <ul class="list-unstyled pl-3 responsive-dropdown">
                        <li><a href="#">Membership Cards</a></li>
                        <li><a href="#">Gifts Cards</a></li>
                        <li><a href="#">Flexi Cards</a></li>
                    </ul>
                </li> -->
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
                            <li><a href="ladies-hair-styling.php">Hair Styling</a></li>
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
                            <li><a href="cards.php">Membership Cards</a></li>
                            <li><a href="cards.php">Gift Cards</a></li>
                            <li><a href="cards.php">Flexi Cards</a></li>
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
            <!-- <li>
            <a href="#">Groom Makeover <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
            <ul class="list-unstyled pl-3 responsive-dropdown">
                <li>
                    <a href="#">Services <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                    <ul class="list-unstyled pl-3 responsive-dropdown">
                        <li><a href="#">Hair Styling</a></li>
                        <li><a href="#">Hair Styling</a></li>
                        <li><a href="#">Make Up</a></li>
                        <li><a href="#">Hair Texture</a></li>
                        <li><a href="#">Hair Treatments</a></li>
                        <li><a href="#">Hand & Feet</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Package <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
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
                        <li><a href="#">Membership Cards</a></li>
                        <li><a href="#">Gifts Cards</a></li>
                        <li><a href="#">Flexi Cards</a></li>
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
        </li> -->
            <li>
                <a href="#">Salon at Home <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                <ul class="list-unstyled pl-3 responsive-dropdown">
                    <li>
                        <a href="#">Services <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Hair Styling</a></li>
                            <li><a href="#">Hair Styling</a></li>
                            <li><a href="#">Make Up</a></li>
                            <li><a href="#">Hair Texture</a></li>
                            <li><a href="#">Hair Treatments</a></li>
                            <li><a href="#">Facials & Rituals</a></li>
                            <li><a href="#">Hand & Feet</a></li>
                            <li><a href="#">Nail Care</a></li>
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
                        <a href="#">Package <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Wellness</a></li>
                            <li><a href="#">Stress Buster</a></li>
                            <li><a href="#">Pre Bridal</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">BMM Cards <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Membership Cards</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Flexi Cards</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Membership <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Silver</a></li>
                            <li><a href="#">Gold</a></li>
                            <li><a href="#">Platinum</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Buy <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                <ul class="list-unstyled pl-3 responsive-dropdown">
                    <li>
                        <a href="#">Makeup <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Face</a></li>
                            <li><a href="#">Eyes</a></li>
                            <li><a href="#">Lips</a></li>
                            <li><a href="#">Nails</a></li>
                            <li><a href="#">Tools & Brushes</a></li>
                            <li><a href="#">Top Brands</a></li>
                            <li><a href="#">Trending</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Skin <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Cleaners</a></li>
                            <li><a href="#">Moisturizers</a></li>
                            <li><a href="#">Masks</a></li>
                            <li><a href="#">Eye Care</a></li>
                            <li><a href="#">Skin Care </a></li>
                            <li><a href="#">Body Care </a></li>
                            <li><a href="#">Lips Care </a></li>
                            <li><a href="#">Hands & Feet</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Hair <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Hair Care</a></li>
                            <li><a href="#">Tools & Accessories</a></li>
                            <li><a href="#">Hair Styling</a></li>
                            <li><a href="#">Top Brands</a></li>
                            <li><a href="#">Shop by Concern </a></li>
                            <li><a href="#">Trending</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Mom & Baby <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Baby & Kids Care</a></li>
                            <li><a href="#">Maternity Care</a></li>
                            <li><a href="#">Nursing & Feeding</a></li>
                            <li><a href="#">Health & Safety</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Appliances <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Hair Styling Tools</a></li>
                            <li><a href="#">Hair Removal Tools</a></li>
                            <li><a href="#">Shaving Tools</a></li>
                            <li><a href="#">Face/Skin/Tools</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Men <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Shaving</a></li>
                            <li><a href="#">Beard Care</a></li>
                            <li><a href="#">Hair Care</a></li>
                            <li><a href="#">Skin Care</a></li>
                            <li><a href="#">Bath & Body</a></li>
                            <li><a href="#">Top Brand</a></li>
                            <li><a href="#">Grooming Kids</a></li>
                            <li><a href="#">Wellness</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Brands <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                <ul class="list-unstyled pl-3 responsive-dropdown">
                    <li>
                        <a href="#">Affordable Brands <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Lanvin</a></li>
                            <li><a href="#">BodyHerbals</a></li>
                            <li><a href="#">Maybelline</a></li>
                            <li><a href="#">L'oreal Paris</a></li>
                            <li><a href="#">La Monk</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">BMM Cards <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Membership Cards</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Flexi Cards</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Brands A-Z Popular <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Lakme</a></li>
                            <li><a href="#">Maybelline</a></li>
                            <li><a href="#">L'oreal Paris</a></li>
                            <li><a href="#">La Monk</a></li>
                            <li><a href="#">Lanvin</a></li>
                            <li><a href="#">BodyHerbals</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Featured <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Lakme</a></li>
                            <li><a href="#">Maybelline</a></li>
                            <li><a href="#">L'oreal Paris</a></li>
                            <li><a href="#">La Monk</a></li>
                            <li><a href="#">Lanvin</a></li>
                            <li><a href="#">BodyHerbals</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">New Launches <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Lakme</a></li>
                            <li><a href="#">Maybelline</a></li>
                            <li><a href="#">L'oreal Paris</a></li>
                            <li><a href="#">La Monk</a></li>
                            <li><a href="#">Lanvin</a></li>
                            <li><a href="#">BodyHerbals</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">I'm Beautiful <i class="fa fa-heart"></i> <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                <ul class="list-unstyled pl-3 responsive-dropdown">
                    <li>
                        <a href="#">Makeup <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">HD Makeup</a></li>
                            <li><a href="#">Bridal Makeup</a></li>
                            <li><a href="#">Party Makeup</a></li>
                            <li><a href="#">WFH Makeup</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Hair Styling <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Hair Cut</a></li>
                            <li><a href="#">Ironing</a></li>
                            <li><a href="#">Global Colouring</a></li>
                            <li><a href="#">Blow Dry</a></li>
                            <li><a href="#">Root Touch Up</a></li>
                            <li><a href="#">Shampoo & Conditioning</a></li>
                            <li><a href="#">Head Massage</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Bridal Wear <span class="float-right"><i class="fas fa-plus plus-icon"></i></span></a>
                        <ul class="list-unstyled pl-3 responsive-dropdown">
                            <li><a href="#">Saree</a></li>
                            <li><a href="#">Lenghas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Trending</a>
                    </li>
                    <li>
                        <a href="#">Star of the Month</a>
                    </li>
                </ul>
            </li>
            <li><a href="blog.php">BMM TV</a></li>
            <li><a href="blog.php">Quick Booking <i class="fa fa-calendar-alt"></i> </a></li>
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
            <li><a href="blog.php">Blog</a></li>
        </ul>
    </div>
    <?php
    if (strpos(dirname($_SERVER['PHP_SELF']), '/pro') === false) {
    ?>
        <div class="top-stripe">
            <div class="container-fluid">
                <div class="row">
                    <!-- <div class="col-md-4 offset-md-1">
                                <ul>
                                    <li>
                                        <a href=""><i class="fas fa-phone-alt"></i> 9876543210</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="fas fa-envelope"></i> book@bookmymakeup.in</a>
                                    </li>
                                </ul>
                            </div> -->
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
                                <a href="get-app.php"><i class="fas fa-mobile-alt"></i> Get APP</a>
                            </li>
                            <li><a href="virtual-consultation.php"> <i class="far fa-comments"></i>Makeup Consultant</a></li>
                            <li>
                                <i class="fa fa-phone-alt"></i> &nbsp; 844 855 4942
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
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
                    <a href="<?php echo base_url(); ?>index.php" class="logo"><img src="<?php echo base_url(); ?>assets/images/logo.png" class="img-fluid" alt=""></a>
                </div>
                <?php
                if (strpos(dirname($_SERVER['PHP_SELF']), '/pro') === false) {
                ?>
                    <div class="col-md-5 offset-md-1 search-div">
                        <div class="input-group search-bar-main">
                            <i class="fa fa-search seacrh-icons"></i>
                            <input type="text" class="form-control" placeholder="Salons, Makeup Artists, Bridal Makeup" aria-label="" aria-describedby="basic-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    Search
                                </button>
                            </div>
                        </div>
                        <!-- <div class="search-bar">
                        <i class='fa fa-search seacrh-icons'></i>
                        <input type="text" class="form-control" placeholder="Search Salon, Makeup Artist...">
                    </div> -->
                    </div>
                    <div class="col-md-3 col-1 responsive-search-bar">
                        <a href="#" class="d-block">
                            <i class='fa fa-search'></i>
                        </a>
                    </div>
                    <div class="col-md-3 col-3">
                        <div class="top-right-list">
                            <!-- <div class="top-right-list-item">
                            <div class="custom-dropdown">
                                <div class="custom-dropdown-btn">
                                    <i class="fas fa-users"></i> <span>Community</span></div>
                                <div class="custom-dropdown-item">
                                    <div class="row">
                                        <div class="col-2 text-center mt-2"><i class="far fa-user-circle"></i> </div>
                                        <div class="col-6 pl-0"><span>Company Profile</span><br><small>Sign in to see your profile</small> </div>
                                        <div class="col-2"><i class="fa fa-bell"></i> </div>
                                        <div class="col-2"><i class="fa fa-envelope"></i> </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="#" class="btn btn-primary btn-block">Sign In</a>
                                        </div>
                                        <div class="col-6">
                                            <a href="#" class="btn btn-secondary btn-block">Create Account</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="<?php echo base_url(); ?>assets/images/community_home.webp" alt="">
                                        </div>
                                        <div class="col-9">
                                            <h6>Community Group</h6>
                                            <p>Ask questions, join challenges, and get recommendations from people like you</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="<?php echo base_url(); ?>assets/images/community_home.webp" alt="">
                                        </div>
                                        <div class="col-9">
                                            <h6>Community Group</h6>
                                            <p>Ask questions, join challenges, and get recommendations from people like you</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="<?php echo base_url(); ?>assets/images/community_home.webp" alt="">
                                        </div>
                                        <div class="col-9">
                                            <h6>Community Group</h6>
                                            <p>Ask questions, join challenges, and get recommendations from people like you</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div> -->

                            <!-- <div class="top-right-list-item">
                            <div class="custom-dropdown">
                                <div class="custom-dropdown-btn">
                                    <i class="fas fa-hotel float-left"></i> <span class="float-left pl-2"> <span>Salon & Services</span> <br>
                                    <small> Janak Puri, Delhi</small></span>
                                </div>
                                <div class="custom-dropdown-item">
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <h6><i class="fa fa-map-marker-alt"></i> &nbsp; Search My Salon</h6>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>Upcoming Events </h6>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="<?php echo base_url(); ?>assets/images/happening_new.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-9">
                                            <h6>Store Events</h6>
                                            <p>Exciting launches, parties, & more!</p>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-3">
                                            <img src="<?php echo base_url(); ?>assets/images/happening_events_2.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-9">
                                            <h6>What's New in Store</h6>
                                            <p>Explore what's hot in your store</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                            <div class="top-right-list-item">
                                <div class="custom-dropdown">
                                    <div id="loginBtn"></div>
                                    <div class="custom-dropdown-item">
                                        <?php include 'include/salon_menu.php' ?>
                                        <!-- <div class="row">
                                    <div class="col-2 text-center mt-2"><i class="far fa-user-circle"></i> </div>
                                    <div class="col-10 pl-0"><span>Happy Friday, Beautiful</span><br><small>Sign in to Sephora for a more personalized experience
                                        </small> </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">
                                        <a href="#" class="btn btn-primary btn-block">Sign In</a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn btn-secondary btn-block">Create Account</a>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h6>
                                            Beauty Insider Summary</h6>
                                        <p>
                                            View activity, savings, benefits</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h6>
                                            Beauty Insider Summary</h6>
                                        <p>
                                            View activity, savings, benefits</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h6>
                                            Beauty Insider Summary</h6>
                                        <p>
                                            View activity, savings, benefits</p>
                                    </div>
                                </div>
                                <hr> -->

                                    </div>
                                </div>
                            </div>

                            <div class="top-right-list-item">
                                <i class="far fa-heart text-pink icons"></i>
                            </div>

                            <div class="top-right-list-item">
                                <!-- <a href="cart-details.php"> -->
                                <a href="#">
                                    <!-- <span class="cart-count">2</span> -->
                                    <i class="fas fa-shopping-bag text-pink icons"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
        </div>
        <?php
        if (strpos(dirname($_SERVER['PHP_SELF']), '/pro') === false) {
        ?>
            <nav>
                <div class="container-fluid">
                    <ul>
                        <!-- <li><a href="ladies-service.php">Ladies</a>
                    <div class="submenu">
                        <div class="">
                            <div class="row">
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Services</ldiv>
                                            <ul>
                                                <li><a href="ladies-service.php#Hair">Hair</a></li>
                                                <li><a href="ladies-service.php#ChemicalService">Chemical Service</a></li>
                                                <li><a href="ladies-service.php#ColorRoots">Color Roots</a></li>
                                                <li><a href="ladies-service.php#HairSPA">Hair SPA</a></li>
                                                <li><a href="ladies-service.php#HeadMassage">Head Massage</a></li>
                                                <li><a href="ladies-service.php#ManicurePedicure">Manicure/Pedicure</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>



                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Offers</div>
                                        <ul>
                                            <li><a href="offers.php">Free Hair Cut</a></li>
                                            <li><a href="offers.php">50% off on Manicure</a></li>
                                            <li><a href="offers.php">50% off on Pedicure</a></li>
                                            <li><a href="offers.php">Free Makeup Trial</a></li>
                                            <li><a href="offers.php">Free Nail Care</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">BMM Cards</div>
                                        <ul>
                                            <li><a href="cards.php">Membership Cards</a></li>
                                            <li><a href="cards.php">Gift Cards</a></li>
                                            <li><a href="cards.php">Flexi Cards</a></li>
                                        </ul>
                                    </div>
                                </div>



                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>assets/images/submenu-salon-female-img.jpg" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>


                    </div>
                </li> -->

                        <!-- <li><a href="gents-service.php">Gents</a>
                    <div class="submenu">
                        <div class="">
                            <div class="row">
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Services</ldiv>
                                            <ul>
                                                <li><a href="gents-service.php#Hair">Hair</a></li>
                                                <li><a href="gents-service.php#ChemicalService">Chemical Service</a></li>
                                                <li><a href="gents-service.php#Trimming">Trimming</a></li>
                                                <li><a href="gents-service.php#ColorRoots">Color Roots</a></li>
                                                <li><a href="gents-service.php#HairSPA">Hair SPA</a></li>
                                                <li><a href="gents-service.php#HeadMassage">Head Massage</a></li>
                                                <li><a href="gents-service.php#Waxing">Waxing</a></li>
                                                <li><a href="gents-service.php#BodyTherapies">Body Therapies</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>



                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Offers</div>
                                        <ul>
                                            <li><a href="offers.php">Free Hair Cut</a></li>
                                            <li><a href="offers.php">50% off on Manicure</a></li>
                                            <li><a href="offers.php">50% off on Pedicure</a></li>
                                            <li><a href="offers.php">Free Makeup Trial</a></li>
                                            <li><a href="offers.php">Free Nail Care</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">BMM Cards</div>
                                        <ul>
                                            <li><a href="cards.php">Membership Cards</a></li>
                                            <li><a href="cards.php">Gift Cards</a></li>
                                            <li><a href="cards.php">Flexi Cards</a></li>
                                        </ul>
                                    </div>
                                </div>



                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>assets/images/submenu-salon-female-img.jpg" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>


                    </div>
                </li> -->
                        <li><a href="#">Salon</a>
                            <div class="submenu">

                                <div class="">
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Hair Styling</div>
                                                <ul>
                                                    <li><a href="service-list.php">Hair Cut</a></li>
                                                    <li><a href="#">Ironing</a></li>
                                                    <li><a href="#">Global Colouring</a></li>
                                                    <li><a href="#">Blow Dry</a></li>
                                                    <li><a href="#">Root Touch Up</a></li>
                                                    <li><a href="#">Shampoo & Conditioning</a></li>
                                                    <li><a href="#">Head Massage</a></li>
                                                    <li><a href="#">Roller Setting</a></li>
                                                    <li><a href="#">Oiling</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Hair Texture</div>
                                                <ul>
                                                    <li><a href="#">Rebonding</a></li>
                                                    <li><a href="#">Perming</a></li>
                                                    <li><a href="#">Keratin</a></li>
                                                    <li><a href="#">Colour Protection</a></li>
                                                    <li><a href="#">Smoothening</a></li>
                                                </ul>
                                            </div>
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Hair Treatments</div>
                                                <ul>
                                                    <li><a href="#">Spa Treatments</a></li>
                                                    <li><a href="#">Volumizing</a></li>
                                                    <li><a href="#">Advanced Hair Moisturising</a></li>
                                                    <li><a href="#">Scalp Treatments</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Hand & Feet</div>
                                                <ul>
                                                    <li><a href="#">Manicure</a></li>
                                                    <li><a href="#">Spa Pedicure</a></li>
                                                    <li><a href="#">Pedicure</a></li>
                                                    <li><a href="#">Waxing</a></li>
                                                    <li><a href="#">Spa Manicure</a></li>
                                                </ul>
                                            </div>
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Nail Care</div>
                                                <ul>
                                                    <li><a href="#">Nail Paint</a></li>
                                                    <li><a href="#">Nail Art</a></li>
                                                    <li><a href="#">Nail Filling</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Make Up</div>
                                                <ul>
                                                    <li><a href="#">Party Make Up</a></li>
                                                    <li><a href="#">Engagement Make Up</a></li>
                                                    <li><a href="#">Bridal & Reception Make Up</a></li>
                                                    <li><a href="#">Base Make Up</a></li>
                                                    <li><a href="#">Eye Make Up</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Facials & Rituals</div>
                                                <ul>
                                                    <li><a href="#">Bleach</a></li>
                                                    <li><a href="#">Luxury Facials/Rituals</a></li>
                                                    <li><a href="#">Clean Ups</a></li>
                                                    <li><a href="#">Body Polishing/Rejuvenation</a></li>
                                                    <li><a href="#">Threading</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Recommended</div>
                                                <ul>
                                                    <li><a href="hair-masters.php">Hair Masters</a></li>
                                                    <li><a href="#">Looks</a></li>
                                                    <li><a href="#">Geetanjali</a></li>
                                                    <li><a href="#">VLCC</a></li>
                                                    <li><a href="#">Jawed Habib</a></li>
                                                    <li><a href="#">Toni & Guy</a></li>
                                                    <li><a href="#">F Salon</a></li>
                                                    <li><a href="#">Alps Beauty</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">BMM Cards</div>
                                        <ul>
                                            <li><a href="cards.php">Membership Cards</a></li>
                                            <li><a href="cards.php">Gift Cards</a></li>
                                            <li><a href="cards.php">Flexi Cards</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Offers</div>
                                        <ul>
                                            <li><a href="#">Free Hair Cut</a></li>
                                            <li><a href="#">50% off on Manicure</a></li>
                                            <li><a href="#">50% off on Pedicure</a></li>
                                            <li><a href="#">Free Makeup Trial</a></li>
                                            <li><a href="#">Free Nail Care</a></li>
                                        </ul>
                                    </div>
                                </div> -->

                                        <!-- <div class="col-md">
                                    <div class="salon-logos-list">
                                        <ul>
                                            <li>
                                                <img src="<?php echo base_url(); ?>assets/images/salon-logo-1.png" alt="">
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url(); ?>assets/images/salon-logo-2.png" alt="">
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url(); ?>assets/images/salon-logo-3.png" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                </div> -->


                                        <div class="col-md-3">
                                            <img src="<?php echo base_url(); ?>assets/images/submenu-salon-female-img.jpg" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </li>
                        <li><a href="#">Makeup Artist </a>
                            <div class="submenu">

                                <div class="">
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Services</ldiv>
                                                    <ul>
                                                        <li><a href="ladies-service.php#Hair">Hair</a></li>
                                                        <li><a href="ladies-service.php#ChemicalService">Chemical Service</a></li>
                                                        <li><a href="ladies-service.php#ColorRoots">Color Roots</a></li>
                                                        <li><a href="ladies-service.php#HairSPA">Hair SPA</a></li>
                                                        <li><a href="ladies-service.php#HeadMassage">Head Massage</a></li>
                                                        <li><a href="ladies-service.php#ManicurePedicure">Manicure/Pedicure</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Gents Services</ldiv>
                                            <ul>
                                                <li><a href="gents-service.php#Hair">Hair</a></li>
                                                <li><a href="gents-service.php#ChemicalService">Chemical Service</a></li>
                                                <li><a href="gents-service.php#Trimming">Trimming</a></li>
                                                <li><a href="gents-service.php#ColorRoots">Color Roots</a></li>
                                                <li><a href="gents-service.php#HairSPA">Hair SPA</a></li>
                                                <li><a href="gents-service.php#HeadMassage">Head Massage</a></li>
                                                <li><a href="gents-service.php#Waxing">Waxing</a></li>
                                                <li><a href="gents-service.php#BodyTherapies">Body Therapies</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> -->

                                        <!-- <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Events</div>
                                        <ul>
                                            <li><a href="events.php">Mehandi/Sagan</a></li>
                                            <li><a href="events.php">Wedding/Reception </a></li>
                                            <li><a href="events.php">Fashion Show</a></li>
                                            <li><a href="events.php">E Commerce Shoot</a></li>
                                            <li><a href="events.php">Pre Wedding Shoot</a></li>
                                            <li><a href="events.php">Baby Shower</a></li>
                                            <li><a href="events.php">Corporate Events</a></li>

                                        </ul>
                                    </div>
                                </div> -->

                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Packages</div>
                                                <ul>
                                                    <li><a href="package.php">Family</a></li>
                                                    <li><a href="package.php">Eco</a></li>
                                                    <li><a href="package.php">Gold</a></li>
                                                </ul>
                                                <div class="nav-submenu-title">BMM Cards</div>
                                                <ul>
                                                    <li><a href="cards.php">Membership Cards</a></li>
                                                    <li><a href="cards.php">Gift Cards</a></li>
                                                    <li><a href="cards.php">Flexi Cards</a></li>
                                                </ul>


                                            </div>
                                        </div>

                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Recommended</div>
                                                <ul>
                                                    <li><a href="makeup-artist-1.php">Priyanka Sharma</a></li>
                                                    <li><a href="#">Anshika Sharma</a></li>
                                                    <li><a href="#">Bushra Shahid</a></li>
                                                    <li><a href="#">Manju</a></li>
                                                    <li><a href="#">Neha Sharma</a></li>
                                                    <li><a href="#">Manjari</a></li>
                                                    <li><a href="#">Afsheen</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Offers</ldiv>
                                                    <ul>
                                                        <li><a href="offers.php">Free Hair Cut</a></li>
                                                        <li><a href="offers.php">50% off on Manicure</a></li>
                                                        <li><a href="offers.php">50% off on Pedicure</a></li>
                                                        <li><a href="offers.php">Free Makeup Trial</a></li>
                                                        <li><a href="offers.php">Free Nail Care</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <img src="<?php echo base_url(); ?>assets/images/wedding-pre-bridal-nav-img.jpg" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </li>

                        <li><a href="bridal-makeup-consultation-form.php">Bridal Makeup</a>
                            <div class="submenu">

                                <div class="">
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Services</div>
                                                <ul>
                                                    <li><a href="#">Pre Bridal </a></li>
                                                    <li><a href="#">Bridal Makeup</a></li>
                                                    <li><a href="#">Groom Makeup</a></li>
                                                    <li><a href="#">Family Makeup</a></li>
                                                    <li><a href="#">Light Makeup</a></li>
                                                    <li><a href="#">Air Brush Bridal</a></li>
                                                    <li><a href="#">HD Makeup</a></li>
                                                </ul>
                                            </div>
                                        </div>



                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Bridal Package</ldiv>
                                                    <ul>
                                                        <li><a href="package.php">Silver</a></li>
                                                        <li><a href="package.php">Gold</a></li>
                                                        <li><a href="package.php">Platinum</a></li>
                                                        <li><a href="package.php">Diamond</a></li>
                                                    </ul>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">Pre Bridal Package</ldiv>
                                                    <ul>
                                                        <li><a href="package.php">Silver</a></li>
                                                        <li><a href="package.php">Gold</a></li>
                                                        <li><a href="package.php">Platinum</a></li>
                                                        <li><a href="package.php">Diamond</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md">
                                            <div class="menu-common-list">
                                                <div class="nav-submenu-title">BMM Cards</div>
                                                <ul>
                                                    <li><a href="cards.php">Membership Cards</a></li>
                                                    <li><a href="cards.php">Gift Cards</a></li>
                                                    <li><a href="cards.php">Flexi Cards</a></li>
                                                </ul>
                                            </div>
                                        </div>


                                        <div class="col-md-3">
                                            <img src="<?php echo base_url(); ?>assets/images/makeup-artist-nav-img.jpg" alt="" class="img-fluid">
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </li>

                        <!-- <li><a href="groom-makeover-consultation-form.php">Groom Makeover</a>
                    <div class="submenu">

                        <div class="">
                            <div class="row">
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Services</ldiv>
                                            <ul>
                                                <li><a href="ladies-service.php#Hair">Groom Makeover</a></li>
                                                <li><a href="gents-service.php#Hair">Hair</a></li>
                                                <li><a href="gents-service.php#ChemicalService">Chemical Service</a></li>
                                                <li><a href="gents-service.php#Trimming">Trimming</a></li>
                                                <li><a href="gents-service.php#ColorRoots">Color Roots</a></li>
                                                <li><a href="gents-service.php#HairSPA">Hair SPA</a></li>
                                                <li><a href="gents-service.php#HeadMassage">Head Massage</a></li>
                                                <li><a href="gents-service.php#Waxing">Waxing</a></li>
                                                <li><a href="gents-service.php#BodyTherapies">Body Therapies</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            

                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Package</div>
                                        <ul>
                                            <li><a href="ladies-hair-styling.php">Silver</a></li>
                                            <li><a href="package.php">Gold</a></li>
                                            <li><a href="package.php">Platinum</a></li>
                                            <li><a href="package.php">Diamond</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">BMM Cards</div>
                                        <ul>
                                            <li><a href="cards.php">Membership Cards</a></li>
                                            <li><a href="cards.php">Gift Cards</a></li>
                                            <li><a href="cards.php">Flexi Cards</a></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>assets/images/groom-makeover-nav.jpg" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>

                    </div>
                </li> -->

                        <!-- <li><a href="cards.php">BMM Cards</a></li> -->

                        <!-- <li><a href="#">Salon at Home</a>
                    <div class="submenu">

                        <div class="">
                            <div class="row">
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Services</ldiv>
                                            <ul>
                                                <li><a href="ladies-hair-styling.php">Hair Styling</a></li>
                                                <li><a href="#">Make Up</a></li>
                                                <li><a href="#">Hair Texture</a></li>
                                                <li><a href="#">Hair Treatments</a></li>
                                                <li><a href="#">Facials & Rituals</a></li>
                                                <li><a href="#">Hand & Feet</a></li>
                                                <li><a href="#">Nail Care</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Recommended</div>
                                        <ul>
                                            <li><a href="makeup-artist-1.php">Priyanka Sharma</a></li>
                                            <li><a href="#">Anshika Sharma</a></li>
                                            <li><a href="#">Bushra Shahid</a></li>
                                            <li><a href="#">Manju</a></li>
                                            <li><a href="#">Neha Sharma</a></li>
                                            <li><a href="#">Manjari</a></li>
                                            <li><a href="#">Afsheen</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Package</div>
                                        <ul>
                                            <li><a href="#">Wellness</a></li>
                                            <li><a href="#">Stress Buster</a></li>
                                            <li><a href="#">Pre Bridal</a></li>
                                        </ul>
                                       
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="menu-common-list">
                                    <div class="nav-submenu-title">BMM Cards</div>
                                        <ul>
                                            <li><a href="cards.php">Membership Cards</a></li>
                                            <li><a href="cards.php">Gift Cards</a></li>
                                            <li><a href="cards.php">Flexi Cards</a></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>assets/images/salon-at-home-nav-img.jpg" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>

                    </div>
                </li> -->

                        <li><a href="makeup-academy.php">Makeup Academy</a></li>

                        <!-- <li><a href="#">Buy</a>
                    <div class="submenu">

                        <div class="">
                            <div class="row">
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Makeup</ldiv>
                                            <ul>
                                                <li><a href="product-categories.php">Face</a></li>
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Lips</a></li>
                                                <li><a href="#">Nails</a></li>
                                                <li><a href="#">Tools & Brushes</a></li>
                                                <li><a href="#">Top Brands</a></li>
                                                <li><a href="#">Trending</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Skin</ldiv>
                                            <ul>
                                                <li><a href="#">Cleaners</a></li>
                                                <li><a href="#">Moisturizers</a></li>
                                                <li><a href="#">Masks</a></li>
                                                <li><a href="#">Eye Care</a></li>
                                                <li><a href="#">Skin Care </a></li>
                                                <li><a href="#">Body Care </a></li>
                                                <li><a href="#">Lips Care </a></li>
                                                <li><a href="#">Hands & Feet</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Hair</ldiv>
                                            <ul>
                                                <li><a href="#">Hair Care</a></li>
                                                <li><a href="#">Tools & Accessories</a></li>
                                                <li><a href="#">Hair Styling</a></li>
                                                <li><a href="#">Top Brands</a></li>
                                                <li><a href="#">Shop by Concern</a></li>
                                                <li><a href="#">Trending</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Mom & Baby</div>
                                        <ul>
                                            <li><a href="#">Baby & Kids Care</a></li>
                                            <li><a href="#">Maternity Care</a></li>
                                            <li><a href="#">Nursing & Feeding</a></li>
                                            <li><a href="#">Health & Safety</a></li>
                                        </ul>


                                        <div class="nav-submenu-title">Appliances</ldiv>
                                            <ul>
                                                <li><a href="#">Hair Styling Tools</a></li>
                                                <li><a href="#">Hair Removal Tools</a></li>
                                                <li><a href="#">Shaving Tools</a></li>
                                                <li><a href="#">Face/Skin/Tools</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Men</ldiv>
                                            <ul>
                                                <li><a href="#"> Shaving</a></li>
                                                <li><a href="#"> Beard Care</a></li>
                                                <li><a href="#"> Hair Care</a></li>
                                                <li><a href="#"> Skin Care</a></li>
                                                <li><a href="#"> Bath & Body</a></li>
                                                <li><a href="#"> Top Brnd</a></li>
                                                <li><a href="#"> Grooming Kids</a></li>
                                                <li><a href="#"> Wellness</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Personal Care</ldiv>
                                            <ul>
                                                <li><a href="#">Men's Grooming</a></li>
                                                <li><a href="#">Home & Health</a></li>
                                                <li><a href="#">Face</a></li>
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Lips</a></li>
                                                <li><a href="#">Nails</a></li>
                                                <li><a href="#">Body</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Health & Wellness</ldiv>
                                            <ul>
                                                <li><a href="#">Good for you</a></li>
                                                <li><a href="#">Health Supplements</a></li>
                                                <li><a href="#">Weight Management</a></li>
                                                <li><a href="#">Sports Nutrition</a></li>
                                                <li><a href="#">Sexual Wellness</a></li>
                                            </ul>
                                            <div class="nav-submenu-title">BMM Cards</div>
                                            <ul>
                                                <li><a href="cards.php">Membership Cards</a></li>
                                                <li><a href="cards.php">Gift Cards</a></li>
                                                <li><a href="cards.php">Flexi Cards</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Natural</ldiv>
                                            <ul>
                                                <li><a href="#">Face</a></li>
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Lips</a></li>
                                                <li><a href="#">Nails</a></li>
                                                <li><a href="#">Body</a></li>
                                                <li><a href="#">Aromatherapy</a></li>
                                                <li><a href="#">Top Brands</a></li>
                                                <li><a href="#">Trending</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>
                </li>

                <li><a href="#">Brands</a>
                    <div class="submenu">

                        <div class="">
                            <div class="row">

                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Affordable Brands<ldiv>
                                                <ul>
                                                    <li><a href="#">Lanvin</a></li>
                                                    <li><a href="#">BodyHerbals</a></li>
                                                    <li><a href="#">Maybelline</a></li>
                                                    <li><a href="#">L'oreal Paris</a></li>
                                                    <li><a href="#">La Monk</a></li>

                                                </ul>
                                                <div class="nav-submenu-title">BMM Cards</div>
                                                <ul>
                                                    <li><a href="cards.php">Membership Cards</a></li>
                                                    <li><a href="cards.php">Gift Cards</a></li>
                                                    <li><a href="cards.php">Flexi Cards</a></li>
                                                </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <ul>
                                            <li><a href="#" class="nav-submenu-title">Brands A-Z</a></li>
                                        </ul>
                                        <div class="nav-submenu-title">Popular</ldiv>
                                            <ul>
                                                <li><a href="#">Lakme</a></li>
                                                <li><a href="#">Maybelline</a></li>
                                                <li><a href="#">L'oreal Paris</a></li>
                                                <li><a href="#">La Monk</a></li>
                                                <li><a href="#">Lanvin</a></li>
                                                <li><a href="#">BodyHerbals</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Featured</ldiv>
                                            <ul>
                                                <li><a href="#">Lakme</a></li>
                                                <li><a href="#">Maybelline</a></li>
                                                <li><a href="#">L'oreal Paris</a></li>
                                                <li><a href="#">La Monk</a></li>
                                                <li><a href="#">Lanvin</a></li>
                                                <li><a href="#">BodyHerbals</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">New Launches</ldiv>
                                            <ul>
                                                <li><a href="#">Lakme</a></li>
                                                <li><a href="#">Maybelline</a></li>
                                                <li><a href="#">L'oreal Paris</a></li>
                                                <li><a href="#">La Monk</a></li>
                                                <li><a href="#">Lanvin</a></li>
                                                <li><a href="#">BodyHerbals</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>




                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>assets/images/brand-nav-img.jpg" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>


                    </div>
                </li> -->

                        <li><a href="cards.php">Cards </a></li>
                        <li><a href="im-beautiful.php">I'm Beautiful &nbsp; <i class="fa fa-heart"></i> </a>
                            <!-- <div class="submenu">

                        <div class="">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Makeup</ldiv>
                                            <ul>
                                                <li><a href="im-beautiful.php">HD Makeup</a></li>
                                                <li><a href="im-beautiful.php">Bridal Makeup</a></li>
                                                <li><a href="im-beautiful.php">Party Makeup</a></li>
                                                <li><a href="im-beautiful.php">WFH Makeup</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Hair Styling</ldiv>
                                            <ul>
                                                <li><a href="im-beautiful.php">Hair Cut</a></li>
                                                <li><a href="im-beautiful.php">Ironing</a></li>
                                                <li><a href="im-beautiful.php"> Global Colouring</a></li>
                                                <li><a href="im-beautiful.php">Blow Dry</a></li>
                                                <li><a href="im-beautiful.php">Root Touch Up</a></li>
                                                <li><a href="im-beautiful.php">Shampoo &amp; Conditioning</a></li>
                                                <li><a href="im-beautiful.php">Head Massage</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Bridal Wear</div>
                                        <ul>
                                            <li><a href="im-beautiful.php">Saree</a></li>
                                            <li><a href="im-beautiful.php">Lenghas</a></li>
                                        </ul>
                                    </div>

                                    <div class="menu-common-list">
                                        <ul>
                                            <li><a class="nav-submenu-title" href="im-beautiful.php">Trending</a></li>
                                        </ul>
                                    </div>
                                    <div class="menu-common-list">
                                        <ul>
                                            <li><a class="nav-submenu-title" href="im-beautiful.php">Star of the Month</a></li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>assets/images/makeup-artist-nav-img2.jpg" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>

                    </div> -->
                        </li>
                        <!-- <li>
                    <a href="cards.php"> BMM Card</a>
                    <div class="submenu">

                        <div class="">
                            <div class="row">

                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Membership Card</div>
                                      
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">EMI Cards</div>
                                      
                                    </div>
                                </div>

                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Flexi Card</div>
                                       
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>assets/images/card-nav-img1.jpg" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>

                    </div>
                </li> -->

                        <li>
                            <a href="<?php echo base_url(); ?>bmm-tv.php"> BMM TV</a>
                        </li>
                        <li>
                            <a href="book-appointment.php"> Quick Booking &nbsp; <i class="fa fa-calendar-alt"></i> </a>
                        </li>
                        <li class="active-offer-nav"><a href="offers.php">Offers</a>
                            <!-- <div class="submenu">
                        <div class="">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Top Offers</ldiv>
                                            <ul>
                                                <li><a href="offers.php">Salon</a></li>
                                                <li><a href="offers.php">Makeup Artist</a></li>
                                                <li><a href="offers.php">Salon at Home</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="menu-common-list">
                                        <ul>
                                            <li><a href="offers.php" class="nav-submenu-title">Today's Deal</a></li>
                                        </ul>
                                    </div>
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Deals of the Month</div>
                                        <ul>
                                            <li><a href="offers.php">50% off on Party Makeup</a></li>
                                        </ul>
                                    </div>
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Festive Offers</div>
                                        <ul>
                                            <li><a href="offers.php">Karwa Chauth</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md">

                                    <div class="menu-common-list">
                                        <ul>
                                            <li><a href="offers.php" class="nav-submenu-title"> One Rupee Offers</a></li>
                                        </ul>
                                    </div>
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Cashback Offers </div>
                                        <ul>
                                            <li><a href="offers.php">10% Cashback on 5000</a></li>
                                        </ul>
                                    </div>
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title">Coupons</div>

                                        <ul>
                                            <li>
                                                <a href="offers.php">Extra 10% OFF on ICICI Bank Cards.</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>



                                <div class="col-md-3">
                                    <img src="<?php echo base_url(); ?>assets/images/offer-nav-img.jpg" alt="" class="img-fluid">
                                </div>

                            </div>
                        </div>

                    </div> -->
                        </li>

                        <li><a href="blog.php">Blog </a>
                        </li>

                        <li class="p-relative">
                            <a href="pro/index.php">BMM PRO
                                <span class="new-tag new">FREE</span>
                            </a>
                        </li>


                    </ul>
                </div>
            </nav>
        <?php
        }
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

    <script>
        $(function() {
            const tokanInfoConst = localStorage.getItem("token");
            $.ajax({
                url: base_url + 'salon/get-info.php?token= ' + tokanInfoConst + ' &q=info,services,amenities,timings',
                type: 'GET',
                dataType: 'JSON',
                success: function(result) {
                    // $('#login_email').text(result.result.info.email_id.slice(0, 7) + '..');
                    var loginEmail = `<div class="custom-dropdown-btn">
                                    <a class="sign-up">
                                    <i class="far fa-user-circle float-left mr-2"></i> <span> ${result.result.info.email_id.slice(0, 7) + '..'} </span>
                                </a>
                            </div>`
                    $('#loginBtn').prepend(loginEmail);
                },
                error: function() {
                    var loginEmail = `<div class="custom-dropdown-common-btn">
                <a href="login.php">
                <i class="far fa-user-circle float-left mr-2"></i> <span>Sign In</span>
                </a>
                </div>
                `
                    $('#loginBtn').prepend(loginEmail);
                }
            });
        });
    </script>