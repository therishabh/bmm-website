$(document).ready(function() {
    // $('.how-it-work-move').each(function() {
    //     setInterval(function() {
    //         //            $('.how-it-work-move').removeClass('active');
    //         $(this).addClass('active');
    //     }, 3000);
    // });

    $('nav li').mouseover(function() {
        $(this).find('.submenu').show();
    });
    $('nav li').mouseout(function() {
        $(this).find('.submenu').hide();
    });


    $('body').on('click', '.custom-dropdown-btn', function(e) {
        e.stopPropagation();
        $('.custom-dropdown').find('.custom-dropdown-item').hide();
        $(this).parents('.custom-dropdown').find('.custom-dropdown-item').toggle();
    });

    $('body').click(function() {
        $('.custom-dropdown').find('.custom-dropdown-item').hide();
    });
    // $('.custom-dropdown-btn').click(function() {
    //     $(this).parents('.custom-dropdown').find('.custom-dropdown-item').hide();
    // });


    $('.category-item').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });

    $('.salon-offers').owlCarousel({
        autoplay: true,
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    $('.our-partners-slider').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 6
            }
        }
    });
    $('.menu-bar a').click(function() {
        $('.responsive-nav').addClass('active')
        $('.responsive-rgba').addClass('active')
        $('body').addClass('overflow-hidden')
    });
    $('.responsive-rgba').click(function() {
        $('.responsive-nav').removeClass('active')
        $('.responsive-rgba').removeClass('active')
        $('body').removeClass('overflow-hidden')
    });
    $('.responsive-search-bar').click(function() {
        $('.search-div').toggleClass('active');
    });
    $('.responsive-nav a').click(function() {
        $(this).children('span').children('svg').toggleClass('fa-minus')
        $(this).children('span').children('svg').toggleClass('fa-plus')
        $(this).parent('li').children('.responsive-dropdown').slideToggle();
    });
    // $('footer h3').click(function() {
    //     $(this).next('ul').slideToggle();
    // });
    $('.categories-heading').click(function() {
        $('.categories-fotter').slideToggle();
    });
    $('.footer-popular-heading').click(function() {
        $('.copyright-stripe-ul').slideToggle();
    });

    $('.genderList').change(function() {
        var selectedGender = $(this).val();
        $('.select-service-parent .form-control').hide();
        $('#' + selectedGender).show();
    })


});



$(document).ready(function() {
    $('#search-city').focus(function() {
        $('.location-div').addClass('active');
        $('span.icon svg').addClass('fa-caret-up')
    });
    $('#search-city').blur(function() {
        $('.location-div').removeClass('active');
        $('span.icon svg').addClass('fa-caret-down')
    });
    $('.location-div').click(function() {
        var location_value = $(this).val();
        $('#search-city').val(location_value)
    });
    var windowSize = $(window).width();

    if (windowSize < 767) {
        $('footer h3').click(function() {
            $(this).next('ul').slideToggle();
        });
        $('.categories-heading').click(function() {
            $('.categories-fotter').slideToggle();
        });
        $('.footer-popular-heading').click(function() {
            $('.copyright-stripe-ul').slideToggle();
        });
    } else if (windowSize < 720) {

    } else if (windowSize < 960) {

    } else {


        $('.blog-sub-categories-toggle-btn').click(function() {
            $(this).parents('li').find('.blog-sub-categories-list').toggle();
        });
    }

    $('body').on('click', '.location-custom-modal-btn', function() {
        $('.location-custom-modal').show();
        $('.city-list').hide();
        $('#searchInput').val('');
    })
    $('body').on('click', '.location-modal-close', function() {
        $(this).parents('.location-custom-modal').hide();
    });

    // $('#phoneVerify').keypress(function() {
    //     if ($(this).length = 10) {
    //         console.log('10');
    //     }
    // });


    $('.filter-btn').click(function() {
        $(this).toggleClass('active');
        $('.filter-container').toggleClass('active');
    });

});

function phoneVerifyFunction() {
    var phoneVerify = document.getElementById('phoneVerify')
    if (phoneVerify.value.length != 10) {
        $('.login-btn').removeClass('active').prop('disabled', true);
    } else {
        $('.login-btn').addClass('active').prop('disabled', false);
        $('#sendOtpBtn').click(function() {
            $('.login-process-box').hide();
            $('.enter-otp').show();
        });
        $('#enterOtpBtn').click(function() {
            $('.login-process-box').hide();
            $('.create-mpin').show();
        })
    }
}




$(function() {
    if (window.location.href.indexOf('commonMsg') > -1) {
        $('#commonMsg').modal('show');
    } else {
        $('#commonMsg').modal('hide');
    }

    $("#searchInput").on("keyup", function() {
        $(".city-list").show();
        var value = $(this).val().toLowerCase();
        $(".city-list li").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });


    $('body').on('click', '.city-list li, .location-area-list li', function() {
        $(this).parents('.location-custom-modal').hide();
        let thisVal = $(this).text();
        $('.location-custom-modal-btn').text(thisVal);
    });
});