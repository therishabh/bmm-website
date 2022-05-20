<input type="hidden" id="blog_category" value="<?php echo $blog_cat_id; ?>" />
<input type="hidden" id="blog_category_name" value="<?php echo $blog_cat_name; ?>" />
<section class="blog-main-page">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <ul class="blog-filter mb-4 d-none" id="blog-filter">
                    <li><span></span> <i class="fa fa-times" onclick="removeFilter();"></i> </li>
                </ul>

                <div class="row" id="post-list">
                    <div class="col-md-6">
                        <div class="blog-item">
                            <img src="" class="img-fluid">
                            <span class="blog-category"></span>
                            <!-- <a href="blog-post-1">
                                <h4>Glossy Makeup Is Officially All Over Instagram Again—And We’re Here</h4>
                            </a> -->
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="blog-item">
                            <img src="" class="img-fluid">
                            <span class="blog-category">Bridal Makeup</span>
                            <a href="blog-post-1">
                                <h4>Glossy Makeup Is Officially All Over Instagram Again—And We’re Here</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <img src="assets/images/blog-img-1.jpg" class="img-fluid">
                            <span class="blog-category">Bridal Makeup</span>
                            <a href="blog-post-1">
                                <h4>Glossy Makeup Is Officially All Over Instagram Again—And We’re Here</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <img src="assets/images/blog-img-1.jpg" class="img-fluid">
                            <span class="blog-category">Bridal Makeup</span>
                            <a href="blog-post-1">
                                <h4>Glossy Makeup Is Officially All Over Instagram Again—And We’re Here</h4>
                            </a>
                        </div>
                    </div> -->
                </div>

                <ul class="pagination justify-content-center mt-5" id="blog_listing_pagination">
                    <!-- <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li> -->
                </ul>

                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="blog-cateogry-title mb-3">
                            <span> Work from Home</span>
                        </div>

                        <div class="blog-post-box">
                            <img src="assets/images/blog-img-1.jpg" class="img-fluid">
                            <div class="blog-post-box-body">
                                <a href="blog-post-1">
                                    <h4>Cracking the Perfect Work from Home Make-up Look!</h4>
                                </a>

                            </div>
                        </div>

                        <div class="blog-post-box blog-post-small-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/blog-img-1-sml.jpg" class="img-fluid">
                                </div>
                                <div class="col-md-8 pl-0">
                                    <div class="blog-post-box-body pl-0">
                                        <a href="#">
                                            <h4>Detecting Early Signs of Skin Ageing & Solutions</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="blog-post-box blog-post-small-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/blog-img-2-sml.jpg" class="img-fluid">
                                </div>
                                <div class="col-md-8 pl-0">
                                    <div class="blog-post-box-body pl-0">
                                        <a href="#">
                                            <h4>How to Control or Avoid the Anti-Aging Conditions?</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="blog-post-box blog-post-small-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/blog-img-3-sml.jpg" class="img-fluid">
                                </div>
                                <div class="col-md-8 pl-0">
                                    <div class="blog-post-box-body pl-0">
                                        <a href="#">
                                            <h4>Make-up Artist Services Improve Despite Covid’19 Impact!</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="col-md-6">
                        <div class="blog-cateogry-title mb-3">
                            <span>Eye Care</span>
                        </div>

                        <div class="blog-post-box">
                            <img src="assets/images/blog-img-2.jpg" class="img-fluid">
                            <div class="blog-post-box-body">
                                <a href="blog-post-2">
                                    <h4>The Best Eye Care Products to Nourish your Under Eyes</h4>
                                </a>
                                <p>These days being at home, unable to step out even for work, the most exerted and probably taken for granted part of us...</p>
                            </div>
                        </div>

                        <div class="blog-post-box blog-post-small-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/blog-img-4-sml.jpg" class="img-fluid">
                                </div>
                                <div class="col-md-8 pl-0">
                                    <div class="blog-post-box-body pl-0">
                                        <a href="#">
                                            <h4>Steps Make-up Artists Can Take to Make Things Better</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="blog-post-box blog-post-small-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/blog-img-5-sml.jpg" class="img-fluid">
                                </div>
                                <div class="col-md-8 pl-0">
                                    <div class="blog-post-box-body pl-0">
                                        <a href="#">
                                            <h4> Get the Best Beauty & Bridal Services - Click & Order with Book My Makeup!</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="blog-post-box blog-post-small-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/blog-img-6-sml.jpg" class="img-fluid">
                                </div>
                                <div class="col-md-8 pl-0">
                                    <div class="blog-post-box-body pl-0">
                                        <a href="#">
                                            <h4>The Best Eye Make-up Products to Make Your Eyes Dazzle!</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="blog-cateogry-title mb-3">
                            <span>Bridal Makeup</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-post-box">
                            <img src="assets/images/blog-img-3.jpg" class="img-fluid">
                            <div class="blog-post-box-body">
                                <a href="blog-post-3">
                                    <h4>The Bride Story: Your Complete Bridal Package!</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-post-box">
                            <img src="assets/images/blog-img-4.jpg" class="img-fluid">
                            <div class="blog-post-box-body">
                                <a href="blog-post-4">
                                    <h4>Ideas for Best Bridal Outfits for all Indian Wedding Functions!</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-post-box">
                            <img src="assets/images/blog-img-5.jpg" class="img-fluid">
                            <div class="blog-post-box-body">
                                <a href="blog-post-5">
                                    <h4>Make-up Products that are a Must for Every Bride’s Vanity Box!</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="blog-cateogry-title mb-3">
                            <span> Lip Care</span>
                        </div>

                        <div class="blog-post-box">
                            <img src="assets/images/blog-img-6.jpg" class="img-fluid">
                            <div class="blog-post-box-body">
                                <a href="blog-post-6">
                                    <h4>What are the 5 Best Lipstick Shades to Try in Summers!</h4>
                                </a>
                                <p>‘Give a girl the right lipstick and she can rule the world’ is the perfect saying for almost every woman alive on earth. Lip shades are...</p>
                            </div>
                        </div>

                        <div class="blog-post-box blog-post-small-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/blog-img-7-sml.jpg" class="img-fluid">
                                </div>
                                <div class="col-md-8 pl-0">
                                    <div class="blog-post-box-body pl-0">
                                        <a href="#">
                                            <h4>Book Online Salon Booking Services in Your Area with Book My Makeup!</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="blog-post-box blog-post-small-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/blog-img-8-sml.jpg" class="img-fluid">
                                </div>
                                <div class="col-md-8 pl-0">
                                    <div class="blog-post-box-body pl-0">
                                        <a href="#">
                                            <h4>Book Expert Make-up Artists Online in Your Locality with Book My Make-up!</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="blog-post-box blog-post-small-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/blog-img-9-sml.jpg" class="img-fluid">
                                </div>
                                <div class="col-md-8 pl-0">
                                    <div class="blog-post-box-body pl-0">
                                        <a href="#">
                                            <h4>How Every Bride Can Select the Right Make-up Artist for her D-Day!</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                    <div class="col-md-6">
                        <div class="blog-cateogry-title mb-3">
                            <span>Make-up</span>
                        </div>

                        <div class="blog-post-box">
                            <img src="assets/images/blog-img-8.jpg" class="img-fluid">
                            <div class="blog-post-box-body">
                                <a href="blog-post-8">
                                    <h4>Top 10 Beauty & Make-up Hacks Every Bride Can Rock for her D-day!</h4>
                                </a>
                                <p>Weddings count for the most wonderful of days in anyone’s life and they are here to stay forever in one’s memories and...</p>
                            </div>
                        </div>

                        <div class="blog-post-box blog-post-small-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/blog-img-10-sml.jpg" class="img-fluid">
                                </div>
                                <div class="col-md-8 pl-0">
                                    <div class="blog-post-box-body pl-0">
                                        <a href="#">
                                            <h4>The Basic Men’s Grooming Guide - Be your Best Version!!</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="blog-post-box blog-post-small-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/blog-img-11-sml.jpg" class="img-fluid">
                                </div>
                                <div class="col-md-8 pl-0">
                                    <div class="blog-post-box-body pl-0">
                                        <a href="#">
                                            <h4>Best Make-up Hacks & Products to Use on Sensitive Skin!</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="blog-post-box blog-post-small-box">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="assets/images/blog-img-12-sml.jpg" class="img-fluid">
                                </div>
                                <div class="col-md-8 pl-0">
                                    <div class="blog-post-box-body pl-0">
                                        <a href="#">
                                            <h4>Popular Brands & Products for Sensitive Skin</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div> -->

            </div>

            <div class="col-md-4">
                <div class="blog-cateogry-title mb-3">
                    <span> Categories</span>
                </div>
                <div class="blog-categories-list" id="categories-list">
                    <ul>
                        
                    </ul>
                </div>

                <img src="assets/images/blog-ad.jpg" class="img-thumbnail mb-4 mt-4" alt="">

                <div class="blog-cateogry-title mb-3">
                    <span> Recent Posts</span>
                </div>
                <div class="blog-categories-list" id="recent-post">
                    <ul>
                        <li><a href="blog-post-1"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="stripe-banner-section">
    <div class="container">
        <img src="assets/images/stripe-banner-1.jpg" alt="" class="img-fluid">
    </div>
</section>
