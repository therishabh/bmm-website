<input type="hidden" id="service-id" value="<?php echo $explode_data[1]; ?>" />
<input type="hidden" id="service-str" value="<?php echo $explode_data[2]; ?>" />
<input type="hidden" id="type" value="<?php echo $explode_data[3]; ?>" />
<section class="section-padding bg-light-gray">
    <div class="container">
        <div class="salon-category-tab-parents">
            <div class="row">
                <div class="col-md-12">
                    <ul class="salon-category-tabs">
                        <li data="salonsTab" class="d-none" id="salonsTab_li"> <span><img src="<?php echo $base_url; ?>/assets/images/salon-category-icon1.png" alt=""></span> Salons</li>
                        <li data="servicesTab" class="d-none" id="servicesTab_li"> <span><img src="<?php echo $base_url; ?>/assets/images/salon-category-icon2.png" alt=""></span> Services</li>
                        <li data="makeupArtistTab" class="d-none" id="makeupArtistTab_li" class="d-none"> <span><img src="<?php echo $base_url; ?>/assets/images/salon-category-icon5.png" alt=""></span> Makeup Artist</li>
                        <li data="bridalTab" class="d-none" id="bridalTab_li"> <span><img src="<?php echo $base_url; ?>/assets/images/salon-category-icon3.png" alt=""></span> Bridal Makeup</li>
                        <li data="luxeTab" class="d-none" id="luxeTab_li"> <span><img src="<?php echo $base_url; ?>/assets/images/salon-category-icon4.png" alt=""></span> LUXE</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="nodata"></div>

        <div id="salonsTab" class="custom-tab-content ">
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

        <div id="makeupArtistTab" class="custom-tab-content">
            <div id="makeupArtistData">
                <div class="row">
<!--                    <div class="col-md-4">
                        <div class="makeup-artist-box service-box">
                            <img src="/assets/images/artist-1.jpg" class="img-fluid" alt="">
                            <p class="artist-name float-left">Anshika Sharma</p>
                            <p class="rating float-right"> <i class="fas fa-star"></i> 4.8</p>
                            <div class="clearfix"></div>
                            <p class="float-left">42 booked</p>
                            <p class="float-right">18 Reviews</p>
                            <div class="clearfix"></div>
                            <p><small>Makeup at your venue</small></p>
                            <hr>
                            <p class="price float-left"><i class="fas fa-rupee-sign"></i> 2000</p>
                            <p class="artist-caption float-right">For Bride's Regular Makeup</p>
                        </div>
                    </div>-->
                </div>
            </div>

        </div>

        <div id="bridalTab" class="custom-tab-content">
            <div id="bridalData">
                <div class="row"></div>
            </div>

        </div>

        <div id="luxeTab" class="custom-tab-content">
            <div id="luxeData">
                <div class="row"></div>
            </div>

        </div>

    </div>
</section>