
        <section class="user-manage-profile">
            <div class="container">
                <div class="row">
                    <?php include_once './user/sidebar.php'; ?>
                    <div class="col-md-9">
                        <div class="manage-user-icon">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="h3-heading">My Pics</h3>
                                        <!--<h5 class="float-left">Photos</h5>-->
                                        <span id="up_btn" class="">
                                        <a href="javascript:user_profile.openUpload();" class="btn btn-pink float-right">Upload Photos</a>
                                        <input type="file" id="myfile" name="myfile" style="display:none;" onchange="user_profile.uploadImage(this);">
                                        <div class="clearfix"></div>
                                        </span>
                                        <div class="row mt-4 user-pic" id="user-pic">
                                            
                                        </div>

                                        
                                


<!--                                        <hr>
                                        <h5 class="float-left">Videos</h5>
                                        <a href="#" class="btn btn-pink float-right">Upload Videos</a>
                                        <div class="clearfix"></div>
                                        <section class="beauty-advice user-video">
                                            <div class="mt-4">
                                                <div class="row">
                                                    <div class="col-md-6 col-12 m-10">
                                                        <a href="https://www.youtube.com/watch?v=UpU8sAXzYEs" target="_blank" class="box-shadow">
                                                            <img src="assets/images/bmm-tv-thumb.jpg" class="img-fluid">

                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 col-12 m-10">
                                                        <a href="#" target="_blank" class="box-shadow">
                                                            <img src="assets/images/bmm-tv-thumb-2.jpg" class="img-fluid">

                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 col-12 m-10">
                                                        <a href="#" target="_blank" class="box-shadow">
                                                            <img src="assets/images/bmm-tv-thumb-3.jpg" class="img-fluid">

                                                        </a>
                                                    </div>
                                                    <div class="col-md-6 col-12 m-10">
                                                        <a href="#" target="_blank" class="box-shadow">
                                                            <img src="assets/images/bmm-tv-thumb-4.jpg" class="img-fluid">

                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>-->

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
