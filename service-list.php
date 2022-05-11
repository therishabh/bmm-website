<?php
include './shared/utilities.php';
includeWithVariables('./include/header.php', array('page_title' => "Book MY Makeup"));
?>

<section class="section-padding bg-light-gray">
    <div class="container">
        <div class="salon-category-tab-parents">
            <div class="row">
                <div class="col-md-12">
                    <ul class="salon-category-tabs">
                        <li data="salonsTab" class="active"> <span><img src="assets/images/salon-category-icon1.png" alt=""></span> Salons</li>
                        <li data="servicesTab"> <span><img src="assets/images/salon-category-icon2.png" alt=""></span> Services</li>
                        <li data="bridalTab"> <span><img src="assets/images/salon-category-icon3.png" alt=""></span> Bridal Makeup</li>
                        <li data="luxeTab"> <span><img src="assets/images/salon-category-icon4.png" alt=""></span> LUXE</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="salonsTab" class="custom-tab-content d-custom-block">
            <div class="loading-wrapper">
                <img src="assets/images/loader.gif" alt="loading">
            </div>
            <div id="salonData">
                <div class="row"></div>
            </div>
        </div>

        <div id="servicesTab" class="custom-tab-content">
            <div id="serviceData">
            </div>
        </div>

        <div id="bridalTab" class="custom-tab-content">
            <div id="bridalData">
                <div class="row"></div>
            </div>
            <!-- <div class="row">
                <div class="col-md-4">
                    <a href="hair-masters.php" class="service-box">
                        <img src="assets/images/salon-shop-4.jpg" alt="" class="img-fluid" />
                        <div class="service-body">
                            <h4>Hair Masters Salon</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                            <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                            <span class="booked">76 Booked</span>
                            <div class="salon-featured-tag">Recommended</div>
                            <hr>
                            <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="service-box">
                        <img src="assets/images/salon-shop-5.jpg" alt="" class="img-fluid" />
                        <div class="service-body">
                            <h4>Looks Salon</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> Punjabi Bagh, New Delhi</p>
                            <span class="rating"><i class="fas fa-star"></i> 3.9</span>
                            <span class="booked">48 Booked</span>
                            <hr>
                            <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="service-box">
                        <img src="assets/images/salon-shop-6.jpg" alt="" class="img-fluid" />
                        <div class="service-body">
                            <h4>Geetanjali Salon</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> Preet Vihar, New Delhi</p>
                            <span class="rating"><i class="fas fa-star"></i> 4.5</span>
                            <span class="booked">69 Booked</span>
                            <hr>
                            <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="service-box">
                        <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                        <div class="service-body">
                            <h4>Hair Masters Salon</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                            <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                            <span class="booked">132 Booked</span>
                            <hr>
                            <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="service-box">
                        <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                        <div class="service-body">
                            <h4>Hair Masters Salon</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                            <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                            <span class="booked">132 Booked</span>
                            <div class="salon-featured-tag">Recommended</div>
                            <hr>
                            <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="service-box">
                        <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                        <div class="service-body">
                            <h4>Hair Masters Salon</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                            <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                            <span class="booked">132 Booked</span>
                            <hr>
                            <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                        </div>
                    </a>
                </div>
            </div> -->
        </div>

        <div id="luxeTab" class="custom-tab-content">
            <div id="luxeData">
                <div class="row"></div>
            </div>
            <!-- <div class="row">
                <div class="col-md-4">
                    <a href="hair-masters.php" class="service-box">
                        <img src="assets/images/salon-shop-7.jpg" alt="" class="img-fluid" />
                        <div class="service-body">
                            <h4>Hair Masters Salon</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                            <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                            <span class="booked">76 Booked</span>
                            <div class="salon-featured-tag">Recommended</div>
                            <hr>
                            <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="service-box">
                        <img src="assets/images/salon-shop-8.jpg" alt="" class="img-fluid" />
                        <div class="service-body">
                            <h4>Looks Salon</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> Punjabi Bagh, New Delhi</p>
                            <span class="rating"><i class="fas fa-star"></i> 3.9</span>
                            <span class="booked">48 Booked</span>
                            <hr>
                            <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="service-box">
                        <img src="assets/images/salon-shop-9.jpg" alt="" class="img-fluid" />
                        <div class="service-body">
                            <h4>Geetanjali Salon</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> Preet Vihar, New Delhi</p>
                            <span class="rating"><i class="fas fa-star"></i> 4.5</span>
                            <span class="booked">69 Booked</span>
                            <hr>
                            <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="service-box">
                        <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                        <div class="service-body">
                            <h4>Hair Masters Salon</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                            <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                            <span class="booked">132 Booked</span>
                            <hr>
                            <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="service-box">
                        <img src="assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
                        <div class="service-body">
                            <h4>Hair Masters Salon</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                            <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                            <span class="booked">132 Booked</span>
                            <div class="salon-featured-tag">Recommended</div>
                            <hr>
                            <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="service-box">
                        <img src="assets/images/salon-shop-9.jpg" alt="" class="img-fluid" />
                        <div class="service-body">
                            <h4>Hair Masters Salon</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> Janakpuri, New Delhi</p>
                            <span class="rating"><i class="fas fa-star"></i> 4.8</span>
                            <span class="booked">132 Booked</span>
                            <hr>
                            <p><i class="fa fa-tags"></i> &nbsp; 20% off &nbsp; | &nbsp; Use BMM001</p>
                        </div>
                    </a>
                </div>
            </div> -->
        </div>

    </div>
</section>

<?php include 'include/footer.php' ?>

<script>
    $(function() {
        const token = localStorage.getItem("userToken");
        const urlParams = new URLSearchParams(window.location.search);
        const service_id = urlParams.get('service_id');

        var getListingResult = function() {
            var cartCount = '';
            $(".loading-wrapper").show();
            $.ajax({
                url: `${base_url}/user/search/get-listing-result.php`,
                type: 'GET',
                data: {
                    service_id: service_id
                },
                dataType: 'JSON',
                success: function(result) {
                    result = result.result;
                    console.log(result);

                    result.forEach(val => {
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
                            <h4>${val.salon_name}</h4>
                            <p> <i class="fa fa-map-marker-alt"></i> ${val.city} ${val.state}</p>
                        </div>
                        <div class="service-wrapper-body">
                        </div>
                    </div>
                        `)

                        val.coupons.forEach((val2, index) => {
                            if (index == 0) {
                                $('.discountPara').append(`
                                <i class="fa fa-tags"></i> &nbsp; ${val2.discount_percent? `${val2.discount_percent} % off` : `${val2.flat_discount_amount} Flat Discount`}
                            `)
                            }
                        });

                        val.services.forEach((serviceVal, index) => {
                            if (serviceVal.mrp_price === 0) {
                                $('#serviceData .service-wrapper-body').append(`
                            <div class="service-wrapper-list" id="${serviceVal.id}">
                                <div>
                                    <h5>${serviceVal.name} [${serviceVal.category}] </h5>
                                    <div>
                                    <span class="discounted_price">Rs. ${serviceVal.discounted_price}</span>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-pink bookServiceBtn">Book</button>
                                </div>
                            </div>                        
                            `)
                            } else {

                                $('#serviceData .service-wrapper-body').append(`
                            <div class="service-wrapper-list" id="${serviceVal.id}">
                                <div>
                                    <h5>${serviceVal.name} [${serviceVal.category}] </h5>
                                    <div>
                                    <s>Rs. ${serviceVal.mrp_price}</s>
                                    <span class="discounted_price">Rs. ${serviceVal.discounted_price}</span>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn btn-pink bookServiceBtn">Book</button>
                                </div>
                            </div>                        
                            `)
                            }

                        });

                    });
                    $(".loading-wrapper").hide();

                }
            });
        }

        $('body').on('click', '.bookServiceBtn', function() {
            if (!token) {
                $('#loginModal').modal('show');
            } else {
                $('.cart-count-circle').text('1');
                alert($(this).parents('.service-wrapper-body').find('.service-wrapper-list').attr('id'));
            }
        });

        getListingResult();
    })
</script>