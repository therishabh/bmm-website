<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>



<section class="pay-section">
  <div class="container">

    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="pay-form">
          <h4>Pay with razorpay</h4>
          <div class="row mt-4">
            <label class="col-md-3">Order Id</label>
            <label class="col-md-9"><input type="text" class="form-control" value="ORDER29813679" disabled></label>
          </div>
          <div class="row mt-3">
            <label class="col-md-3">Amount</label>
            <label class="col-md-9"><input type="text" class="form-control" value="10000" disabled></label>
          </div>
          <div class="row mt-3">
            <div class="col-md-4 offset-md-4">
              <button class="btn btn-primary">Pay Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include 'include/footer.php' ?>


<!-- The Modal -->
<div class="modal cardFormModal" id="cardFormModal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal body -->
      <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
      <div class="modal-body">
        <div class="form-group">
          <h4>Privilege Card</h4>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Full Name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Mobile">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <button type="button" class="btn btn-primary btn-block">Buy Now</button>
        </div>
      </div>


    </div>
  </div>
</div>

</body>

</html>