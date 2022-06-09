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
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="" id="" class="form-control">
                                            <option>one</option>
                                            <option>two</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                    <button type="button" onclick="" class="btn btn-pink">Submit</button>
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
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Title one</td>
                                        <td>one</td>
                                        <td><span class="text-warning">Pending</span></td>
                                        <td><a href="query-detail">View Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Title Two</td>
                                        <td>one</td>
                                        <td><span class="text-success">Close</span></td>
                                        <td><a href="query-detail">View Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Title Three</td>
                                        <td>one</td>
                                        <td><span class="text-warning">Pending</span></td>
                                        <td><a href="query-detail">View Detail</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>