/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

const __url = $("#base_url").val();
<<<<<<< HEAD
const token = localStorage.getItem("userToken");
var salon_details = new function() {
=======
var token = localStorage.getItem("userToken");
var salon_details = new function () {
>>>>>>> 3687e159b383f16a128d0cb9504c49a7b7cba73e
    this.cartItemsArray = [];
    this.cartIDArray = [];
    this.cartPackageArray = [];
    this.cartPackageIDArray = [];

    this.init = function() {
        //        console.log(salon_details.cartItemsArray);
        var salonId = $("#salon-id").val();
        var serviceId = $("#service-id").val();
        $.ajax({
            url: `${base_url}user/salon/detail.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken"),
                salon_id: salonId,
                q: "services,info,coupons"
            },
            success: function(res) {
                let info = res.result.info;
                $("#salon_name").html(info.salon_name);
                $("#salon_address").html(info.address + ', ' + info.city + ', ' + info.state);
                $("#banner_image").html(`<img src="${info.banner_image}" class="img-fluid">`);
                let coupons = res.result.coupons;
                var coupon_html = '';
                var i = 0;
                coupons.forEach(function(el) {
                    if (i > 0) {
                        coupon_html += ' | ';
                    }
                    if (el.discount_percent == "") {
                        coupon_html += "Rs. " + el.flat_discount_amount + ' flat discount USE ' + el.coupon_code;
                    } else {
                        coupon_html += el.flat_discount_amount + ' % discount USE ' + el.coupon_code;
                    }
                    i++;
                });
                
                if (coupon_html != '') {
                    $("#tags_").removeClass("d-none");
                    $("#salon_discounts").html(coupon_html);
                }

                let services = res.result.services;
                let type = [];
                let type_services = {};
                services.forEach(function(el) {
                    if (type.indexOf(el.type) == -1) {
                        type_services[el.type] = [];
                        type.push(el.type);
                    }
                    type_services[el.type].push(el);
                });

                var j = 0;
                for (var item in type_services) {
                    var html = '';

                    html += `<div class="card">`;
                    html += `<div class="card-header">`;
                    html += `<a class="card-link" data-toggle="collapse" href="#collapse${j}">`;
                    html += `${item}`;
                    html += `</a>`;
                    html += `</div>`;
                    html += `<div id="collapse${j}" class="collapse show" data-parent="#accordion">`;
                    html += `<div class="card-body">`;
                    html += `<div class="service-wrapper">`;
                    html += `<div class="service-wrapper-body">`;


                    for (var i = 0; i < type_services[item].length; i++) {

                        if (serviceId == type_services[item][i].id) {
                            console.log(serviceId);
                            $("#highlight_service").removeClass('d-none');
                            $("#highlight_service_name").html(`${type_services[item][i].name} [${type_services[item][i].category}] `);
                            $("#highlight_service_price").html(`Rs. ${type_services[item][i].discounted_price}`);
                            $("#highlight_service_book").attr('onclick', `salon_details.bookService(${type_services[item][i].id})`);
                        }

                        html += `<div class="service-wrapper-list">`;
                        html += `<div>`;
                        html += `<h5>${type_services[item][i].name} [${type_services[item][i].category}] </h5>`;
                        html += `<div>`;
                        html += `<span class="discounted_price">Rs. ${type_services[item][i].discounted_price}</span>`;
                        html += `</div>`;
                        html += `</div>`;
                        html += `<div>`;
                        if ((salon_details.cartItemsArray).indexOf(type_services[item][i].id) == -1) {
                            html += `<button class="btn btn-pink bookServiceBtn" onclick="salon_details.bookService(${type_services[item][i].id},'',this);">Book</button>`;
                        } else {
                            var index = (salon_details.cartItemsArray).indexOf(type_services[item][i].id);
                            html += `<button class="btn bg-light bookServiceBtn" onclick="salon_details.removeService(${salon_details.cartIDArray[index]},'',this);">Remove</button>`;
                        }


                        html += `</div>`;
                        html += `</div>`;
                    }


                    html + `</div>`;
                    html + `</div>`;
                    html + `</div>`;
                    html + `</div>`;
                    html + `</div>`;

                    $("#accordion").append(html);
                    j++;
                }
            }
        });
    };

    this.getCartItems = function() {
        $.ajax({
            url: `${base_url}user/cart/get-cart-items.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function(res) {
                if (res.result) {
                    if (res.result.services != undefined) {
                        (res.result.services).forEach(function(service) {
                            salon_details.cartItemsArray.push(service.service_id);
                            salon_details.cartIDArray.push(service.service_id);

                        });
                    }
                    if (res.result.packages != undefined) {
                        (res.result.packages).forEach(function(package) {
                            salon_details.cartPackageArray.push(package.id);
                            salon_details.cartPackageIDArray.push(package.id);
                        });
                    }
                }
            },
            complete: function() {
                salon_details.init();
                salon_details.packages();
            }
        });

    };

<<<<<<< HEAD
    this.bookService = function(serviceId, packageId, this_) {
        if (!token) {
=======
    this.bookService = function (serviceId, packageId, this_) {
        if (!localStorage.getItem("userToken")) {
>>>>>>> 3687e159b383f16a128d0cb9504c49a7b7cba73e
            $('#loginModal').modal('show');
            // addToCart();
        } else {
            token = localStorage.getItem("userToken");
            salon_details.addToCart(serviceId, packageId, this_);
            common.cartCount();
        }
    };

    this.addToCart = function(service_id, package_id, this_) {
        var post_data = {
            token: token,
            service_id: service_id,
            package_id: package_id
        }
        $.ajax({
            url: base_url + `/user/cart/add-to-cart.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify(post_data),
            success: function(result) {
                toastr.success('Service added in cart.');
                common.cartCount();
                $(this_).removeClass('btn-pink');
                $(this_).addClass('bg-light');
<<<<<<< HEAD
                $(this_).html('Remove');
                $(this_).attr('onclick', `salon_details.removeService('${service_id}','${package_id}',this)`);

                //                $(this__).attr('onclick',`salon_details.removeService()`)
            },
            error: function(result) {
=======
                $(this_).html('Booked');
                $(this_).attr('onclick', `javascript:void(0)`);
//                $(this_).attr('onclick', `salon_details.removeService('${service_id}','${package_id}',this)`);

            }, error: function (result) {
>>>>>>> 3687e159b383f16a128d0cb9504c49a7b7cba73e
                toastr.error(result.responseJSON.message);
                common.cartCount();
            }
        });
    }

    this.removeService = function(service_id, package_id, this_) {
        console.log(this_);
        $.ajax({
            url: `${base_url}user/cart/remove-from-cart.php`,
            type: 'POST',
            dataType: 'JSON',
            async: false,
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                service_id: service_id,
                package_id: package_id
            }),
            success: function(res) {
                toastr.success(res.message);
                common.cartCount();

                $(this_).removeClass('bg-light');
                $(this_).addClass('btn-pink');
                $(this_).html('Book');
                $(this_).attr('onclick', `salon_details.bookService('${service_id}','${package_id}',this)`);
            }
        });
    };

    this.packages = function() {
        var salonId = $("#salon-id").val();
        $.ajax({
            url: `${base_url}user/salon/detail.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken"),
                salon_id: salonId,
                q: 'packages'
            },
            success: function(res) {
                console.log();
                var packages = res.result.packages;
                var html = '';
                if (packages.length > 0) {
                    $("#packages").removeClass('d-none');
                    html += `<div class="card">`;


                    html += `<div id="collapse_packages" class="collapse show" data-parent="#accordion">`;
                    html += `<div class="card-body">`;
                    html += `<div class="service-wrapper">`;
                    html += `<div class="service-wrapper-body">`;

                    packages.forEach(function(el) {
                        html += `<div class="service-wrapper-list">`;
                        html += `<div>`;
<<<<<<< HEAD
                        html += `<h5>${el.package_name} <img src="/assets/images/female-icon.png" class="category-icon" /> <img src="/assets/images/male-icon.png" class="category-icon" /> [${el.category}] </h5>`;
=======
                        html += `<h5>${el.package_name} [${el.category}] </h5>`;
                        (el.services).forEach(function (t1) {
                            html += `<span>${t1.name}</span><br>`;
                        })

>>>>>>> 3687e159b383f16a128d0cb9504c49a7b7cba73e
                        html += `<div>`;
                        html += `<span class="discounted_price">Rs. ${el.discounted_price}</span>`;
                        html += `</div>`;
                        html += `</div>`;
                        html += `<div>`;
                        if ((salon_details.cartPackageArray).indexOf(el.id) == -1) {
                            html += `<button class="btn btn-pink bookServiceBtn" onclick="salon_details.bookService('',${el.id},this);">Book</button>`;
                        } else {
                            var index = (salon_details.cartPackageArray).indexOf(el.id);
                            html += `<button class="btn bg-light bookServiceBtn" onclick="salon_details.removeService('',${salon_details.cartPackageIDArray[index]},this);">Remove</button>`;
                        }



                        html += `</div>`;
                        html += `</div>`;

                    });

                    html + `</div>`;
                    html + `</div>`;
                    html + `</div>`;
                    html + `</div>`;
                    html + `</div>`;
                    $("#accordion_packages").append(html);
                }
            }

        });
    };
};



salon_details.getCartItems();