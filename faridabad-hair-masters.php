<?php
if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $servicetypeLadies = $_POST['servicetypeLadies'];
    $servicetypeGents = $_POST['servicetypeGents'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $city = $_POST['city'];
    $time = $_POST['time'];

    $to = 'esteps.in@gmail.com';
    $subject = 'Salon Booking Form';
    $message = "Full Name :" . $full_name . "\n" .
        "Gender :" . $gender . "\n" .
        "Contact :" . $contact . "\n" .
        "Ladies Service Type :" . $servicetypeLadies . "\n" .
        "Gents Service Type :" . $servicetypeGents . "\n" .
        "Email :" . $email . "\n" .
        "Date :" . $date . "\n" .
        "City :" . $city . "\n" .
        "Time :" . $time;
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        // echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
        echo "<script>window.open('index.php#commonMsg'); </script>";
    } else {
        echo "Something went wrong!";
    }
}
?>


<section class="saloon">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 saloon-img d-flex justyfy-content-center align-items-center">
                <img src="assets/images/hair-masters.png" class="img-fluid">
            </div>
            <div class="col-md-8 salon-text">
                <h1>Hair Masters</h1>
                <p><i class="fa fa-map-marker-alt"></i> Faridabad</p>
                <div class="salon-btns">

                    <button type="button" class="btn" data-toggle="modal" data-target="#bookAppointment"><span class="fas fa-calendar-alt icon"></span> Book Appointment</button>
                    <button class="btn"><span class="fas fa-phone-alt icon"></span> Call Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="saloon-piils">
    <div class="container">
        <a href="#" class="saloon-pills-opener"><span>Photo</span> <i class="fa fa-chevron-circle-down icon float-right"></i></a>
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">About </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Photos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="false">Videos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-team" role="tab" aria-controls="pills-team" aria-selected="false">Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-location" role="tab" aria-controls="pills-loaction" aria-selected="false">Offers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-membership-tab" data-toggle="pill" href="#pills-membership" role="tab" aria-controls="pills-membership" aria-selected="false">Membership</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="col-md-12 p-0">
                    <h5 class="sub-title col-md-12 mx-auto">THE GROUP</h5>
                    <div class="col-md-12 mx-auto">
                        <p style="text-align: justify;">“<strong>Hair Masters Salon</strong> is the haven of peace and tranquility, providing a perfect escape from busy schedules and the rush of a bustling city.</p>
                        <p style="text-align: justify;">The Zen-like ambience sets the mood for a therapeutic experience. In the day, there is an abundance of natural light while ambient lighting bestows a soft glow in the evenings. Incense sticks and aromatic oils permeate the air with a gentle fragrance, creating the perfect ambience for total relaxation.</p>
                        <p style="text-align: justify;">The extensive Salon &amp; spa menu offers make-ups, Hair treatments, holistic massage, beauty treatments et cetera.”</p>
                    </div>

                </div>

                <hr>

                <section class="salon-type">
                    <div class="container">
                        <h5 class="sub-title">SALON TYPE</h5>
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="assets/images/salon-lady.jpg" class="img-fluid">
                                    <p>Ladies</p>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="assets/images/salon-gents.jpg" class="img-fluid">
                                    <p>Gents</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="salon-type facilty">
                    <div class="container">
                        <h5 class="sub-title">FACILITY</h5>
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <!-- <span class="fas fa-car-alt icon"></span> -->
                                    <p>Free Parking</p>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <!-- <span class="fas fa-car-alt icon"></span> -->
                                    <p>Free Parking</p>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <!-- <span class="fas fa-car-alt icon"></span> -->
                                    <p>Free Parking</p>
                                </a>
                            </div>
                            <div class="col-md-3">
                                <a href="#">
                                    <!-- <span class="fas fa-car-alt icon"></span> -->
                                    <p>Free Parking</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="location">
                    <div class="container">
                        <h5 class="sub-title">LOCATIONS</h5>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-unstyled">
                                    <li><a href="#">Mumbai <span class="location-line">|</span></a></li>
                                    <li><a href="#">Vasant Vihar <span class="location-line">|</span></a></li>
                                    <li><a href="#">Rajori Garden <span class="location-line">|</span></a></li>
                                    <li><a href="#">Pitampura <span class="location-line">|</span></a></li>
                                    <li><a href="#">Dwarka <span class="location-line">|</span></a></li>
                                    <li><a href="#">Varansi <span class="location-line">|</span></a></li>
                                    <li><a href="#">Chatterpur <span class="location-line">|</span></a></li>
                                    <li><a href="#">Janakpuri <span class="location-line">|</span></a></li>
                                    <li><a href="#">Ambience Mall V.Kunj <span class="location-line">|</span></a></li>
                                    <li><a href="#">Punjab Bagh <span class="location-line">|</span></a></li>
                                    <li><a href="#">Rajender Nager <span class="location-line">|</span></a></li>
                                    <li><a href="#">Bangali Market <span class="location-line">|</span></a></li>
                                    <li><a href="#">Ashok Vihar <span class="location-line">|</span></a></li>
                                    <li><a href="#">DLF Galleria <span class="location-line">|</span></a></li>
                                    <li><a href="#">South Point Mall <span class="location-line">|</span></a></li>
                                    <li><a href="#">Noida <span class="location-line">|</span></a></li>
                                    <li><a href="#">Faridabad <span class="location-line">|</span></a></li>
                                    <li><a href="#">Chandigarh <span class="location-line">|</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
            <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row m-0">
                    <div class="col-md-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/M1MqjFvyqiE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mDvDX7rQYB8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zzd1qXqxsRw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="photo-gallery col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="assets/images/hair-master-photo.jpg" onClick="return hs.expand(this)">
                                <img src="assets/images/hair-master-photo.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="assets/images/hair-master-photo.jpg" onClick="return hs.expand(this)">
                                        <img src="assets/images/hair-master-photo.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="assets/images/hair-master-photo.jpg" onClick="return hs.expand(this)">
                                        <img src="assets/images/hair-master-photo.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="assets/images/hair-master-photo.jpg" onClick="return hs.expand(this)">
                                        <img src="assets/images/hair-master-photo.jpg" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="assets/images/hair-master-photo.jpg" onClick="return hs.expand(this)">
                                        <img src="assets/images/hair-master-photo.jpg" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a href="assets/images/hair-master-photo.jpg" onClick="return hs.expand(this)">
                                <img src="assets/images/hair-master-photo.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="assets/images/hair-master-photo.jpg" onClick="return hs.expand(this)">
                                <img src="assets/images/hair-master-photo.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="assets/images/hair-master-photo.jpg" onClick="return hs.expand(this)">
                                <img src="assets/images/hair-master-photo.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="assets/images/hair-master-photo.jpg" onClick="return hs.expand(this)">
                                <img src="assets/images/hair-master-photo.jpg" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="col-md-12 ladies">
                    <h2><span class="stm-icon-pencil"></span> LADIES</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Hair Styling</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-square icon"></i> Hair Cut</li>
                                <li><i class="fas fa-square icon"></i> Ironing</li>
                                <li><i class="fas fa-square icon"></i> Global Colouring</li>
                                <li><i class="fas fa-square icon"></i> Blow Dry</li>
                                <li><i class="fas fa-square icon"></i> Root Touch Up</li>
                                <li><i class="fas fa-square icon"></i> Shampoo & Conditioning</li>
                                <li><i class="fas fa-square icon"></i> Head Massage</li>
                                <li><i class="fas fa-square icon"></i> Roller Setting</li>
                                <li><i class="fas fa-square icon"></i> Oiling</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4>Make Up</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-square icon"></i> Party Make Up</li>
                                <li><i class="fas fa-square icon"></i> Engagement Make Up</li>
                                <li><i class="fas fa-square icon"></i> Bridal & Reception Make Up</li>
                                <li><i class="fas fa-square icon"></i> Base Make Up</li>
                                <li><i class="fas fa-square icon"></i> Eye Make Up</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4>Hair Texture</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-square icon"></i> Rebonding</li>
                                <li><i class="fas fa-square icon"></i> Perming</li>
                                <li><i class="fas fa-square icon"></i> Keratin</li>
                                <li><i class="fas fa-square icon"></i> Colour Protection</li>
                                <li><i class="fas fa-square icon"></i> Smoothening</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4>Hair Treatments</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-square icon"></i> Spa Treatments</li>
                                <li><i class="fas fa-square icon"></i> Volumizing</li>
                                <li><i class="fas fa-square icon"></i> Advanced Hair Moisturising</li>
                                <li><i class="fas fa-square icon"></i> Scalp Treatments</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4>Facials & Rituals</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-square icon"></i> Bleach</li>
                                <li><i class="fas fa-square icon"></i> Luxury Facials/Rituals</li>
                                <li><i class="fas fa-square icon"></i> Clean Ups</li>
                                <li><i class="fas fa-square icon"></i> Body Polishing/Rejuvenation</li>
                                <li><i class="fas fa-square icon"></i> Threading</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4>Hand & Feet</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-square icon"></i> Manicure</li>
                                <li><i class="fas fa-square icon"></i> Spa Pedicure</li>
                                <li><i class="fas fa-square icon"></i> Pedicure</li>
                                <li><i class="fas fa-square icon"></i> Waxing</li>
                                <li><i class="fas fa-square icon"></i> Spa Manicure</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4>Nail Care</h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-square icon"></i> Nail Paint</li>
                                <li><i class="fas fa-square icon"></i> Nail Art</li>
                                <li><i class="fas fa-square icon"></i> Nail Filling</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 gents">
                    <h3 class="text-center">
                        <h2>GENTS</h2>
                        <div class="row">
                            <div class="col-md-3">
                                <h4>Hair Cut & Finish</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-square icon"></i> Cut and Hair Care</li>
                                    <li><i class="fas fa-square icon"></i> Shampoo & Conditioning</li>
                                    <li><i class="fas fa-square icon"></i> Head Massage</li>
                                    <li><i class="fas fa-square icon"></i> Beard Styling</li>
                                    <li><i class="fas fa-square icon"></i> Hair/Beard Colouring</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h4>Hair Colour</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-square icon"></i> Hair Colour </li>
                                    <li>(Ammonia & Ammonia Free)</li>
                                    <li><i class="fas fa-square icon"></i> Hi - Lites</li>
                                    <li><i class="fas fa-square icon"></i> Beard Colour</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h4>Hair Texture</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-square icon"></i> Straightening</li>
                                    <li><i class="fas fa-square icon"></i> Smoothening</li>
                                    <li><i class="fas fa-square icon"></i> Rebonding</li>
                                    <li><i class="fas fa-square icon"></i> Perming</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h4>Hair Treatments</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-square icon"></i> Hair Spa</li>
                                    <li><i class="fas fa-square icon"></i> Advanced Moisturising</li>
                                    <li><i class="fas fa-square icon"></i> Scalp Treatments</li>
                                    <li><i class="fas fa-square icon"></i> Colour Protection</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h4>Skin Care</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-square icon"></i> Clean Ups</li>
                                    <li><i class="fas fa-square icon"></i> Facials</li>
                                    <li><i class="fas fa-square icon"></i> Organic Treatments</li>
                                    <li><i class="fas fa-square icon"></i> Manicure</li>
                                    <li><i class="fas fa-square icon"></i> Pedicure</li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h4>Beard Grooming</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-square icon"></i> Beard Trim</li>
                                    <li><i class="fas fa-square icon"></i> Beard Colour</li>
                                    <li><i class="fas fa-square icon"></i> Beard Styling</li>
                                    <li><i class="fas fa-square icon"></i> Shave</li>
                                    <li><i class="fas fa-square icon"></i> Luxury Shave & Beard Spa</li>
                                </ul>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-location" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row m-0">
                    <div class="col-md-3">
                        <div class="product-box salon-offer-tab-box">
                            <a href="offers.php">
                                <img src="assets/images/combo1.jpg" alt="" class="img-fluid">
                                <p class="font-weight-bold mt-2">Hair Masters</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1200</s><span class="ml-2 text-green">RS. 0</span></p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-box salon-offer-tab-box">
                            <a href="offers.php">
                                <img src="assets/images/combo2.jpg" alt="">
                                <p class="font-weight-bold mt-2">Hair Masters</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 500</s><span class="ml-2 text-green">50% off</span></p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-box salon-offer-tab-box">
                            <a href="offers.php">
                                <img src="assets/images/combo3.jpg" alt="">
                                <p class="font-weight-bold mt-2">Hair Masters</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1200</s><span class="ml-2 text-green">RS. 0</span></p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-box salon-offer-tab-box">
                            <a href="offers.php">
                                <img src="assets/images/combo4.jpg" alt="">
                                <p class="font-weight-bold mt-2">Hair Masters</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1200</s><span class="ml-2 text-green">RS. 999</span></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="pills-membership" role="tabpanel" aria-labelledby="pills-membership-tab">
                <div class="row m-0">
                    <div class="col-md-4 col-12 m-10">
                        <a href="#" class="box-shadow">
                            <img src="assets/images/image17.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4 col-12 m-10">
                        <a href="#" class="box-shadow">
                            <img src="assets/images/image18.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4 col-12 m-10">
                        <a href="card.html" class="box-shadow">
                            <img src="assets/images/image19.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4 col-12 m-10">
                        <a href="#" class="box-shadow">
                            <img src="assets/images/image20.jpg" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4 col-12 m-10">
                        <a href="card.html" class="box-shadow">
                            <img src="assets/images/membership-card.png" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-4 col-12 m-10">
                        <a href="#" class="box-shadow">
                            <img src="assets/images/gift-card.png" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-team" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="col-md-12 team toni-guy-team">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="assets/images/hair-master-team.jpg" class="img-fluid">
                            <div class="name">
                                <h4 class="m-0 text-center">Gina Amerson</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/images/hair-master-team.jpg" class="img-fluid">
                            <div class="name">
                                <h4 class="m-0 text-center">Gina Amerson</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/images/hair-master-team.jpg" class="img-fluid">
                            <div class="name">
                                <h4 class="m-0 text-center">Gina Amerson</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/images/hair-master-team.jpg" class="img-fluid">
                            <div class="name">
                                <h4 class="m-0 text-center">Gina Amerson</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/images/hair-master-team.jpg" class="img-fluid">
                            <div class="name">
                                <h4 class="m-0 text-center">Gina Amerson</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/images/hair-master-team.jpg" class="img-fluid">
                            <div class="name">
                                <h4 class="m-0 text-center">Gina Amerson</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/images/hair-master-team.jpg" class="img-fluid">
                            <div class="name">
                                <h4 class="m-0 text-center">Gina Amerson</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/images/hair-master-team.jpg" class="img-fluid">
                            <div class="name">
                                <h4 class="m-0 text-center">Gina Amerson</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/images/hair-master-team.jpg" class="img-fluid">
                            <div class="name">
                                <h4 class="m-0 text-center">Gina Amerson</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/images/hair-master-team.jpg" class="img-fluid">
                            <div class="name">
                                <h4 class="m-0 text-center">Gina Amerson</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/images/hair-master-team.jpg" class="img-fluid">
                            <div class="name">
                                <h4 class="m-0 text-center">Gina Amerson</h4>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img src="assets/images/hair-master-team.jpg" class="img-fluid">
                            <div class="name">
                                <h4 class="m-0 text-center">Gina Amerson</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <div class="clearfix"></div>
    <section class="reviews">
        <div class="container">
        <h3>RATING & REVIEW</h3>
            <div class="customar-review col-md-12">                
                <div class="row">                        
                    <div class="col-md-10">
                        <span>Khusboo Chawla</span>
                        <ul class="list-unstyled rating m-0">
                            <li><i class="fas fa-star icon"></i></li>
                            <li><i class="fas fa-star icon"></i></li>
                            <li><i class="fas fa-star icon"></i></li>
                            <li><i class="fas fa-star icon"></i></li>
                            <li><i class="far fa-star icon"></i></li>
                        </ul>
                        <p>Best Product I have Ever Used literally very useful product and no side effect</p>
                    </div>
                    <div class="col-md-2">
                        <span class="date">2020-08-11</span>
                    </div>
                </div>
            </div>
            <div class="customar-review col-md-12">
                <div class="row">
                    <div class="col-md-10">
                        <span>Khusboo Chawla</span>
                        <ul class="list-unstyled rating m-0">
                            <li><i class="fas fa-star icon"></i></li>
                            <li><i class="fas fa-star icon"></i></li>
                            <li><i class="fas fa-star icon"></i></li>
                            <li><i class="fas fa-star icon"></i></li>
                            <li><i class="far fa-star icon"></i></li>
                        </ul>
                        <p>Best Product I have Ever Used literally very useful product and no side effect</p>
                    </div>
                    <div class="col-md-2">
                        <span class="date">2020-08-11</span>
                    </div>
                </div>
            </div>                        
        </div>
    </section> -->


<!-- The Modal -->
<div class="modal" id="bookAppointment">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Book Appointment</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="" method="post">
                    <section class="online-appointment">
                        <div class="container">
                            <form class="online-appointment-form mt-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name" name="full_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control genderList" name="gender" required>
                                                <option value="emptyService">Gender</option>
                                                <option value="gentsServiceList">Gents</option>
                                                <option value="ladiesServiceList">Ladies</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Contact" name="contact" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 select-service-parent">

                                        <select name="" id="emptyService" class="form-control">
                                            <option value="">Select Service</option>
                                        </select>

                                        <select name="servicetypeLadies" id="ladiesServiceList" class="form-control d-custom-none">
                                            <optgroup label="Hair Styling">
                                                <option value="">Select Service</option>
                                                <option value="Hair Cut">Hair Cut </option>
                                                <option value="Ironing">Ironing </option>
                                                <option value="Global Colouring">Global Colouring </option>
                                                <option value="Blow Dry"> Blow Dry</option>
                                                <option value="Root Touch Up">Root Touch Up </option>
                                                <option value="Shampoo &amp; Conditioning">Shampoo &amp; Conditioning </option>
                                                <option value="Head Massage">Head Massage </option>
                                                <option value="Roller Setting">Roller Setting </option>
                                                <option value="Oiling">Oiling </option>
                                            </optgroup>

                                            <optgroup label="Make Up">
                                                <option value="Party Make Up">Party Make Up</option>
                                                <option value="Engagement Make Up">Engagement Make Up</option>
                                                <option value="Bridal &amp; Reception Make Up">Bridal &amp; Reception Make Up</option>
                                                <option value="Base Make Up">Base Make Up</option>
                                                <option value="Eye Make Up">Eye Make Up</option>
                                            </optgroup>

                                            <optgroup label="Hair Texture">
                                                <option value="Rebonding">Rebonding </option>
                                                <option value="Perming">Perming </option>
                                                <option value="Keratin">Keratin </option>
                                                <option value="Colour Protection">Colour Protection </option>
                                                <option value="Smoothening"> Smoothening</option>
                                            </optgroup>

                                            <optgroup label="Hair Treatments">
                                                <option value="Spa Treatments">Spa Treatments </option>
                                                <option value="Volumizing">Volumizing </option>
                                                <option value="Advanced Hair Moisturising">Advanced Hair Moisturising </option>
                                                <option value="Scalp Treatments"> Scalp Treatments</option>
                                            </optgroup>

                                            <optgroup label="Facials &amp; Rituals">
                                                <option value="Bleach"> Bleach</option>
                                                <option value="Luxury Facials/Rituals"> Luxury Facials/Rituals</option>
                                                <option value="Clean Ups"> Clean Ups</option>
                                                <option value="Body Polishing/Rejuvenation">Body Polishing/Rejuvenation </option>
                                                <option value="Threading">Threading </option>
                                            </optgroup>

                                            <optgroup label="Hand &amp; Feet">
                                                <option value="Manicure"> Manicure </option>
                                                <option value="Spa Pedicure"> Spa Pedicure </option>
                                                <option value="Pedicure">Pedicure </option>
                                                <option value="Waxing"> Waxing </option>
                                                <option value="Spa Manicure"> Spa Manicure </option>
                                            </optgroup>

                                            <optgroup label="Nail Care">
                                                <option value="Nail Paint"> Nail Paint</option>
                                                <option value="Nail Art"> Nail Art </option>
                                                <option value="Nail Filling"> Nail Filling </option>
                                                <option value="Other"> Other </option>
                                            </optgroup>



                                        </select>

                                        <select name="servicetypeGents" id="gentsServiceList" class="form-control d-custom-none">

                                            <optgroup label="Hair Cut &amp; Finish">
                                                <option value="">Select Service</option>
                                                <option value="Cut and Hair Care">Cut and Hair Care </option>
                                                <option value="Shampoo &amp; Conditioning">Shampoo &amp; Conditioning </option>
                                                <option value="Head Massage">Head Massage </option>
                                                <option value="Beard Styling">Beard Styling </option>
                                                <option value="Hair/Beard Colouring">Hair/Beard Colouring </option>
                                            </optgroup>


                                            <optgroup label="Hair Colour">
                                                <option value="Hair Colour(Ammonia &amp; Ammonia Fed)">Hair Colour(Ammonia &amp; Ammonia Free)</option>
                                                <option value="Hi - Lites">Hi - Lites</option>
                                                <option value="Beard Colour">Beard Colour</option>
                                            </optgroup>

                                            <optgroup label="Hair Texture">
                                                <option value="Straightening">Straightening</option>
                                                <option value="Smoothening">Smoothening</option>
                                                <option value="Rebonding">Rebonding</option>
                                                <option value="Perming">Perming</option>
                                            </optgroup>

                                            <optgroup label="Hair Treatments">
                                                <option value="Hair Spa">Hair Spa</option>
                                                <option value="Advanced Moisturising">Advanced Moisturising</option>
                                                <option value="Scalp Treatments">Scalp Treatments</option>
                                                <option value="Colour Protection">Colour Protection</option>
                                            </optgroup>

                                            <optgroup label="Skin Care">
                                                <option value="Clean Ups"> Clean Ups </option>
                                                <option value="Facials">Facials </option>
                                                <option value="Organic Treatments">Organic Treatments </option>
                                                <option value="Manicure">Manicure </option>
                                                <option value="Pedicure">Pedicure</option>
                                            </optgroup>

                                            <optgroup label="Beard Grooming">
                                                <option value="Beard Trim">Beard Trim</option>
                                                <option value="Beard Colour">Beard Colour</option>
                                                <option value="Beard Styling">Beard Styling</option>
                                                <option value="Shave">Shave</option>
                                                <option value="Luxury Shave &amp; Beard Spa">Luxury Shave &amp; Beard Spa</option>
                                                <option value="Other"> Other </option>
                                            </optgroup>

                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email Id" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Preferred Date" name="date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City" name="city" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="time" class="form-control" placeholder="Preferred Time" name="time" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" name="submit" class="btn book-appointment-btn">Book Appointment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </form>
            </div>



        </div>
    </div>
</div>
