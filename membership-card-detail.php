<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<div class="container">
    <div class="row">
        <div class="card-detail-box col-md-6 col-12 m-10" id="card-detail">
            <h3 class="card_name mt-5" style="color:#f92a63"></h3>
            <!-- <p>No Joining Fee, No Annual Fee</p> -->
            <p class="card_price"></p>
            <p class="card_value"></p>
            <p class="card_validity"></p>
            <p class="category"></p>
            <p class="card_fee"></p>
        </div>
        <div class="card-banner col-md-6 col-12 m-10" id="card-banner">
            <img src="" class="img-fluid" style="margin-top: 25px; padding:40px;" id="card-img">
        </div>
    </div>
    <div class="card-detail-body mt-5"></div>
</div>

<?php include 'include/footer.php' ?>

<script>
    $(function() {
        // CARD DETAIL STARTS HERE-------------------------------------------------------
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
                    $(".card_name").text(result.card_name);
                    $('.card_price').html('Exclusive Benefits on card price of ' + result.price);
                    $('.card_value').html('Get card with value of ' + result.value);
                    $('.card_validity').html('Card Validity will be for ' + result.validity);
                    $('.category').html('Card Category ' + result.category);
                    $('.card_fee').html('No Joining Fee, No Annual Fee');
                    $('.card-detail-box').append('<a href="<?php echo base_url(); ?>membership-card-checkout.php?card-id='+card_id+'" class="btn btn-pink buy-card mt-4">Buy Now</a>');
                    $('#card-img').attr('src', "" + result.image + "").append("#card-banner");
                    $('.card-detail-body').html(result.description);
                }
            });
        }
        get_membership_card_detail();
        // CARD DETAIL ENDS HERE-------------------------------------------------------

    });
</script>