<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<section class="user-manage-profile">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="manage-list">
                    <a href="#" class="makeup-artist-opener"><span><i class="far fa-clock icon"></i> Timings</span> <i class="fa fa-chevron-circle-down icon float-right"></i></a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="stylist-details.php"><i class="fa fa-user icon"></i> Stylist Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="stylist-manage-pics.php"><i class="fa fa-image icon"></i>Manage Pics & Videos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="stylist-manage-job-cards.php"><i class="fa fa-credit-card icon"></i> Manage Job Cards </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="stylist-services.php"><i class="fa fa-cog icon"></i> Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="stylist-timings.php"><i class="far fa-clock icon"></i> Timings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="stylist-manage-reviews.php"><i class="fa fa-star icon"></i>Manage Reviews</a>
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
                                <h2 class="h2-heading">Timings</h2>
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="form-group all-checkbox-label">
                                            <label> <input type="checkbox" checked=""> &nbsp; Monday</label> &nbsp;
                                            <label> <input type="checkbox" checked=""> &nbsp; Tuesday</label> &nbsp;
                                            <label> <input type="checkbox" checked=""> &nbsp; Wednesday</label> &nbsp;
                                            <label> <input type="checkbox" checked=""> &nbsp; Thursday</label> &nbsp;
                                            <label> <input type="checkbox" checked=""> &nbsp; Friday</label> &nbsp;
                                            <label> <input type="checkbox"> &nbsp; Saturday</label> &nbsp;
                                            <label> <input type="checkbox"> &nbsp; Sunday</label> &nbsp;
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>From</label>
                                                    <input type="time" class="form-control" value="10:00">
                                                </div>
                                                <div class="col-md-3">
                                                    <label>To</label>
                                                    <input type="time" class="form-control" value="21:00">
                                                </div>
                                                <!-- <div class="col-md-3">
                                                <input type="text" class="form-control" placeholder="From">
                                            </div> -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <a href="#" class="btn btn-pink float-right">Update</a>
                                    </div>
                                </div>

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