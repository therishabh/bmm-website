<div id="body-wrapper">
    <div id="desktop-left-bar">
        <section id="left-pannel">
            <ul>
                <li>
                    <a href="dashboard" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'dashboard') !== false ? 'active' : '' ?>">
                        <i class="fa fa-tachometer" aria-hidden="true"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="manage-profile" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'manage-profile') !== false ? 'active' : '' ?>">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Manage Profile
                    </a>
                </li>
                <li>
                    <a href="manage-booking" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'manage-booking') !== false ? 'active' : '' ?>">
                        <i class="fa fa-book" aria-hidden="true"></i>
                        Manage Booking
                    </a>
                </li>
                <li>
                    <a href="manage-services" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'manage-services') !== false ? 'active' : '' ?>">
                        <i class="fa fa-sliders" aria-hidden="true"></i>
                        Manage Services
                    </a>
                </li>
                <li>
                    <a href="manage-package" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'manage-package') !== false ? 'active' : '' ?>">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        Manage Package
                    </a>
                </li>
                <li class="manage-amenities">
                    <a href="manage-amenities" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'manage-amenities') !== false ? 'active' : '' ?>">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                        Manage Amenities
                    </a>
                </li>
                <li>
                    <a href="manage-pricing" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'manage-pricing') !== false ? 'active' : '' ?>">
                        <i class="fa fa-inr" aria-hidden="true"></i>
                        Manage Pricing
                    </a>
                </li>
                <li>
                    <a href="manage-discount-coupon" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'manage-discount') !== false ? 'active' : '' ?>">
                        <i class="fa fa-tag" aria-hidden="true"></i>
                        Manage Discount/Coupon
                    </a>
                </li>
                <li>
                    <a href="bank-info" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'bank-info') !== false ? 'active' : '' ?>">
                        <i class="fa fa-university" aria-hidden="true"></i>
                        Bank Info
                    </a>
                </li>
                <li class="manage-timing">
                    <a href="manage-timing" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'manage-timing') !== false ? 'active' : '' ?>">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        Manage Timing
                    </a>
                </li>
                <li>
                    <a href="manage-documents" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'manage-documents') !== false ? 'active' : '' ?>">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        Documents
                    </a>
                </li>
                <li>
                    <a href="gallery" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'gallery') !== false ? 'active' : '' ?>">
                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="salon-subscription" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'salon-subscription') !== false ? 'active' : '' ?>">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                        Salon Subscription
                    </a>
                </li>
                <li>
                    <a href="makeup-artist-subscription" class="<?php echo strpos($_SERVER['REQUEST_URI'], 'makeup-artist-subscription') !== false ? 'active' : '' ?>">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                        Makeup Artist Subscription
                    </a>
                </li>
                <li class="logoutLi">
                    <a href="" onclick="logout();">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </section>
    </div>

    <div class="responsive-rgba text-right">
        </div>
    <section id="left-pannel-mobile">

    </section>