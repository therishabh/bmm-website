function logout() {
    localStorage.removeItem("salonToken");
    localStorage.removeItem("salonName");
    localStorage.removeItem("bmmSalonCategory");
    $.toast({
        heading: "Logout Successfully",
        showHideTransition: "slide",
        icon: "success",
        bgColor: "#179756",
    });
    setTimeout(function() {
        window.location.replace("../pro/index");
    }, 1000);
}


$(function() {
    $('#left-pannel-mobile').html($('#desktop-left-bar').html());

    $('#nav-toggle-btn').click(function() {
        $('#left-pannel-mobile').toggleClass('active');
        $('.responsive-rgba').toggleClass('active');
    });

    $('.responsive-rgba').click(function() {
        $(this).removeClass('active');
        $('#left-pannel-mobile').removeClass('active');
    })
});