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
                                            <div class="input-group mb-3">
                                                <input type="email" class="form-control" name="email_id" id="email_id" readonly />
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-check text-success"></i></span>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="email" class="form-control" name="email_id" id="email_id" readonly />
                                                <div class="input-group-append">
                                                  <a href="#"> <span class="input-group-text font-weight-bold anchor-text">Verify</span></a> 
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
                                        <img src="../assets/images/profile-photo.jpg" alt="">
                                    </div>
                                    <div class="upload-btn-wrapper">
                                        <button class="btn btn-pink">Upload Photo &nbsp; <i class="fa fa-edit"></i></button>
                                        <input type="file" name="myfile" />
                                    </div>
                                    <div>
                                        <h4>Rohit Verma</h4>
                                        <p>9911060952</p>
                                        <p>rohitverma@gmail.com</p>
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