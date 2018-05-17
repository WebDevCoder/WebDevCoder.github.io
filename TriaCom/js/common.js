$(document).ready(function(){
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