<?php
if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    $to = 'esteps.in@gmail.com';
    $subject = 'Offer Form';
    $message = "Full Name :" . $full_name . "\n" .
        "Gender :" . $gender . "\n" .
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


<section class="offer-page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="assets/images/combo2.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h2 class="h2-heading">Pedicure</h2>
                <div class="offer-price"> <s class="text-red"> Rs 1000</s> &nbsp; <span class="text-green"> Rs 500</span></div>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                <a href="#" class="btn btn-pink" data-toggle="modal" data-target="#offerForm">Buy This Offer</a>
            </div>
        </div>
    </div>
</section>


<!-- The Modal -->
<div class="modal" id="offerForm">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Buy This Offer</h4>
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
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                    </div>
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

                                    <div class="col-md-12 text-center">
                                        <button type="submit" name="submit" class="btn book-appointment-btn">Buy Now</button>
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
