<input type="hidden" id="card_id" value="<?php echo $explode_data[1]; ?>" />
<section class="cart-details-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="white-box p-5 cart-box-1">
                    <div class="heading mb-3" id="username"></div>
                    <div class="heading mb-3"><span id="landline_no"></span> <i class="fas fa-check-circle text-success"></i> </div>
                </div>

                <div class="white-box p-4 cart-box-1 mt-2">
                    <div class="row" id="card-list">
                        <div class="col-md-6">
                            <div class="card-banner" id="card-banner">
                                <img src="" class="img-thumbnail" id="card-img">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-detail-box" id="card-detail">
                                <h2 class="h2-heading card_name"></h2>
                                <div class="bmm-card-detail">
                                    <ul>
                                        <li class="card_price"></li>
                                        <li class="card_value"></li>
                                        <li class="card_validity"></li>
                                        <li class="category"></li>
                                        <li class="card_fee"></li>
                                    </ul>
                                </div>
                            </div>
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