<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<section id="main-body" class="bank-info-page">
    <div class="top-heading">
        <h1>Bank Info</h1>
    </div>
    <form id="bankInfoFrom" class="display-none" method="POST">
        <div id="bankInfo">
            <div class="card mb-3">
                <div class="card-header">
                    Update Bank Info
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="bankName">Bank Name</label>
                                <input type="text" class="form-control" name="bankName" id="bankName" placeholder="Enter Bank Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="accountHolderName">Account Holder Name</label>
                                <input type="text" class="form-control" name="accountHolderName" id="accountHolderName" placeholder="Enter Account Holder Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="accountNumber">Account Number</label>
                                <input type="text" class="form-control" name="accountNumber" id="accountNumber" placeholder="Enter Account Number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="ifscCode">IFSC Code</label>
                                <input type="text" class="form-control" name="ifscCode" id="ifscCode" placeholder="Enter IFSC Code">
                            </div>
                        </div>
                        <div class="col-lg-6 display-none" id="otp-wrapper">
                            <div class="form-group">
                                <label for="otp">OTP</label>
                                <input type="text" class="form-control" name="otp" id="otp" placeholder="Enter OTP">
                                <small class="form-text text-muted"></small>
                                <div id="resent-otp-btn" class="display-none">Resend OTP</div>
                                <div id="resent-otp-counter" class="display-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="button-wrapper text-right">
            <button type="button" class="btn btn-primary edit-btn display-none">Edit Info</button>
            <button type="submit" class="btn btn-primary submit-btn">Submit</button>
        </div>
    </form>
    <div class="loading-wrapper">
        <img src="./includes/img/loader.gif" alt="loading">
    </div>
</section>
<?php include('footer.php') ?>
<script>
    $(function() {
        const token = localStorage.getItem("salonToken");
        if (token) {
            var bank_info;

            var mapDataIntoForm = function() {
                $("#bankInfoFrom input[name='bankName']").val(bank_info.bank_name);
                $("#bankInfoFrom input[name='accountHolderName']").val(bank_info.account_holder_name);
                $("#bankInfoFrom input[name='accountNumber']").val(bank_info.account_number);
                $("#bankInfoFrom input[name='ifscCode']").val(bank_info.ifsc_code);
                if (bank_info.bank_name) {
                    $("#bankInfoFrom input[name='bankName']").attr('disabled', 'true');
                    $("#bankInfoFrom input[name='accountHolderName']").attr('disabled', 'true');
                    $("#bankInfoFrom input[name='accountNumber']").attr('disabled', 'true');
                    $("#bankInfoFrom input[name='ifscCode']").attr('disabled', 'true');
                    $("#bankInfoFrom .edit-btn").show();
                    $("#bankInfoFrom .submit-btn").hide();
                }
            }

            var getBankInfo = function() {
                const url = `${base_url}/salon/get-info.php`;
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'JSON',
                    data: {
                        token: token,
                        q: 'bank_info'
                    },
                    success: function(result) {
                        bank_info = result.result.bank_info;
                        $(".loading-wrapper").hide();
                        $("#bankInfoFrom").fadeIn(1000);
                        mapDataIntoForm();
                    }
                });
            }

            var intoTwoDigit = function(str) {
                return parseInt(str) < 10 ? "0" + str : str;
            }

            var startOTPCounter = function() {
                $("#resent-otp-btn").hide();
                $("#resent-otp-counter").show();
                $("#resent-otp-counter").text("00:60");
                counter = 60;
                var interval = setInterval(function() {
                    counter--;
                    text = "00:" + intoTwoDigit(counter);
                    $("#resent-otp-counter").text(text);
                    if (counter == 0) {
                        $("#resent-otp-btn").show()
                        $("#resent-otp-counter").hide()
                        clearInterval(interval);
                    }
                }, 1000);
            }

            var sendOTP = function() {
                const url = `${base_url}/salon/send-otp-for-bank-info.php`;
                const postData = JSON.stringify({
                    token: token
                });
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'JSON',
                    data: postData,
                    success: function(result) {
                        $("#otp-wrapper .form-text").text(result.label_message);
                        startOTPCounter();
                        $.toast({
                            heading: 'Success',
                            text: result.message,
                            showHideTransition: 'slide',
                            icon: 'success',
                            bgColor: '#179756',
                        });
                    }
                });
            }

            $("#bankInfoFrom .edit-btn").click(function() {
                $("#bankInfoFrom input[name='bankName']").removeAttr('disabled');
                $("#bankInfoFrom input[name='accountHolderName']").removeAttr('disabled');
                $("#bankInfoFrom input[name='accountNumber']").removeAttr('disabled');
                $("#bankInfoFrom input[name='ifscCode']").removeAttr('disabled');
                $("#otp-wrapper").fadeIn();
                $("#bankInfoFrom .edit-btn").hide();
                $("#bankInfoFrom .submit-btn").fadeIn();
                sendOTP();
            });

            $("#resent-otp-btn").click(function() {
                sendOTP();
            });

            $("#bankInfoFrom").validate({
                rules: {
                    bankName: "required",
                    accountHolderName: "required",
                    accountNumber: "required",
                    ifscCode: {
                        required: true,
                    },
                    otp: {
                        required: true,
                        number: true,
                    },
                },
                submitHandler: function(form) {
                    submitForm();
                }
            });

            var submitForm = function() {
                const url = `${base_url}/salon/update-bank-info.php`;
                const postData = {
                    token: token,
                    bank_name: $("#bankInfoFrom input[name='bankName']").val(),
                    account_holder_name: $("#bankInfoFrom input[name='accountHolderName']").val(),
                    account_number: $("#bankInfoFrom input[name='accountNumber']").val(),
                    ifsc_code: $("#bankInfoFrom input[name='ifscCode']").val()
                };
                if (bank_info.bank_name) {
                    postData.otp = $("#bankInfoFrom input[name='otp']").val()
                }
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(postData),
                    success: function(result) {
                        $("#bankInfoFrom input[name='bankName']").attr('disabled', 'true');
                        $("#bankInfoFrom input[name='accountHolderName']").attr('disabled', 'true');
                        $("#bankInfoFrom input[name='accountNumber']").attr('disabled', 'true');
                        $("#bankInfoFrom input[name='ifscCode']").attr('disabled', 'true');
                        $("#bankInfoFrom .edit-btn").show();
                        $("#bankInfoFrom .submit-btn").hide();
                        $("#otp-wrapper").hide();
                        bank_info = {
                            bank_name: $("#bankInfoFrom input[name='bankName']")
                        }
                        $.toast({
                            heading: 'Success',
                            text: result.message,
                            showHideTransition: 'slide',
                            icon: 'success',
                            bgColor: '#179756',
                        });
                    },
                    error: function(error) {
                        $.toast({
                            heading: 'Error',
                            text: error.responseJSON.message,
                            showHideTransition: 'slide',
                            icon: 'error',
                        });
                    }

                });
            }

            getBankInfo();
        } else {
            window.location.replace('index.php');
        }
    });
</script>