<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<section class="blog-main-page">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-post-box-detail">
                            <h2></h2>
                            <div class="blog-category"></div>
                            <div class="blog-post-box-detail-body">
                            </div>
                            <div class="blog-tags">
                                <ul class="list-unstyled">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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

<?php include 'include/footer.php' ?>

<script>
    // -----------------------POST DETAIL START HERE ----------------------------------------
    $(function() {
        let post_id = getParameterByName('post-id'); // get post-id from url [query params]
        let get_value_params_name = function() {
            let post_data = {
                post_id: post_id
            }
            $.ajax({
                url: base_url + "blog/post-detail.php",
                type: "GET",
                data: post_data,
                dataType: "JSON",
                success: function(result) {
                    $(".blog-post-box-detail h2").text(result.heading);
                    $(".blog-post-box-detail .blog-post-box-detail-body").html(result.description);
                    $(".blog-post-box-detail .blog-category").html('<a href = "">' + result.category.name + '</a>');
                    if (result.tags.length > 0) {
                        result.tags.forEach(function(val, key) {
                            let tag = `<li class = "d-inline-block mr-2">
                                <a href = "#" class = "badge-primary p-2">${val.name}</a>
                            </li>`;
                            $(".blog-post-box-detail .blog-tags ul").append(tag);
                        })
                    }
                }
            });
        };
        get_value_params_name();
        // -----------------------POST DETAIL ENDS HERE ----------------------------------------


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
                            <a href="#" class="social-links">${val.heading}</a>
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