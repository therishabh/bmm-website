<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<section id="main-body">
    <div class="top-heading">
        <h1>Edit Package</h1>
    </div>
    <div class="card">
        <div class="card-body">
            <form id="editPackageForm">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Package Name</label>
                            <input type="text" class="form-control" name="package_name" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category">
                                <option value="">Select</option>
                                <option value="ladies">Ladies</option>
                                <option value="gents">Gents</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" cols="5" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>MRP Price</label>
                            <input type="number" class="form-control" name="mrp_price" pattern="[0-9]" onkeypress="return !(event.charCode == 46)" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Discounted Price</label>
                            <input type="number" class="form-control" name="discounted_price" pattern="[0-9]" onkeypress="return !(event.charCode == 46)" />
                        </div>
                    </div>
                    <div class="col-md-12 services-page">
                        <div id="salonServices">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>



<?php include('footer.php') ?>

<script>
    $(function() {
        const token = localStorage.getItem("salonToken");
        if (token) {
            const package_id = document.location.search.substr(4);

            const allPackage = function() {
                $.ajax({
                    url: `${base_url}/salon/packages/get-package-info.php`,
                    type: 'GET',
                    dataType: 'JSON',
                    data: {
                        token: token,
                        package_id: package_id
                    },
                    success: function(result) {
                        console.log(result.result);
                        result = result.result;
                        $('[name=package_name]').val(result.package_name);
                        $('[name=description]').val(result.description);
                        $('[name=category]').val(result.category);
                        $('[name=mrp_price]').val(result.mrp_price);
                        $('[name=discounted_price]').val(result.discounted_price);
                    }
                });
            }
            allPackage();

            $('#editPackageForm').validate({
                rules: {
                    package_name: 'required',
                    description: 'required',
                    category: 'required',
                    mrp_price: 'required',
                    discounted_price: 'required',
                },
                submitHandler: function(form) {
                    packageInfoSubmit();
                }
            });

            const packageInfoSubmit = function() {
                let post_data = {
                    "token": token,
                    "package_id": package_id,
                    "package_name": $('[name=package_name]').val(),
                    "description": $('[name=description]').val(),
                    "category": $('[name=category]').val(),
                    "mrp_price": $('[name=mrp_price]').val(),
                    "discounted_price": $('[name=discounted_price]').val(),
                    "services": selectedServices
                }
                PackageAjex(post_data);
            }

            const PackageAjex = function(post_data) {
                $.ajax({
                    url: base_url + '/salon/packages/update-package.php',
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(result) {
                        $.toast({
                            heading: 'Success',
                            text: result.message,
                            showHideTransition: 'slide',
                            icon: 'success',
                            bgColor: '#179756',
                        });
                        window.location.replace('manage-package.php');
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
            }

            // ** service secton begin here ** //
            var selectedServices = [];
            var allServices = []

            var intoSlug = function(str) {
                return str.toLowerCase().split(' ').join('-').replace('&', '');
            }

            var getSalonSelectedServices = function() {
                const url = `${base_url}/salon/get-info.php`;
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'JSON',
                    data: {
                        token: token,
                        q: "services"
                    },
                    success: function(result) {
                        const services = result.result.services;
                        if (services && services.length > 0) {
                            services.forEach(val => {
                                selectedServices.push(parseInt(val.id));
                            })
                        }
                        getAllServices();
                    }
                });
            }

            var getAllServices = function() {
                const url = `${base_url}/common/get-services.php`;
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'JSON',
                    data: {
                        token: token
                    },
                    success: function(result) {
                        console.log(result);
                        for (let key in result) {
                            $('[name=category]').on('change', function() {
                                if ($(this).val() == 'gents') {
                                    if (key == 'gents') {
                                        $('#salonServices').html('');
                                        $("#salonServices").append(`
                                  <div class="card mb-3">
                                <div class="card-header">
                                    ${key.toUpperCase()}
                                </div>
                                <div class="card-body" id="${key+'-card-body-wrapper'}">
                                    <div class="row"></div>
                                </div>
                                  </div>`);
                                        for (let category in result[key]) {
                                            $(`#salonServices #${key}-card-body-wrapper .row`).append(
                                                `<div class="col-lg-3 mb-4">
                                        <h4>${category}</h4>
                                        <div class="checkbox-wrapper ${intoSlug(category)}"></div>
                                    </div>
                                    `
                                            );
                                            result[key][category].forEach(val => {
                                                var x = `#salonServices #${key}-card-body-wrapper .${intoSlug(category)}`;
                                                $(x).append(`
                                    <div class="form-group mb-2">
                                        <label class="custom-switch ps-0">
                                            <input
                                            type="checkbox"
                                            name="custom-switch-checkbox"
                                            class="custom-switch-input"
                                            data-id="${val.id}"
                                            value="${val.id}"
                                            />
                                            <span class="custom-switch-indicator me-3"></span>
                                            <span class="custom-switch-description mg-l-10"
                                            >${val.name}</span>
                                        </label>
                                    </div>
                                    `);
                                            })
                                        }
                                    }
                                } else if ($(this).val() == 'ladies') {
                                    if (key == 'ladies') {
                                        $('#salonServices').html('');
                                        $("#salonServices").append(`
                                  <div class="card mb-3">
                                <div class="card-header">
                                    ${key.toUpperCase()}
                                </div>
                                <div class="card-body" id="${key+'-card-body-wrapper'}">
                                    <div class="row"></div>
                                </div>
                                  </div>`);
                                        for (let category in result[key]) {
                                            $(`#salonServices #${key}-card-body-wrapper .row`).append(
                                                `<div class="col-lg-3 mb-4">
                                        <h4>${category}</h4>
                                        <div class="checkbox-wrapper ${intoSlug(category)}"></div>
                                    </div>
                                    `
                                            );
                                            result[key][category].forEach(val => {
                                                var x = `#salonServices #${key}-card-body-wrapper .${intoSlug(category)}`;
                                                $(x).append(`
                                    <div class="form-group mb-2">
                                        <label class="custom-switch ps-0">
                                            <input
                                            type="checkbox"
                                            name="custom-switch-checkbox"
                                            class="custom-switch-input"
                                            data-id="${val.id}"
                                            value="${val.id}"
                                            />
                                            <span class="custom-switch-indicator me-3"></span>
                                            <span class="custom-switch-description mg-l-10"
                                            >${val.name}</span>
                                        </label>
                                    </div>
                                    `);
                                            })
                                        }
                                    }
                                } else {
                                    $('#salonServices').html('');
                                }
                            });

                        }
                        $(".loading-wrapper").hide();
                        $("#salonServices").fadeIn(1000);
                        $(".services-page .button-wrapper button").fadeIn(1000);

                    }
                });
            }



            $("#salonServices").on('change', 'input[name="custom-switch-checkbox"]', function() {
                const selectService = parseInt($(this).val());
                if (selectedServices.indexOf(selectService) > -1) {
                    const indexNo = selectedServices.indexOf(selectService);
                    selectedServices.splice(indexNo, 1);
                } else {
                    selectedServices.push(selectService)
                }
            });

            getSalonSelectedServices();
            // ** service secton ends here ** //

        } else {
            window.location.replace('index.php');
        }
    });
</script>