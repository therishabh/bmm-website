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
                    <div class="col-md-5 offset-md-1">
                        <input class="form-control advancedAutoComplete" type="text" autocomplete="off" placeholder="Salons, Makeup Artists, Bridal Makeup" />
                    </div>

                    <div class="col-md-3 col-1 responsive-search-bar">
                        <a href="#" class="d-block">
                            <i class='fa fa-search'></i>
                        </a>
                    </div>
                    <div class="col-md-3 col-3">
                        <div class="top-right-list">

                            <div class="top-right-list-item">
                                <div class="custom-dropdown">
                                    <div class="custom-dropdown-btn">
                                        <a class="sign-up loginBtn"><i class="far fa-user-circle float-left mr-2"></i> <span> Login </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="top-right-list-item">
                                <i class="far fa-heart text-pink icons"></i>
                            </div>

                            <div class="top-right-list-item">
                                <a href="#">
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
                                        <img src="<?php echo base_url(); ?>assets/images/submenu-salon-female-img.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>


                                <!-- <div class="row">
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

                                    <div class="col-md-3">
                                        <img src="<?php echo base_url(); ?>assets/images/submenu-salon-female-img.jpg" alt="" class="img-fluid">
                                    </div>

                                </div> -->

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


                        <li><a href="makeup-academy.php">Makeup Academy</a></li>

                        <li><a href="cards.php">Cards </a></li>
                        <li><a href="im-beautiful.php">I'm Beautiful &nbsp; <i class="fa fa-heart"></i> </a>

                        <li>
                            <a href="<?php echo base_url(); ?>bmm-tv.php"> BMM TV</a>
                        </li>
                        <li>
                            <a href="book-appointment.php"> Quick Booking &nbsp; <i class="fa fa-calendar-alt"></i> </a>
                        </li>
                        <li class="active-offer-nav"><a href="offers.php">Offers</a>

                        </li>

                        <li><a href="blog.php">Blog </a>
                        </li>

                        <li class="p-relative">
                            <a href="pro/index.php">BMM PRO
                                <!-- <span class="new-tag new">FREE</span> -->
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
                                    <button type="button" id="signin-with-otp-btn" class="btn login-btn">Sign In with OTP</button>
                                </div>
                                <p class="text-white">Don't Have An Account? <span class="registerBtn cursor-pointer">Join Now</span></p>
                            </div>
                        </form>
                        <form class="login-form login-pro-form d-custom-none" id="loginStepTwo">
                            <div class="form-heading">Sign In - Verify OTP</div>
                            <div class="register-steps register-step2 mt-3">
                                <div class="form-group">
                                    <label for="otp_text">OTP</label>
                                    <input type="text" id="otp_text" placeholder="Enter OTP" class="form-control" maxlength="6" name="otp">
                                </div>
                                <div class="form-group"></div>
                                <label class="resend-seconds"> <span class></span> sec</label>
                                <div class="cursor-pointer resend-btn">Resend OTP</div>
                                <div class="form-group text-center mt-3">
                                    <div class="go-back-btn btn login-btn">Go Back</div>
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
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile_no">
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
                                <div class="cursor-pointer register-resend-btn">Resend OTP</div>
                                <div class="form-group text-center mt-3">
                                    <div class="go-back-btn btn login-btn">Go Back</div>
                                    <button type="submit" id="verifyOTP" class="btn login-btn">Verify OTP</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </section>

            </div>
        </div>
    </div>

    <script>
        $(function() {
            const token = localStorage.getItem("token");

            $('.loginBtn').click(function() {
                $('.modal').modal('hide');
                $('#loginModal').modal('show');
            });
            $('.registerBtn').click(function() {
                $('.modal').modal('hide');
                $('#registerModal').modal('show');
            });


            // *****************
            // Login
            // *****************

            let otpTiming = 60;
            let tempToken;
            let interval;

            $("#loginForm").validate({
                rules: {
                    email_mobile: "required",
                    password: "required",
                },
                messages: {
                    email_mobile: "Please enter Mobile Number or Email id",
                    password: "Please enter Password",
                },

                submitHandler: function(form) {
                    let post_data = {
                        email_mobile: $('#loginForm [name=email_mobile]').val(),
                        password: $('#loginForm [name=password]').val(),
                    }
                    $("#signInBtn").attr('disabled', true);
                    $.ajax({
                        url: `${base_url}/user/auth/login.php`,
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(post_data),
                        success: function(result) {
                            $("#signInBtn").removeAttr('disabled');
                            toastr.success("Sign in successfully");
                            localStorage.setItem("userToken", result.token);
                            window.location.replace('user/dashboard.php');
                        },
                        error: function(error) {
                            $("#signInBtn").removeAttr('disabled');
                            toastr.error(error.responseJSON.message);
                        }
                    });
                }
            });

            $("#signin-with-otp-btn").click(function() {
                sendOTPForLogin();
            });

            function sendOTPForLogin() {
                $('#loginStepTwo input[name=otp]').val("")
                let post_data = {
                    mobile_no: $("#loginForm [name=email_mobile]").val(),
                }
                if (!!post_data.mobile_no) {
                    $("#signin-with-otp-btn").attr('disabled', true);
                    $.ajax({
                        url: base_url + '/user/auth/login-with-otp.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(post_data),
                        success: function(result) {
                            $("#signin-with-otp-btn").removeAttr('disabled');
                            $("#loginStepTwo").show();
                            $("#loginForm").hide();
                            toastr.success(result.message);
                            tempToken = result.token;
                            signInResendSetInterval();
                        },
                        error: function(error) {
                            $("#signin-with-otp-btn").removeAttr('disabled');
                            toastr.error(error.responseJSON.message);
                        }
                    });
                } else {
                    toastr.error("Please enter Mobile Number");
                }
            }

            function signInResendSetInterval() {
                $('.resend-btn').hide();
                $('.resend-seconds').show();
                $("#signin-with-otp-btn").hide();
                $("#timer-btn").show();
                let resend_seconds = otpTiming;
                $('.resend-seconds span').text(resend_seconds);
                $('#timer-btn span').text(resend_seconds);
                interval = setInterval(function() {
                    resend_seconds--;
                    if (resend_seconds > 1) {
                        $('.resend-seconds span').text(resend_seconds);
                        $('#timer-btn span').text(resend_seconds);
                    } else {
                        $('.resend-seconds').hide();
                        $('.resend-btn').show();
                        $("#signin-with-otp-btn").show();
                        $("#timer-btn").hide();
                        clearInterval(interval);
                        return;
                    }
                }, 1000);
            }

            $('.resend-btn').click(function() {
                sendOTPForLogin();
            });

            $("#loginStepTwo .go-back-btn").click(function() {
                $("#loginStepTwo").hide();
                $("#loginForm").show();
                $("#signin-with-otp-btn").show();
            });

            $("#loginStepTwo").validate({
                rules: {
                    otp: {
                        required: true,
                        number: true,
                        minlength: 4
                    }
                },
                messages: {
                    otp: {
                        required: "Please enter OTP",
                        number: "Please enter a valid OTP",
                        minlength: "Please enter 4 digit OTP"
                    }
                },
                submitHandler: function(form) {
                    let post_data = {
                        otp: $('#loginStepTwo input[name=otp]').val(),
                        token: tempToken
                    }
                    $("#verifyOTP").attr('disabled', true);
                    $.ajax({
                        url: base_url + 'user/auth/verify-otp.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(post_data),
                        success: function(result) {
                            clearInterval(interval);
                            toastr.success('OTP successfully verified');
                            $("#verifyOTP").removeAttr('disabled');
                            localStorage.setItem("userToken", result.token);
                            window.location.replace('user/dashboard.php');
                        },
                        error: function(error) {
                            $("#verifyOTP").removeAttr('disabled');
                            toastr.error(error.responseJSON.message);
                        }
                    });
                }
            });

            // *****************
            // registerStepOne
            // *****************

            $("#registerStepOne").validate({
                rules: {
                    name: "required",
                    mobile_no: "required",
                    email_id: "required",
                    gender: "required",
                },
                messages: {
                    name: "Please enter Full Name",
                    mobile_no: "Please enter Mobile Number",
                    email_id: "Please enter Email Id",
                    gender: "Please select Gender",
                },

                submitHandler: function(form) {
                    let post_data = {
                        name: $('#registerStepOne [name=name]').val(),
                        mobile_no: $('#registerStepOne [name=mobile_no]').val(),
                        email_id: $('#registerStepOne [name=email_id]').val(),
                        gender: $('#registerStepOne [name=gender]').val(),
                    }
                    $("#registerBtn").attr('disabled', true);
                    $.ajax({
                        url: `${base_url}user/auth/signup.php`,
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(post_data),
                        success: function(result) {
                            debugger;
                            $("#registerStepOne #registerBtn").removeAttr('disabled')
                            $('#registerStepOne').hide();
                            $('#registerStepTwo').show();
                            tempToken = result.token;
                            resendSetInterval();
                        },
                        error: function(error) {
                            $("#registerBtn").removeAttr('disabled');
                            toastr.error(error.responseJSON.message);
                        }
                    });
                }
            });

            // *****************
            // registerStepTwo
            // *****************
            function resendSetInterval() {
                $('.register-resend-btn').hide();
                $('.register-resend-seconds').show();
                $("#registerBtn").hide();
                $("#timer-btn").show();
                let resend_seconds = otpTiming;
                $('.register-resend-seconds span').text(resend_seconds);
                $('#timer-btn span').text(resend_seconds);
                let interval = setInterval(function() {
                    resend_seconds--;
                    if (resend_seconds > 1) {
                        $('.register-resend-seconds span').text(resend_seconds);
                        $('#timer-btn span').text(resend_seconds);
                    } else {
                        $('.register-resend-seconds').hide();
                        $('.register-resend-btn').show();
                        $("#registerBtn").show();
                        $("#timer-btn").hide();
                        clearInterval(interval);
                        return;
                    }
                }, 1000);
            }

            $('.register-resend-btn').click(function() {
                let post_data = {
                    token: tempToken
                }
                $.ajax({
                    url: base_url + 'user/auth/resend-otp.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function() {
                        resendSetInterval();
                    }
                });
            });

            $("#registerStepTwo").validate({
                rules: {
                    otp: {
                        required: true,
                        number: true,
                        minlength: 4
                    }
                },
                messages: {
                    otp: {
                        required: "Please enter OTP",
                        number: "Please enter a valid OTP",
                        minlength: "Please enter 4 digit OTP"
                    }
                },
                submitHandler: function(form) {
                    let post_data = {
                        otp: $('#registerStepTwo input[name=otp]').val(),
                        token: tempToken
                    }
                    $("#verifyOTP").attr('disabled', true);
                    $.ajax({
                        url: base_url + 'user/auth/verify-otp.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(post_data),
                        success: function(res) {
                            // $('#registerStepTwo').hide();                            
                            toastr.success('You have successfully Registered');
                            localStorage.setItem("userToken", res.token);
                            $('#registerModal').modal('hide');
                            $("#verifyOTP").removeAttr('disabled');
                            window.location.replace('user/dashboard.php');
                        },
                        error: function(error) {
                            $("#verifyOTP").removeAttr('disabled');
                            toastr.error(error.responseJSON.message);
                        }
                    });
                }
            });

            $("#registerStepTwo .go-back-btn").click(function() {
                $('#registerStepTwo').hide();
                $('#registerStepOne').show();
                $('#registerBtn').show();
            })

            // *****************
            // advancedAutoComplete
            // *****************

            $('.advancedAutoComplete').autoComplete({
                minLength: 1,
                resolver: 'custom',
                formatResult: function(item) {
                    return {
                        value: item.name,
                        text: item.name,
                        html: [
                            `${item.name} ${item.genderType ? '['+ item.genderType +']' : '' }<br/><span>${item.category}</span>`,
                        ]
                    };
                },
                events: {
                    search: function(qry, callback) {
                        $.ajax(
                            `${base_url}user/search/get-search-list.php`, {
                                data: {
                                    'q': qry
                                }
                            }
                        ).done(function(res) {
                            let responseData = [];
                            categoryObj = {
                                "services": "Services",
                                "makeup_artist": "Makeup Artist",
                                "salon": "Salon",
                            }
                            for (let key in res.result) {
                                res.result[key].forEach(val => {
                                    let obj = {
                                        id: val.id,
                                        category: categoryObj[key],
                                        genderType: val.category,
                                        name: val.name
                                    }
                                    responseData.push(obj);
                                })
                            }
                            callback(responseData)
                        });
                    }
                }
            });

            $('.advancedAutoComplete').on('autocomplete.select', function(evt, item) {});

            $('.advancedAutoComplete').on('autocomplete.freevalue', function(evt, value) {});

            // *****************
            // getAllServices
            // *****************
            var getAllServices = function() {
                $(".loading-wrapper").show();
                var selectedServices = [];
                var intoSlug = function(str) {
                    return str.toLowerCase().split(' ').join('-').replace('&', '');
                }
                const url = `${base_url}/user/services/get-services.php`;
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function(result) {
                        console.log(result)
                        for (let key in result) {
                            if (key == 'ladies') {
                                $("#salonServices").append(`
                            <div class="">
                                <div id="${key+'-card-body-wrapper'}">
                                    <div class="row"></div>
                                </div>
                            </div>`);
                                for (let category in result[key]) {
                                    $(`#salonServices #${key}-card-body-wrapper .row`).append(
                                        `<div class="col-lg mb-4">
                                    <div class="menu-common-list">
                                        <div class="nav-submenu-title" data="${category}">${category}</div>
                                        <ul class="checkbox-wrapper ${intoSlug(category)}"></ul>                       
                                        </div>                
                                    </div>
                                    `
                                    );
                                    result[key][category].forEach(val => {
                                        var x = `#salonServices #${key}-card-body-wrapper .${intoSlug(category)}`;
                                        $(x).append(`
                                      <li><a href="service-list.php?service_id=${val.id}">${val.name}</a></li>
                                    `);
                                    })
                                }
                            }
                        }

                        $(".loading-wrapper").hide();
                        $("#salonServices").fadeIn(1000);
                        $(".services-page .button-wrapper button").fadeIn(1000);

                    }
                });
            }
            getAllServices();

            if (token) {
                $.ajax({
                    url: base_url + 'get-info.php?token= ' + token + ' &q=info,services,amenities,timings',
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
            }
        });
    </script>