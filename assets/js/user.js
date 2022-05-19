var user_profile = new function () {

    this.getProfileData = function () {
        $.ajax({
            url: `${base_url}user/cart/get-cart-count.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (result) {
                $('.cart-count-circle').text(result.count);
            }
        });
    };

};


user_profile.getProfileData();