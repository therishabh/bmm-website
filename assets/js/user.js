var user_profile = new function () {

    this.userToken = localStorage.getItem("userToken");

    this.getProfileData = function () {
        $.ajax({
            url: `${base_url}user/profile/info.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (result) {
//                console.log(result);
                $("#username").val(result.name);
                $("#email_id").val(result.email_id);
                $("#landline_no").val(result.mobile_no);
            }
        });
    };

    this.updateProfileData = function () {
        var name = $("#username").val();
        $.ajax({
            url: `${base_url}user/profile/update-info.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                name: name
            }),
            success: function (result) {
                console.log(result);

            }
        });
    };

    this.userSessionCheck = function () {
        if (user_profile.userToken) {
            return true;
        } else {
            location.href = '/';
        }
    };

    this.getUserWishlist = function () {
        $.ajax({
            url: `${base_url}user/favourite/get-favourite-list.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (res) {
                var result = res.result;
                result.forEach(function(el){
                    var html = '';
                    html += `<div class="col-md-4">`;
                    html += `<div class="makeup-artist-box">`;
                    html += `<img src="assets/images/salon-shop-1.jpg" class="img-fluid" alt="">`;
                    html += `<p class="artist-name float-left">${el.salon_name}</p>`;
                    html += `<p class="rating float-right"><i class="fas fa-star"></i> ${el.rating}</p>`;
                    html += `<div class="clearfix"></div>`;
                    html += `<p class="float-left">${el.city},${el.state}</p>`;
                    html += `<p class="float-right">18 Reviews</p>`;
                    html += `<div class="clearfix"></div>`;
//                    html += `<p><small>Makeup at your venue</small></p>`;
//                    html += `<p class="price float-left"><i class="fas fa-rupee-sign"></i> 499</p>`;
//                    html += `<p class="artist-caption float-right">For Bride's Regular Makeup</p>`;
//                    html += `<div class="clearfix"></div>`;
                    html += `<hr>`;
                    html += `<div class="text-center">`;
                    html += `<a href="${common.__url}salon-details/${el.id}" class="btn btn-pink">Book Now</a>`;
                    html += `</div>`;
                    html += `</div>`;
                    html += `</div>`;
                    $("#wishlist_data").append(html);
                });
            }
        });
    };

    this.getUserBookings = function () {
        $.ajax({
            url: `${base_url}user/booking/listing.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (res) {
                var data = res.result;
                data.forEach(function (el) {
                    var html = "";
                    html += `<div class="booking-box">`;
                    html += `<div class="booking-header">`;
                    html += `<div>`;
                    html += `<h4>${el.salon.salon_name}</h4>`;
                    html += `<p><i class="fa fa-map-marker-alt"></i> ${el.salon.city}, ${el.salon.state}</p>`;
                    html += `</div>`;
                    html += `<div>`;
                    html += `<b class="text-success">Paid</b>`;
//html += `<b class="text-danger">Payment Failed</b>`;
//html += `<b class="text-warning">Payment Pending</b>`;
                    html += `</div>`;
                    html += `</div>`;
                    html += `<div class="booking-body">`;
                    html += `<div class="row">`;
                    html += `<div class="col-md-6">`;
                    html += `<p><b>Order ID</b> : ${el.order_id}</p>`;
                    html += `<p><b>Date & Time</b> : ${el.transaction_at}</p>`;
                    var coupon_code = (el.coupon_code) ? el.coupon_code : '-';
                    html += `<p><b>Coupon Code</b> : ${coupon_code}</p>`;
                    html += `</div>`;
                    html += `<div class="col-md-6">`;

                    html += `<p><b>Total Amount</b> : Rs. ${el.total_amount}</p>`;
                    html += `<p><b>Tax </b> : Rs. ${el.tax_amount}</p>`;
                    html += `<p><b>Final Amount</b> : Rs. ${el.final_amount}</p>`;
                    html += `</div>`;
                    html += `<div class="col-md-12">`;
                    html += `<div class="table-responsive">`;
                    html += `<table class="table table-bordered">`;
                    html += `<thead>`;
                    html += `<tr>`;
                    html += `<th>Service</th>`;
                    html += `<th>Price</th>`;
                    html += `</tr>`;
                    html += `</thead>`;
                    html += `<tbody>`;
                    (el.services).forEach(function (el_i) {
                        html += `<tr>`;
                        html += `<td>${el_i.name} [${el_i.category}]</td>`;
                        html += `<td>Rs. ${el_i.discounted_price}</td>`;
                        html += `</tr>`;
                    });
                    html += `</tbody>`;
                    html += `</table>`;
                    html += `</div>`;
                    html += `</div>`;
                    html += `</div>`;
                    html += `</div>`;
                    html += `</div>`;

                    $("#booking_boxes").append(html);
                });
            }
        });
    };

    this.getOffersForUser = function () {

    };

    this.getUserMemberships = function () {
        $.ajax({
            url: `${base_url}user/membership-card/listing.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (res) {
                var result = res.result;
                result.forEach(function (el) {
                    var html = '';
                    html += `<div class="col-md-4 border mr-2" id="mc_s${el.id}" onclick="user_profile.getUserCardStatement(${el.id})">`;
                    html += `<p>`;
                    html += `<b>Type:</b> ${el.card_name}<br>`;
                    html += `<b>Card Expiry:</b> ${el.card_expiry}<br>`;
                    html += `<b>Card Price:</b> ${el.card_price}<br>`;
                    html += `<b>Card Value:</b> ${el.card_value}<br>`;
                    html += `<b>Card Used Amount:</b> ${el.card_used_amount}<br>`;
                    html += `<b>Purchase On:</b> ${el.purchase_at}<br>`;
                    html += `</p>`;
                    html += `</div>`;
                    $("#membershipCards").append(html);
                });


            }
        });
    };

    this.getUserCardStatement = function (cardId) {
        $.ajax({
            url: `${base_url}user/membership-card/transaction-list.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken"),
                card_id: cardId
            },
            success: function (res) {
                var trans = res.transactions;
                $("#tbody_trans").html('');
                if (trans.length > 0) {
                    trans.forEach(function (el) {
                        var html = '';
                        html += `<tr>`;
                        html += `<td>${el.date_time}</td>`;
                        html += `<td>${el.amount_spent}</td>`;
                        html += `<td>${el.salon}</td>`;
                        html += `<td>${el.order_no}</td>`;
                        html += `</tr> `;
                    });
                    $("#tbody_trans").append(html);
                } else {
                    var html = '';
                    html += `<tr><td colspan="4">No Transaction Done</td></tr>`;
                    $("#tbody_trans").html(html);
                }

            }
        });
    };

    this.getUserPayments = function () {

    };

    this.addMessage = function () {

    };

    this.getUserEvents = function () {

    };

    this.bookNowEvent = function () {

    };

    this.userInviteFriend = function () {

    };

    this.getUserInvitedFriendList = function () {

    };

    this.getUserPics = function () {

    };
};

user_profile.userSessionCheck();
