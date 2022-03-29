<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>
<section class="seller-registration">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 list-salon-bg">
                <a href="index.php" class="logo">
                    <!-- <img src="assets/images/logo.png" class="img-fluid"> -->
                    <i class="fa fa-home"></i> &nbsp; Back to Home
                </a>

                <div class="seller-bg-content">
                    <h2 class="h2-heading"> List your Salon</h2>
                    <ul>
                        <li> Marketing & Branding of your Salon </li>
                        <li>bookmymakeup.com/Your salon name</li>
                        <li>Unlimited leads with automated call system</li>
                        <li>1000+ Brands,Genuine products delivered directly to you.</li>
                        <li> Create Offers,Packages,Deals & Coupons</li>
                        <li> Connect with millions of users </li>
                        <li>Upload videos,live feed of your salon to promote</li>
                        <li>Hire professionally trained experts </li>
                        <li>Attend live events,webinar & product exhibitions. </li>

                    </ul>
                </div>
                <!-- <img src="assets/images/stamp.png" class="stamp-img" alt=""> -->
            </div>
            <div class="col-md-6 seller-registration-tabs">
                <h2>List your Salon</h2>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">1</a>
                        <span class="text">Personal Details</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">2</a>
                        <span class="text">Upload Documents</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">3</a>
                        <span class="text">Choose Services</span>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label>First Name <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label>Date of Birth <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Gender <span class="required">*</span></label>
                                    <select class="form-control">
                                        <option>Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label>Contact Number <span class="required">*</span></label>
                                    <input type="tel" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label>Permanent Address <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Current Address <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label>Location <span class="required">*</span></label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row col-md-12">
                                <label class="mr-2">
                                    <input type="checkbox">
                                </label>
                                <label class="mr-2"> I agree and accept the</label>
                                <a href="#">Terms and Conditions</a>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn class next-btn first-next-btn">NEXT</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label>AAdhar Card <span class="required">*</span></label>
                                <input type="file" class="form-control upload">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label>Pan Mumber <span class="required">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label>GST Certificate <span class="required">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn class prev-btn first-prev-btn">PREVIOUS</button>
                            <button class="btn class next-btn second-next-btn">NEXT</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label>Choose Services</label>
                                <select class="form-control">
                                    <option>Choose Services</option>
                                    <option>Salon Owner</option>
                                    <option>Makeup Artist</option>
                                    <option>Seller</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn class prev-btn second-prev-btn">PREVIOUS</button>
                            <button class="btn class next-btn">SUBMIT</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
<script src="assets/js/custom.js"></script>

</html>