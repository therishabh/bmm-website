<!-- Product/Service -->
<section class="cart-details-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="white-box p-4 cart-box-1">
                    <div class="heading mb-3" id='username'></div>
                    <div class="heading"><span id='landline_no'></span> <i class="fas fa-check-circle text-success"></i> </div>
                </div>

                <div class="white-box p-4 cart-box-2 mt-3">
                    <div class="heading mb-1 font-weight-bold" id='salon_name'></div>
                    <p><i class="fa fa-map-marker-alt"></i> <span id='salon_address'></span></p>
                    <div id='service-list'>

                    </div>
                </div>
            </div>
            <div class="col-md-4 pl-0 sub-total-parent">
                <div class="sub-total col-md-12 white-box p-4">
                    <h4 class="font-weight-bold">SUBTOTAL</h4>
                    <div class="coupon-btn coupon-btn-apply text-right cursor-pointer"><i class="fas fa-tags"></i> <span class="ml-3">Apply Coupon</span> </div>
                    <div class="coupon-btn card-btn-apply text-right cursor-pointer"><i class="fas fa-credit-card"></i> <span class="ml-3">Do You have Membership Card?</span> </div>

                    <div id="availableCardBox">
                        <h5>Enter membership card details</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter card number" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Expiry Date" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <button class="btn btn-pink" id="apply-card">APPLY</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="membership-card-box">
                        <div class="form-group mb-1">
                            <label><b> Card Balance</b> : Rs. 5000/-</label>
                        </div>
                        <div class="form-group m-0 p-0">
                            <label> <input type="radio" name="membership-card" checked value="card_full_pay" /> Pay full amount with card</label>
                            <label> <input type="radio" name="membership-card" value="card_partial_pay" /> Pay Partial amount with card</label>
                            <input type="text" class="form-control" placeholder="Enter partial amount" id="partialPaymentInput" />
                        </div>
                    </div>

                    <div class="coupon-btn coupon-btn-applied hidden-container">
                        <div>
                            <div class="font-weight-bold applied-coupon-code"></div>
                            <small>Offer applied on the bill</small>
                        </div>
                        <div class="coupon-remove-btn">REMOVE</div>
                    </div>
                    <h6>Price (2 items) <span class="float-right">₹ <span id="total_price"></span></span> </h6>
                    <h6>GST <span class="float-right">₹ <span id="total_tax"></span></span> </h6>
                    <h6 class="bb-none">Total Price <span class="float-right text-pink">₹ <span id="total_amount"></span></span> </h6>
                    <button class="btn btn-block btn-pink" onclick="cart_cl.checkout();">Checkout</button>
                </div>
            </div>
            <!-- <button class="btn btn-pink float-right">Proceed to Pay</button> -->
        </div>
    </div>
    </div>
</section>

<!-- Register Modal -->
<div class="modal " id="couponModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Apply Coupon</h5>
                <button type="button" class="close coupon-modal-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class=" col-lg-12 row">
                    <input type="text" placeholder="Enter coupon code" class="form-control col-lg-8" id="text_coupon" />
                    <div class='col-lg-4'>
                        <button class="btn btn-pink" onclick="cart_cl.couponApplyText();">APPLY</button>
                    </div>
                </div>

                <div class="available-coupons mt-3">
                    <h5><b>AVAILABLE COUPONS</b></h5>

                    <!--                    <div class="coupon-detail-box mb-10">
                        <div class='col-lg-12 row'>
                            <div class="coupon-code border p-2 rounded mb-1 col-lg-8">WELCOMEBACK</div>
                            <div class='col-lg-4'>
                                <button class="btn btn-pink apply-coupon-individual">USE</button>
                            </div>
                        </div>
                        <p>Use code <b>WELCOMEBACK</b> & get <b>60% off</b> on orders <b>above ₹149</b>. Maximum discount: ₹120.</p>
                    </div>-->



                </div>
            </div>

        </div>
    </div>
</div>

<!-- availableCardModal -->
<div class="modal " id="availableCardModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Enter membership card details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <input type="text" placeholder="Enter card number" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" placeholder="Enter Expiry Date" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group text-center">
                            <button class="btn btn-pink" id="apply-card">APPLY</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>