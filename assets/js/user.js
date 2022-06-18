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
                $("#dob").val(result.dob);
                $("#doa").val(result.doa);
                $("#gender").val(result.gender);
            }
        });
    };

    this.updateProfileData = function () {
        var name = $("#username").val();
        var dob = $("#dob").val();
        console.log(dob);
        var doa = $("#doa").val();
        var gender = $("#gender").val();
        console.log(doa);
        $.ajax({
            url: `${base_url}user/profile/update-info.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                name: name,
                dob : dob,
                doa : doa,
                gender:gender
            }),
            success: function (result) {
                toastr.success(result.message);

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
                    html += `<div class="col-md-6">`;
                        html += `<div class="wishlist-icon" onclick="user_profile.removeFromWishList('${el.id}')" id="salon_${el.id}">`;
                            html += `<i class="fas fa-heart"></i>`;
                        html += `</div>`;
                        html += `<a href="${common.__url}salon-details/${el.id}" class="service-box">`;
                            html += `<img src="${el.banner_image}" class="img-fluid" alt="">`;
                            html += `<div class="service-body">`;

                                html += `<h4>${el.salon_name}</h4>`;
                                html += `<p> <i class="fa fa-map-marker-alt"></i> ${el.city},${el.state}</p>`;
                                html += `<span class="rating"><i class="fas fa-star"></i> ${el.rating}</span>`;
                                html += `<hr>`;
                                html += `<p class="discountPara dp_1">`;
                                (el.coupons).forEach((couponVal, index) => {
                                    html += `<i class="fa fa-tags"></i> &nbsp;`;
                                    if (couponVal.discount_percent){
                                        html += `${couponVal.discount_percent} % off`+ ` : <b>${couponVal.coupon_code}</b> &nbsp;`;
                                    } else {
                                        html +=  `${couponVal.flat_discount_amount} Flat Discount : <b>${couponVal.coupon_code}</b> &nbsp;`;
                                    }
                                });
                                html += `</p>`;
                            html += `</div>`;
                        html += `</a>`;
                    html += `</div>`;
                    $("#wishlist_data").append(html);
                });
            }
        });
    };
    
    this.removeFromWishList = function(salon_id) {
        var post_data = {
            token: user_profile.userToken,
            salon_id: salon_id
        }
        $.ajax({
            url: base_url + `/user/favourite/remove-favourite.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify(post_data),
            success: function (result) {
                toastr.success('Removed from wishlist.');
                $("#salon_"+salon_id).parent().hide();
            }, error: function (result) {
                toastr.error(result.responseJSON.message);
                $("#salon_"+salon_id).find(".fa-heart").attr("data-prefix", "fas");
            }
        });
    };

    this.getUserBookings = function () {
        let order_id = $("#booking_number").val();
        var data = {};
        data['token'] = localStorage.getItem("userToken");
        if(order_id.trim()!=''){
            data['order_id'] = order_id;
        }
        $.ajax({
            url: `${base_url}user/booking/listing.php`,
            type: 'GET',
            dataType: 'JSON',
            data: data,
            success: function (res) {
                $("#booking_boxes").html("");
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
                    html += `<p><b>Service OTP</b> : ${el.service_start_otp}</p>`;
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
        $.ajax({
            url: `${base_url}user/cart/get-coupon-list.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (res) {
                var result = res.result;
                result.forEach(function (el) {
                    var html = '';
                    html += `<div class="col-md-4">`;
                    html += `<img src="assets/images/combo1.jpg" class="img-thumbnail" alt="">`;
                    html += `<a href="#" class="btn btn-pink btn-block mt-2">Redeem Now</a>`;
                    html += `</div>`;
                    $("#offers").append(html);
                });


            }
        });
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
    
    this.bmmtv = function() {
        $.ajax({
            url: `${base_url}user/bmm-tv/listing.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (result) {
                let bmmtv = result.result;
                bmmtv.forEach(function(el){
                    var html = '';
                    html += `<div class="col-md-6 col-12 m-10">`;
                    html += `<a href="${el.video_url}" target="_blank" class="box-shadow">`;
                    html += `<img src="assets/images/bmm-tv-thumb.jpg" class="img-fluid">`;
                    html += `<div class="content">`;
                    html += `<h6 class="content-title">${el.heading} </h6>`;
                    html += `</div>`;
                    html += `</a>`;
                    html += `</div>`;
                    $("#bmm-tv-data").append(html);
                });
              
            }
        });
    };
    
    this.getQueryCategoryList = function() {
        
        $.ajax({
            url: `${base_url}user/query/category-list.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (res) {
                var category = res.result;
                category.forEach(function(el){
                    $("#category-list").append(`<option value="${el.id}">${el.name}</option>`);
                });
                
            },
            complete : function(res) {
                user_profile.getQueryList();
            }
        });
    };
    
    this.getQueryList = function() {
        
        $.ajax({
            url: `${base_url}user/query/listing.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (res) {
                console.log(res.result);
                var query = res.result;
                var i = 1;
                $("#query_tbody").html('');
                query.forEach(function(el){
                    var html = "";
                    html += `<tr>`;
                    html += `<td>${i}</td>`;
                    html += `<td>${el.title}</td>`;
                    if(el.category!=null){
                        html += `<td>${el.category.name}</td>`;
                    } else {
                        html += `<td>-</td>`;
                    }
                    if((el.query_status).toLowerCase()=='closed'){
                        html += `<td><span class="text-success">${el.query_status}</span></td>`;
                    } else {
                        html += `<td><span class="text-warning">${el.query_status}</span></td>`;
                    }
                    html += `<td><a href="query-detail/${el.id}">View Detail</a></td>`;
                    html += `</tr>`;
                    $("#query_tbody").append(html);
                    i++;
                });
            }
        });
    };
    
    this.querySave = function() {
        var title = $("#title").val();
        var category_list = $("#category-list").val();
        var description = $("#description").val();
        if(title.trim()=='' || description.trim()==''){
            toastr.error("Kindly fill all enquiry details.");
            return false;
        }
        
         $.ajax({
            url: `${base_url}user/query/add-new-query.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                title: title,
                category_id : category_list,
                description : description
            }),
            success: function (result) {
                toastr.success(result.message);
                $("#title").val('');
                $("#description").val('');
                user_profile.getQueryList();
            }
        });
         
         
    };
    
    
    this.query_detail = function() {
        var query_id = $("#query_id").val();
        $.ajax({
            url: `${base_url}user/query/listing.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (res) {
                console.lof
                var category = res.result;
                category.forEach(function(el){
                    $("#category-list").append(`<option value="${el.id}">${el.name}</option>`);
                });
                
            }
        });
        
    }
};

user_profile.userSessionCheck();
