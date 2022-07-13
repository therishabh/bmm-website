var user_profile = new function () {
    this.__url = $("#base_url").val();
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
                $("#t_name").html(result.name);
                if (result.is_email_verified == 1) {
                    $("#email_id_outer").removeClass("d-none");
                    $("#email_id_verify_outer").addClass("d-none");
                    $("#email_id").val(result.email_id);
                    $("#t_email").html(result.email_id);
                } else {
                    $("#email_id_outer").addClass("d-none");
                    $("#email_id_verify_outer").removeClass("d-none");
                    $("#email_id_verify").val(result.email_id);
                }

                $("#landline_no").val(result.mobile_no);
                $("#t_mobile").html(result.mobile_no);
                $("#dob").val(result.dob);
                $("#doa").val(result.doa);
                $("#gender").val(result.gender);
                $("#profile_photo").attr("src", result.profile_image);
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
                dob: dob,
                doa: doa,
                gender: gender
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
                $("#wishlist_data").html("");
                if (result.length > 0 && result.length != undefined)
                {
                    result.forEach(function (el) {
                        var html = '';
                        html += `<div class="col-md-4">`;
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
                            if (couponVal.discount_percent) {
                                html += `${couponVal.discount_percent} % off` + ` : <b>${couponVal.coupon_code}</b> &nbsp;`;
                            } else {
                                html += `${couponVal.flat_discount_amount} Flat Discount : <b>${couponVal.coupon_code}</b> &nbsp;`;
                            }
                        });
                        html += `</p>`;
                        html += `</div>`;
                        html += `</a>`;
                        html += `</div>`;
                        $("#wishlist_data").append(html);
                    });
                } else {
                    $("#wishlist_data").append(`<div class="no-wishlist-box empty-box no-data-box">
                                <img src="${user_profile.__url}assets/images/no-wishlist.png" alt="">
                                <h5>Your wishlist is empty!</h5>
                                <p>Seems like you don't have wished here.<br>Make a wish!</p>
                            </div>`);
                }
            }
        });
    };

    this.removeFromWishList = function (salon_id) {
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
                $("#salon_" + salon_id).parent().hide();
            },
            error: function (result) {
                toastr.error(result.responseJSON.message);
                $("#salon_" + salon_id).find(".fa-heart").attr("data-prefix", "fas");
            }
        });
    };

    this.getUserBookings = function () {
        let order_id = $("#booking_number").val();
        var data = {};
        data['token'] = localStorage.getItem("userToken");
        if (order_id.trim() != '') {
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
                if (data.length != undefined && data.length > 0) {
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
                } else {
                    $("#booking_boxes").html(`<div class="empty-box no-data-box">
                                    <h5>Manage your past and upcoming bookings</h5>
                                    <img src="${user_profile.__url}assets/images/no-bookings.png" alt="">
                                    <p class="mb-0">You have not made any bookings yet</p>
                                    <a href="/" class="btn btn-pink">Book Now</a>
                                </div>`);
                }
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
                    html += `${el.coupon_code}`;
                    html += `<p>Use code <b>${el.coupon_code}</b> & get <b>${el.discount_percent}% off</b> on orders <b>above ₹${el.minimum_amount}</b>.</p>`;
                    // html += `<a href="#" class="btn btn-pink btn-block mt-2">Redeem Now</a>`;
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
                $("#membershipCards").html("");
                if (result.length > 0 && result.length != undefined) {
                    $("#card_stmt").removeClass("d-none");
                    $("#card_stmt_table").removeClass("d-none");
                    result.forEach(function (el) {
                        var html = '';
                        html += `<div class="col-md-4 border mr-2" id="mc_s${el.id}" onclick="user_profile.getUserCardStatement(${el.id})">`;
                        html += `<p>`;
                        html += `<b>Type:</b> ${el.card_name}<br>`;
                        html += `<b>Card Nummber:</b> ${el.card_number}<br>`;
                        html += `<b>Card Expiry:</b> ${el.card_expiry}<br>`;
                        html += `<b>Card Price:</b> ${el.card_price}<br>`;
                        html += `<b>Card Value:</b> ${el.card_value}<br>`;
                        html += `<b>Card Used Amount:</b> ${el.card_used_amount}<br>`;
                        html += `<b>Purchase On:</b> ${el.purchase_at}<br>`;
                        html += `</p>`;
                        html += `</div>`;
                        $("#membershipCards").append(html);
                    });
                } else {
                    $("#card_stmt").addClass("d-none");
                    $("#card_stmt_table").addClass("d-none");
                    $("#membershipCards").html(`<div class="empty-box no-data-box">
                                    <h5>Upto 50% Discount on services,Attractive  Offers & no payment hassles.<br>
                                    Buy Our Membership Cards</h5>
                                    <img src="${user_profile.__url}assets/images/no-cards.png" alt="">
                                    <a href="/cards" class="btn btn-pink">Buy Membership Card</a>
                                </div>`);
                }

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
                    var i = 1;
                    trans.forEach(function (el) {
                        console.log(el);
                        var html = '';
                        html += `<tr>`;
                        html += `<td>${i}</td>`;
                        html += `<td>${el.order_id}</td>`;
                        html += `<td>${el.amount_paid}</td>`;
                        html += `<td>${el.final_amount}</td>`;
                        html += `<td>${el.transaction_at}</td>`;
                        html += `<td>${el.salon_info.salon_name}</td>`;
                        html += `</tr> `;
                        i++;
                        $("#tbody_trans").append(html);
                    });
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
        $.ajax({
            url: `${base_url}user/gallery/listing-images.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (result) {
                $("#user-pic").html('');
                let pic = result.result;
                if (pic.length != undefined && pic.length > 0) {
                    $("#up_btn").removeClass("d-none");
                    pic.forEach(function (el) {
                        var html = '';
                        html += `<div class="col-md-3 mt-4">`;
                        html += `<div class="my-pic-wrapper"><img src="${el.url}" class="img-thumbnail my-pic-list"><span onclick="user_profile.deletePic(${el.id});"><i class="fa fa-trash-alt"></i></span></div>`;
                        html += `</div>`;
                        $("#user-pic").append(html);
                    });
                } else {
                    $("#up_btn").addClass("d-none");
                    $("#user-pic").html(`<div class="empty-box no-data-box">
                                    <h5>Share your favourite makeup & hairstyling pics.</h5>
                                    <a href="javascript:user_profile.openUpload();" class="btn btn-pink">Upload Photos</a>
                                    <img src="${user_profile.__url}assets/images/no-pics.png" alt="">
                                </div>`);
                }
            }
        });
    };

    this.deletePic = function (id) {
        $.ajax({
            url: `${base_url}user/gallery/delete-image.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                image_id: id
            }),
            success: function (result) {
                toastr.success(result.message);
                user_profile.getUserPics();

            },
            error: function (result) {
                toastr.error(result.responseJSON.message);
            }
        });
    };

    this.openUpload = function () {
        $('#myfile').click();
    };

    this.uploadImage = function (this_) {
        var formdata = false;
        if (window.FormData) {
            formdata = new FormData();
        }
        console.log(this_.files);
        formdata.append("files[]", this_.files[0], this_.files[0].name);
        formdata.append("token", localStorage.getItem("userToken"));
        jQuery.ajax({
            url: `${base_url}user/gallery/upload-images.php`,
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (res) {
                toastr.success(res.message);
                user_profile.getUserPics();
            }
        });
    };

    this.bmmtv = function () {
        $.ajax({
            url: `${base_url}user/bmm-tv/listing.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (result) {
                let bmmtv = result.result;
                bmmtv.forEach(function (el) {
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

    this.getQueryCategoryList = function () {

        $.ajax({
            url: `${base_url}user/query/category-list.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (res) {
                var category = res.result;
                category.forEach(function (el) {
                    $("#category-list").append(`<option value="${el.id}">${el.name}</option>`);
                });

            },
            complete: function (res) {
                user_profile.getQueryList();
            }
        });
    };

    this.getQueryList = function () {

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
                query.forEach(function (el) {
                    var html = "";
                    html += `<tr>`;
                    html += `<td>${i}</td>`;
                    html += `<td>${el.title}</td>`;
                    if (el.category != null) {
                        html += `<td>${el.category.name}</td>`;
                    } else {
                        html += `<td>-</td>`;
                    }
                    if ((el.query_status).toLowerCase() == 'closed') {
                        html += `<td><span class="text-success">${el.query_status}</span></td>`;
                    } else {
                        html += `<td><span class="text-warning">${el.query_status}</span></td>`;
                    }
                    html += `<td>
                    <ul class="action-list">
                    <li><a class="btn btn-secondary btn-sm" href="query-detail/${el.id}">View Detail</a> </li>
                    <li title="Remove"><i class="fa fa-trash-alt" onclick="user_profile.deleteQuery(${el.id});"></i></li>
                    </ul
                    </td>`;
                    html += `</tr>`;
                    $("#query_tbody").append(html);
                    i++;
                });
            }
        });
    };

    this.querySave = function () {
        var title = $("#title").val();
        var category_list = $("#category-list").val();
        var description = $("#description").val();
        if (title.trim() == '' || description.trim() == '') {
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
                category_id: category_list,
                description: description
            }),
            success: function (result) {
                toastr.success(result.message);
                $("#title").val('');
                $("#description").val('');
                user_profile.getQueryList();
            }
        });


    };


    this.query_detail = function () {
        var query_id = $("#query_id").val();
        $.ajax({
            url: `${base_url}user/query/detail.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken"),
                query_id: query_id
            },
            success: function (res) {
                var data = res.result;
                $("#query_title").html(data.title);
                $("#query_body").html(data.description);
                var reply = data.replies;

                reply.forEach(function (el) {
                    var html = '';
                    html += `<div class="chat-box-left">`;
                    html += `<div class="inner-chat-box">`;
                    html += `<div class="chat-user-title">${el.replied_by}</div>`;
                    html += `<div>`;
                    html += `<p>`;
                    html += `${el.reply_text}`;
                    html += `</p>`;
                    html += `</div>`;
                    html += `</div>`;
                    html += `</div>`;
                    $("#query_body").append(html);
                });


            }
        });

    };

    this.replyQuery = function () {
        var query_id = $("#query_id").val();
        var description = $("#description").val();
        $.ajax({
            url: `${base_url}user/query/reply.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                query_id: query_id,
                description: description
            }),
            success: function (result) {
                toastr.success(result.message);
                $("#description").val('');
                user_profile.query_detail();

            },
            error: function (result) {
                toastr.error(result.responseJSON.message);
            }
        });
    };

    this.deleteQuery = function (id) {
        $.ajax({
            url: `${base_url}user/query/delete.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                query_id: id
            }),
            success: function (result) {
                toastr.success(result.message);
                user_profile.getQueryList();

            },
            error: function (result) {
                toastr.error(result.responseJSON.message);
            }
        });
    };

    this.referList = function () {
        $.ajax({
            url: `${base_url}user/refer-and-earn/get-refer-list.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (res) {
                console.log(res);
                var data = res.result;
                $("#tdata").html('');
                if (data.length != undefined && data.length > 0) {
                    $("#tdata_out").removeClass("d-none");
                    reply.forEach(function (el) {
                        var html = '';
                        html += `<tr>`;
                        html += `<td>${el.name}</td>`;
                        html += `<td>${el.email}</td>`;
                        html += `<td>${el.phone}</td>`;
                        html += `</tr>`;
                        $("#tdata").append(html);
                    });
                } else {
                    $("#tdata_out").addClass("d-none");
                    $("#tdata").html(`<div class="empty-box">
                                    <h5></h5>
                                    <img src="${user_profile.__url}assets/images/no-refer.png" alt="">
                                    <a href="/" class="btn btn-pink">Refer Now</a>
                                </div>`);
                }

            }
        });
    };

    this.email_verify_show = function () {

        $.ajax({
            url: `${base_url}user/profile/send-otp-for-email-verification.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (res) {
                $("#verifyEmailModal").show();
                toastr.success(res.message);
            },
            error: function (result) {
                toastr.error(result.responseJSON.message);
            }
        });
    };

    this.email_verify = function () {

        $.ajax({
            url: `${base_url}user/profile/verify-email-otp.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                otp: $("#email_otp").val()
            }),
            success: function (result) {
                toastr.success(result.message);
                $("#verifyEmailModal").hide();
                user_profile.getProfileData();

            },
            error: function (result) {
                toastr.error(result.responseJSON.message);
            }
        });
    };

    this.uploadProfileImage = function (this_) {

        var formdata = false;
        if (window.FormData) {
            formdata = new FormData();
        }
        console.log(this_.files);
        formdata.append("file", this_.files[0], this_.files[0].name);
        formdata.append("token", localStorage.getItem("userToken"));
        jQuery.ajax({
            url: `${base_url}user/profile/upload-profile-pic.php`,
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (res) {
                toastr.success(res.message);
                user_profile.getProfileData();
            }
        });
    };

};

user_profile.userSessionCheck();