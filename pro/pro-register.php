<?php
include './../shared/utilities.php';
includeWithVariables('./../include/header.php', array('page_title' => "Book MY Makeup Pro Sign Up"));
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
                    <div class="form-group">
                        <form class="login-form login-pro-form" id="proRegisterStepOne">
                            <div class="form-heading">Registration</div>
                            <div class="register-steps register-step1">
                                <ul class="pro-user-type">
                                    <li> <label><input type="radio" name="salonType" value="salon" checked /> Salon</label></li>
                                    <li> <label><input type="radio" name="salonType" value="makeup_artist" /> Makeup Artist</label></li>
                                </ul>
                                <div class="form-group" id="input_makeup_artist_name">
                                    <label for="makeup_artist_input">Makeup Artist Name</label>
                                    <input type="text" id="makeup_artist_input" placeholder="Enter Makeup Artist Name" class="form-control" name="makeup_artist_name">
                                </div>
                                <div class="form-group" id="input_salon_name">
                                    <label for="salon_name_input">Salon Name</label>
                                    <input type="text" id="salon_name_input" placeholder="Enter Salon Name" class="form-control" name="salon_name">
                                </div>
                                <div class="form-group">
                                    <label for="mobile_number_input">Mobile Number</label>
                                    <input type="text" id="mobile_number_input" placeholder="Enter Mobile Number" class="form-control" maxlength="10" name="mobile_no">
                                </div>
                                <div class="form-group">
                                    <label for="email_id_input">Email Id</label>
                                    <input type="email" id="email_id_input" placeholder="Enter Email Id" class="form-control" maxlength="" name="email">
                                </div>
                                <div class="g-recaptcha brochure__form__captcha" data-sitekey="6LeMSM8eAAAAABYjhVtzcDqWMCwLZu_oPCh2kBRB"></div>
                                <div class="form-group text-center" style="margin-top: 15px;"><button type="submit" id="proRegisterBtn" class="btn login-btn">Sign Up</button></div>
                                <div class="bar-text">
                                    <span> Already have an account ?</span>
                                </div>
                                <div class="button-wrap">
                                    <a href="index.php">
                                        <div class="sign-in-btn btn login-btn">Sign In</div>
                                    </a>
                                </div>
                            </div>
                        </form>

                        <form class="login-form login-pro-form d-custom-none" id="proRegisterStepTwo">
                            <div class="form-heading">Registration - Verify OTP</div>
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
                        </form>

                        <form class="login-form login-pro-form d-custom-none" id="proRegisterStepThree">
                            <div class="form-heading">Registration - Set Password</div>
                            <div class="register-steps register-step3 mt-3">
                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <input type="password" id="new_password" placeholder="Enter Password" class="form-control" name="password">
                                </div>
                        </form>
                    </div>
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
        let signup_post_data = {
            category: 'salon',
            mobile_no: '',
            email_id: '',
            name: '',
        }

        // *****************
        // step 1
        // *****************
        $(".pro-user-type input[name='salonType']").change(function() {
            const checkbox_value = $(this).val();
            $("#input_makeup_artist_name input").val("")
            $("#input_salon_name input").val("")
            if (checkbox_value == 'salon') {
                $("#input_makeup_artist_name").hide();
                $("#input_salon_name").show();
            } else {
                $("#input_makeup_artist_name").show();
                $("#input_salon_name").hide();
            }
            signup_post_data.category = checkbox_value;
        });

        $("#proRegisterStepOne").validate({
            rules: {
                makeup_artist_name: {
                    required: true
                },
                salon_name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                mobile_no: {
                    required: true,
                    number: true,
                    minlength: 10
                },
                'g-recaptcha-response': {
                    required: true
                }
            },
            messages: {
                makeup_artist_name: {
                    required: "Please enter Makeup artist name"
                },
                salon_name: {
                    required: "Please enter Salon name"
                },
                email: {
                    required: "Please enter Email id",
                    email: "Please enter valid Email id"
                },
                mobile_no: {
                    required: "Please enter Mobile number",
                    number: "Please enter a valid mobile number",
                    minlength: "Your mobile number must be at least 10 characters long"
                }
            },
            submitHandler: function(form) {
                signup_post_data.email_id = $("#proRegisterStepOne input[name='email']").val()
                signup_post_data.mobile_no = $("#proRegisterStepOne input[name='mobile_no']").val()
                if (signup_post_data.category == 'salon') {
                    signup_post_data.name = $("#proRegisterStepOne input[name='salon_name']").val()
                } else {
                    signup_post_data.name = $("#proRegisterStepOne input[name='makeup_artist_name']").val()
                }
                signup_post_data.captcha = $("#proRegisterStepOne [name='g-recaptcha-response']").val();
                const url = base_url + 'salon/auth/signup.php';
                if (!!signup_post_data.captcha) {
                    $("#proRegisterStepOne #proRegisterBtn").attr('disabled', true)
                    $.ajax({
                        url,
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(signup_post_data),
                        success: function(data) {
                            $("#proRegisterStepOne #proRegisterBtn").removeAttr('disabled')
                            $('#proRegisterStepOne').hide();
                            $('#proRegisterStepTwo').show();
                            tempToken = data.token;
                            resendSetInterval();
                        },
                        error: function(error) {
                            toastr.error(error.responseJSON.message);
                            $("#proRegisterStepOne #proRegisterBtn").removeAttr('disabled')

                        }
                    });
                } else {
                    toastr.error("Please validate Captcha");
                }
            }
        });
        // *****************
        // step 1 End
        // *****************

        // *****************
        // step 2
        // *****************
        function resendSetInterval() {
            $('.resend-btn').hide();
            $('.resend-seconds').show();
            let resend_seconds = otpTiming;
            $('.resend-seconds span').text(resend_seconds);
            let interval = setInterval(function() {
                resend_seconds--;
                if (resend_seconds > 1) {
                    $('.resend-seconds span').text(resend_seconds);
                } else {
                    $('.resend-seconds').hide();
                    $('.resend-btn').show();
                    clearInterval(interval);
                    return;
                }
            }, 1000);
        }

        $('.resend-btn').click(function() {
            let post_data = {
                token: tempToken
            }
            $.ajax({
                url: base_url + 'salon/auth/resend-otp.php',
                type: 'POST',
                dataType: 'JSON',
                data: JSON.stringify(post_data),
                success: function() {
                    resendSetInterval();
                }
            });
        });

        $("#proRegisterStepTwo").validate({
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
                    otp: $('#proRegisterStepTwo input[name=otp]').val(),
                    token: tempToken
                }
                $("#verifyOTP").attr('disabled', true);
                $.ajax({
                    url: base_url + 'salon/auth/verify-otp.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(res) {
                        $('#proRegisterStepTwo').hide();
                        $('#proRegisterStepThree').show();
                        toastr.success('OTP successfully validated');
                        $("#verifyOTP").removeAttr('disabled');
                    },
                    error: function(error) {
                        $("#verifyOTP").removeAttr('disabled');
                        toastr.error(error.responseJSON.message);
                    }
                });
            }
        });

        $("#proRegisterStepTwo .go-back-btn").click(function() {
            $('#proRegisterStepOne').show();
            $('#proRegisterStepTwo').hide();
            $("#proRegisterStepOne [name='g-recaptcha-response']").val("");
            grecaptcha.reset();
        })

        // *****************
        // step 2 End
        // *****************

        // *****************
        // step 3
        // *****************
        $("#proRegisterStepThree").validate({
            rules: {
                password: {
                    required: true
                },
                confirmPassword: {
                    required: true
                }
            },
            messages: {
                password: {
                    required: "Please enter New Password"
                },
                confirmPassword: {
                    required: "Please enter Confirm Password"
                }
            },
            submitHandler: function(form) {
                let password = $('#proRegisterStepThree [name=password]').val();
                let confirmPassword = $('#proRegisterStepThree [name=confirmPassword]').val();
                if (password == confirmPassword) {
                    let post_data = {
                        token: tempToken,
                        password: password
                    }
                    $("#stepThreeSubmitBtn").attr('disabled', true);
                    $.ajax({
                        url: base_url + 'salon/auth/set-password.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(post_data),
                        success: function(result) {
                            toastr.success('You have successfully Registered');
                            localStorage.setItem("salonToken", result.token);
                            window.location.replace('../salon/dashboard.php');
                            $("#stepThreeSubmitBtn").removeAttr('disabled');
                        },
                        error: function(error) {
                            toastr.error(error.responseJSON.message);
                            $("#stepThreeSubmitBtn").removeAttr('disabled');
                        }
                    });
                } else {
                    toastr.error('New Password and Confirm Password should be same');
                }
            }
        });
        // *****************
        // step 3 End
        // *****************
    });
</script>
</body>

</html>