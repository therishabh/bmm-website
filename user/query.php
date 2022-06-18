<section class="user-manage-profile">
    <div class="container">
        <div class="row">
            <?php include_once './user/sidebar.php'; ?>
            <div class="col-md-9">
                <div class="manage-user-icon">
                    <div class="col-md-12">
                        <h2 class="h2-heading">Query</h2>
                        <form action="" id="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" id="title" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="" id="category-list" class="form-control" required>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" id="description" required></textarea>
                                    </div>
                                    <button type="button" onclick="user_profile.querySave();" class="btn btn-pink">Submit</button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive mt-4">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Serial Number</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="query_tbody">
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>