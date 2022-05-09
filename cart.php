<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>
<!-- Product/Service -->
<section class="cart-details-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="white-box p-4 cart-box-1">
                    <div class="heading mb-3">Mr. Rohit Verma</div>
                    <div class="heading"><span>9911060952</span> <button class="btn btn-pink btn-sm ml-3">Verify</button></div>
                </div>
                <div class="white-box p-4 cart-box-1 mt-3">
                    <div class="heading mb-3">Mr. Rohit Verma</div>
                    <div class="heading"><span>9911060952</span> <i class="fas fa-check-circle text-success"></i> </div>
                </div>

                <div class="white-box p-4 cart-box-2 mt-3">
                    <div class="heading mb-1 font-weight-bold">Looks Salon</div>
                    <p><i class="fa fa-map-marker-alt"></i> Janakpuri, Delhi</p>

                    <div class="service-cart-list">
                        <div class="heading">Hair Cut [ladies] </div>
                        <div class="heading">
                            <s>₹ 500</s>
                            <span class="font-weight-bold ml-2">₹ 450</span>
                        </div>
                    </div>
                </div>

                <div class="white-box p-4 cart-box-2 mt-3">
                    <div class="heading mb-1 font-weight-bold">Salon Masters</div>
                    <p><i class="fa fa-map-marker-alt"></i> Punjabi Bagh, Delhi</p>
                    <div class="service-cart-list">
                        <div class="heading">Global Colouring [ladies] </div>
                        <div class="heading">
                            <s>₹ 300</s>
                            <span class="font-weight-bold ml-2">₹ 200</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 pl-0 sub-total-parent">
                <div class="sub-total col-md-12 white-box p-4">
                    <h4 class="font-weight-bold">SUBTOTAL</h4>
                    <div class="coupon-btn coupon-btn-apply"><i class="fas fa-tags"></i> <span class="ml-3">Apply Coupon</span> </div>
                    <div class="coupon-btn coupon-btn-applied">
                        <div>
                            <div class="font-weight-bold applied-coupon-code">WELCOMEBACK</div>
                            <small>Offer applied on the bill</small>
                        </div>
                        <div class="coupon-remove-btn">REMOVE</div>
                    </div>
                    <h6>Price (2 items) <span class="float-right">₹ 650</span> </h6>
                    <h6>GST <span class="float-right">₹ 100</span> </h6>
                    <h6 class="bb-none">Total Price <span class="float-right text-pink">₹ 750</span> </h6>
                    <button class="btn btn-block btn-pink">Checkout</button>
                </div>
            </div>
            <!-- <button class="btn btn-pink float-right">Proceed to Pay</button> -->
        </div>
    </div>
    </div>
</section>

<div class="coupon-modal">
    <div class="coupon-modal-close"> <i class="fa fa-times"></i> </div>

    <div class="apply-coupon-box">
        <input type="text" placeholder="Enter coupon code" class="form-control" />
        <button class="btn btn-pink">APPLY</button>
    </div>

    <div class="available-coupons">
        <h5>AVAILABLE COUPONS</h5>

        <div class="coupon-detail-box">
            <div class="coupon-code">WELCOMEBACK</div>
            <h6>Get 60% off</h6>
            <p>Use code WELCOMEBACK & get 60% off on orders above ₹149. Maximum discount: ₹120.</p>
            <button class="btn btn-pink btn-sm apply-coupon-individual">APPLY COUPON</button>
        </div>
        
        <div class="coupon-detail-box border-0">
            <div class="coupon-code">TRYNEW</div>
            <h6>Get 40% off</h6>
            <p>Use code TRYNEW & get 40% off on orders above ₹79. Maximum discount: ₹92.</p>
            <button class="btn btn-pink btn-sm apply-coupon-individual">APPLY COUPON</button>
        </div>

    </div>

</div>
<div class="overlay"></div>

<?php include 'include/footer.php' ?>
</body>
<script>
    $(document).ready(function() {

        $('.coupon-btn-apply').click(function(){
            $('.coupon-modal').addClass('active');
            $('.overlay').show();
        });

        $('.coupon-modal-close, .overlay').click(function(){
            $('.coupon-modal').removeClass('active');
            $('.overlay').hide();
        });

        $('.coupon-remove-btn').click(function(){
            $(this).parents('.coupon-btn-applied').hide();
            $('.coupon-btn-apply').show();
        });

        $('.apply-coupon-individual').click(function(){
            $('.applied-coupon-code').text($(this).parents('.coupon-detail-box').find('.coupon-code').text().trim());
            $('.coupon-modal').removeClass('active');
            $('.overlay').hide();
            $('.coupon-btn-apply').hide();
            $('.coupon-btn-applied').css('display','flex');
        });

        $('.cart-collapse-btn').click(function() {
            $(this).next('.cart-collapse').slideToggle();
        });
        $('.plus-btn').on('click', function() {
            var $qty = $(this).parent('.input-group-append').prev('.form-control');
            var currentVal = parseInt($qty.val());
            if (!isNaN(currentVal)) {
                $qty.val(currentVal + 1);
            }
        });
        $('.minus-btn').on('click', function() {
            var $qty = $(this).parent('.input-group-prepend').next('.form-control');
            var currentVal = parseInt($qty.val());
            if (!isNaN(currentVal)) {
                $qty.val(currentVal - 1);
            }
        });
    });
</script>

</html>