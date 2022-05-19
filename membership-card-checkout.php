
<section class="cart-details-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="white-box p-5 cart-box-1">
                    <div class="heading mb-3">Mr. Rohit Verma</div>
                    <div class="heading mb-3">123@gmail.com</div>
                    <div class="heading mb-3"><span>9911060952</span> <i class="fas fa-check-circle text-success"></i> </div>
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

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    $(function() {

        // CARD DETAIL STARTS HERE----------------------------------------------
        let card_id = getParameterByName('card-id');
        let get_membership_card_detail = function() {
            let card_detail = {
                card_id: card_id,
            }
            $.ajax({
                url: base_url + "/user/bmm-card/detail.php",
                type: "GET",
                data: card_detail,
                dataType: "JSON",
                success: function(result) {
                    // console.log(result);
                    $(".white-box .card-detail-box .card_name").text(result.card_name);
                    $('.card_price').html('Exclusive Benefits on card price of ' + result.price);
                    $('.card_value').html('Get card with value of ' + result.value);
                    $('.card_validity').html('Card Validity will be for ' + result.validity);
                    $('.category').html('Card Category ' + result.category);
                    $('.card_fee').html('No Joining Fee, No Annual Fee');
                    $('#card-img').attr('src', "" + result.image + "").append("#card-banner");
                    $("#card_price").html(`₹` + result.price);
                    $("#card_value").html(`₹` + result.value);
                    $("#total_price").html(`₹` + result.price);
                }
            });
        }
        get_membership_card_detail();

        // CARD DETAIL ENDS HERE------------------------------------------------

        // CHECKOUT STARTS HERE---------------------------------------------------
        // let card_id = getParameterByName('card-id');
        $("#checkout-btn").click(function() {
            $("#checkout-btn").attr('disabled', true)
            card_detail = {
                token: "dTJHMVdWUkNoYkJCazNtQ1ZVeWVLdz09",
                card_id: card_id,
            }
            $.ajax({
                url: base_url + "/user/bmm-card/checkout.php",
                type: "POST",
                data: JSON.stringify(card_detail),
                dataType: "JSON",
                success: function(result) {
                    // console.log(result);
                    var options = result.result;
                    options.handler = function(response) {
                        let checkoutResponse = {
                            token: "dTJHMVdWUkNoYkJCazNtQ1ZVeWVLdz09",
                        }
                        checkoutResponse = {
                            ...checkoutResponse,
                            ...response,
                        }
                        $.ajax({
                            url: base_url + "/user/bmm-card/checkout-response.php",
                            type: "POST",
                            data: JSON.stringify(checkoutResponse),
                            dataType: "JSON",
                            success: function(result) {
                                $("#checkout-btn").attr('disabled', false);
                                setTimeout(function() {
                                    window.location.href = "./membership-card-success.php";
                                }, 1000);
                            }
                        })
                    };

                    options.theme.image_padding = false;

                    options.modal = {
                        ondismiss: function() {
                            console.log("This code runs when the popup is closed");
                        },
                        // Boolean indicating whether pressing escape key
                        // should close the checkout form. (default: true)
                        escape: true,
                        // Boolean indicating whether clicking translucent blank
                        // space outside checkout form should close the form. (default: false)
                        backdropclose: false,
                    };
                    var rzp = new Razorpay(options);
                    rzp.open();
                    $("#checkout-btn").attr('disabled',false);
                },

            });
        })
        // CHECKOUT ENDS HERE---------------------------------------------------
    });
</script>