<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<section class="business-app">
    <div class="container">
        <h2 class="text-center"><span>Book My Makeup</span> for business app</h2>
        <p class="text-center">A free app that allows you to manage your Book My Makeup listing directly from your smartphone</p>
        <ul class="list-unstyled d-flex justify-content-center align-items-center store-icons">
            <li>
                <a href="#">
                    <img src="assets/images/app-store-icon.jpg" class="img-fluid">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="assets/images/google-play-icon.jpg" class="img-fluid">
                </a>
            </li>
        </ul>
    </div>
</section>

<section class="get-started">
    <div class="container">
        <h4 class="text-center">Get Started with Book My Makeup for Business</h4>
        <div class="row get-started-row">
            <div class="col-md-4">
                <div class="text-center">
                    <img src="assets/images/get-started-step-1.png" class="img-fluid">
                    <p>You need to claim your listing before you use the BMM for Business App. Claim Now</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <img src="assets/images/get-started-step-2.png" class="img-fluid">
                    <p>Download the app and login using the same credentials you used to claim your listing. Send me the link</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <img src="assets/images/get-started-step-3.png" class="img-fluid">
                    <p>Start managing your Salon directly from your smartphone</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="what-you-can-do">
    <div class="container">
        <h4 class="text-center">What you can do with the Book My Makeup for Business app</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="text-center what-you-can-do-div">
                    <img src="assets/images/what-you-can-do-step1.png" class="img-fluid">
                    <h6 class="m-0">Answer Reviews</h6>
                    <p class="m-0">Get real time notifications of new checkins, photos and reviews, and easily answer reviews</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center what-you-can-do-div">
                    <img src="assets/images/what-you-can-do-step2.png" class="img-fluid">
                    <h6 class="m-0">Manage your Online Presence</h6>
                    <p class="m-0">Update your listing's information on the go</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center what-you-can-do-div">
                    <img src="assets/images/what-you-can-do-step3.png" class="img-fluid">
                    <h6 class="m-0">Analytics</h6>
                    <p class="m-0">Feel the pulse of your business: page views, generated revenue, and more</p>
                </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="text-center what-you-can-do-div">
                    <img src="assets/images/what-you-can-do-step4.png" class="img-fluid">
                    <h6 class="m-0">Promos and deals</h6>
                    <p class="m-0">Promos are a great way to promote your business to existing and potential customers on BMM</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="text-center what-you-can-do-div">
                    <img src="assets/images/what-you-can-do-step6.png" class="img-fluid">
                    <h6 class="m-0">Events</h6>
                    <p class="m-0">Promote events that you are hosting in your establishment, from music performances to food festivals you are participating</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="claim-listing">
    <div class="container">
        <h4 class="text-center">Claim your Listing</h4>
        <div class="input-group">
            <div class="input-group-prepend search-city">
                <input type="text" class="form-control" placeholder="Search City">
                <i class="fas fa-search search-icon"></i>
            </div>
            <input type="text" class="form-control" placeholder="Search Your Salon Here" aria-label="" aria-describedby="basic-addon1">
            <div class="input-group-append">
                <button class="btn " type="button">Search</button>
            </div>
        </div>
    </div>
</section>

<section class="connot-find-salon">
    <div class="container">
        <h4 class="text-center m-0">Cannot find your Salon?</h4>
        <p class="text-center m-0">Fill the form below to create a listing on BMM</p>
        <div class="text-center">
            <a href="addasalon.php" class="btn add-salon">Add a Salon</a>
        </div>
    </div>
</section>

<section class="want-know-more">
    <div class="container">
        <h4 class="text-center">Want to know more?</h4>
        <p class="text-center">
            Please leave your contact details below, and <br>
            we’ll be in touch within 24 hours
        </p>
        <div class="row">
            <div class="col-md">
                <input type="text" placeholder="City*" class="form-control">
            </div>
            <div class="col-md">
                <input type="text" placeholder="Salon Name*" class="form-control">
            </div>
            <div class="col-md">
                <input type="text" placeholder="Your Full Name*" class="form-control">
            </div>
            <div class="col-md">
                <input type="email" placeholder="Email*" class="form-control">
            </div>
            <div class="col-md">
                <input type="text" placeholder="Phone number*" class="form-control">
            </div>
        </div>
        <div class="text-center">
            <button class="btn">Call Me Back</button>
        </div>
    </div>
</section>
<?php include 'include/footer.php' ?>