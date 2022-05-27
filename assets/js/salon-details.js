/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

const __url = $("#base_url").val();
const token = localStorage.getItem("userToken");
var salon_details = new function () {

    this.init = function () {

        var salonId = $("#salon-id").val();
        $.ajax({
            url: `${base_url}user/salon/detail.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken"),
                salon_id: salonId,
                q: "services"
            },
            success: function (res) {
                let services = res.result.services;
                let type = [];
                let type_services = {};
                services.forEach(function (el) {
                    if (type.indexOf(el.type) == -1)
                    {
                        type_services[el.type] = [];
                        type.push(el.type);
                    }
                    type_services[el.type].push(el);
                });

                var j = 0;
                for (var item in type_services) {
                    var html = '';

                    html += `<div class="card">`;
                    html += `<div class="card-header">`;
                    html += `<a class="card-link" data-toggle="collapse" href="#collapse${j}">`;
                    html += `${item}`;
                    html += `</a>`;
                    html += `</div>`;
                    html += `<div id="collapse${j}" class="collapse show" data-parent="#accordion">`;
                    html += `<div class="card-body">`;
                    html += `<div class="service-wrapper">`;
                    html += `<div class="service-wrapper-body">`;


                    for (var i = 0; i < type_services[item].length; i++) {
                        html += `<div class="service-wrapper-list">`;
                        html += `<div>`;
                        html += `<h5>${type_services[item][i].name} [${type_services[item][i].category}] </h5>`;
                        html += `<div>`;
                        html += `<span class="discounted_price">Rs. ${type_services[item][i].discounted_price}</span>`;
                        html += `</div>`;
                        html += `</div>`;
                        html += `<div>`;
                        html += `<button class="btn btn-pink bookServiceBtn" onclick="salon_details.bookService(${type_services[item][i].id});">Book</button>`;
                        html += `</div>`;
                        html += `</div>`;
                    }


                    html + `</div>`;
                    html + `</div>`;
                    html + `</div>`;
                    html + `</div>`;
                    html + `</div>`;

                    $("#accordion").append(html);
                    j++;
                }
            }
        });
    };

    this.bookService = function (serviceId) {
        if (!token) {
            $('#loginModal').modal('show');
            // addToCart();
        } else {
            salon_details.addToCart(serviceId);
            common.cartCount();
        }
    };
    
    this.addToCart = function (serviceId) {
        var post_data = {
            token: token,
            service_id: serviceId
        }
        $.ajax({
            url: base_url + `/user/cart/add-to-cart.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify(post_data),
            success: function (result) {
                toastr.success('Service added in cart.');
                common.cartCount();
            }, error: function (result) {
                toastr.error(result.responseJSON.message);
                common.cartCount();
            }
        });
    }

};




salon_details.init();