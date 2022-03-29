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


<!-- The Modal -->
<div class="modal" id="editServiceModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editServiceForm">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Service Name</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <input type="text" class="form-control" value="" name="edit_service" id="" data-type="" category="" />
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
                $(".loading-wrapper").show();
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
                            $("#salonServices").append(`
                            <div class="card mb-3">
                                <div class="card-header" data="${key}">
                                    ${key.toUpperCase()}
                                </div>
                                <div class="card-body" id="${key+'-card-body-wrapper'}">
                                    <div class="row"></div>
                                </div>
                            </div>`);
                            for (let category in result[key]) {
                                $(`#salonServices #${key}-card-body-wrapper .row`).append(
                                    `<div class="col-lg-3 mb-4">
                                        <h4 data="${category}">${category}</h4>
                                        <div class="checkbox-wrapper ${intoSlug(category)}"></div>
                                        <div class="add-service-btn">+ Add Service</div>
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
                                            <span class="custom-switch-description mg-l-10" data="${val.name}"
                                            >${val.name}</span>
                                        </label>

                                        ${val.is_manual ? `<div class="service-action">
                                                <div class="edit-service"><i class="fa fa-pencil"></i></div>
                                                <div class="remove-service"><i class="fa fa-trash"></i></div>
                                                </div>` 
                                        : ''}
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

            $('body').on('click', '.add-service-btn', function() {
                $(this).hide();
                $(this).next().css("display", "flex");;
            })

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
                let thisEle = $(this);
                let post_data = {
                    "token": token,
                    "service_name": $(this).parents('.add-service-wrapper').find('[name=manual_service_name]').val(),
                    "type": $(this).parents('.col-lg-3').find('h4').attr('data'),
                    "category": $(this).parents('.card').find('.card-header').attr('data')
                }
                $.ajax({
                    url: `${base_url}/salon/services/add-manual-service.php`,
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(data, item) {
                        $.toast({
                            heading: 'Success',
                            text: data.message,
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

            $('body').on('click', '.remove-service', function() {
                var status = confirm("Are you sure to delete it?");
                if (status == true) {
                    var service_id = $(this).parents('.form-group').find('input').val();
                    let removeService = {
                        'token': token,
                        'service_id': service_id,
                    }
                    $.ajax({
                        url: base_url + '/salon/services/delete-manual-service.php',
                        type: 'POST',
                        dataType: 'JSON',
                        data: JSON.stringify(removeService),
                        success: function(response) {
                            debugger;
                            $.toast({
                                heading: 'Success',
                                text: response.message,
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
                }
            });

            $('body').on('click', '.edit-service', function() {
                $('#editServiceModal').modal('show');
                $('#editServiceModal').find('input').val($(this).parents('.form-group').find('.custom-switch-description').attr('data'));
                $('#editServiceModal').find('input').attr('id', $(this).parents('.form-group').find('input').attr('data-id'));
                $('#editServiceModal').find('input').attr('data-type', $(this).parents('.col-lg-3').find('h4').attr('data'));
                $('#editServiceModal').find('input').attr('category', $(this).parents('.card').find('.card-header').attr('data'));
            });

            $('#editServiceForm').validate({
                rules: {
                    edit_service: 'required',
                },
                submitHandler: function(form) {
                    serviceInfoSubmit();
                }
            });

            const serviceInfoSubmit = function() {
                let post_data = {
                    "token": token,
                    "service_id": $('#editServiceModal').find('input').attr('id'),
                    "service_name": $('#editServiceModal').find('input').val(),
                    "type": $('#editServiceModal').find('input').attr('data-type'),
                    "category": $('#editServiceModal').find('input').attr('category')
                }
                console.log(post_data);
                $.ajax({
                    url: `${base_url}/salon/services/update-manual-service.php`,
                    type: 'POST',
                    dataType: 'JSON',
                    data: JSON.stringify(post_data),
                    success: function(data, item) {
                        $.toast({
                            heading: 'Success',
                            text: data.message,
                            showHideTransition: 'slide',
                            icon: 'success',
                            bgColor: '#179756',
                        });
                        $('#editServiceModal').modal('hide');
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
            }
            getSalonSelectedServices();
        } else {
            window.location.replace('index.php');
        }
    });
</script>