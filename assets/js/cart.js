/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var cart_cl = new function () {

    this.salonId;
    this.total_price = 0;
    this.total_tax = 0;
    this.tax_per = 18;
    this.total_amount = 0;
    this.current_coupon = '';
    this.membership_card_id = '';

    this.init = function () {
        if (!localStorage.getItem("userToken")) {
            location.href = common.__url + 'home';
        } else {
            cart_cl.getUserDetails();
            cart_cl.getCartItems(cart_cl.getCouponForSalon);

        }
    };

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

    this.getCartItems = function (myCallback) {
        $.ajax({
            url: `${base_url}user/cart/get-cart-items.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (res) {
                $('#salon_name').html(res.result.salon_info.salon_name);
                $('#salon_address').html(res.result.salon_info.city + ', ' + res.result.salon_info.state);
                cart_cl.salonId = res.result.salon_info.id;
                cart_cl.total_price = 0;
                cart_cl.total_tax = 0;
                cart_cl.total_amount = 0;
                $('#service-list').html('');
                (res.result.services).forEach(function (service) {
                    var html = '';
                    html += '<div class="service-cart-list">';
                    html += `<div class="heading">${service.name} [${service.category}] </div>`;
                    html += '<div class="heading">';
                    html += `<s> &#8377; &nbsp; ${service.mrp_price}</s>`;
                    html += `<span class="font-weight-bold ml-2"> &#8377; &nbsp; ${service.discounted_price}</span>`;
                    html += '<i class="fa fa-trash text-pink cursor-pointer" style="font-size:12px;margin:1px;margin-left:10px;" onclick="cart_cl.removeService(' + "'" + service.cart_id + "'" + ');"></i>';
                    html += '</div>';
                    html += '</div>';
                    cart_cl.total_price += parseInt(service.discounted_price);
                    $('#service-list').append(html);
                });
                cart_cl.total_price = parseFloat(cart_cl.total_price).toFixed(2);

            },
            complete: function (res) {
                myCallback();
                $("#total_price").html(cart_cl.total_price);
                cart_cl.total_tax = parseFloat(cart_cl.total_price * (cart_cl.tax_per / 100)).toFixed(2);
                $("#total_tax").html(cart_cl.total_tax);
                cart_cl.total_amount = (parseFloat(cart_cl.total_price) + parseFloat(cart_cl.total_tax)).toFixed(2)
                $("#total_amount").html(cart_cl.total_amount);
            }
        });
    };

    this.getCouponForSalon = function () {
        if (cart_cl.salonId) {

            $.ajax({
                url: `${base_url}user/salon/detail.php?salon_id=${cart_cl.salonId}&q=coupons`,
                type: 'GET',
                dataType: 'JSON',
                data: {
                    token: localStorage.getItem("userToken")
                },
                success: function (res) {

                    let coupons_arr = res.result.coupons;
                    var html = '';
                    coupons_arr.every(function (el, index, arr) {
                        console.log(el);
                        html += `<div class="coupon-detail-box mb-10">`;
                        html += `<div class='col-lg-12 row'>`;
                        html += `<div class="coupon-code border p-2 rounded mb-1 col-lg-8">${el.coupon_code}</div>`;
                        html += `<div class='col-lg-4'>`;
                        html += `<button class="btn btn-pink apply-coupon-individual" onclick="cart_cl.useClick(this);">USE</button>`;
                        html += `</div>`;
                        html += `</div>`;
                        html += `<p>Use code <b>${el.coupon_code}</b> & get <b>${el.discount_percent}% off</b> on orders <b>above ₹${el.minimum_amount}</b>.</p>`;
                        html += `</div>`;
                        $('.available-coupons').append(html);
                    });


                }
            });
        } else {
            toastr.error('Adding something to cart.');
        }
    };

    this.useClick = function (el) {
        var coupon_code = $(el).parents('.coupon-detail-box').find('.coupon-code').text().trim();

        cart_cl.couponApply(coupon_code);
    };

    this.removeService = function (service_id) {
        $.ajax({
            url: `${base_url}user/cart/remove-from-cart.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                id: service_id
            }),
            success: function (res) {
                toastr.success(res.message);
                cart_cl.getCartItems(cart_cl.getCouponForSalon);
                common.cartCount();
            }
        });
    };

    this.couponApply = function (code) {
        $.ajax({
            url: `${base_url}user/cart/apply-coupon.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                coupon_code: code
            }),
            success: function (res) {
                toastr.success("Coupon code applied successfully.");
                $('.applied-coupon-code').text(code);
                $('#couponModal').hide();
                $('.coupon-btn-apply').hide();
                $('.coupon-btn-applied').css('display', 'flex');
                cart_cl.current_coupon = code;
            }, error: function (res) {
                toastr.error(res.responseJSON.message);
            }
        });
    };

    this.couponApplyText = function () {
        var text_coupon = $("#text_coupon").val();
        cart_cl.couponApply(text_coupon);
    };

    this.checkout = function () {
        $.ajax({
            url: `${base_url}user/cart/service-checkout.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                coupon_code: cart_cl.current_coupon,
                membership_card_id: cart_cl.membership_card_id,
                amount_deduct_from_card: 0
            }),
            success: function (res) {
                console.log(res);
//                toastr.success(res.message);

                // Checkout details as a json
                var options = res.result.razorpay_config;
                /**
                 * The entire list of Checkout fields is available at
                 * https://docs.razorpay.com/docs/checkout-form#checkout-fields
                 */
                options.handler = function (response) {
                    //ajax call checkout-response.php
                    console.log("payment success");
                    cart_cl.checkoutResponse(response,res.result.order_number);
                    //   document.getElementById("razorpay_payment_id").value =
                    //     response.razorpay_payment_id;
                    //   document.getElementById("razorpay_signature").value =
                    //     response.razorpay_signature;
                    //   document.razorpayform.submit();
                };

                // Boolean whether to show image inside a white frame. (default: true)
                options.theme.image_padding = false;

                options.modal = {
                    ondismiss: function () {
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
                
            }
        });
    };
    
    this.checkoutResponse = function(res,order_number) {
        $.ajax({
            url: `${base_url}user/cart/service-checkout-response.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                order_number: order_number,
                razorpay_order_id:res.razorpay_order_id,
                razorpay_payment_id:res.razorpay_payment_id,
                razorpay_signature:res.razorpay_signature
            }),
            success: function (res) {
                if(res.payment_status=='success'){
                    location.href ='';
                }
            }
        });
    };

};

cart_cl.init();

$(document).ready(function () {

    $('.coupon-btn-apply').click(function () {
        $('#couponModal').show();
    });

    $('.coupon-modal-close').click(function () {
        $('#couponModal').hide();
    });

    $('.coupon-remove-btn').click(function () {
        $('.coupon-btn-applied').hide();
        $('.coupon-btn-apply').show();
    });


});