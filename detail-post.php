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
                <div class="blog-categories-list">
                    <ul>
                        <li>
                            <a href="#">Makeup</a>
                        </li>

                        <li>
                            <a href="#">Makeup</a>
                        </li>
                        <li>
                            <a href="#">Makeup</a>
                        </li>
                        <li>
                            <a href="#">Makeup</a>
                        </li>
                        <li>
                            <a href="#">Makeup</a>
                        </li>
                        <li>
                            <a href="#">Makeup</a>
                        </li>
                        <li>
                            <a href="#">Makeup</a>
                        </li>
                    </ul>
                </div>

                <img src="assets/images/blog-ad.jpg" class="img-thumbnail mb-4 mt-4" alt="">

                <div class="blog-cateogry-title mb-3">
                    <span> Recent Posts</span>
                </div>
                <div class="blog-categories-list">
                    <ul>
                        <li><a href="blog-post-1.php">Cracking the Perfect Work from Home Make-up Look!</a></li>
                        <li><a href="blog-post-2.php">The Best Eye Care Products to Nourish your Under Eyes</a></li>
                        <li><a href="blog-post-3.php">The Bride Story: Your Complete Bridal Package!</a></li>
                        <li><a href="blog-post-4.php">Ideas for Best Bridal Outfits for all Indian Wedding Functions!</a></li>
                        <li><a href="blog-post-5.php">Make-up Products that are a Must for Every Bride’s Vanity Box!</a></li>
                        <li><a href="blog-post-6.php">What are the 5 Best Lipstick Shades to Try in Summers!</a></li>
                        <li><a href="blog-post-7.php">The Best Eye Make-up Products, to Make Your Eyes Dazzle!</a></li>
                        <li><a href="blog-post-8.php">Top 10 Beauty & Make-up Hacks Every Bride Can Rock for her D-day!</a></li>

                    </ul>
                </div>
            </div>
        </div>


    </div>
</section>

<?php include 'include/footer.php' ?>

<script>
    $(function() {
        let post_id = getParameterByName('post-id');
        let get_value_params_name = function() {
            let postid = {
                post_id: post_id
            };
            $.ajax({
                url: base_url + "/blog/post-detail.php",
                type: "GET",
                data: postid,
                dataType: "JSON",
                success: function(result) {
                    $(".blog-post-box-detail h2").text(result.heading);
                    $(".blog-post-box-detail .blog-post-box-detail-body").html(result.description);
                    $(".blog-post-box-detail .blog-category").html('<a href="">' + result.category.name + '</a>');
                    if (result.tags.length > 0) {
                        result.tags.forEach(function(val, key) {
                            let tag = `<li class="d-inline-block mr-2">
                                        <a href="#" class="badge-primary p-2">${val.name}</a>
                                    </li>`;
                            $(".blog-post-box-detail .blog-tags ul").append(tag);
                        })
                    }





                }
            });
        };
        get_value_params_name();
    });
</script>