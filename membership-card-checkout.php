<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<section class="cart-details-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="white-box p-4 cart-box-1">
                    <div class="heading mb-3">Mr. Rohit Verma</div>
                    <div class="heading"><span>9911060952</span></div>
                </div>
                <div class="white-box p-4 cart-box-1 mt-3">
                    <div class="heading mb-3">Mr. Rohit Verma</div>
                    <div class="heading"><span>9911060952</span> <i class="fas fa-check-circle text-success"></i> </div>
                </div>

            </div>
            <div class="col-md-4 pl-0 sub-total-parent">
                <div class="sub-total col-md-12 white-box p-4">
                    <h4 class="font-weight-bold">PAYMENT SUMMARY</h4>
                    <h6>Card Price<span class="float-right">₹ 650</span> </h6>
                    <h6 class="bb-none">Total Price <span class="float-right text-pink">₹ 750</span> </h6>
                    <button class="btn btn-block btn-pink" id="checkout-btn">Checkout</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<div class="overlay"></div>

<?php include 'include/footer.php' ?>


<script>
    $(function() {
        let card_id = getParameterByName('card-id');
        $("#checkout-btn").click(function() {
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
                    let amount = "";
                    var options = {
                        "key": "rzp_test_HXLPiPNPEzmczX",
                        "amount": amount * 100,
                        "name": "Book My Makeup",
                        "image": "https://i.imgur.com/m6SAnR2.jpg",
                        
                        theme: {
                            color: "#F37254"
                        },
                        order_id: order_id,
                    }
                    
                    var rzp = new Razorpay(options);
                    document.getElementById("#checkout-btn").onclick = function(e) {
                        rzp.open();
                        e.preventDefault();
                    };
                }
            });
        })
    });
</script>