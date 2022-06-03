<input type="hidden" id="card_id" value="<?php echo $explode_data[1]; ?>" />
<section class="cart-details-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="white-box p-5 cart-box-1">
                    <div class="heading mb-3" id="username"></div>
                    <div class="heading mb-3" ><span id="landline_no"></span> <i class="fas fa-check-circle text-success"></i> </div>
                </div>

                <div class="white-box p-2 cart-box-1 mt-2">
                    <div class="row" id="card-list">
                        <div class="card-banner col-md-6 col-12 m-10" id="card-banner">
                            <img src="" class="img-fluid" style="margin-top: 25px; padding:40px;" id="card-img">
                        </div>
                        <div class="card-detail-box col-md-6 col-12 m-10" id="card-detail">
                            <h3 class="card_name mt-3" style="color:#f92a63"></h3>
                            <!-- <p>No Joining Fee, No Annual Fee</p> -->
                            <p class="card_price"></p>
                            <p class="card_value"></p>
                            <p class="card_validity"></p>
                            <p class="category"></p>
                            <p class="card_fee"></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 pl-0 sub-total-parent">
                <div class="sub-total col-md-12 white-box p-4">
                    <h4 class="font-weight-bold mb-4">PAYMENT SUMMARY</h4>
                    <h6>Card Price<span class="float-right" id="card_price"> </span> </h6>
                    <h6>Card Value<span class="float-right" id="card_value"> </span> </h6>
                    <h6>Delivery<span class="float-right">₹ 0</span> </h6>
                    <h6 class="bb-none">Total Price <span class="float-right text-pink" id="total_price"></span> </h6>
                    <button class="btn btn-block btn-pink" id="checkout-btn">Checkout</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="overlay"></div>

