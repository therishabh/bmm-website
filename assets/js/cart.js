/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var cart_cl = new function () {
    this.__url = $('#base_url').val();
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
            cart_cl.getUserAddress();
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
                if (result.is_mobile_verified == 1) {
                    $("#landline_no").append('<i class="fas fa-check-circle text-success"></i>');
                }
                if (result.email_id != '') {
                    $("#email").html(result.email_id);
                    if (result.is_email_verified == 1) {
                        $("#email").append('<i class="fas fa-check-circle text-success"></i>');
                    } else {
                        $("#email").append(` <a href="${common.__url}user/profile">Verify</a>`);
                    }
                }
                $("#booking_date").datepicker({minDate: 0});
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
                $('#salon_name').html("<span onclick='javascript:location.href=" + '"' + cart_cl.__url + "salon-details/" + res.result.salon_info.id + '"' + "'>" + res.result.salon_info.salon_name + "</span>");
                $('#salon_address').html(res.result.salon_info.city + ', ' + res.result.salon_info.state);
                cart_cl.salonId = res.result.salon_info.id;
                cart_cl.total_price = 0;
                cart_cl.total_tax = 0;
                cart_cl.total_amount = 0;
                $('#service-list').html('');

                console.log(res.result.services);
                console.log(res.result.packages);
                if (res.result.services == undefined && res.result.packages == undefined) {
                    $("#empty").removeClass("d-none");
                    $("#c_data").addClass("d-none");
                } else {
                    $("#empty").addClass("d-none");
                    $("#c_data").removeClass("d-none");
                }

                if (res.result.services != undefined) {
                    $('#service-list').append("<hr><h6><b>Services</b></h6>");
                    (res.result.services).forEach(function (service) {
                        var html = '';
                        html += '<div class="service-cart-list">';
                        html += `<div class="heading">${service.name} [${service.category}] </div>`;
                        html += '<div class="heading">';
                        if (service.mrp_price > 0) {
                            html += `<s> &#8377; &nbsp; ${service.mrp_price}</s>`;
                        }
                        html += `<span class="font-weight-bold ml-2"> &#8377; &nbsp; ${service.discounted_price}</span>`;
                        html += '<i class="fa fa-trash text-pink cursor-pointer" style="font-size:12px;margin:1px;margin-left:10px;" onclick="cart_cl.removeService(' + "'" + service.service_id + "',''" + ');"></i>';
                        html += '</div>';
                        html += '</div>';
                        cart_cl.total_price += parseInt(service.discounted_price);
                        $('#service-list').append(html);
                    });
                }

                if (res.result.packages != undefined) {
                    $('#service-list').append("<hr><h6><b>Packages</b></h6>");
                    (res.result.packages).forEach(function (service) {
                        var html = '';
                        html += '<div class="service-cart-list">';
                        html += `<div class="heading">${service.name} [${service.category}] </div>`;
                        html += '<div class="heading">';
                        if (service.mrp_price > 0) {
                            html += `<s> &#8377; &nbsp; ${service.mrp_price}</s>`;
                        }
                        html += `<span class="font-weight-bold ml-2"> &#8377; &nbsp; ${service.discounted_price}</span>`;
                        html += '<i class="fa fa-trash text-pink cursor-pointer" style="font-size:12px;margin:1px;margin-left:10px;" onclick="cart_cl.removeService(' + "'','" + service.id + "'" + ');"></i>';
                        html += '</div>';
                        html += '</div>';

                        cart_cl.total_price += parseInt(service.discounted_price);
                        $('#service-list').append(html);
                        var html = "<ul class='card'>";
                        (service.services).forEach(function (service) {

                            html += '<li>';
                            html += `${service}`;
                            html += '</li>';

                        });
                        html += "</ul>";
                        html += '</div>';
                        $('#service-list').append(html);
                    });
                }



                cart_cl.total_price = parseFloat(cart_cl.total_price).toFixed(2);

            },
            complete: function (res) {
                myCallback();
                $("#gst_per_label").html(cart_cl.tax_per + "%");
                $("#membership_amount").html('0');
                $("#coupon_discount").html('0');
                cart_cl.calc();
            }
        });
    };

    this.calc = function () {

        $("#total_price").html(cart_cl.total_price);
        cart_cl.total_tax = parseFloat(cart_cl.total_price * (cart_cl.tax_per / 100)).toFixed(2);
        $("#total_tax").html(cart_cl.total_tax);
        cart_cl.total_amount = (parseFloat(cart_cl.total_price) + parseFloat(cart_cl.total_tax)).toFixed(2)
        $("#total_amount").html(cart_cl.total_amount);
        var radio_card_payment = $('input[name="membership-card"]:checked').val();
        var card_pay = 0;
        if (radio_card_payment == "card_full_pay") {
            if (parseInt($("#c_balance_amount").html()) >= cart_cl.total_amount) {
                card_pay = cart_cl.total_amount;
            } else {
                card_pay = parseInt($("#c_balance_amount").html());
            }
        } else if (radio_card_payment == "card_partial_pay") {
            if (parseInt($("#c_balance_amount").html()) >= $("#partialPaymentInput").val()) {
                card_pay = $("#partialPaymentInput").val();
            } else {
                card_pay = parseInt($("#c_balance_amount").html());
            }
        } else {
            card_pay = 0;
        }
        $("#membership_amount").html(card_pay);
        var net_pay = cart_cl.total_amount - card_pay;
        $("#net_pay").html(parseFloat(net_pay).toFixed(2));
    }

    this.getCouponForSalon = function () {
        if (cart_cl.salonId) {

            $.ajax({
                url: `${base_url}user/cart/get-coupon-list.php`,
                type: 'GET',
                dataType: 'JSON',
                data: {
                    token: localStorage.getItem("userToken")
                },
                success: function (res) {

                    let coupons_arr = res.result;
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


                },
                complete: function () {

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

    this.removeService = function (service_id, package_id) {
        $.ajax({
            url: `${base_url}user/cart/remove-from-cart.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                service_id: service_id,
                package_id: package_id
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
                $('#couponModal').modal('hide');
                $('.coupon-btn-apply').hide();
                $('.coupon-btn-applied').css('display', 'flex');
                cart_cl.current_coupon = code;
            },
            error: function (res) {
                toastr.error(res.responseJSON.message);
            }
        });
    };

    this.couponApplyText = function () {
        var text_coupon = $("#text_coupon").val();
        cart_cl.couponApply(text_coupon);
    };

    this.checkout = function () {
        var radio_card_payment = $('input[name="membership-card"]:checked').val();
        var card_pay = 0;
        if (radio_card_payment == "card_full_pay") {
            card_pay = cart_cl.total_amount;
        } else if (radio_card_payment == "card_partial_pay") {
            card_pay = $("#partialPaymentInput").val();
        } else {
            card_pay = 0;
        }
        var booking_date = $('#booking_date').val();
        var booking_slot = $('#booking_slot').val();
        var existing_address = $('input[name="existing_address"]:checked').val();
        console.log(existing_address);
        $.ajax({
            url: `${base_url}user/cart/service-checkout.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                coupon_code: cart_cl.current_coupon,
                membership_card_id: cart_cl.membership_card_id,
                amount_deduct_from_card: card_pay,
                booking_date: booking_date,
                booking_time_slot: booking_slot,
                billing_address_id: existing_address,
                venue_address_id: ""
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
                    cart_cl.checkoutResponse(response, res.result.order_number);
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

            },
            error: function (res) {
                toastr.error(res.responseJSON.message);
            }

        });
    };

    this.checkoutResponse = function (res, order_number) {
        $.ajax({
            url: `${base_url}user/cart/service-checkout-response.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                order_number: order_number,
                razorpay_order_id: res.razorpay_order_id,
                razorpay_payment_id: res.razorpay_payment_id,
                razorpay_signature: res.razorpay_signature
            }),
            success: function (res) {
                if (res.payment_status == 'success') {
                    location.href = cart_cl.__url + `payment-status/${order_number}`;
                } else {
                    location.href = cart_cl.__url + `payment-status/${order_number}`;
                }
            }
        });
    };

    this.getUserAddress = function () {
        $.ajax({
            url: `${base_url}user/address/listing.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (res) {
                var addresses = res.result;
                if (addresses.length == 0) {
                    $("#no_address_found").show();
                    $("#address_row").html('');
                    $("#address_row").hide();
                } else {
                    $("#no_address_found").hide();
                    $("#address_row").show();
                    $("#address_row").html('');
                    addresses.forEach(function (el) {
                        var html = '';
                        html += `<div class="col-lg-6">`;
                        html += `<div class="delivery-address-inner-box">`;
                        html += `<div>`;
                        html += `<label class="radio-container billing-radio-btn">`;
                        html += `<input type="radio" name="existing_address"  value="${el.id}">`;
                        html += `<span class="checkmark"></span> </label>`;
                        html += `</div>`;
                        html += `<div>`;
                        html += `<h4>${el.full_name}</h4>`;
                        html += `<p>${el.area} <br>${el.building} ${el.landmark} <br>${el.city}, ${el.state}, ${el.country} <br> ${el.pincode}</p>`;
                        html += `<ul>`;
                        //                        html += `<li><a onclick="cart_cl.editAddress(${el.id});">Edit</a></li>`;
                        html += `<li><a onclick="cart_cl.deleteAddress(${el.id});"   >Remove</a></li>`;
                        html += `</ul>`;
                        html += `</div>`;
                        html += `</div>`;
                        html += `</div>`;
                        $("#address_row").append(html);
                    });

                }
            }
        });
    };

    this.getSalonTimings = function (date__) {
        if (cart_cl.salonId) {

            $.ajax({
                url: `${base_url}user/salon/detail.php?salon_id=${cart_cl.salonId}&q=timings`,
                type: 'GET',
                dataType: 'JSON',
                data: {
                    token: localStorage.getItem("userToken")
                },
                success: function (res) {
                    var timings = res.result.timings;
                    const weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                    const d = new Date(date__);
                    let day = weekday[d.getDay()];

                    let day_open = '';
                    let day_close = '';
                    timings.forEach(function (el) {
                        if (el.day == day) {
                            day_open = el.open_at;
                            day_close = el.close_at;
                        }
                    });

                    const currentDate = new Date(date__);

                    const month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

                    let name = month[currentDate.getMonth()];

                    const currentDayOfMonth = currentDate.getDate();
                    const currentYear = currentDate.getFullYear();

                    const dateString = name + "" + currentDayOfMonth + ", " + currentYear;
                    let dt1 = new Date(dateString + " " + day_open);
                    console.log(dt1);
                    let dt2 = new Date(dateString + " " + day_close);
                    console.log(dt2);
                    var diff_btw_time = cart_cl.diff_minutes(dt1, dt2);
                    console.log(diff_btw_time);
                    var number_of_slots = Math.ceil(diff_btw_time / 120);
                    console.log(number_of_slots);
                    $("#booking_slot").html('');
                    for (var i = 0; i < number_of_slots; i++) {
                        var slot_1 = new Date(dt1);
                        var datetext_1 = slot_1.toTimeString();
                        datetext_1 = datetext_1.split(' ')[0];
                        var slot_2 = new Date(dt1.setHours(dt1.getHours() + 2));
                        if (dt1 > dt2) {
                            var slot_2 = new Date(dt2);
                            var datetext_2 = slot_2.toTimeString();
                            datetext_2 = datetext_2.split(' ')[0];
                            $("#booking_slot").append(`<option value="${i + 1}">${datetext_1} to ${datetext_2} </option>`);
                        } else {
                            var datetext_2 = slot_2.toTimeString();
                            datetext_2 = datetext_2.split(' ')[0];
                            $("#booking_slot").append(`<option value="${i + 1}">${datetext_1} to ${datetext_2} </option>`);
                        }
                    }
                }
            });
        }
    }


    this.diff_minutes = function (dt2, dt1) {

        var diff = (dt2.getTime() - dt1.getTime()) / 1000;
        diff /= 60;
        return Math.abs(Math.round(diff));

    };

    this.addBillingAddress = function () {
        var fullName = $("#desktop-full_name").val();
        var phoneNumber = $("#desktop-phone_number").val();
        var buildingNumber = $("#desktop-building_no").val();
        var streetAddress = $("#desktop-street_address").val();
        var state = $("#desktop-state_name").val();
        var city = $("#desktop-city_name").val();
        var pincode = $("#desktop-pincode").val();
        var landmark = $("#desktop-delivery_landmark").val();
        var country = $("#desktop-country_id").val();
        $.ajax({
            url: `${base_url}user/address/add-address.php`,
            type: 'POST',
            dataType: 'JSON',
            async: false,
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                "full_name": fullName,
                "mobile_no": phoneNumber,
                "building": buildingNumber,
                "area": streetAddress,
                "pincode": pincode,
                "landmark": landmark,
                "city": city,
                "state": state,
                "country": country
            }),
            success: function (res) {
                toastr.success(res.message);
                cart_cl.getUserAddress();
                $("#address_form")[0].reset();
            },
            error: function (res) {
                toastr.error(res.responseJSON.message);
            }
        });

    };


    this.deleteAddress = function (id) {
        $.ajax({
            url: `${base_url}user/address/delete-address.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                "address_id": id
            }),
            success: function (res) {
                toastr.success(res.message);
                cart_cl.getUserAddress();
            },
            error: function (res) {
                toastr.error(res.responseJSON.message);
            }
        });
    };

    this.membershipCardVerify = function () {
        var card_number = $('#card_number').val();
        var card_expiry = $("#expiry_date").val();
        $.ajax({
            url: `${base_url}user/cart/verify-membership-card.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                "card_number": card_number,
                "card_expiry": card_expiry
            }),
            success: function (res) {
                cart_cl.membership_card_id = res.card_id;
                $("#membership_card_info").show();
                $("#availableCardBox").hide();
                $("#cardDropdown").hide();
                $("#c_number").html(card_number);
                $("#c_expiry").html(card_expiry);
                $("#c_total_amount").html(res.card_value);
                $("#c_balance_amount").html(res.card_remaining_amount);
            },
            error: function (res) {
                toastr.error(res.responseJSON.message);
            }
        });
    };

    this.membershipCardList = function () {
        $.ajax({
            url: `${base_url}user/membership-card/listing.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (res) {
                var list = res.result;
                var html = '<option>Choose membership card.</option>';
                list.forEach(function (el) {
                    html += `<option value="${el.card_number}">${el.card_number}</option>`;
                });
                $("#card_number").html(html);
                ;
            }
        });
    };

    this.membershipCardCancel = function () {
        $('#card_number').val('');
        $('#expiry_date').val('');
        $('#availableCardBox').hide();
        $('#cardDropdown').hide();
        $('.card-btn-apply').show();
    };
};

cart_cl.init();

$(document).ready(function () {

    $(".delivery-address-add-box-btn").click(function () {
        $(this).hide();
        $(".add-delivery-address-form").show();
    });

    $('.coupon-btn-apply').click(function () {
        $('#couponModal').modal('show');
    });

    $('.coupon-modal-close').click(function () {
        $('#couponModal').modal('hide');
    });

    $('.coupon-remove-btn').click(function () {
        cart_cl.current_coupon = '';
        $('.coupon-btn-applied').hide();
        $('.coupon-btn-apply').show();
    });

    $('.card-btn-apply').click(function () {
        $('#availableCardBox').show();
        $('#cardDropdown').show();
        $('.card-btn-apply').hide();

        cart_cl.membershipCardList();
    });

    $('#apply-card').click(function () {
        $('#availableCardBox').hide();
        $('#cardDropdown').hide();
        $('.card-btn-apply').hide();
        $('.membership-card-box').show();
    });

    $('[name=membership-card]').click(function () {
        if ($(this).val() == 'card_partial_pay') {
            $('#partialPaymentInput').show();
        } else {
            $('#partialPaymentInput').hide();
        }
    });

    $('#booking_date').change(function () {
        if ($('#booking_date').val() != '') {
            cart_cl.getSalonTimings($('#booking_date').val());
        }
    });

});

var today = new Date().toISOString().split('T')[0];
document.getElementById("booking_date").setAttribute('min', today);