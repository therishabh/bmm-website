<section class="user-manage-profile">
    <div class="container">
        <div class="row">
            <?php include_once './user/sidebar.php'; ?>
            <div class="col-md-9">
                <div class="manage-user-icon">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="h3-heading">Refer & Earn</h3>

                                <h5>Invite your Friend</h5>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-pink float-right">Submit</button>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="table-responsive" id="tdata_out">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tdata">
                                            <tr>
                                                <td>Rohit Verma</td>
                                                <td>email@gmail.com</td>
                                                <td>9876543210</td>
                                            </tr>
                                         
                                        </tbody>
                                    </table>
                                </div>


                                <div class="empty-box">
                                    <h5></h5>
                                    <img src="<?php echo $base_url; ?>assets/images/no-refer.png" alt="">
                                    <a href="/" class="btn btn-pink">Refer Now</a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>