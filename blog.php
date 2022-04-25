<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<section class="blog-main-page">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <ul class="blog-filter mb-4">
                    <li>Bridal Makeup <i class="fa fa-times"></i> </li>
                </ul>

                <div class="row" id="post-list">
                    <div class="col-md-6">
                        <div class="blog-item">
                            <img src="" class="img-fluid">
                            <span class="blog-category"></span>
                            <!-- <a href="blog-post-1.php">
                                <h4>Glossy Makeup Is Officially All Over Instagram Again—And We’re Here</h4>
                            </a> -->
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                        <div class="blog-item">
                            <img src="" class="img-fluid">
                            <span class="blog-category">Bridal Makeup</span>
                            <a href="blog-post-1.php">
                                <h4>Glossy Makeup Is Officially All Over Instagram Again—And We’re Here</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <img src="assets/images/blog-img-1.jpg" class="img-fluid">
                            <span class="blog-category">Bridal Makeup</span>
                            <a href="blog-post-1.php">
                                <h4>Glossy Makeup Is Officially All Over Instagram Again—And We’re Here</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item">
                            <img src="assets/images/blog-img-1.jpg" class="img-fluid">
                            <span class="blog-category">Bridal Makeup</span>
                            <a href="blog-post-1.php">
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
                                <a href="blog-post-1.php">
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
                                <a href="blog-post-2.php">
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
                                <a href="blog-post-3.php">
                                    <h4>The Bride Story: Your Complete Bridal Package!</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-post-box">
                            <img src="assets/images/blog-img-4.jpg" class="img-fluid">
                            <div class="blog-post-box-body">
                                <a href="blog-post-4.php">
                                    <h4>Ideas for Best Bridal Outfits for all Indian Wedding Functions!</h4>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-post-box">
                            <img src="assets/images/blog-img-5.jpg" class="img-fluid">
                            <div class="blog-post-box-body">
                                <a href="blog-post-5.php">
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
                                <a href="blog-post-6.php">
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
                                <a href="blog-post-8.php">
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
                        <li>
                            <a href="#"></a>
                        </li>
                    </ul>
                </div>

                <img src="assets/images/blog-ad.jpg" class="img-thumbnail mb-4 mt-4" alt="">

                <div class="blog-cateogry-title mb-3">
                    <span> Recent Posts</span>
                </div>
                <div class="blog-categories-list" id="recent-post">
                    <ul>
                        <li><a href="blog-post-1.php"></a></li>
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

<?php include 'include/footer.php' ?>

<script>
    $(function() {
        var page_no = "1";
        var page_count = "10";
        var category_id = "";
        let total_pages = "";

        let get_post_listing = function() {
            let paramsData = {
                page_no: page_no,
                page_count: page_count,
                category_id: category_id,
            }

            $.ajax({
                url: base_url + "blog/post-list.php",
                type: "GET",
                data: paramsData,
                dataType: "JSON",
                success: function(result) {
                    let data = "";
                    result.result.forEach(function(val) {
                        data += `<div class="col-md-6">
                            <div class="blog-item">
                                <img src="${val.image.name}" class="img-fluid">
                                <span class="blog-category">${val.category.name}</span>
                                <a href="<?php echo base_url(); ?>detail-post.php?post-id=${val.id}">
                                    <h4>${val.heading}</h4>
                                </a>
                            </div>
                        </div>`;
                    });
                    $("#post-list").html(data);

                    // PAGINATION
                    let paginationLi = `<li class="page-item pagination-previous-btn"><a class="page-link">Previous</a></li>`
                    total_pages = Math.ceil(result.total / page_count);
                    for (var i = 1; i <= total_pages; i++) {
                        if (i == page_no) {
                            paginationLi += `<li class="page-item pagination-page-no active" data_id="${i}"><a class="page-link">${i}</a></li>`
                        } else {
                            paginationLi += `<li class="page-item pagination-page-no" data_id="${i}"><a class="page-link">${i}</a></li>`
                        }
                    }
                    paginationLi += `<li class="page-item pagination-next-btn"><a class="page-link " >Next</a></li>`

                    $("#blog_listing_pagination").html(paginationLi);
                    if (total_pages == page_no) {
                        $(".pagination-next-btn").hide();
                    }

                    if (page_no == 1) {
                        $(".pagination-previous-btn").hide();
                    }
                }
            });
        }
        get_post_listing();

        $("#blog_listing_pagination").on('click', '.pagination-page-no', function() {
            page_no = $(this).attr('data_id');
            get_post_listing();
        })

        $("#blog_listing_pagination").on('click', '.pagination-next-btn', function() {
            page_no = parseInt(page_no) + 1;
            get_post_listing();

        })
        $("#blog_listing_pagination").on('click', '.pagination-previous-btn', function() {
            page_no = parseInt(page_no) - 1;
            get_post_listing();

        })


        // ------------------------CATEGORIES STARTS HERE------------------------------------------------- 
        let get_category_list = function() {
            $.ajax({
                url: base_url + "blog/category-list.php",
                type: "GET",
                dataType: "JSON",
                success: function(result) {
                    let data = "";
                    result.result.forEach(function(val) {
                        data += `<li>
                                <a href="#" class="social-links">${val.name}</a>
                            </li>`;
                    });
                    $("#categories-list ul").html(data);
                }
            });
        };
        get_category_list();
        // ------------------------CATEGORIES ENDS HERE------------------------------------------------- 



        //--------------------------RECENT POST STARTS HERE---------------------------------------------
        let get_recentpost_list = function() {
            $.ajax({
                url: base_url + "blog/recent-post.php",
                type: "GET",
                dataType: "JSON",
                success: function(result) {
                    let data = "";
                    result.result.forEach(function(val) {
                        data += `<li>
                            <a href="<?php echo base_url(); ?>detail-post.php?post-id=${val.id}" class="social-links">${val.heading}</a>
                        </li>`;
                    });
                    $("#recent-post ul").html(data);
                }
            });
        };
        get_recentpost_list();
        //--------------------------RECENT POST ENDS HERE---------------------------------------------
    });
</script>