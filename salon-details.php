
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
        <h3>All Services</h3>
        <div id="accordion">

           

        </div>
    </div>
</section>

<!-- The Modal -->
<div class="modal" id="bookAppointment">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Book Appointment</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="" method="post">
                    <section class="online-appointment">
                        <div class="container">
                            <form class="online-appointment-form mt-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name" name="full_name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control genderList" name="gender" required>
                                                <option value="emptyService">Gender</option>
                                                <option value="gentsServiceList">Gents</option>
                                                <option value="ladiesServiceList">Ladies</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" placeholder="Contact" name="contact" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 select-service-parent">

                                        <select name="" id="emptyService" class="form-control">
                                            <option value="">Select Service</option>
                                        </select>

                                        <select name="servicetypeLadies" id="ladiesServiceList" class="form-control d-custom-none">
                                            <optgroup label="Hair Styling">
                                                <option value="">Select Service</option>
                                                <option value="Hair Cut">Hair Cut </option>
                                                <option value="Ironing">Ironing </option>
                                                <option value="Global Colouring">Global Colouring </option>
                                                <option value="Blow Dry"> Blow Dry</option>
                                                <option value="Root Touch Up">Root Touch Up </option>
                                                <option value="Shampoo &amp; Conditioning">Shampoo &amp; Conditioning </option>
                                                <option value="Head Massage">Head Massage </option>
                                                <option value="Roller Setting">Roller Setting </option>
                                                <option value="Oiling">Oiling </option>
                                            </optgroup>

                                            <optgroup label="Make Up">
                                                <option value="Party Make Up">Party Make Up</option>
                                                <option value="Engagement Make Up">Engagement Make Up</option>
                                                <option value="Bridal &amp; Reception Make Up">Bridal &amp; Reception Make Up</option>
                                                <option value="Base Make Up">Base Make Up</option>
                                                <option value="Eye Make Up">Eye Make Up</option>
                                            </optgroup>

                                            <optgroup label="Hair Texture">
                                                <option value="Rebonding">Rebonding </option>
                                                <option value="Perming">Perming </option>
                                                <option value="Keratin">Keratin </option>
                                                <option value="Colour Protection">Colour Protection </option>
                                                <option value="Smoothening"> Smoothening</option>
                                            </optgroup>

                                            <optgroup label="Hair Treatments">
                                                <option value="Spa Treatments">Spa Treatments </option>
                                                <option value="Volumizing">Volumizing </option>
                                                <option value="Advanced Hair Moisturising">Advanced Hair Moisturising </option>
                                                <option value="Scalp Treatments"> Scalp Treatments</option>
                                            </optgroup>

                                            <optgroup label="Facials &amp; Rituals">
                                                <option value="Bleach"> Bleach</option>
                                                <option value="Luxury Facials/Rituals"> Luxury Facials/Rituals</option>
                                                <option value="Clean Ups"> Clean Ups</option>
                                                <option value="Body Polishing/Rejuvenation">Body Polishing/Rejuvenation </option>
                                                <option value="Threading">Threading </option>
                                            </optgroup>

                                            <optgroup label="Hand &amp; Feet">
                                                <option value="Manicure"> Manicure </option>
                                                <option value="Spa Pedicure"> Spa Pedicure </option>
                                                <option value="Pedicure">Pedicure </option>
                                                <option value="Waxing"> Waxing </option>
                                                <option value="Spa Manicure"> Spa Manicure </option>
                                            </optgroup>

                                            <optgroup label="Nail Care">
                                                <option value="Nail Paint"> Nail Paint</option>
                                                <option value="Nail Art"> Nail Art </option>
                                                <option value="Nail Filling"> Nail Filling </option>
                                                <option value="Other"> Other </option>
                                            </optgroup>



                                        </select>

                                        <select name="servicetypeGents" id="gentsServiceList" class="form-control d-custom-none">

                                            <optgroup label="Hair Cut &amp; Finish">
                                                <option value="">Select Service</option>
                                                <option value="Cut and Hair Care">Cut and Hair Care </option>
                                                <option value="Shampoo &amp; Conditioning">Shampoo &amp; Conditioning </option>
                                                <option value="Head Massage">Head Massage </option>
                                                <option value="Beard Styling">Beard Styling </option>
                                                <option value="Hair/Beard Colouring">Hair/Beard Colouring </option>
                                            </optgroup>


                                            <optgroup label="Hair Colour">
                                                <option value="Hair Colour(Ammonia &amp; Ammonia Fed)">Hair Colour(Ammonia &amp; Ammonia Free)</option>
                                                <option value="Hi - Lites">Hi - Lites</option>
                                                <option value="Beard Colour">Beard Colour</option>
                                            </optgroup>

                                            <optgroup label="Hair Texture">
                                                <option value="Straightening">Straightening</option>
                                                <option value="Smoothening">Smoothening</option>
                                                <option value="Rebonding">Rebonding</option>
                                                <option value="Perming">Perming</option>
                                            </optgroup>

                                            <optgroup label="Hair Treatments">
                                                <option value="Hair Spa">Hair Spa</option>
                                                <option value="Advanced Moisturising">Advanced Moisturising</option>
                                                <option value="Scalp Treatments">Scalp Treatments</option>
                                                <option value="Colour Protection">Colour Protection</option>
                                            </optgroup>

                                            <optgroup label="Skin Care">
                                                <option value="Clean Ups"> Clean Ups </option>
                                                <option value="Facials">Facials </option>
                                                <option value="Organic Treatments">Organic Treatments </option>
                                                <option value="Manicure">Manicure </option>
                                                <option value="Pedicure">Pedicure</option>
                                            </optgroup>

                                            <optgroup label="Beard Grooming">
                                                <option value="Beard Trim">Beard Trim</option>
                                                <option value="Beard Colour">Beard Colour</option>
                                                <option value="Beard Styling">Beard Styling</option>
                                                <option value="Shave">Shave</option>
                                                <option value="Luxury Shave &amp; Beard Spa">Luxury Shave &amp; Beard Spa</option>
                                                <option value="Other"> Other </option>
                                            </optgroup>

                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email Id" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Preferred Date" name="date" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City" name="city" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="time" class="form-control" placeholder="Preferred Time" name="time" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" name="submit" class="btn book-appointment-btn">Book Appointment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </form>
            </div>



        </div>
    </div>
</div>