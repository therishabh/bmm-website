<?php
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $pin_code = $_POST['pin_code'];
    // $select_salon = $_POST['select_salon'];
    // $select_Location = $_POST['select_Location'];
    $time = $_POST['time'];

    // $to = 'verma6641@gmail.com';
    $to = 'esteps.in@gmail.com';
    $subject = 'Gents Service Form';
    $message = "Full Name :" . $first_name . ' ' . $last_name . "\n" .
        "Contact :" . $contact . "\n" .
        "Email :" . $email . "\n" .
        "Service :" . $service . "\n" .
        "Date :" . $date . "\n" .
        "Pin Code :" . $pin_code . "\n" .
        // "Select Salon :" . $select_salon . "\n" .
        // "Select Location :" . $select_Location . "\n" .
        "Time :" . $time;
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        // echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
        // echo "<script>window.open('index.php#commonMsg'); </script>";
        echo "<script>window.open('service-payment.php'); </script>";
    } else {
        echo "Something went wrong!";
    }
}
?>

<section class="pt-4">
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="service-page-list" id="Hair">
                    <h2 class="h2-heading">Hair</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-1.jpg" alt="">
                                <p class="font-weight-bold mt-2">Hair Wash</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 200</s><span class="ml-2 text-green">RS. 150</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-2.jpg" alt="">
                                <p class="font-weight-bold mt-2">Styling </p>
                                <p class="font-weight-bold"><s class="text-red">RS. 250</s><span class="ml-2 text-green">RS. 200</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-3.jpg" alt="">
                                <p class="font-weight-bold mt-2">Threading</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 150</s><span class="ml-2 text-green">RS. 100</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-4.jpg" alt="">
                                <p class="font-weight-bold mt-2">Shave</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 200</s><span class="ml-2 text-green">RS. 150</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-5.jpg" alt="">
                                <p class="font-weight-bold mt-2">Beard Trim</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 250</s><span class="ml-2 text-green">RS. 200</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-6.jpg" alt="">
                                <p class="font-weight-bold mt-2">Hair Cut (Boy)</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 400</s><span class="ml-2 text-green">RS. 350</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-page-list" id="ChemicalService">
                    <h2 class="h2-heading">Chemical Service</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-7.jpg" alt="">
                                <p class="font-weight-bold mt-2">Color Highlights</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 2500</s><span class="ml-2 text-green">RS. 2100</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-8.jpg" alt="">
                                <p class="font-weight-bold mt-2">Smoothening </p>
                                <p class="font-weight-bold"><s class="text-red">RS. 2500</s><span class="ml-2 text-green">RS. 2000</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-9.jpg" alt="">
                                <p class="font-weight-bold mt-2">keratin</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 2500</s><span class="ml-2 text-green">RS. 2000</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div id="demo1" class="carousel slide" data-ride="carousel">

                            <!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/stripe-banner-1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/stripe-banner-7.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/stripe-banner-6.jpg" alt="" class="img-fluid">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="carousel-control-prev" href="#demo1" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#demo1" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="service-page-list" id="Trimming">
                    <h2 class="h2-heading">Trimming</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-10.jpg" alt="">
                                <p class="font-weight-bold mt-2">Arms/Legs</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 500</s><span class="ml-2 text-green">RS. 400</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-11.jpg" alt="">
                                <p class="font-weight-bold mt-2">Back/Front </p>
                                <p class="font-weight-bold"><s class="text-red">RS. 500</s><span class="ml-2 text-green">RS. 400</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-12.jpg" alt="">
                                <p class="font-weight-bold mt-2">Full Body</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1500</s><span class="ml-2 text-green">RS. 1200</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-page-list" id="ColorRoots">
                    <h2 class="h2-heading">Color Roots</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-13.jpg" alt="">
                                <p class="font-weight-bold mt-2">Majirel/Wella</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1000</s><span class="ml-2 text-green">RS. 800</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-14.jpg" alt="">
                                <p class="font-weight-bold mt-2">INOA </p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1200</s><span class="ml-2 text-green">RS. 1000</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-15.jpg" alt="">
                                <p class="font-weight-bold mt-2">Beard Color</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 500</s><span class="ml-2 text-green">RS. 400</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-16.jpg" alt="">
                                <p class="font-weight-bold mt-2">Beard Color INOA</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 700</s><span class="ml-2 text-green">RS. 500</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-page-list" id="HairSPA">
                    <h2 class="h2-heading">Hair SPA</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-17.jpg" alt="">
                                <p class="font-weight-bold mt-2">Basic</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1500</s><span class="ml-2 text-green">RS. 1200</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-18.jpg" alt="">
                                <p class="font-weight-bold mt-2">Treatment </p>
                                <p class="font-weight-bold"><s class="text-red">RS. 2000</s><span class="ml-2 text-green">RS. 1500</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-page-list" id="HeadMassage">
                    <h2 class="h2-heading">Head Massage</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-19.jpg" alt="">
                                <p class="font-weight-bold mt-2">Regular</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 600</s><span class="ml-2 text-green">RS. 400</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-20.jpg" alt="">
                                <p class="font-weight-bold mt-2">Luxe Oil </p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1000</s><span class="ml-2 text-green">RS. 800</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-21.jpg" alt="">
                                <p class="font-weight-bold mt-2">Moroccan Oil </p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1200</s><span class="ml-2 text-green">RS. 1000</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-page-list" id="Waxing">
                    <h2 class="h2-heading">Waxing</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-22.jpg" alt="">
                                <p class="font-weight-bold mt-2">Face Wax</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 300</s><span class="ml-2 text-green">RS. 250</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-23.jpg" alt="">
                                <p class="font-weight-bold mt-2">Arms/Legs </p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1000</s><span class="ml-2 text-green">RS. 800</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-24.jpg" alt="">
                                <p class="font-weight-bold mt-2">Back/Front </p>
                                <p class="font-weight-bold"><s class="text-red">RS. 1000</s><span class="ml-2 text-green">RS. 800</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-25.jpg" alt="">
                                <p class="font-weight-bold mt-2">Body Wax </p>
                                <p class="font-weight-bold"><s class="text-red">RS. 3500</s><span class="ml-2 text-green">RS. 3000</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="service-page-list" id="BodyTherapies">
                    <h2 class="h2-heading">Body Therapies</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-26.jpg" alt="">
                                <p class="font-weight-bold mt-2">Body Exfoliation</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 2500</s><span class="ml-2 text-green">RS. 2000</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-27.jpg" alt="">
                                <p class="font-weight-bold mt-2">Body Pack</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 2500</s><span class="ml-2 text-green">RS. 2000</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-28.jpg" alt="">
                                <p class="font-weight-bold mt-2">Body Polishing</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 4000</s><span class="ml-2 text-green">RS. 3500</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-29.jpg" alt="">
                                <p class="font-weight-bold mt-2">Body Massage </p>
                                <p class="font-weight-bold"><s class="text-red">RS. 3000</s><span class="ml-2 text-green">RS. 2500</span></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="product-box"><img src="assets/images/g-service-30.jpg" alt="">
                                <p class="font-weight-bold mt-2">Base Makeup</p>
                                <p class="font-weight-bold"><s class="text-red">RS. 2000</s><span class="ml-2 text-green">RS. 1500</span></p>
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
                                <select name="service" id="" class="form-control">
                                    <option>Select Service</option>
                                    <optgroup label="HAIR">
                                        <option>Hair Wash</option>
                                        <option>Styling</option>
                                        <option>Threading</option>
                                        <option>Shave</option>
                                        <option>Beard Trim</option>
                                        <option>Hair Cut (Boy)</option>
                                    <optgroup label="CHEMICAL SERVICE">
                                        <option>Color Highlights</option>
                                        <option>Smoothening</option>
                                        <option>keratin</option>
                                    <optgroup label="TRIMMING">
                                        <option>Arms/Legs</option>
                                        <option>Back/Front</option>
                                        <option>Full Body</option>
                                    <optgroup label="COLOR ROOTS">
                                        <option>Majirel/Wella</option>
                                        <option>INOA</option>
                                        <option>Beard Color</option>
                                        <option>Beard Color INOA</option>
                                    <optgroup label="HAIR SPA">
                                        <option>Basic</option>
                                        <option>Treatment</option>
                                    <optgroup label="HEAD MASSAGE">
                                        <option>Regular</option>
                                        <option>Luxe Oil</option>
                                        <option>Moroccan Oil</option>
                                    <optgroup label="WAXING">
                                        <option>Face Wax</option>
                                        <option>Arms/Legs</option>
                                        <option>Back/Front</option>
                                        <option>Body Wax</option>
                                    <optgroup label="BODY THERAPIES">
                                        <option>Body Exfoliation</option>
                                        <option>Body Pack</option>
                                        <option>Body Polishing</option>
                                        <option>Body Massage</option>
                                        <option>Base Makeup</option>
                                </select>
                            </div>
                        </div>

                        <!-- <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-control" name="select_salon">
                                        <option>Select Salon</option>
                                        <option>Hair Master</option>
                                        <option>Looks</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select class="form-control" name="select_Location">
                                        <option>Select Location</option>
                                        <option>Janak Puri</option>
                                        <option>Punjabi Bagh</option>
                                        <option>Dwarka</option>
                                        <option>Varanasi</option>
                                        <option>Chattarpur</option>
                                    </select>
                                </div>
                            </div> -->

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Pin Code" name="pin_code" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Preferred Date" name="date" required>
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

                <!-- <div class="row mt-5">
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

                    </div> -->


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

<!-- <section class="section-padding bg-light-gray blog-section">
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
    </section> -->
