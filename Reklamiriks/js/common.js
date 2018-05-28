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

		$('.carousel-services1-portfolio').owlCarousel({
		loop: true,
		smartSpeed: 700,
		autoplay: false,
    	autoplay:true,
    	autoplayTimeout:5000,
    	autoplayHoverPause:true,
		responsive: {
			0: {
				items: 1
			},
			800: {
				items: 4
			},
			1100: {
				items: 4
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

$("form.form-call-back").submit(function() { //Change
        var th = $(this);
        $.ajax({
            type: "POST",
            url: "mail.php", //Change
            data: th.serialize()
        }).done(function() {
            $(th).find('.success').addClass('active').css('display', 'flex').hide().fadeIn();
            setTimeout(function() {
                $(th).find('.success').removeClass('active').fadeOut();
                th.trigger("reset");
            }, 1500);
        });
        return false;
    });
