<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<section id="main-body" class="pricing-page">
    <div class="top-heading">
        <h1>Pricing</h1>
        <div class="button-wrapper">
            <button class="btn btn-primary submit-btn display-none">Submit</button>
        </div>
    </div>
    <div id="salonPricing" class="display-none">
        <div class="card mb-3">
            <div class="card-header">
                Manage Pricing
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-bordered" id="servicePricingTable">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" width="4%">#</th>
                                    <th scope="col" width="15%">Category</th>
                                    <th scope="col" width="15%">Type</th>
                                    <th scope="col" width="30%">Service</th>
                                    <th scope="col" width="13%">MRP Price</th>
                                    <th scope="col" width="13%">Discount Price</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="button-wrapper text-right">
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

            var intoSlug = function(str) {
                return str.toLowerCase().split(' ').join('-').replace('&', '');
            }

            var getServicePricing = function() {
                const url = `${base_url}/salon/get-service-price.php`;
                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'JSON',
                    data: {
                        token: token,
                    },
                    success: function(result) {
                        var servicesList = {};
                        if (result.result && result.result.length) {
                            result.result.forEach(val => {
                                if (!servicesList[val.category]) {
                                    servicesList[val.category] = {}
                                }
                                if (!servicesList[val.category][intoSlug(val.service_type)]) {
                                    servicesList[val.category][intoSlug(val.service_type)] = [];
                                }
                                servicesList[val.category][intoSlug(val.service_type)].push({
                                    id: val.id,
                                    name: val.name,
                                    mrp_price: val.mrp_price,
                                    discounted_price: val.discounted_price,
                                    service_type: val.service_type
                                });
                            });

                            var counter = 1;
                            var categoryArr = [];
                            var typeArr = [];
                            for (var category in servicesList) {
                                for (var typeKey in servicesList[category]) {
                                    servicesList[category][typeKey].forEach(val => {
                                        var categoryTd = '';
                                        var typeTd = '';
                                        if (categoryArr.indexOf(category) == -1) {
                                            categoryArr.push(category);
                                            var categoryCount = 0;
                                            for (var typeK in servicesList[category]) {
                                                servicesList[category][typeK].forEach(val => categoryCount += 1);
                                            }
                                            categoryTd = `<td rowspan="${categoryCount}">${category.toUpperCase()}</td>`;
                                        }
                                        if (typeArr.indexOf(category + '-' + typeKey) == -1) {
                                            typeArr.push(category + '-' + typeKey);
                                            var typeCount = servicesList[category][typeKey].length;
                                            typeTd = `<td rowspan="${typeCount}">${val.service_type}</td>`;
                                        }
                                        $("#servicePricingTable tbody").append(
                                            `<tr data-id="${val.id}">
                                                <th scope="row" class="text-center">${counter++}</th>
                                                ${categoryTd}
                                                ${typeTd}
                                                <td>${val.name}</td>
                                                <td class="mrp_price"><input type="number" min="0" value="${val.mrp_price}" class="form-control" pattern="[0-9]" onkeypress="return !(event.charCode == 46)" /></td>
                                                <td class="discounted_price"><input type="number" min="0" value="${val.discounted_price}" class="form-control" pattern="[0-9]" onkeypress="return !(event.charCode == 46)" /></td>
                                            </tr>`
                                        );
                                    });
                                }
                            }
                        }
                        $('.loading-wrapper').hide();
                        $('#salonPricing').fadeIn(1000);
                        $('.submit-btn').fadeIn(1000);
                    }
                });
            }

            $(".pricing-page").on('click', '.submit-btn', function() {
                var servicePricingArr = [];
                $("#servicePricingTable tbody tr").each(function(v) {
                    var serviceObj = {
                        id: parseInt($(this).attr('data-id')),
                        mrp_price: $(this).children('td.mrp_price').children('input').val(),
                        discounted_price: $(this).children('td.discounted_price').children('input').val()
                    }
                    servicePricingArr.push(serviceObj);
                });
                const url = `${base_url}/salon/set-services-price.php`;
                const postData = JSON.stringify({
                    token: token,
                    pricing: servicePricingArr
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

            getServicePricing();

        } else {
            window.location.replace('index.php');
        }
    });
</script>