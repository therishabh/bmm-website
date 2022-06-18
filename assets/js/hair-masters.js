/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


var hair_masters = new function() {
  
    this.getData = function() {
        var salonId = $("#salon-id").val();
        $.ajax({
            url: `${base_url}user/salon/detail.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken"),
                salon_id : salonId,
                q : 'info,services,amenities,timings,coupons,packages'
            },
            success: function (result) {
                console.log(result);
            }
        });
    };
    
};

hair_masters.getData();