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

    $to = 'esteps.in@gmail.com';
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

<section class="book-appointment-banner">
    <img src="assets/images/groom-makeover-consultation-form.jpg" class="img-fluid">
</section>
<section class="online-appointment">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h2 class="h2-heading">GROOM MAKEOVER CONSULTATION</h2>
                <p class="">We will be more than happy to give you advice for your most special day of your life !</p>
            </div>
            <div class="col-md-8">
                <div class="bridal-consultaion-left-box">
                    <div class="row">
                        <div class="col-md-4"><img src="assets/images/groom-makeover-form-img-1.jpg" alt="" class="img-thumbnail"></div>
                        <div class="col-md-8">
                            <h4>Share your Details</h4>
                            <p>Request you to share your contact details,Our experts will call you back to discuss how we can give you a best look.</p>
                        </div>
                    </div>
                </div>
                <div class="bridal-consultaion-left-box">
                    <div class="row">
                        <div class="col-md-4"><img src="assets/images/groom-makeover-form-img-2.jpg" alt="" class="img-thumbnail"></div>
                        <div class="col-md-8">
                            <h4>Groom Makeover Services</h4>
                            <ul>
                                <li>Party Makeover</li>
                                <li>Engagement Makeover</li>
                                <li>Pre Wedding</li>
                                <li>Groom Packages</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">


                <form action="" method="post" class="common-right-form">
                    <section class="">
                        <div class="container">
                            <form class="online-appointment-form mt-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="h2-heading">Get in Touch</h3>
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


                                    <div class="col-md-12 text-right">
                                        <button type="submit" name="submit" class="btn btn-pink btn-block">Submit</button>
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
</section>
