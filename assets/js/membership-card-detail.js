
// CARD DETAIL STARTS HERE-------------------------------------------------------
var card_detail = new function () {



    this.get_membership_card_detail = function () {
        let card_detail = {
            card_id: $("#card_id").val()
        }
        $.ajax({
            url: base_url + "/user/bmm-card/detail.php",
            type: "GET",
            data: card_detail,
            dataType: "JSON",
            success: function (result) {
                // console.log(result);
                $(".card_name").text(result.card_name);
                $('.card_price').html('Exclusive Benefits on card price of ' + result.price);
                $('.card_value').html('Get card with value of ' + result.value);
                $('.card_validity').html('Card Validity will be for ' + result.validity);
                $('.category').html('Card Category ' + result.category);
                $('.card_fee').html('No Joining Fee, No Annual Fee');
                $('.card-detail-box').append('<a href="javascript:card_detail.cardRedirect('+"'"+$("#card_id").val()+"'"+')" class="btn btn-pink buy-card mt-4">Buy Now</a>');
                $('#card-img').attr('src', "" + result.image + "").append("#card-banner");
                $('.card-detail-body').html(result.description);
            }
        });
    }

    this.cardRedirect = function (id) {
        if (localStorage.getItem("userToken")) {
            location.href = $("#base_url").val()+`membership-card-checkout/${id}`;
        } else {
            $(".modal").modal("hide");
            $("#loginModal").modal("show");
        }
    };
};

card_detail.get_membership_card_detail();
// CARD DETAIL ENDS HERE-------------------------------------------------------
