var user_profile = new function () {
    
    this.userToken = localStorage.getItem("userToken");

    this.getProfileData = function() {
        $.ajax({
            url: `${base_url}user/profile/info.php`,
            type: 'GET',
            dataType: 'JSON',
            data: {
                token: localStorage.getItem("userToken")
            },
            success: function (result) {
//                console.log(result);
                $("#username").val(result.name);
                $("#email_id").val(result.email_id);
                $("#landline_no").val(result.mobile_no);
            }
        });
    };
    
    this.updateProfileData = function() {
        var name = $("#username").val();
        $.ajax({
            url: `${base_url}user/profile/update-info.php`,
            type: 'POST',
            dataType: 'JSON',
            data: JSON.stringify({
                token: localStorage.getItem("userToken"),
                name : name
            }),
            success: function (result) {
                console.log(result);
                
            }
        });
    };
    
    this.userSessionCheck  = function() {
            if(user_profile.userToken){
                return true;
            } else {
                location.href='/';
            }
    }
};

user_profile.userSessionCheck();
