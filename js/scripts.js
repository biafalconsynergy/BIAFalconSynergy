$(document).ready(function () {
    console.log("Script loaded");
    
    $(window).scroll(function () {
        if ($(window).scrollTop() > 50) {
            $('#part1').removeClass("invisible").addClass("bounceInRight");
            setTimeout(function() {
                $('#part2').removeClass("invisible").addClass("bounceInRight");
            }, 500);
            setTimeout(function() {
                $('#part3').removeClass("invisible").addClass("bounceInRight");
            }, 1000);
        }

        if ($(window).scrollTop() > 900) {
            $('#mod_part1').removeClass("invisible").addClass("bounceInRight");
            setTimeout(function() {
                $('#mod_part2').removeClass("invisible").addClass("bounceInRight");
            }, 500);
            setTimeout(function() {
                $('#mod_part3').removeClass("invisible").addClass("bounceInRight");
            }, 1000);
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    AOS.init();
});


$(document).ready(function () {
    $(window).scroll(function () {
        $('.services_box').each(function () {
            if ($(this).offset().top < $(window).scrollTop() + $(window).height()) {
                $(this).addClass('animate__animated animate__fadeInUp');
            }
        });
    });
});
document.addEventListener('DOMContentLoaded', function() {
    AOS.init();
});
