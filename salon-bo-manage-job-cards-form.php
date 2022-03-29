<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<section class="user-manage-profile">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="manage-list">
                    <a href="#" class="makeup-artist-opener"><span><i class="fa fa-credit-card icon"></i> Manage Job Cards Form</span> <i class="fa fa-chevron-circle-down icon float-right"></i></a>
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
                                <h2 class="h2-heading">Manage Job Cards Form</h2>

                                <div class="row mt-4">
                                    <div class="col-md-12 text-center mb-4">
                                        <img src="assets/images/salon-logo-1.png" alt="" class="img-thumbnail">
                                        <h5 class="mt-3">Hair Masters</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Branch Address </label>
                                            <input type="text" class="form-control" value="Janakpuri Delhi">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Customer Name </label>
                                            <input type="text" class="form-control" value="Rohit">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile No </label>
                                            <input type="text" class="form-control" value="9876543210">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of Makeup</label>
                                            <input type="text" class="form-control" value="10/31/2020">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input type="text" class="form-control" value="2:40 PM">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Stylist Assigned</label>
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
                                            <label>Services</label>
                                            <select name="" id="" class="form-control">
                                                <option>Makeup</option>
                                                <option>Gents All Services</option>
                                                <option>Ladies All Services</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="clearfix"></div>
                                        <hr>

                                        <div class="row mb-3">

                                            <div class="col-md-4">
                                                <div class="form-group all-checkbox-label">
                                                    <h6>Hair Styling</h6>
                                                    <label> <input type="checkbox"> &nbsp; Hair Cut</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Ironing</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Global Colouring</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Blow Dry</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Root Touch Up</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Shampoo &amp; Conditioning</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Head Massage</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Roller Setting</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Oiling</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group all-checkbox-label">
                                                    <h6>Make Up</h6>
                                                    <label> <input type="checkbox"> &nbsp; Party Make Up</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Engagement Make Up</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Bridal &amp; Reception Make Up</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Base Make Up</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Eye Make Up</label><br>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group all-checkbox-label">
                                                    <h6>Hair Texture</h6>
                                                    <label> <input type="checkbox"> &nbsp; Rebonding</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Perming</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Keratin</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Colour Protection</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Smoothening</label><br>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group all-checkbox-label">
                                                    <h6>Hair Treatments</h6>
                                                    <label> <input type="checkbox"> &nbsp; Spa Treatments</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Volumizing</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Advanced Hair Moisturising</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Scalp Treatments</label><br>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group all-checkbox-label">
                                                    <h6>Facials &amp; Rituals</h6>
                                                    <label> <input type="checkbox"> &nbsp; Bleach</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Luxury Facials/Rituals</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Clean Ups</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Body Polishing/Rejuvenation</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Threading</label><br>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group all-checkbox-label">
                                                    <h6>Hand &amp; Feet</h6>
                                                    <label> <input type="checkbox"> &nbsp; Manicure</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Spa Pedicure</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Pedicure</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Waxing</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Spa Manicure</label><br>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group all-checkbox-label">
                                                    <h6>Nail Care</h6>
                                                    <label> <input type="checkbox"> &nbsp; Nail Paint</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Nail Art</label><br>
                                                    <label> <input type="checkbox"> &nbsp; Nail Filling</label><br>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group float-right">
                                            <h4>Total: <span> &nbsp; <i class="fa fa-rupee-sign"></i> 1500</span></h4>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group">
                                            <a href="salon-bo-manage-job-cards-form.php" class="btn btn-pink float-right">Create Job Card</a>
                                        </div>
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