<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<section class="book-appointment-banner">
    <img src="assets/images/book-appointment.jpg" class="img-fluid">
</section>
<section class="online-appointment">
    <div class="container">
        <h2 class="text-center">Register as Salon</h2>

        <form action="" method="post">
            <section class="online-appointment">
                <div class="container">
                    <form class="online-appointment-form mt-0">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Full Name" name="full_name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control genderList" name="gender" required>
                                        <option value="">You are a</option>
                                        <option value="">Owner</option>
                                        <option value="">Manager</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Salon Brand Name" name="full_name" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Phone Number" name="" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Id" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Create Password" name="time" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password" name="time" required>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit" class="btn book-appointment-btn">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </form>
    </div>

    </div>
</section>

<?php include 'include/footer.php' ?>