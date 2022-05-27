/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var cart_cl = new function () {

    this.salonId;

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
                (res.result.services).forEach(function (service) {
                    var html = '';
                    html += '<div class="service-cart-list">';
                    html += `<div class="heading">${service.name} [${service.category}] </div>`;
                    html += '<div class="heading">';
                    html += `<s> &#8377; ${service.mrp_price}</s>`;
                    html += `<span class="font-weight-bold ml-2"> &#8377; ${service.discounted_price}</span>`;
                    html += '</div>';
                    html += '</div>';
                    $('#service-list').append(html);
                });

            },
            complete: function (res) {
                myCallback();
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
                    coupons_arr.every(function(el, index, arr) {
                        console.log(el);
                        html += `<div class="coupon-detail-box mb-10">`;
                        html += `<div class='col-lg-12 row'>`;
                        html += `<div class="coupon-code border p-2 rounded mb-1 col-lg-8">${el.coupon_code}</div>`;
                        html += `<div class='col-lg-4'>`;
                        html += `<button class="btn btn-pink apply-coupon-individual">USE</button>`;
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
        $(this).parents('.coupon-btn-applied').html('');
        $('.coupon-btn-apply').show();
    });

    $('.apply-coupon-individual').click(function () {
//        alert("sss");
        $('.applied-coupon-code').text($(this).parents('.coupon-detail-box').find('.coupon-code').text().trim());
        $('#couponModal').hide();
        $('.coupon-btn-apply').hide();
        $('.coupon-btn-applied').css('display', 'flex');
        
    });


});