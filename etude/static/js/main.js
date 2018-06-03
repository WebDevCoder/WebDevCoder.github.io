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
        slidesToScroll: 1,
        appendDots: '.recomended-slider__nav',
        prevArrow: '.recomended-slider__controls-prev',
        nextArrow: '.recomended-slider__controls-next',
        dots: true,
        customPaging: function () {
            return '<a class="recomended-slider__dot"></a>';
        },
        responsive: [{

            breakpoint: 1280,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
            }

        }, {

            breakpoint: 864,
            settings: {
                slidesToShow: 2,
                dots: true
            }

        }, {

            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                dots: true

            }

        }]
    });

    // Позиционирование управления слайдером
    function indexSliderElemPos(elem, pos) {
        var windowWidth = $(window).width(),
            containerWidth = $('.container').width(),
            leftPos = (windowWidth-containerWidth)/2;
        $('.index-slider ' + elem).css(pos,leftPos);
    };

    // Позиционирование точек слайдера
    indexSliderElemPos('.slick-dots','left');
    // Позиционирование стрелок слайдера
    indexSliderElemPos('.index-slider__controls','right');

    //Функция позиционирование точек и стрелок слайдера при изменении ширины экрана
    $(window).resize(function () {
        indexSliderElemPos('.slick-dots','left');
        indexSliderElemPos('.index-slider__controls','right');
    });

    // слайдер страницы продукта
    $('.js-product-gallery').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        //asNavFor: ".js-product-gallery-nav",
        prevArrow: '.product-gallery__controls-prev',
        nextArrow: '.product-gallery__controls-next',
    });

    $('.product-gallery__item').magnificPopup({
        delegate: 'a',
        type: 'image',
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile mfp-with-zoom',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0,1]
        },
        zoom: {
            enabled: true,

            duration: 300,
            easing: 'ease-in-out',
            opener: function(openerElement) {
                return openerElement.is('a') ? openerElement : openerElement.find('a');
            }
        }
    });

    $('.popup-with-form').magnificPopup({
        preloader: false,
        type: 'inline',

        fixedContentPos: false,
        fixedBgPos: true,

        overflowY: 'auto',

        closeBtnInside: true,

        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in',

        callbacks: {
            beforeOpen: function() {
                if($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '';
                }
            }
        }
    });

});




// Скрипт запуска видео с ютьюба
$('.video-start').click(function () {
    var videoID = $(this).parent().parent().data('video-id'),
        videoPlayer = $(this).parent().parent().attr('id');
    player = new YT.Player(videoPlayer, {
        videoId: videoID
    });
});

//табы на странице товара

$('.tabs-list__item').click(function () {
    var tabName = $(this).attr('show-tab');
    $(this).addClass('active').siblings().removeClass('active');
    $('.tabs-content .' + tabName).addClass('active').siblings().removeClass('active');
});

///рейнтинг на странице товара

function rating(elem){ //функция для небольшой оптимизации
    var ratingLine = $('.review-stars--set .review-star');
    ratingLine.removeClass('active'); //удаляем со всех элементов класс "active"
    elem.addClass('active'); //по клику добавляем элементу класс "active"

    for (var i =0, rLen = ratingLine.length; i < rLen; i++) { //цикл для прохождения по всем элементам
        if($(ratingLine[i]).hasClass('active')){
            break;
        }
        $(ratingLine[i]).addClass('active');
    }
}

$('.review-stars--set .review-star').click(function () {
    var cur = $(this), //в переменную записываем текущий элемент на который мы кликнули
        ratingLine = $('.review-stars--set .review-star'); //в данную переменную записываем все элементы которые мы можем менять только в определённой области
    ratingLine.removeClass('click-active'); //удаляемя со всех элементов клас "click-active"
    rating(cur); //запуск функции
    cur.addClass('click-active');
});

//при наведении и удалении мыши с элемента рейтинга

$('.review-stars--set .review-star')
    .mouseover(function () {
        var cur = $(this);
        rating(cur);
        cur.addClass('active');
    })
    .mouseout(function () {
        var ratingLine = $('.review-stars--set .review-star');
        ratingLine.addClass('active');

        for (var i = 5; i > 0; i--) {
            if($(ratingLine[i]).hasClass('click-active')){
                break;
            }
            $(ratingLine[i]).removeClass('active');
        }
    });

$(document).on('click', '.catalog__link', function () {
    $(this).parent().toggleClass('active');
    var catalogTextContent = $(this).siblings();
    if(catalogTextContent.is(':visible')){
        catalogTextContent.slideUp();
    }
    else {
        catalogTextContent.slideDown();
    }
});


