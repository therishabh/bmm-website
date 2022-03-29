<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<section id="main-body" class="services-page">
    <div class="top-heading">
        <h1>Amenities</h1>
    </div>
    <div id="salonAmenities" class="display-none">
        <div class="card mb-3">
            <div class="card-header">
                Manage Amenities
            </div>
            <div class="card-body">
                <div class="row">
                </div>
            </div>
        </div>
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
            var selectedAmenities = [];

            var intoSlug = function(str) {
                return str.toLowerCase().split(' ').join('-').replace('&', '');
            }

            var getSalonSelectedAmenities = function() {
                const url = `${base_url}/salon/get-info.php`;
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'JSON',
                    data: {
                        token: token,
                        q: "amenities"
                    },
                    success: function(result) {
                        const amenities = result.result.amenities;
                        if (amenities && amenities.length > 0) {
                            amenities.forEach(val => {
                                selectedAmenities.push(parseInt(val.id));
                            })
                        }
                        getAllAmenities();
                    }
                });
            }

            var getAllAmenities = function() {
                const url = `${base_url}/common/get-amenities.php`;
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'JSON',
                    data: {
                        token: token
                    },
                    success: function(result) {
                        result.forEach(val => {
                            $("#salonAmenities .card-body .row").append(`
                            <div class="col-lg-3">
                            <div class="form-group mb-2">
                                <label class="custom-switch ps-0">
                                    <input
                                    type="checkbox"
                                    name="custom-switch-checkbox"
                                    class="custom-switch-input"
                                    data-id="${val.id}"
                                    value="${val.id}"
                                    ${(selectedAmenities.indexOf(parseInt(val.id)) > -1) ? 'checked="true"' : ''}
                                    />
                                    <span class="custom-switch-indicator me-3"></span>
                                    <span class="custom-switch-description mg-l-10"
                                    >${val.name}</span>
                                </label>
                            </div></div>`);
                        });
                        $(".loading-wrapper").hide();
                        $("#salonAmenities").fadeIn(1000);
                        $(".services-page .button-wrapper button").fadeIn(1000);

                    }
                });
            }

            $("#salonAmenities").on('change', 'input[name="custom-switch-checkbox"]', function() {
                const selectAmenitie = parseInt($(this).val());
                if (selectedAmenities.indexOf(selectAmenitie) > -1) {
                    const indexNo = selectedAmenities.indexOf(selectAmenitie);
                    selectedAmenities.splice(indexNo, 1);
                } else {
                    selectedAmenities.push(selectAmenitie)
                }
            });

            $(".services-page").on('click', '.submit-btn', function() {
                const url = `${base_url}/salon/add-info.php`;
                const postData = JSON.stringify({
                    token: token,
                    amenities: selectedAmenities
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


            getSalonSelectedAmenities();
        } else {
            window.location.replace('index.php');
        }
    });
</script>