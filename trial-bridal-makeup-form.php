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
    $subject = 'Book An Appointment Online Form';
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


<section class="book-appointment-banner">
    <img src="assets/images/trial-bridal-makeup-form.jpg" class="img-fluid">
</section>
<section class="online-appointment">
    <div class="container">
        <h2 class="text-center">Bridal Makeup Trial</h2>

        <form action="" method="post">
            <section class="online-appointment">
                <div class="container">
                    <form class="online-appointment-form mt-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name" name="full_name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name" name="full_name" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Phone" name="contact" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Id" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City" name="city" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="State" name="state" required>
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
                        </div>
                    </form>
                </div>
            </section>
        </form>
    </div>

    </div>
</section>
