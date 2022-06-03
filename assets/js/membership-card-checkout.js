var mcc = new function() {
    this.getUserDetails = function () {
        $.ajax({
            url: `${base_url}user/profile/info.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (result) {
                $("#username").html(result.name);
                $("#landline_no").html(result.mobile_no);
            }
        });
    };
    
    this.get_membership_card_detail = function() {
            let card_id = $("#card_id").val();
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
        };
};

mcc.getUserDetails();
mcc.get_membership_card_detail();

    $(function() {

        // let card_id = getParameterByName('card-id');
        $("#checkout-btn").click(function() {
            $("#checkout-btn").attr('disabled', true)
            let card_id = $("#card_id").val();
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
                                    window.location.href = $('#base_url').val()+"membership-card-success";
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