<section class="user-manage-profile">
    <div class="container">
        <div class="row">
            <?php include_once './user/sidebar.php'; ?>
            <div class="col-md-9">
                <div class="manage-user-icon">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="row mb-3 h2-heading m-0">
                                    <div class="col-md-6 pl-0">
                                        <h2 class="h2-heading border-0 mb-0">My Bookings</h2>
                                    </div>
                                    <div class="col-md-6 pr-0">
                                        <div class="input-group search-bar-main">
                                            <i class="fa fa-search seacrh-icons"></i>
                                            <input type="text" class="form-control" placeholder="Search by order id" aria-label="" aria-describedby="basic-addon1" id="booking_number">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button" onclick="user_profile.getUserBookings();">
                                                    Search
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="booking_boxes">

                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>