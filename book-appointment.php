<?php
if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    // $gender=$_POST['gender'];
    $contact = $_POST['contact'];
    $servicetypeLadies = $_POST['servicetypeLadies'];
    $servicetypeGents = $_POST['servicetypeGents'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $city = $_POST['city'];
    $time = $_POST['time'];

    $to = 'esteps.in@gmail.com';
    $subject = 'Book An Appointment Online Form';
    $message = "Full Name :" . $full_name . "\n" .
        // "Gender :".$gender."\n".
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


<section class="book-appointment-banner">
    <img src="assets/images/book-appointment.jpg" class="img-fluid">
</section>
<section class="online-appointment form-bg">
    <div class="container">
        <h2 class="text-center">BOOK AN APPOINTMENT ONLINE</h2>
        <h5 class="text-center">Share your details with us</h5>

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
                            <!-- <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control genderList" name="gender" required>
                                                <option value="emptyService">Gender</option>
                                                <option value="gentsServiceList">Gents</option>
                                                <option value="ladiesServiceList">Ladies</option>
                                                <option value="other">Other</option>                                               
                                            </select>
                                        </div>
                                    </div> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Contact" name="contact" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Id" name="email" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="gender" required>
                                        <option value="">Select Salon</option>
                                        <option value="">Hair Masters</option>
                                        <option value="">Looks</option>
                                        <option value="">Geetanjali</option>
                                        <option value="">Tony & Guy</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="gender" required>
                                        <option value="">City</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="gender" required>
                                        <option value="">Location</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Preferred Date" name="date" required>
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

                            <div class="col-md-12 mt-5 text-center">
                                <p>OR</p>
                                <h5>Give a missed call us @ +91 844 855 4942</h5>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </form>
    </div>

    </div>
</section>