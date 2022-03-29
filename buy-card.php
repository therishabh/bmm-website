<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>



<div class="card-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="pink-section-title">Buy Card</h2>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Choose Card Type</label>
                    <select class="form-control">
                        <option>Gift Card</option>
                        <option>Membership Card</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>For</label>
                    <select class="form-control">
                        <option>Self</option>
                        <option>Family</option>
                        <option>Friend</option>
                        <option>Employee</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-12 text-center mt-3">
                <button class="btn btn-brown">Buy Now</button>
            </div>
        </div>
    </div>
</div>

<?php include 'include/footer.php' ?>