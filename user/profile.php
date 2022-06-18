
        <section class="user-manage-profile">
            <div class="container">
                <div class="row">
                    <?php include_once './user/sidebar.php'; ?>
                    <div class="col-md-9">
                        <div class="manage-user-icon">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="h2-heading">Manage Profile</h2>
                                    </div>
                                    <div class="col-md-3">
                                        <span class="user"><i class="fas fa-user icon icon"></i></span>
                                    </div>
                                    <div class="col-md-9">
                                        <form action="" id="profileForm">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label>Full Name</label>
                                                        <input type="text" class="form-control" name="username" id="username" value="" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email_id" id="email_id" readonly />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="text" class="form-control" name="landline_no" id="landline_no" readonly />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Date of Birth</label>
                                                        <input type="date" class="form-control" name="dob" id="dob"  />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Date of Anniversary</label>
                                                        <input type="date" class="form-control" name="doa" id="doa" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Date of Anniversary</label>
                                                        <input type="date" class="form-control" name="doa" id="doa" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <select id="gender">
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                    <button type="button" onclick="user_profile.updateProfileData();" class="btn btn-pink">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- <div class="user-text">
                                            <h5>Raj Verma</h5>
                                            <p>Email: example@gmail.com</p>
                                            <p>Mobile</p>
                                            <p>Date of Birth: mm/dd/yyyy</p>
                                            <a href="#"><i class="fas fa-lock icon"></i> CHANGE PASSWORD</a>
                                            <a href="user-edit-form.php" class="user-edit"><i class="far fa-edit icon"></i> EDIT</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
