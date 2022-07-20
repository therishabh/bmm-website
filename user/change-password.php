<section class="user-manage-profile">
    <div class="container">
        <div class="row">
            <?php include_once './user/sidebar.php'; ?>
            <div class="col-md-9">
                <h3 class="h3-heading">Change Password</h3>

                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box profile-form">
                            <form action="" id="profileForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input type="password" class="form-control" name="" id="old_password" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" class="form-control" name="" id="new_password" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="" id="confirm_password" value="" />
                                        </div>
                                        <div class="form-btns">
                                            <ul>
                                                <li>
                                                    <button type="button" onclick="user_profile.updatePassword();" class="btn btn-pink">Update</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- The Modal -->
<div class="modal" id="verifyEmailModal">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Enter OTP sent on mail</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-center p-4">
                <input type="text" class="form-control" placeholder="Enter otp" id="email_otp" />
                <button type="button" class="btn btn-pink mt-3" onclick="user_profile.email_verify()">Verify</button>
            </div>


        </div>
    </div>
</div>