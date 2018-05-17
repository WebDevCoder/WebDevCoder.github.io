$(document).ready(function () {
    // Слайдер главной страницы
    $('.js-index-slider').slick({
        prevArrow: '.index-slider__controls-prev',
        nextArrow: '.index-slider__controls-next',
        dots: true,
        vertical: true,
        customPaging: function () {
            return '<a class="index-slider__dots"></a>';
        },
    });

    // слайдер блока рекомендованный товары
    $('.js-recomended-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 4,
        appendDots: '.recomended-slider__nav',
        prevArrow: '.recomended-slider__controls-prev',
        nextArrow: '.recomended-slider__controls-next',
        dots: true,
        customPaging: function () {
            return '<a class="recomended-slider__dot"></a>';
        },
    });

    // Позиционирование управления слайдером
    function indexSliderElemPos(elem, pos) {
        var windowWidth = $(window).width(),
            containerWidth = $('.container').width(),
            leftPos = (windowWidth-containerWidth)/2;
        $('.index-slider ' + elem).css(pos,leftPos);
    }

    // Позиционирование точек слайдера
    indexSliderElemPos('.slick-dots','left');
    // Позиционирование стрелок слайдера
    indexSliderElemPos('.index-slider__controls','right');

    //Функция позиционирование точек и стрелок слайдера при изменении ширины экрана
    $(window).resize(function () {
        indexSliderElemPos('.slick-dots','left');
        indexSliderElemPos('.index-slider__controls','right');
    })
});
$('.video-start').click(function () {
    var videoID = $(this).parent().parent().data('video-id'),
        videoPlayer = $(this).parent().parent().attr('id');
    player = new YT.Player(videoPlayer, {
        videoId: videoID
    });
});