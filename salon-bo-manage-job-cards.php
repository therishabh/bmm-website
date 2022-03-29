<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<section class="user-manage-profile">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="manage-list">
                    <a href="#" class="makeup-artist-opener"><span><i class="fa fa-credit-card icon"></i> Manage Job Cards</span> <i class="fa fa-chevron-circle-down icon float-right"></i></a>
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
                            <a class="nav-link" href="salon-bo-manage-pics.php"><i class="fa fa-image icon"></i>Manage Pics & Videos</a>
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
                                <h2 class="h2-heading">Manage Job Cards</h2>

                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Customer Name </label>
                                            <input type="text" class="form-control" value="Rohit" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Stylist Name</label>
                                            <select name="" id="" class="form-control">
                                                <option>Siddharth</option>
                                                <option>Ravi</option>
                                                <option>Rohit</option>
                                                <option>Neeraj</option>
                                                <option>Suman</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" value="9876543210" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Services</label>
                                            <select name="" id="" class="form-control">
                                                <option>Makeup</option>
                                                <option>Gents All Services</option>
                                                <option>Ladies All Services</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <a href="salon-bo-manage-job-cards-form.php" class="btn btn-pink float-right">Create</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive mt-4">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Customer Name</th>
                                                <th>Stylist Name</th>
                                                <th>Phone Number</th>
                                                <th>Service</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Rohit Verma</td>
                                                <td>Siddharth</td>
                                                <td>9876543210</td>
                                                <td>Hair Cut</td>
                                                <td><b class="text-warning"> Progress</b></td>
                                            </tr>
                                            <tr>
                                                <td>Rohit Verma</td>
                                                <td>Siddharth</td>
                                                <td>9876543210</td>
                                                <td>Hair Cut</td>
                                                <td> <b class="text-success"> Completed</b></td>
                                            </tr>
                                            <tr>
                                                <td>Rohit Verma</td>
                                                <td>Siddharth</td>
                                                <td>9876543210</td>
                                                <td>Hair Cut</td>
                                                <td><b class="text-primary">Partially Completed</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
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