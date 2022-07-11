<input type="hidden" id="query_id" value="<?php echo $explode_data[2]; ?>" />


<section class="user-manage-profile">
    <div class="container">
        <div class="row">
            <?php include_once './user/sidebar.php'; ?>
            <div class="col-md-9">
                <div class="manage-user-icon">
                    <div class="col-md-12">
                        <h2 class="h2-heading h2-heading-flex"><span>Query Detail</span> <a href="<?php echo $base_url; ?>user/query" class="btn-query-back"><i class="fa fa-arrow-left"></i> Back</a></h2>
                        <h4 id="query_title"></h4>
                        <span id="query_body">
                        
                        </span>
                        

                        <form class="query-form">
                            <textarea name="" id="description" cols="20" rows="5" placeholder="Reply" class="form-control" ></textarea>
                        <a href="javascript:user_profile.replyQuery();" class="btn btn-pink">Submit</a>
                        </form>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>