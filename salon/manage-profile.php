<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<section id="main-body">
    <div class="top-heading">
        <h1>Manage Profile</h1>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Contact Person
                </div>
                <div class="card-body">
                    <form action="" id="contactPersonForm">
                        <div class="row">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="contact_person_name">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="contact_person_mobile" disabled>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="contact_person_email" disabled>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="contact_person_gender" class="form-control">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Are you the Owner or Manager of this place?</label>
                                <select name="i_am_owner" class="form-control">
                                    <option value="0">I'm not the owner/manager</option>
                                    <option value="1"> I'm the owner/manager</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Salon Info
                </div>
                <div class="card-body">
                    <form action="" id="salonInfoForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salon Name</label>
                                    <input type="text" class="form-control" name="salon_name" onkeydown="return /[a-z]/i.test(event.key)" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>STD</label>
                                            <input type="text" class="form-control" name="std">
                                        </div>
                                    </div>
                                    <div class="col-md-9 pl-0">
                                        <div class="form-group">
                                            <label>Landline No</label>
                                            <input type="text" class="form-control" name="landline_no" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salon Category</label>
                                    <select name="category" class="form-control">
                                        <option value="male">Male Only</option>
                                        <option value="female">Female Only</option>
                                        <option value="unisex">Unisex</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salon Website</label>
                                    <input type="text" class="form-control" name="website">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Opening Status</label>
                                    <select name="is_salon_open" class="form-control">
                                        <option value="1">This place is already open</option>
                                        <option value="0">This place is opening soon</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea type="text" class="form-control" name="address"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="city">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" class="form-control" name="state">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pin Code</label>
                                    <input type="text" class="form-control" name="pin_code">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TAN Number</label><br>
                                    <input type="text" class="form-control" name="tan_number">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TIN Number</label><br>
                                    <input type="text" class="form-control" name="tin_number">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>PAN Number</label><br>
                                    <input type="text" class="form-control" name="pancard_number">
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include('footer.php') ?>

<script>
    $(function() {

        const token = localStorage.getItem("salonToken");
        if (token) {
            const url = `${base_url}/salon/get-info.php`;
            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'JSON',
                data: {
                    token: token,
                    q: 'info,pan_info',
                },
                success: function(result) {
                    const salon_info = result.result.info;
                    $('#contactPersonForm [name=contact_person_name]').val(salon_info.contact_person_name);
                    $('#contactPersonForm [name=contact_person_mobile]').val(salon_info.mobile_no);
                    $('#contactPersonForm [name=contact_person_email]').val(salon_info.email_id);
                    $("#contactPersonForm [name=contact_person_gender]").val(salon_info.contact_person_gender);
                    $("#contactPersonForm [name=i_am_owner]").val(salon_info.i_am_owner)

                    $('#salonInfoForm [name=salon_name]').val(salon_info.salon_name);
                    $('#salonInfoForm [name=website]').val(salon_info.website);
                    $("#salonInfoForm [name=category]").val(salon_info.category)
                    $("#salonInfoForm [name=is_salon_open]").val(salon_info.is_salon_open)
                    $('#salonInfoForm [name=address]').val(salon_info.address);
                    $('#salonInfoForm [name=city]').val(salon_info.city);
                    $('#salonInfoForm [name=state]').val(salon_info.state);
                    $('#salonInfoForm [name=pin_code]').val(salon_info.pin_code);
                    $('#salonInfoForm [name=std]').val(salon_info.std);
                    $('#salonInfoForm [name=landline_no]').val(salon_info.landline_no);
                    $('#salonInfoForm [name=pancard_number]').val(result.result.pan_info.pancard_number);
                    $('#salonInfoForm [name=tin_number]').val(result.result.pan_info.tin_number);
                    $('#salonInfoForm [name=tan_number]').val(result.result.pan_info.tan_number);
                }
            });


            $('#contactPersonForm').validate({
                rules: {
                    contact_person_name: "required",
                    contact_person_mobile: "required",
                    email_id: "required",
                    contact_person_gender: "required",
                    i_am_owner: "required",
                },
                submitHandler: function(form) {
                    contactPersonSubmit();
                }
            });

            const contactPersonSubmit = function() {
                let post_data = {
                    "token": token,
                    "basic_info": {
                        "contact_person_name": $('#contactPersonForm [name=contact_person_name]').val(),
                        "contact_person_mobile": $('#contactPersonForm [name=contact_person_mobile]').val(),
                        "contact_person_gender": $('#contactPersonForm [name=contact_person_gender]').val(),
                        "email_id": $('#contactPersonForm [name=email_id]').val(),
                        "i_am_owner": $('#contactPersonForm [name=i_am_owner] option:selected').val(),
                    }
                }
                $.ajax({
                    url: `${base_url}/salon/add-info.php`,
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(data, item) {
                        $.toast({
                            heading: 'Success',
                            text: 'Contact Person Info Updated',
                            showHideTransition: 'slide',
                            icon: 'success',
                            bgColor: '#179756',
                        });
                    },
                    error: function(error) {
                        $.toast({
                            heading: 'Error',
                            text: error.responseJSON.message,
                            showHideTransition: 'slide',
                            icon: 'error',
                        });
                    }
                });
            };

            $('#salonInfoForm').validate({
                rules: {
                    salon_name: "required",
                    std: "required",
                    landline_no: "required",
                    category: "required",
                    is_salon_open: "required",
                    address: "required",
                    city: "required",
                    state: "required",
                    pin_code: "required",
                },
                submitHandler: function(form) {
                    salonInfoSubmit();
                }
            });

            const salonInfoSubmit = function() {

                let post_data = {
                    "token": token,
                    "basic_info": {
                        "salon_name": $('#salonInfoForm [name=salon_name]').val(),
                        "std": $('#salonInfoForm [name=std]').val(),
                        "landline_no": $('#salonInfoForm [name=landline_no]').val(),
                        "category": $('#salonInfoForm [name=category]').val(),
                        "website": $('#salonInfoForm [name=website]').val(),
                        "is_salon_open": $('#salonInfoForm [name=is_salon_open] option:selected').val(),
                        "address": $('#salonInfoForm [name=address]').val(),
                        "city": $('#salonInfoForm [name=city]').val(),
                        "state": $('#salonInfoForm [name=state]').val(),
                        "pin_code": $('#salonInfoForm [name=pin_code]').val(),
                    },
                    "pan_info": {
                        "pancard_number": $('#salonInfoForm [name=pancard_number]').val(),
                        "tin_number": $('#salonInfoForm [name=tin_number]').val(),
                        "tan_number": $('#salonInfoForm [name=tan_number]').val(),
                    },
                }
                $.ajax({
                    url: `${base_url}/salon/add-info.php`,
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(data, item) {
                        $.toast({
                            heading: 'Success',
                            text: 'Salon Info Updated',
                            showHideTransition: 'slide',
                            icon: 'success',
                            bgColor: '#179756',
                        });
                    },
                    error: function(error) {
                        $.toast({
                            heading: 'Error',
                            text: error.responseJSON.message,
                            showHideTransition: 'slide',
                            icon: 'error',
                        });
                    }
                });
            };

        } else {
            window.location.replace('index.php');
        }

    });
</script>