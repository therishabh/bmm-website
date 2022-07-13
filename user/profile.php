<section class="user-manage-profile">
    <div class="container">
        <div class="row">
            <?php include_once './user/sidebar.php'; ?>
            <div class="col-md-9">
                <h3 class="h3-heading">Manage Profile</h3>

                <div class="row">
                    <div class="col-md-8">
                        <div class="white-box profile-form">
                            <form action="" id="profileForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" name="username" id="username" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <div class="input-group mb-3 d-none" id="email_id_outer">
                                                <input type="email" class="form-control" name="email_id" id="email_id" readonly />
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-check text-success"></i></span>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3 d-none" id="email_id_verify_outer">
                                                <input type="email" class="form-control" name="email_id" id="email_id_verify" />
                                                <div class="input-group-append">
                                                  <a href="javascript:user_profile.email_verify_show()"> <span class="input-group-text font-weight-bold anchor-text">Verify</span></a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" name="landline_no" id="landline_no" readonly />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" name="dob" id="dob" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of Anniversary</label>
                                            <input type="date" class="form-control" name="doa" id="doa" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select id="gender" class="form-control">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btns">
                                    <ul>
                                        <li>
                                            <button type="button" onclick="user_profile.updateProfileData();" class="btn btn-pink">Update</button>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="white-box profile-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="profile-photo">
                                        <img src="" alt="" id="profile_photo">
                                    </div>
                                    <div class="upload-btn-wrapper">
                                        <button class="btn btn-pink" onclick="">Upload Photo &nbsp; <i class="fa fa-edit"></i></button>
                                        <input type="file" name="myfile" onchange="user_profile.uploadProfileImage(this)" />
                                    </div>
                                    <div>
                                        <h4 id="t_name"></h4>
                                        <p id="t_mobile"></p>
                                        <p id="t_email"></p>
                                    </div>
                                </div>
                            </div>
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
