$(document).ready(function(){
    $('#my-menu').mmenu({
        extensions: ['theme-dark'],
        navbar: {
            title: 'МЕНЮ'
        },
        offCanvas:{
            position: 'left'
        }

    });

    var api = $('#my-menu').data('mmenu');
    api.bind('open:finish', function () {
        $('.hamburger').addClass('is-active');
    }).bind('close:finish', function () {
        $('.hamburger').removeClass('is-active');
    });

    $('.carousel-team').owlCarousel({
        loop: true,
        responsiveClass: true,
        smartSpeed: 1500,
        responsive: {
            0: {
                items: 1
            },
            800: {
                items: 2
            },
            1200: {
                items: 4
            }
        }
    });
});

$(".header-nav__item-yak").on("click","a", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
        top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 1500);
});
