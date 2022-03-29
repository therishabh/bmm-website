<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<section class="user-manage-profile">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="manage-list">
                    <a href="#" class="makeup-artist-opener"><span><i class="fa fa-image icon"></i> Manage Pics & Videos</span> <i class="fa fa-chevron-circle-down icon float-right"></i></a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-location-details.php"><i class="fa fa-map-marker-alt icon"></i> Branch Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-add-stylist.php"><i class="fa fa-user icon"></i>Add Stylist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-manage-bookings.php"><i class="fa fa-users icon"></i> Manage Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-create-bookings.php"><i class="fa fa-user-plus icon"></i> Create Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-manage-job-cards.php"><i class="fa fa-credit-card icon"></i> Manage Job Cards </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-manage-payments.php"><i class="fa fa-rupee-sign icon"></i> Manage Payments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-services.php"><i class="fa fa-cog icon"></i> Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-amenities.php"><i class="fa fa-hands icon"></i>Amenities </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-timings.php"><i class="far fa-clock icon"></i> Timings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-manage-pics.php"><i class="fa fa-image icon"></i> Manage Pics & Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="salon-bo-manage-reviews.php"><i class="fa fa-star icon"></i>Manage Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-power-off icon"></i> Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="manage-user-icon">
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-12">
                                <h2 class="h2-heading">Manage Pics &amp; Videos</h2>
                                <h5 class="float-left">Photos</h5>
                                <a href="#" class="btn btn-pink float-right">Upload Photos</a>
                                <div class="clearfix"></div>
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                    </div>
                                    <div class="col-md-3">
                                        <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                    </div>
                                    <div class="col-md-3">
                                        <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                    </div>
                                    <div class="col-md-3">
                                        <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <img src="assets/images/bmm-post-1.jpg" class="img-thumbnail">
                                    </div>
                                </div>


                                <hr>
                                <h5 class="float-left">Videos</h5>
                                <a href="#" class="btn btn-pink float-right">Upload Videos</a>
                                <div class="clearfix"></div>
                                <section class="beauty-advice">
                                    <div class="mt-4">
                                        <div class="row">
                                            <div class="col-md-6 col-12 m-10">
                                                <a href="https://www.youtube.com/watch?v=UpU8sAXzYEs" target="_blank" class="box-shadow">
                                                    <img src="assets/images/bmm-tv-thumb.jpg" class="img-fluid">

                                                </a>
                                            </div>
                                            <div class="col-md-6 col-12 m-10">
                                                <a href="#" target="_blank" class="box-shadow">
                                                    <img src="assets/images/bmm-tv-thumb-2.jpg" class="img-fluid">

                                                </a>
                                            </div>
                                            <div class="col-md-6 col-12 m-10">
                                                <a href="#" target="_blank" class="box-shadow">
                                                    <img src="assets/images/bmm-tv-thumb-3.jpg" class="img-fluid">

                                                </a>
                                            </div>
                                            <div class="col-md-6 col-12 m-10">
                                                <a href="#" target="_blank" class="box-shadow">
                                                    <img src="assets/images/bmm-tv-thumb-4.jpg" class="img-fluid">

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php' ?>
</body>
<script src="assets/highslide/highslide-with-gallery.js"></script>

</html>