<input type="hidden" id="salon-id" value="<?php echo $explode_data[1]; ?>" />
<input type="hidden" id="service-id" value="<?php echo $explode_data[2]; ?>" />

<section class="saloon">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 saloon-img d-flex justyfy-content-center align-items-center" id="banner_image">

            </div>
            <div class="col-md-8 salon-text">
                <h1 id="salon_name"></h1>
                <p> <i class="fa fa-map-marker-alt"></i> <span id="salon_address"></span></p>
                <p id="tags_" class="d-none"><i class="fa fa-tags"></i> <span id="salon_discounts"> </span></p>
                <!--<span class="rating"><i class="fas fa-star"></i> 3.9</span>-->
            </div>
        </div>
    </div>
</section>

<section class="service-detail-list-section">
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Filters</h4>
                    </div>
                    <div class="card-body">
                        <div class="filter-inner-box">
                            <h6>Gender</h6>
                            <ul>
                                <li>
                                    <label> <input type="checkbox" /> Female</label>
                                </li>
                                <li>
                                    <label> <input type="checkbox" /> Male</label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-inner-box">
                            <h6>Categories</h6>
                            <ul>
                                <li>
                                    <label> <input type="checkbox" /> Category one</label>
                                </li>
                                <li>
                                    <label> <input type="checkbox" /> Category two</label>
                                </li>
                                <li>
                                    <label> <input type="checkbox" /> Category three</label>
                                </li>
                                <li>
                                    <label> <input type="checkbox" /> Category four</label>
                                </li>
                                <li>
                                    <label> <input type="checkbox" /> Category five</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">

                <div id="highlight_service" class=" d-none">
                    <div class="service-wrapper">
                        <div class="service-wrapper-body">
                            <div class="service-wrapper-list alert-info" id="1">
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

                    <div class="title-box row mb-2">
                        <div class="col-md-7">
                            <h3>All Packages</h3>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group search-bar-main">
                                <i class="fa fa-search seacrh-icons"></i>
                                <input type="text" class="form-control" placeholder="Search Packages & Services" aria-label="" aria-describedby="basic-addon1" id="booking_number">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" onclick="user_profile.getUserBookings();">
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordion_packages"></div>
                    <hr><!-- comment -->
                </span>


                <h3>All Services</h3>
                <div id="accordion"></div>
            </div>
        </div>
    </div>
</section>