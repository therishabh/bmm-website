

<section class="login-section">
    <div class="container">
        <div class="row">
            <section class="login">
                <form class="login-form col-md-5 mx-auto">
                    <div class="form-group"><label>Register</label>
                        <p>Your details are safe with us,<br>We will never share it.</p>
                        <div class="form-group"><input type="text" placeholder="Enter Phone" class="form-control" maxlength="" name="phoneNumber"></div>
                        <div class="form-group"><input type="email" placeholder="Enter Email Id" class="form-control" maxlength="" name="email"></div>
                        <div class="form-group"><input type="password" placeholder="Enter Password" class="form-control" maxlength="" name="password"></div>
                        <div class="form-group text-center"><button type="submit" class="btn login-btn">Register</button></div>
                        <p class="text-white">Have An Account? Click here to <a class="text-white" href="login.php"> Sign In</a></p>
                    </div>
                </form>
            </section>
            <!-- <section class="login">
                    <form class="login-form col-md-5 mx-auto">
                        <div class="form-group">
                            <label>Share your mobile number</label>
                            <p>Your details are safe with us, <br>
                                We will never share it.</p>

                            <div class="get-otp login-process-box">
                                <input type="text" placeholder="9999999999" class="form-control" id="phoneVerify" onkeyup="phoneVerifyFunction();" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                            <div class="text-center">
                                <button type="button" class="btn login-btn" id="sendOtpBtn" disabled>Send OTP</button>
                            </div>
                            </div>

                            <div class="enter-otp login-process-box d-custom-none">
                                <input type="text" placeholder="999999" class="form-control" maxlength="6" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                            <div class="text-center">
                                <p class="resend-otp">Resend OTP</p>
                                <button type="button" class="btn login-btn" id="enterOtpBtn" disabled>Enter OTP</button>
                            </div>
                            </div>

                            <div class="create-mpin login-process-box d-custom-none">
                                <input type="text" placeholder="9999" class="form-control" maxlength="4" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                            <div class="text-center">
                                <button type="button" class="btn login-btn" onclick="window.open('user-manage-profile.php','_self')">Create MPIN</button>
                            </div>
                            </div>

                            <p class="text-white"><i class="fa fa-gift"></i> Get Rewards, Gifts</p>
                            <p class="text-white">Have An Account? Click here to <a href="login.php" class="text-white"> Sign In</a></p>
                        </div>
                    </form>
                </section> -->

        </div>
    </div>
</section>
