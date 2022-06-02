/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var salon_info = new function () {
    this.salon_id = $("#salon-id").val();

    this.about = function () {
        $.ajax({
            url: `${base_url}user/salon/detail.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken"),
                salon_id: salon_info.salon_id,
                q :"info,services,amenities,timings,coupons"
            },
            success: function (result) {
                console.log(result);
                
            }
        });
    };

    this.photos = function () {

    };

    this.videos = function () {

    };

    this.services = function () {

    };

    this.team = function () {

    };

    this.offers = function () {

    };

    this.membership = function () {

    };

};

salon_info.about();