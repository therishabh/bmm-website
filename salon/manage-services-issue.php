<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<section id="main-body" class="services-page">
    <div class="top-heading">
        <h1>Services</h1>
        <div class="button-wrapper">
            <button class="btn btn-primary submit-btn display-none">Submit</button>
        </div>
    </div>
    <div id="salonServices" class="display-none">

    </div>
    <div class="button-wrapper">
        <button class="btn btn-primary submit-btn display-none">Submit</button>
    </div>
    <div class="loading-wrapper">
        <img src="./includes/img/loader.gif" alt="loading">
    </div>
</section>
<?php include('footer.php') ?>

<script>
    $(function() {
        const token = localStorage.getItem("salonToken");
        if (token) {
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
                        for (let key in result) {
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
                                    `
                                    <div class="col-lg-3 mb-4">
                                        <h4>${category}</h4>
                                        <div class="checkbox-wrapper ${intoSlug(category)}"></div>
                                        <div class="add-service-wrapper">
                                        <input type="text" class="form-control" placeholder="Add new service" name="manual_service_name" />
                                        <button class="btn btn-primary addServiceBtn">Add</button>
                                        </div>
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
                                            ${(selectedServices.indexOf(parseInt(val.id)) > -1) ? 'checked="true"' : ''}
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

            $(".services-page").on('click', '.submit-btn', function() {
                const url = `${base_url}/salon/add-info.php`;
                const postData = JSON.stringify({
                    token: token,
                    services: selectedServices
                });
                $.ajax({
                    url: url,
                    type: 'POST',
                    dataType: 'JSON',
                    data: postData,
                    success: function(result) {
                        $.toast({
                            heading: 'Success',
                            text: result.message,
                            showHideTransition: 'slide',
                            icon: 'success',
                            bgColor: '#179756',
                        });
                    }
                });
            });

            $('body').on('click', '.addServiceBtn', function() {
                let post_data = {
                    "token": token,
                    "service_name": $(this).parents('.add-service-wrapper').find('[name=manual_service_name]').val(),
                    "type": $(this).parents('.col-lg-3').find('h4').text(),
                    "category": $(this).parents('.card').find('.card-header').text().toLowerCase()
                }
                $.ajax({
                    url: `${base_url}/salon/add-manual-service.php`,
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
                        $('#salonServices').html('');
                        getSalonSelectedServices();
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
            });

            getSalonSelectedServices();
        } else {
            window.location.replace('index.php');
        }
    });
</script>