$(function () {
    const __url = $("#base_url").val();
    const token = localStorage.getItem("userToken");
    const urlParams = new URLSearchParams(window.location.search);
    const service_id = ($("#service-id").val()=='n')?'':$("#service-id").val();
    const str = $("#service-str").val();

    var getListingResult = function () {
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
                console.log(result);

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
                        $('#salonData .row').append(`
                     <div class="col-md-4">
                     <a href="hair-masters.php" class="service-box">
                        <img src="https://via.placeholder.com/400x250" alt="" class="img-fluid" />
                        <div class="service-body">
                            <h4> ${val.salon_name}</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> ${val.city}, ${val.state}</p>
                            <span class="rating"><i class="fas fa-star"></i> ${val.rating}</span>
                            <hr>
                            <p class="discountPara"></p>
                        </div>
                    </a>
                </div>
                        `);

                        // if (val.services && val.services.length > 0) {
                        //     val.services.forEach(serviceVal => {
                        //         console.log(serviceVal.mrp_price);
                        //         $(`#serviceData .service-wrapper-body`).append(serviceVal[].mrp_price);
                        //                 $(`#serviceData .service-wrapper-body`).append(`

                        //         `)
                        //     });
                        // };

                        if (val.coupons && val.coupons.length > 0) {
                            val.coupons.forEach((couponVal, index) => {
                                if (index == 0) {
                                    $('.discountPara').append(`
                                <i class="fa fa-tags"></i> &nbsp; ${couponVal.discount_percent ? `${couponVal.discount_percent} % off` : `${couponVal.flat_discount_amount} Flat Discount`}
                            `)
                                }
                            });
                        }

                        if (val.is_bridal_service_provide) {
                            $('#bridalData .row').append(`
                              <div class="col-md-4">
                               <a href="hair-masters.php" class="service-box">
                             <img src="https://via.placeholder.com/400x250" alt="" class="img-fluid" />
                              <div class="service-body">
                              <h4> ${val.salon_name}</h4>
                              <p> <i class="fa fa-map-marker-alt"></i> ${val.city} ${val.state}</p>
                              <span class="rating"><i class="fas fa-star"></i> ${val.rating}</span>
                              <hr>
                              <p class="discountPara"></p>
                              </div>
                              </a>
                              </div>
                               `)
                        }
                        if (val.is_luxury_service_provide) {
                            $('#luxeData .row').append(`
                              <div class="col-md-4">
                                  <a href="hair-masters.php" class="service-box">
                                      <img src="https://via.placeholder.com/400x250" alt="" class="img-fluid" />
                                      <div class="service-body">
                                          <h4> ${val.salon_name}</h4>
                                          <p> <i class="fa fa-map-marker-alt"></i> ${val.city} ${val.state}</p>
                                          <span class="rating"><i class="fas fa-star"></i> ${val.rating}</span>
                                          <hr>
                                          <p class="discountPara"></p>
                                      </div>
                                  </a>
                              </div>
                               `)
                        }


                        $('#serviceData').append(`
                    <div class="service-wrapper">
                        <div class="service-wrapper-header">
                            <h4><a href="hair-masters.php?service_id=${val.id}">${val.salon_name}</a></h4>
                            <p> <i class="fa fa-map-marker-alt"></i> ${val.city} ${val.state}</p>
                        </div>
                        <div class="service-wrapper-body">
                        ${serviceWrapper}
                        </div>
                    </div>
                        `)
                    });


                    $(".loading-wrapper").hide();
                } else {
                    $('#nodata').html('<div><img src="assets/images/nodata.png" /><h5>Data is not available...</h5></div>')
                }

            }
        });
    }

    var serviceId = null;
    $('body').on('click', '.bookServiceBtn', function () {
        serviceId = $(this).parents('.service-wrapper-list').attr('id');
        if (!token) {
            $('#loginModal').modal('show');
            // addToCart();
        } else {
            addToCart();
            cartCount();
        }
    });

    const addToCart = function () {
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
                alert('cart added');
            }
        });
    }

    getListingResult();
})