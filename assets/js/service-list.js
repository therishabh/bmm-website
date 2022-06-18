const __url = $("#base_url").val();
const token = localStorage.getItem("userToken");
const urlParams = new URLSearchParams(window.location.search);
const service_id = ($("#service-id").val() == 'n') ? '' : $("#service-id").val();
let str = $("#service-str").val();
const type = $("#type").val();


var service_list = new function () {
    this.getListingResult = function () {
        if (type != '') {
            str = '';
        }
        if (type == 1) {
            $("#salonsTab_li").removeClass('d-none');
            $("#salonsTab_li").addClass('active');
            $("#salonsTab").addClass('d-custom-block');
//            $("#servicesTab_li").removeClass('d-none');
            $("#bridalTab_li").removeClass('d-none');
            $("#luxeTab_li").removeClass('d-none');
//                    $("#makeupArtistTab_li").removeClass('d-none');
        } else
        if (type == 2) {
//                    $("#salonsTab_li").removeClass('d-none');
//                    $("#servicesTab_li").removeClass('d-none');
                    $("#bridalTab_li").removeClass('d-none');
            $("#luxeTab_li").removeClass('d-none');
            $("#makeupArtistTab_li").removeClass('d-none');
            $("#makeupArtistTab_li").addClass('active');
            $("#makeupArtistTab").addClass('d-custom-block');
        } else
        if (type == 3) {
            $("#salonsTab_li").removeClass('d-none');
            $("#salonsTab_li").addClass('active');
            $("#salonsTab").addClass('d-custom-block');
//            $("#servicesTab_li").removeClass('d-none');
//                    $("#bridalTab_li").removeClass('d-none');
//                    $("#luxeTab_li").removeClass('d-none');
//                    $("#makeupArtistTab_li").removeClass('d-none');
        } else
        if (type == 4) {
//                    $("#salonsTab_li").removeClass('d-none');
//                    $("#servicesTab_li").removeClass('d-none');
            $("#bridalTab_li").removeClass('d-none');
            $("#bridalTab_li").addClass('active');
            $("#bridalTab").addClass('d-custom-block');
            $("#luxeTab_li").removeClass('d-none');
//                    $("#makeupArtistTab_li").removeClass('d-none');
        } else {
            $("#salonsTab_li").removeClass('d-none');
            $("#salonsTab_li").addClass('active');
            $("#salonsTab").addClass('d-custom-block');
            $("#servicesTab_li").removeClass('d-none');
            $("#bridalTab_li").removeClass('d-none');
            $("#luxeTab_li").removeClass('d-none');
            $("#makeupArtistTab_li").removeClass('d-none');
        }

        // var cartCount = '';
        $(".loading-wrapper").show();
        $.ajax({
            url: base_url + `/user/search/get-listing-result.php`,
            type: 'GET',
            data: {
                service_id: service_id,
                str: str
            },
            dataType: 'JSON',
            success: function (result) {
                result = result.result;
                //console.log(result);

                if (result && result.length > 0) {
                    result.forEach((val, key) => {
                        var serviceWrapper = '';
                        if (val.services && val.services.length > 0) {
                            val.services.forEach(serviceVal => {
                                serviceWrapper += `
                                    <div class="service-wrapper-list" id="${serviceVal.id}">
                                        <div>
                                            <h5>${serviceVal.name} [${serviceVal.category}] </h5>
                                            <div>
                                            ${serviceVal.mrp_price == 0 ? '' : `<s>Rs. ${serviceVal.mrp_price}</s>`}
                                            <span class="discounted_price">Rs. ${serviceVal.discounted_price}</span>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-pink bookServiceBtn">Book</button>
                                        </div>
                                    </div>    
                                    `
                            });
                        }
                        var banner_image = (val.banner_image) ? val.banner_image : 'https://via.placeholder.com/400x250';
                        if (val.business_type == 'salon') {
                            var serviceWrapper_i = '';
                            if (val.services && val.services.length > 0) {
                                val.services.forEach(serviceVal => {
                                    serviceWrapper_i += `
                                    
                                    <div  id="${serviceVal.id}" class="col-lg-12">
                                        <div>
                                            <h6>${serviceVal.name} [${serviceVal.category}] </h6>
                                            <div>
                                            ${serviceVal.mrp_price == 0 ? '' : `<s>Rs. ${serviceVal.mrp_price}</s>`}
                                            <span class="discounted_price">Rs. ${serviceVal.discounted_price}</span>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="btn btn-pink bookServiceBtn">Book</button>
                                        </div>
                                    </div>    
                                    `
                                });
                            }

                            $('#salonData .row').append(`
                            <div class="col-md-4">
                            <div class="wishlist-icon" onclick="service_list.addToWishlist('${val.id}')" id="salon_${val.id}">
                                <i class="far fa-heart"></i>
                            </div>
                            <div class="service-box">
                                <div onclick='location.href="${__url}salon-details/${val.id}/${service_id}"'>                            
                                    <img src="${banner_image}" alt="" class="img-fluid" />
                                    <div class="service-body">
                                        <h4> ${val.salon_name}</h4>
                                        <p> <i class="fa fa-map-marker-alt"></i> ${val.city}, ${val.state}</p>
                                        <span class="rating"><i class="fas fa-star"></i> ${val.rating}</span>


                                        <hr>
                                        <p class="discountPara dp_${val.id}"></p>
                                         </div>
                                    </div>
                                             <hr>
                                         <div class="service-body" >
                                            ${serviceWrapper_i}    
                                         </div>  
                               </div>
                            
                           </div>
                          
                       </div>
                        `);
                        }

                        if (type == 2) {
                            if (val.business_type != 'salon') {
                                $('#makeupArtistData .row').append(`
                            <div class="col-md-4">
                            <div href="${__url}salon-details/${val.id}" class="makeup-artist-box service-box">
                               <img src="${banner_image}" alt="" class="img-fluid" />
                               <p class="artist-name float-left"> ${val.salon_name}</p>
                                <p class="rating float-right"> <i class="fas fa-star"></i> ${val.rating}</p>
                                <div class="clearfix"></div>
                                <p class="float-left">42 booked</p>
                                <p class="float-right">18 Reviews</p>
                                <div class="clearfix"></div>
                                <p><small>Makeup at your venue</small></p>

                           </div>
                       </div>
                        `);
                            }
                        }

                        // if (val.services && val.services.length > 0) {
                        //     val.services.forEach(serviceVal => {
                        //         console.log(serviceVal.mrp_price);
                        //         $(`#serviceData .service-wrapper-body`).append(serviceVal[].mrp_price);
                        //                 $(`#serviceData .service-wrapper-body`).append(`

                        //         `)
                        //     });
                        // };



                        if (val.is_bridal_service_provide) {
                            $('#bridalData .row').append(`
                              <div class="col-md-4">
                               <a href="${__url}salon-details/${val.id}" class="service-box">
                             <img src="${banner_image}" alt="" class="img-fluid" />
                              <div class="service-body">
                              <h4> ${val.salon_name}</h4>
                              <p> <i class="fa fa-map-marker-alt"></i> ${val.city}, ${val.state}</p>
                              <span class="rating"><i class="fas fa-star"></i> ${val.rating}</span>
                              <hr>
                              <p class="discountPara dp_${val.id}"></p>
                              </div>
                              </a>
                              </div>
                               `)
                        }
                        if (val.is_luxury_service_provide) {
                            $('#luxeData .row').append(`
                              <div class="col-md-4">
                                  <a href="${__url}salon-details/${val.id}" class="service-box">
                                      <img src="${banner_image}" alt="" class="img-fluid" />
                                      <div class="service-body">
                                          <h4> ${val.salon_name}</h4>
                                          <p> <i class="fa fa-map-marker-alt"></i> ${val.city}, ${val.state}</p>
                                          <span class="rating"><i class="fas fa-star"></i> ${val.rating}</span>
                                          <hr>
                                          <p class="discountPara dp_${val.id}"></p>
                                      </div>
                                  </a>
                              </div>
                               `)
                        }

                        
                        $('#serviceData').append(`
                    <div class="service-wrapper">
                        <div class="service-wrapper-header">
                            <h4><a href="${__url}salon-details/${val.id}">${val.salon_name}</a></h4>
                            <p> <i class="fa fa-map-marker-alt"></i> ${val.city}, ${val.state}</p>
                        </div>
                        <div class="service-wrapper-body">
                        ${serviceWrapper}
                        </div>
                    </div>
                        `)

                        if (val.coupons && val.coupons.length > 0) {
                            val.coupons.forEach((couponVal, index) => {
                                $('.dp_' + val.id).append(`
                                <i class="fa fa-tags"></i> &nbsp; ${couponVal.discount_percent ? `${couponVal.discount_percent} % off  : <b>${couponVal.coupon_code}</b>` : `${couponVal.flat_discount_amount} Flat Discount : <b>${couponVal.coupon_code}</b> &nbsp;`}
                            `)
                            });
                        }

                    });


                    $(".loading-wrapper").hide();
                } else {
                    $('#nodata').html('<div><img src="assets/images/nodata.png" /><h5>Data is not available...</h5></div>')
                }

            }
        });
    }

    this.addToCart = function () {
        var post_data = {
            token: token,
            service_id: serviceId
        }
        $.ajax({
            url: base_url + `/user/cart/add-to-cart.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify(post_data),
            success: function (result) {
                toastr.success('Service added in cart.');
                common.cartCount();
            }, error: function (result) {
                toastr.error(result.responseJSON.message);
                common.cartCount();
            }
        });
    };

    this.addToWishlist = function (salon_id) {
        var post_data = {
            token: token,
            salon_id: salon_id
        }
        $.ajax({
            url: base_url + `/user/favourite/add-to-favourite.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify(post_data),
            success: function (result) {
                toastr.success('Added to wishlist.');
                $("#salon_" + salon_id).attr('onclick', `service_list.removeFromWishList('${salon_id}')`);
                $("#salon_" + salon_id).find(".fa-heart").attr("data-prefix", "fas");
            }, error: function (result) {
                toastr.error(result.responseJSON.message);
                $("#salon_" + salon_id).find(".fa-heart").attr("data-prefix", "far");
            }
        });
    };

    this.removeFromWishList = function (salon_id) {
        var post_data = {
            token: token,
            salon_id: salon_id
        }
        $.ajax({
            url: base_url + `/user/favourite/remove-favourite.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify(post_data),
            success: function (result) {
                toastr.success('Removed from wishlist.');
                $("#salon_" + salon_id).attr('onclick', `service_list.addToWishlist('${salon_id}')`);
                $("#salon_" + salon_id).find(".fa-heart").attr("data-prefix", "far");
            }, error: function (result) {
                toastr.error(result.responseJSON.message);
                $("#salon_" + salon_id).find(".fa-heart").attr("data-prefix", "fas");
            }
        });
    };

    this.getWishList = function () {
        $.ajax({
            url: `${base_url}user/favourite/get-favourite-list.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (result) {
                console.log(result);
            }
        });
    };
};


var serviceId = null;
$('body').on('click', '.bookServiceBtn', function () {
    serviceId = $(this).parents('.service-wrapper-list').attr('id');
    if (!token) {
        $('#loginModal').modal('show');
        // addToCart();
    } else {
        service_list.addToCart();
        common.cartCount();
    }
});

//
//$("body").on("click", ".wishlist-icon", function () {
//    if ($(this).find(".fa-heart").attr("data-prefix") == "fas") {
//        $(this).find(".fa-heart").attr("data-prefix", "far");
//      } else {
//        $(this).find(".fa-heart").attr("data-prefix", "fas");
//      }
//  });

service_list.getListingResult();
service_list.getWishList();