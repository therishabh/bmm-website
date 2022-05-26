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
                        <li data="makeupArtistTab"> <span><img src="<?php echo $base_url; ?>/assets/images/salon-category-icon3.png" alt=""></span> Makeup Artist</li>
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
        
        <div id="makeupArtistTab" class="custom-tab-content">
            <div id="makeupArtistData">
                <div class="row"></div>
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
