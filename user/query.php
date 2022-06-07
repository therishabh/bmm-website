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
                                        <label>Query For</label>
                                        <select name="" id="" class="form-control">
                                            <option>Reason one</option>
                                            <option>Reason two</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Priority</label>
                                        <select name="" id="" class="form-control">
                                            <option>High</option>
                                            <option>Low</option>
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
                                        <th>Index</th>
                                        <th>Query For</th>
                                        <th>View Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Reason one</td>
                                        <td><a href="#">View Detail</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Reason one</td>
                                        <td><a href="#">View Detail</a></td>
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