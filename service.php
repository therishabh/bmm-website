<?php
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $servicetypeLadies = $_POST['servicetypeLadies'];
    $servicetypeGents = $_POST['servicetypeGents'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $city = $_POST['city'];
    $time = $_POST['time'];

    $to = 'verma6641@gmail.com';
    // $to = 'esteps.in@gmail.com';
    $subject = 'Bridal Makeup Consultation Form';
    $message = "Full Name :" . $first_name . ' ' . $last_name . "\n" .
        "Contact :" . $contact . "\n" .
        "Email :" . $email;
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        // echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
        echo "<script>window.open('index.php#commonMsg'); </script>";
    } else {
        echo "Something went wrong!";
    }
}
?>


<section class="pt-4">
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="service-page-list">
                    <h2 class="h2-heading">Ladies Services</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/service-thumb-1.jpg" alt="">
                                <p class="font-weight-bold mt-2">Hair Styling</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1000</s><span class="ml-2 text-green">RS. 800</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/service-thumb-2.jpg" alt="">
                                <p class="font-weight-bold mt-2">Make Up </p>
                                <p class="font-weight-bold"><s class="text-red">RS. 2500</s><span class="ml-2 text-green">RS. 2000</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/service-thumb-3.jpg" alt="">
                                <p class="font-weight-bold mt-2">Hair Texture</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1000</s><span class="ml-2 text-green">RS. 500</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/service-thumb-4.jpg" alt="">
                                <p class="font-weight-bold mt-2">Facials & Rituals</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1000</s><span class="ml-2 text-green">RS. 500</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/service-thumb-5.jpg" alt="">
                                <p class="font-weight-bold mt-2">Hand & Feet</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 500</s><span class="ml-2 text-green">RS. 350</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/service-thumb-6.jpg" alt="">
                                <p class="font-weight-bold mt-2">Nail Care</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 236</s><span class="ml-2 text-green">RS. 139</span></p>
                            </div>
                        </div>
                    </div>
                    <h2 class="h2-heading">Gents Services</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/service-thumb-7.jpg" alt="">
                                <p class="font-weight-bold mt-2">Hair Cut & Finish</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1000</s><span class="ml-2 text-green">RS. 800</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/service-thumb-8.jpg" alt="">
                                <p class="font-weight-bold mt-2">Hair Colour </p>
                                <p class="font-weight-bold"><s class="text-red">RS. 2500</s><span class="ml-2 text-green">RS. 2000</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/service-thumb-9.jpg" alt="">
                                <p class="font-weight-bold mt-2">Hair Texture</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1000</s><span class="ml-2 text-green">RS. 500</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/service-thumb-10.jpg" alt="">
                                <p class="font-weight-bold mt-2">Hair Treatments</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1000</s><span class="ml-2 text-green">RS. 500</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/service-thumb-11.jpg" alt="">
                                <p class="font-weight-bold mt-2">Skin Care</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 500</s><span class="ml-2 text-green">RS. 350</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/service-thumb-12.jpg" alt="">
                                <p class="font-weight-bold mt-2">Beard Grooming</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 236</s><span class="ml-2 text-green">RS. 139</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="h2-heading">&nbsp;</h2>
                <form action="" method="post" class="common-right-form mt-4 p-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="h2-heading">Book a Service</h3>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="tel" class="form-control" placeholder="Phone" name="contact" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Id" name="email" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option>Select Service</option>
                                    <optgroup label="Ladies">
                                        <option>Hair Styling</option>
                                        <option>Make Up</option>
                                        <option>Hair Texture</option>
                                        <option>Hair Treatments</option>
                                        <option>Facials & Rituals</option>
                                        <option>Hand & Feet</option>
                                        <option>Nail Care</option>
                                    <optgroup label="Gents">
                                        <option>Hair Cut & Finish</option>
                                        <option>Hair Colour</option>
                                        <option>Hair Texture</option>
                                        <option>Hair Treatments</option>
                                        <option>Skin Care </option>
                                        <option>Beard Grooming</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Preferred Date" name="date" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="City" name="city" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="time" class="form-control" placeholder="Preferred Time" name="time" required>
                            </div>
                        </div>

                        <div class="col-md-12 text-right">
                            <button type="submit" name="submit" class="btn btn-pink btn-block">Book Now</button>
                        </div>
                    </div>
                </form>

                <div class="row mt-5">
                    <div class="col-md-12">
                        <a href="#">
                            <img src="assets/images/haircut-offer-1.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-md-12 mt-5">
                        <a href="#">
                            <img src="assets/images/haircut-offer-2.jpg" class="img-fluid" alt="">
                        </a>
                    </div>

                </div>


            </div>

        </div>
    </div>

    </div>
</section>



<section class="section-padding">
    <div class="container">
        <h2 class="h2-heading">Offers</h2>

        <div class="row">
            <div class="col-md-12">
                <div id="demo" class="carousel slide" data-ride="carousel">



                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/stripe-banner-1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/stripe-banner-2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/stripe-banner-3.jpg" alt="" class="img-fluid">
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12 mt-5">
                <a href="#">
                    <img src="assets/images/free-haircut.jpg" class="img-fluid" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding bg-light-gray blog-section">
    <div class="container">
        <h2 class="h2-heading">Latest from Blog</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="product-box">
                    <img src="assets/images/blog-1.jpg" class="img-fluid" alt="">
                    <h4>Ayurvedic Oil for Hairfall Indulekha Oil, regrows hair</h4>
                    <p>Proven benefits can help to stimulate growth and enhance the hair that you have, Proven benefits can help to stimulate growth and enhance the hair that you have...</p>
                    <a href="#" class="btn">Read More +</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-box">
                    <img src="assets/images/blog-1.jpg" class="img-fluid" alt="">
                    <h4>Ayurvedic Oil for Hairfall Indulekha Oil, regrows hair</h4>
                    <p>Proven benefits can help to stimulate growth and enhance the hair that you have, Proven benefits can help to stimulate growth and enhance the hair that you have...</p>
                    <a href="#" class="btn">Read More +</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-box">
                    <img src="assets/images/blog-1.jpg" class="img-fluid" alt="">
                    <h4>Ayurvedic Oil for Hairfall Indulekha Oil, regrows hair</h4>
                    <p>Proven benefits can help to stimulate growth and enhance the hair that you have, Proven benefits can help to stimulate growth and enhance the hair that you have...</p>
                    <a href="#" class="btn">Read More +</a>
                </div>
            </div>

        </div>
    </div>
</section>
