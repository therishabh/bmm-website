<?php
include './../shared/utilities.php';
includeWithVariables('./../include/header.php', array('page_title' => "Book MY Makeup Pro Login"));
?>
<section class="slide-section">
    <div id="slides" class="carousel slide" data-ride="carousel">
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/images/pro-slide1.jpg" alt="">
            </div>
        </div>

        <a class="carousel-control-prev" href="#slides" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slides" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
<section class="login-section login-section-pro">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>BMM PRO Benefits</h2>
                <ul class="common-list mt-4">
                    <li>Free Listing</li>
                    <li>Branding of Your Salon</li>
                    <li>Brand Promotions</li>
                    <li>Booking Management System</li>
                    <li>Free Leads & Queries</li>
                    <li>24*7 Toll Free Number</li>
                    <li>Discounts & Deals</li>
                    <li>Genuine Makeup Products</li>
                    <li>Trainings & Workshops</li>
                    <li>GST Benefits</li>
                    <li>Product launch & Events</li>
                    <li>Cobranding with Book MY Makeup</li>
                    <li>Book MY Makeup Cards</li>
                    <li>Influencers & Makeup Artists endorsements</li>
                </ul>
            </div>
            <div class="col-md-5 offset-md-1">
                <section class="login">
                    <form class="login-form login-pro-form" id="proLoginForm" autocomplete="off">
                        <div class="form-heading">Sign In</div>
                        <ul class="pro-user-type">
                            <li> <label><input type="radio" name="salonType" id="salon" value="salon" checked /> Salon</label></li>
                            <li> <label><input type="radio" name="salonType" id="makeup_artist" value="makeup_artist" /> Makeup Artist</label></li>
                        </ul>
                        <div class="form-group mt-3">
                            <label for="mobile_number_input">Mobile Number / Email id</label>
                            <input type="text" id="mobile_number_input" placeholder="Enter Mobile Number or Email id" class="form-control" name="email_mobile">
                        </div>
                        <div class="form-group">
                            <label for="password_input">Password</label>
                            <input type="password" id="password_input" placeholder="Enter Password" class="form-control" name="password">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" id="signInBtn" class="btn login-btn">Sign In</button>
                            <div class="or-text">
                                <span>OR</span>
                            </div>
                            <button type="button" id="timer-btn" class="btn login-btn"><span></span> sec</button>
                            <button type="button" id="signin-with-otp-btn" class="btn login-btn">Sign In with OTP</button>
                        </div>
                        <div class="bar-text">
                            <span>Don't Have An Account ?</span>
                        </div>
                        <div class="button-wrap">
                            <a href="pro-register.php">
                                <div class="sign-in-btn btn login-btn">Sign Up</div>
                            </a>
                        </div>
                    </form>

                    <form class="login-form login-pro-form d-custom-none" id="proLoginStepTwo">
                        <div class="form-heading">Sign In - Verify OTP</div>
                        <div class="register-steps register-step2 mt-3">
                            <div class="form-group">
                                <label for="otp_text">OTP</label>
                                <input type="text" id="otp_text" placeholder="Enter OTP" class="form-control" maxlength="6" name="otp">
                            </div>
                            <div class="form-group"></div>
                            <label class="resend-seconds"> <span class></span> sec</label>
                            <div class="cursor-pointer resend-btn">Resend OTP</div>
                            <div class="form-group text-center mt-3">
                                <div class="go-back-btn btn login-btn">Go Back</div>
                                <button type="submit" id="verifyOTP" class="btn login-btn">Verify OTP</button>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

        </div>
    </div>
</section>

<section class="get-started">
    <div class="container">
        <h4 class="text-center">Join BMM PRO</h4>
        <div class="row get-started-row">
            <div class="col-md-4">
                <div class="text-center">
                    <img src="../assets/images/get-started-step-1.png" class="img-fluid">
                    <h5 class="mb-0 mt-3">Register</h5>
                    <p class="pt-2">Are you a salon owner or a Makeup Artist,Register with us for a free listing.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <img src="../assets/images/get-started-step-2.png" class="img-fluid">
                    <h5 class="mb-0 mt-3">Validation</h5>
                    <p class="pt-2">Share your business details <br>with us to validate !</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <img src="../assets/images/get-started-step-3.png" class="img-fluid">
                    <h5 class="mb-0 mt-3">Approved</h5>
                    <p class="pt-2"> Once approved,Start getting <br>bookings and earn.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-partners pt-5 pb-5">
    <div class="container">
        <h2 class="text-center h2-heading">BMM PRO Partners</h2>

        <div class="our-partners-slider owl-carousel owl-theme">

            <div class="item">
                <div class="partner-logo-box">
                    <img src="../assets/images/pro-brand-logo-1.png" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="partner-logo-box">
                    <img src="../assets/images/pro-brand-logo-2.png" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="partner-logo-box">
                    <img src="../assets/images/pro-brand-logo-3.png" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="partner-logo-box">
                    <img src="../assets/images/pro-brand-logo-4.png" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="partner-logo-box">
                    <img src="../assets/images/pro-brand-logo-5.png" alt="" />
                </div>
            </div>
            <div class="item">
                <div class="partner-logo-box">
                    <img src="../assets/images/pro-brand-logo-6.png" alt="" />
                </div>
            </div>
        </div>


    </div>
</section>

<section class="partner-section">
    <img src="../assets/images/login-section-pro-bg.jpg" alt="" />
</section>

<?php include '../include/footer.php' ?>
<script>
    let token = localStorage.getItem('salonToken');
    if (token) {
        window.location.replace('../salon/dashboard.php');
    }
    $(function() {
        let otpTiming = 60;
        let tempToken;
        let interval;
        $("#proLoginForm").validate({
            rules: {
                email_mobile: "required",
                password: "required",
            },
            messages: {
                email_mobile: "Please enter Mobile Number or Email id",
                password: "Please enter Password",
            },

            submitHandler: function(form) {
                let category = $('#proLoginForm input[name=salonType]:checked').val();
                let post_data = {
                    email_mobile: $('#proLoginForm [name=email_mobile]').val(),
                    password: $('#proLoginForm [name=password]').val(),
                    category: category,
                }
                $("#signInBtn").attr('disabled', true);
                $.ajax({
                    url: base_url + 'salon/auth/login.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(result) {
                        $("#signInBtn").removeAttr('disabled');
                        toastr.success("Sign in successfully");
                        localStorage.setItem("salonToken", result.token);
                        window.location.replace('../salon/dashboard.php');
                    },
                    error: function(error) {
                        $("#signInBtn").removeAttr('disabled');
                        toastr.error(error.responseJSON.message);
                    }
                });
            }
        });

        $("#signin-with-otp-btn").click(function() {
            sendOTPForLogin();
        });

        function sendOTPForLogin() {
            $('#proLoginStepTwo input[name=otp]').val("")
            let post_data = {
                email_mobile: $("#proLoginForm [name=email_mobile]").val(),
                category: $('#proLoginForm input[name=salonType]:checked').val()
            }
            if (!!post_data.email_mobile) {
                $("#signin-with-otp-btn").attr('disabled', true);
                $.ajax({
                    url: base_url + 'salon/auth/login-with-otp.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(result) {
                        $("#signin-with-otp-btn").removeAttr('disabled');
                        $("#proLoginStepTwo").show();
                        $("#proLoginForm").hide();
                        toastr.success(result.message);
                        tempToken = result.token;
                        resendSetInterval();
                    },
                    error: function(error) {
                        $("#signin-with-otp-btn").removeAttr('disabled');
                        toastr.error(error.responseJSON.message);
                    }
                });
            } else {
                toastr.error("Please enter Mobile Number or Email id");
            }
        }

        function resendSetInterval() {
            $('.resend-btn').hide();
            $('.resend-seconds').show();
            $("#signin-with-otp-btn").hide();
            $("#timer-btn").show();
            let resend_seconds = otpTiming;
            $('.resend-seconds span').text(resend_seconds);
            $('#timer-btn span').text(resend_seconds);
            interval = setInterval(function() {
                resend_seconds--;
                if (resend_seconds > 1) {
                    $('.resend-seconds span').text(resend_seconds);
                    $('#timer-btn span').text(resend_seconds);
                } else {
                    $('.resend-seconds').hide();
                    $('.resend-btn').show();
                    $("#signin-with-otp-btn").show();
                    $("#timer-btn").hide();
                    clearInterval(interval);
                    return;
                }
            }, 1000);
        }

        $('.resend-btn').click(function() {
            sendOTPForLogin();
        });

        $("#proLoginStepTwo .go-back-btn").click(function() {
            $("#proLoginStepTwo").hide();
            $("#proLoginForm").show();
        });

        $("#proLoginStepTwo").validate({
            rules: {
                otp: {
                    required: true,
                    number: true,
                    minlength: 6
                }
            },
            messages: {
                otp: {
                    required: "Please enter OTP",
                    number: "Please enter a valid OTP",
                    minlength: "Please enter 6 digit OTP"
                }
            },
            submitHandler: function(form) {
                let post_data = {
                    otp: $('#proLoginStepTwo input[name=otp]').val(),
                    token: tempToken
                }
                $("#verifyOTP").attr('disabled', true);
                $.ajax({
                    url: base_url + 'salon/auth/verify-otp.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(result) {
                        clearInterval(interval);
                        toastr.success('OTP successfully verified');
                        $("#verifyOTP").removeAttr('disabled');
                        localStorage.setItem("salonToken", result.token);
                        window.location.replace('../salon/dashboard.php');
                    },
                    error: function(error) {
                        $("#verifyOTP").removeAttr('disabled');
                        toastr.error(error.responseJSON.message);
                    }
                });
            }
        });

    });
</script>
</body>

</html>