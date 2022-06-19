<!-- Product/Service -->
<section class="cart-details-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="white-box p-4 cart-box-1">
                    <div class="heading mb-3" id='username'></div>
                    <div class="heading"><span id='landline_no'></span> <i class="fas fa-check-circle text-success"></i> </div>
                    <div class="heading"><span id='email'></span>  </div>
                </div>

                <div class="white-box p-4 cart-box-2 mt-3">
                    <div class="heading mb-1 font-weight-bold" id='salon_name'></div>
                    <p><i class="fa fa-map-marker-alt"></i> <span id='salon_address'></span></p>
                    <div id='service-list'> </div>
                </div>

                <div class="white-box p-4 cart-box-3 mt-3">
                    <h4 id="desktop-address-heading1"> Choose your Booking Date </h4>
                    <input type="date" id="booking_date"  class="form-control"/>
                </div>
                <div class="white-box p-4 cart-box-3 mt-3">
                    <h4 id="desktop-address-heading1"> Choose your Time Slot </h4>
                    <select id="booking_slot">
                        <option>Choose Time Slot</option>
                        <option></option>
                    </select>
                </div>

                <div class="white-box p-4 cart-box-3 mt-3">
                    <div class="delivery-address-box">
                        <div class="row">
                            <span class="row col-lg-12" id="address_row">
                            <div class="col-lg-6">
                                <div class="delivery-address-inner-box">
                                    <div>
                                        <label class="radio-container billing-radio-btn">
                                            <input type="radio" name="existing_address" checked="" value="">
                                            <span class="checkmark"></span> </label>
                                    </div>
                                    <div>
                                        <h4>Rohit Verma</h4>
                                        <p>104, Maujpur, <br>North East Delhi, Delhi - 110053<br>INDIA</p>
                                        <ul>
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Remove</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            </span>
                            <div class="col-lg-6" id="no_address_found">
                                <div class="delivery-address-inner-box">

                                    <div>
                                        <p>No address found.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="white-box p-4 cart-box-3 mt-3">
                    <div class="overflow-hidden delivery-address-add-box delivery-address-add-box-btn">
                        <h4 id="desktop-address-heading1"> <span>+</span> Add a New Billing Address</h4>
                    </div>
                    <div class="add-delivery-address-form">
                        <h3 class="heading-tertiary-24" id="desktop-address-heading2">Add a New Billing Address</h3>
                        <div class="overflow-hidden mt-4" id="desktop-address-form">
                            <form action="" id="" name="" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group"> <label>Full Name <span class="text-danger">*</span></label><input alt="is_alphanumeric" name="full_name" id="desktop-full_name" type="text" class="form-control" maxlength="50"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"> <label>Phone Number <span class="text-danger">*</span></label>
                                            <input name="phone_number" id="desktop-phone_number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" type="text" pattern="^[6-9]\d{9}$" maxlength="10" minlength="10" required="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Building Number</label>
                                            <input type="text" name="building_no" id="desktop-building_no" class="form-control" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"> <label>Street Address <span class="text-danger">*</span></label> <input name="street_address" id="desktop-street_address" type="text" class="form-control" maxlength="50"> </div>
                                    </div>
                                    <div class="col-lg-6 d-none">
                                        <div class="form-group">
                                            <label>Area <span class="text-danger">*</span></label>
                                            <input type="text" name="area" id="desktop-area" class="form-control" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-none">
                                        <div class="form-group">
                                            <label>Country <span class="text-danger">*</span></label>
                                            <select name="country_id" id="desktop-country_id" class="form-control">
                                                <option selected="" value="99">India</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>State/Province/Area: <span class="text-danger">*</span></label>
                                            <select name="state_name" id="desktop-state_name" class="form-control loadoptions" data-listtype="city" data-listid="desktop-city_name">
                                                <option value="">Select</option>
                                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                <option value="Assam">Assam</option>
                                                <option value="Bihar">Bihar</option>
                                                <option value="Chandigarh">Chandigarh</option>
                                                <option value="Chhattisgarh">Chhattisgarh</option>
                                                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                                <option value="Daman and Diu">Daman and Diu</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Goa">Goa</option>
                                                <option value="Gujarat">Gujarat</option>
                                                <option value="Haryana">Haryana</option>
                                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                <option value="Jharkhand">Jharkhand</option>
                                                <option value="Karnataka">Karnataka</option>
                                                <option value="Kerala">Kerala</option>
                                                <option value="Lakshadweep">Lakshadweep</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Maharashtra">Maharashtra</option>
                                                <option value="Manipur">Manipur</option>
                                                <option value="Meghalaya">Meghalaya</option>
                                                <option value="Mizoram">Mizoram</option>
                                                <option value="Nagaland">Nagaland</option>
                                                <option value="Odisha">Odisha</option>
                                                <option value="Puducherry">Puducherry</option>
                                                <option value="Punjab">Punjab</option>
                                                <option value="Rajasthan">Rajasthan</option>
                                                <option value="Sikkim">Sikkim</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Telangana">Telangana</option>
                                                <option value="Tripura">Tripura</option>
                                                <option value="Uttarakhand">Uttarakhand</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>City <span class="text-danger">*</span></label>
                                            <select name="city_name" data-selval="" id="desktop-city_name" class="form-control"></select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><label>Pincode <span class="text-danger">*</span></label> <input name="pincode" id="desktop-pincode" type="text" class="form-control" required="" maxlength="6" minlength="6"> </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><label>Landmark</label>
                                            <input type="text" name="delivery_instructions" id="desktop-delivery_instructions" class="form-control" maxlength="50">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"> <button class="btn btn-pink" id="">Add Address</button> </div>
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <div class="form-group"> <label> <input value="1" id="" name="is_default" type="checkbox"> Use as my default address</label> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pl-0 sub-total-parent">
                <div class="sub-total col-md-12 white-box p-4">
                    <h4 class="font-weight-bold">SUBTOTAL</h4>
                    <div class="coupon-btn coupon-btn-apply text-right cursor-pointer"><i class="fas fa-tags"></i> <span class="ml-3">Apply Coupon</span> </div>
                    <div class="coupon-btn card-btn-apply text-right cursor-pointer"><i class="fas fa-credit-card"></i> <span class="ml-3">Do You have Membership Card?</span> </div>

                    <div id="availableCardBox">
                        <h5>Enter membership card details</h5>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter card number" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Enter Expiry Date" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group text-center mb-0">
                                    <button class="btn btn-pink" id="apply-card">APPLY</button>
                                    <button class="btn btn-secondary" id="">CANCEL</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="membership-card-box">
                        <div class="form-group mb-1">
                            <label><b> Card Number</b> : 1234 1234 1234</label>
                            <label><b> Expiry Date</b> : 06/2025</label>
                            <label><b> Total Amount</b> : Rs. 5000/-</label>
                            <label><b> Balance Amount</b> : Rs. 3500/-</label>
                        </div>
                        <div class="form-group m-0 p-0">
                            <label> <input type="radio" name="membership-card" checked value="card_full_pay" /> Pay full amount with card</label>
                            <label> <input type="radio" name="membership-card" value="card_partial_pay" /> Pay Partial amount with card</label>
                            <input type="text" class="form-control" placeholder="Enter partial amount" id="partialPaymentInput" />
                        </div>
                    </div>

                    <div class="coupon-btn coupon-btn-applied hidden-container">
                        <div>
                            <div class="font-weight-bold applied-coupon-code"></div>
                            <small>Offer applied on the bill</small>
                        </div>
                        <div class="coupon-remove-btn">REMOVE</div>
                    </div>
                    <h6>Price (2 items) <span class="float-right">₹ <span id="total_price"></span></span> </h6>
                    <h6>GST <span class="float-right">₹ <span id="total_tax"></span></span> </h6>
                    <h6 class="bb-none">Total Price <span class="float-right text-pink">₹ <span id="total_amount"></span></span> </h6>
                    <button class="btn btn-block btn-pink" onclick="cart_cl.checkout();">Checkout</button>
                </div>
            </div>
            <!-- <button class="btn btn-pink float-right">Proceed to Pay</button> -->
        </div>
    </div>
</div>
</section>

<!-- Register Modal -->
<div class="modal " id="couponModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Apply Coupon</h5>
                <button type="button" class="close coupon-modal-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class=" col-lg-12 row">
                    <input type="text" placeholder="Enter coupon code" class="form-control col-lg-8" id="text_coupon" />
                    <div class='col-lg-4'>
                        <button class="btn btn-pink" onclick="cart_cl.couponApplyText();">APPLY</button>
                    </div>
                </div>

                <div class="available-coupons mt-3">
                    <h5><b>AVAILABLE COUPONS</b></h5>

                    <!--                    <div class="coupon-detail-box mb-10">
                        <div class='col-lg-12 row'>
                            <div class="coupon-code border p-2 rounded mb-1 col-lg-8">WELCOMEBACK</div>
                            <div class='col-lg-4'>
                                <button class="btn btn-pink apply-coupon-individual">USE</button>
                            </div>
                        </div>
                        <p>Use code <b>WELCOMEBACK</b> & get <b>60% off</b> on orders <b>above ₹149</b>. Maximum discount: ₹120.</p>
                    </div>-->



                </div>
            </div>

        </div>
    </div>
</div>

<!-- availableCardModal -->
<div class="modal " id="availableCardModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Enter membership card details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <input type="text" placeholder="Enter card number" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" placeholder="Enter Expiry Date" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group text-center">
                            <button class="btn btn-pink" id="apply-card">APPLY</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>