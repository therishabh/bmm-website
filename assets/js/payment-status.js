/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




var order_status = new function() {
  
  this.checkOrderStatus = function() {
      var order = $("#order").val();
      $.ajax({
            url: `${base_url}user/cart/get-order-status.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken"),
                order_id:order
            },
            success: function (result) {
                console.log(result.status);
                if(result.status=='success'){
                    $("#success").removeClass('d-none');
                    $("#success_amt").html(result.total_paid_amount);
                } else {
                    $("#failure").removeClass('d-none');
                }
            }
        });
  };
    
};
order_status.checkOrderStatus();