<input type="hidden" id="order" value="<?php echo $explode_data[1]; ?>" />

<section class="section-padding bg-gray d-none" id="success">
  <div class="container">
    <div class="payment-status-page">
      <i class="fa fa-check-circle fa-4x text-success"></i>
      <h2 class="text-success">Payment Successful</h2>
      <p>Thank you your payment of Rs. <span id="success_amt"></span> /- has been received.</p>

      <div class="payment-status-btn-list">
      <a href="<?php echo $base_url; ?>" class="btn btn-outline-secondary btn-lg">Continue Shopping</a>
      <a href="<?php echo $base_url; ?>user/my-bookings" class="btn btn-pink btn-lg">View Order</a>
      </div>
    </div>
  </div>
</section>


<section class="section-padding bg-gray d-none" id="failure">
  <div class="container">
    <div class="payment-status-page">
      <i class="fa fa-times-circle fa-4x text-danger"></i>
      <h2 class="text-danger">Payment Failed</h2>
      <p>Your payment was not successfully processed. Please contact customer support.</p>

      <div class="payment-status-btn-list">
      <a href="<?php echo $base_url; ?>" class="btn btn-outline-secondary btn-lg">Back to home</a>
      <a href="<?php echo $base_url; ?>cart" class="btn btn-pink btn-lg">Try Again</a>
      </div>
    </div>
  </div>
</section>