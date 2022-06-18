
<input type="hidden" id="salon-id" value="<?php echo $explode_data[1]; ?>" />
<input type="hidden" id="service-id" value="<?php echo $explode_data[2]; ?>" />

<section class="saloon">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 saloon-img d-flex justyfy-content-center align-items-center">
                <img src="<?php echo $base_url; ?>assets/images/hair-masters.png" class="img-fluid">
            </div>
            <div class="col-md-8 salon-text">
                <h1 id="salon_name"></h1>
                <p> <i class="fa fa-map-marker-alt"></i> <span id="salon_address"></span></p>
                <p><i class="fa fa-tags"></i> <span id="salon_discounts"> </span></p>
                <!--<span class="rating"><i class="fas fa-star"></i> 3.9</span>-->
            </div>
        </div>
    </div>
</section>

<section class="service-detail-list-section">
    <div class="container">
        <div id="highlight_service" class=" d-none">
            <div class="service-wrapper">
                <div class="service-wrapper-body">
                    <div class="service-wrapper-list alert-danger" id="1">
                        <div>
                            <h5 id="highlight_service_name"> </h5>
                            <div>
                                <span class="discounted_price" id="highlight_service_price">Rs. 90</span>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-pink bookServiceBtn" id="highlight_service_book">Book</button>
                        </div>
                    </div>
                </div>
            </div>


            <hr>
        </div>
        <span id="packages" class="d-none">
            
            <h3>All Packages</h3>
            <div id="accordion_packages"></div>
            <hr><!-- comment -->
        </span>    


        <h3>All Services</h3>
        <div id="accordion"></div>
    </div>
</section>
