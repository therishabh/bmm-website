
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
