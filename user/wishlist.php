<section class="user-manage-profile">
    <div class="container">
        <div class="row">
            <?php include_once './user/sidebar.php'; ?>
            <div class="col-md-9">
                <div class="manage-user-icon">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="h3-heading">Wishlist</h3>
                            </div>

                            <span class="row" id="wishlist_data"></span>

                            <div class="no-wishlist-box empty-box no-data-box">
                                <img src="<?php echo $base_url; ?>assets/images/no-wishlist.png" alt="">
                                <h5>Your wishlist is empty!</h5>
                                <p>Seems like you don't have wished here.<br>Make a wish!</p>
                            </div>
                            <!-- <div class="empty-box no-data-box">
                                <img src="<?php echo $base_url; ?>assets/images/no-data.png" alt="">
                                <h5>No data found...</h5>
                            </div> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>