$(function() {

	// Custom JS

	$('.carousel-services').owlCarousel({
		loop: true,
		smartSpeed: 700,
		autoplay: false,
    	autoplay:true,
    	autoplayTimeout:3000,
    	autoplayHoverPause:true,
		responsive: {
			0: {
				items: 1
			},
			800: {
				items: 1
			},
			1100: {
				items: 1
			}
		}
		
	});

		$('.carousel-services1').owlCarousel({
		loop: true,
		smartSpeed: 1,
		autoplay: false,
    	autoplay:true,
    	autoplayTimeout:50000,
    	autoplayHoverPause:true,
		responsive: {
			0: {
				items: 6
			},
			800: {
				items: 6
			},
			1100: {
				items: 6
			}
		}
		
	});

function carouselService(){
	$('.carousel-services-item').each(function() {
		var ths = $0(this),
			thsh = ths.find('.carousel-services-content').outerHeight();
			ths.find('carousel-services-image').css('min-height', thsh);
	});
}carouselService();

});
