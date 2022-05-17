<input type="hidden" id="service-id" value="<?php echo $explode_data[1]; ?>" />
<input type="hidden" id="service-str" value="<?php echo $explode_data[2]; ?>" />
<section class="section-padding bg-light-gray">
    <div class="container">
        <div class="salon-category-tab-parents">
            <div class="row">
                <div class="col-md-12">
                    <ul class="salon-category-tabs">
                        <li data="salonsTab" class="active"> <span><img src="<?php echo $base_url; ?>/assets/images/salon-category-icon1.png" alt=""></span> Salons</li>
                        <li data="servicesTab"> <span><img src="<?php echo $base_url; ?>/assets/images/salon-category-icon2.png" alt=""></span> Services</li>
                        <li data="bridalTab"> <span><img src="<?php echo $base_url; ?>/assets/images/salon-category-icon3.png" alt=""></span> Bridal Makeup</li>
                        <li data="luxeTab"> <span><img src="<?php echo $base_url; ?>/assets/images/salon-category-icon4.png" alt=""></span> LUXE</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="nodata"></div>

        <div id="salonsTab" class="custom-tab-content d-custom-block">
            <div class="loading-wrapper">
                <img src="<?php echo $base_url; ?>/assets/images/loader.gif" alt="loading">
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
                        <img src="<?php echo $base_url; ?>/assets/images/salon-shop-4.jpg" alt="" class="img-fluid" />
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
                        <img src="<?php echo $base_url; ?>/assets/images/salon-shop-5.jpg" alt="" class="img-fluid" />
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
                        <img src="<?php echo $base_url; ?>/assets/images/salon-shop-6.jpg" alt="" class="img-fluid" />
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
                        <img src="<?php echo $base_url; ?>/assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
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
                        <img src="<?php echo $base_url; ?>/assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
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
                        <img src="<?php echo $base_url; ?>/assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
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
                        <img src="<?php echo $base_url; ?>/assets/images/salon-shop-7.jpg" alt="" class="img-fluid" />
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
                        <img src="<?php echo $base_url; ?>/assets/images/salon-shop-8.jpg" alt="" class="img-fluid" />
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
                        <img src="<?php echo $base_url; ?>/assets/images/salon-shop-9.jpg" alt="" class="img-fluid" />
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
                        <img src="<?php echo $base_url; ?>/assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
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
                        <img src="<?php echo $base_url; ?>/assets/images/salon-shop-1.jpg" alt="" class="img-fluid" />
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
                        <img src="<?php echo $base_url; ?>/assets/images/salon-shop-9.jpg" alt="" class="img-fluid" />
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
