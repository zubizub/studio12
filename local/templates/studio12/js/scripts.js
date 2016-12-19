$(function () {
    (function () {
        $('.about-lofts__slider-list').slick({
            dots: true,
            appendDots: $('.about-lofts__slider-dots'),
            infinite: true,
            arrows: false,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 10000,
            slidesToShow: 1,
            adaptiveHeight: true,
            touchThreshold: 10
        });
    }());
    (function () {
        $('.about__link').one('mouseenter', function () {
            $(this).addClass('inited');
        });
    }());

    (function () {
        $('.metro-place__slider').slick({
            dots: false,
            infinite: true,
            arrows: false,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 10000,
            slidesToShow: 1,
            adaptiveHeight: false,
            touchThreshold: 10
        });
    }());
    (function () {

        var $loftTypesTab = $('.loft-types__tab');
        $('.loft-types__content').slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: false,
            swipe: false,
            touchMove: false,
            fade: true,
            asNavFor: '.loft-types__tabs'
            //autoplay: true,
            //autoplaySpeed: 10000
        });
        $('.loft-types__tabs').slick({
            dots: false,
            arrows: false,
            infinite: true,
            slidesToShow: $loftTypesTab.length,
            //slidesToScroll: 1,
            speed: 0,
            asNavFor: '.loft-types__content',
            focusOnSelect: true,
            vertical: true,
            //variableWidth: true,
            verticalSwiping: true,
            touchThreshold: 10,
            swipe: false,
            touchMove: false,
            responsive: [{
                breakpoint: 1001,
                settings: {
                    speed: 150,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    vertical: false,
                    verticalSwiping: false,
                    variableWidth: false,
                    centerMode: false,
                    centerPadding: '0px',
                    swipe: true,
                    touchMove: true,
                    infinite: true
                }
            }]
        });
        $('.loft-types-slide-go').on('click', function () {
            $('.loft-types__tabs').slick('slickNext');
            return false;
        });
        $('.loft-types__slide').each(function () {
            var $list = $('.loft-types__list', this), $items = $('.loft-types__item', this), $num = $('.loft-types__page-num', this);
            $list.slick({
                dots: false,
                arrows: true,
                //prevArrow: $('.loft-types__list-prev', this),
                //nextArrow: $('.loft-types__list-next', this),
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: false,
                touchThreshold: 10
            }).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                $num.text(nextSlide + 1);
            }).on('init', function (slick) {
                console.log(slick);
            });
            $items.on('click', function () {
                $list.slick('slickNext');
            });
        });
    }());
    (function () {
        $('.about-bg').slick({
            dots: false,
            infinite: true,
            arrows: false,
            swipe: false,
            touchMove: false,
            autoplay: true,
            autoplaySpeed: 5000,
            slidesToShow: 1,
            adaptiveHeight: false
        });
    }());
    (function () {
        $('.count-slide').slick({
            dots: false,
            arrows: false,
            infinite: true,
            slidesToShow: 3,
            speed: 0,
            vertical: true,
            touchThreshold: 10,
            swipe: false,
            touchMove: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    vertical: false
                }
            },
            {
                breakpoint: 501,
                settings: {
                    speed: 150,
                    slidesToShow: 1,
                    dots: true,
                    swipe: true,
                    vertical: false,
                    touchMove: true,
                    infinite: true,
                    //autoplay: true,
                    //autoplaySpeed: 5000
                }
            }]
        });
    }());
    (function () {
        $('.concept-wrap').each(function () {
            $('.concept-wrap__content', this).slick({
                dots: false,
                arrows: false,
                infinite: true,
                slidesToShow: 2,
                speed: 0,
                touchThreshold: 10,
                swipe: false,
                touchMove: false,
                responsive: [{
                    breakpoint: 591,
                    settings: {
                        speed: 150,
                        slidesToShow: 1,
                        dots: true,
                        swipe: true,
                        vertical: false,
                        touchMove: true,
                        infinite: true,
                        adaptiveHeight: true,
                        //autoplay: true,
                        //autoplaySpeed: 5000
                    }
                }]
            });
        });
    }());
    (function () {
        $('.reason-slide').slick({
            dots: false,
            arrows: false,
            infinite: true,
            slidesToShow: 5,
            speed: 0,
            touchThreshold: 10,
            swipe: false,
            touchMove: false,
            responsive: [{
                breakpoint: 591,
                settings: {
                    speed: 150,
                    slidesToShow: 1,
                    dots: true,
                    swipe: true,
                    vertical: false,
                    touchMove: true,
                    infinite: true,
                    adaptiveHeight: true,
                    //autoplay: true,
                    //autoplaySpeed: 5000
                }
            }]
        });
    }());
    $(".js-phone-mask").mask("+7 (999) 999-99-99");
    $('.form__select').each(function () {
        var $cont = $(this).closest('.form__select-wrap');

        $(this).select2({
            placeholder: 'Не выбран',
            dropdownParent: $cont,
            minimumResultsForSearch: Infinity
        });
    });
    (function () {
        $('.photo-gallery').each(function () {
            $('.photo-gallery__content', this).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: $('.photo-gallery__prev', this),
                nextArrow: $('.photo-gallery__next', this),
                arrows: true,
                slide: '.photo-gallery__item',
                infinite: true
            });
        });
    }());
    (function () {
        $('.sidebar').perfectScrollbar();
        $('.popup-gallery').perfectScrollbar();
    }());
    (function () {
        $('.slogan__title').typeIt({
            cursor: false,
            speed: 150,
            lifeLike: false,
            autoStart: true,
            loop: true
        }).tiType('<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Set</span><span class="slogan__line">Trends</span>').tiPause(1500).tiDelete().tiType('<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Fly</span>').tiPause(1500).tiDelete().tiType('<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Create</span>').tiPause(1500).tiDelete().tiType('<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Earn</span>').tiPause(1500).tiDelete();
        $('.slogan__translation').typeIt({
            cursor: false,
            speed: 150,
            lifeLike: false,
            autoStart: true,
            loop: true
        }).tiType('Меняй правила <br/> и устанавливай тенденции!').tiPause(1300).tiDelete().tiType('Меняй правила <br/> и взлетай!').tiPause(1500).tiDelete().tiType('Меняй правила <br/> и твори').tiPause(3000).tiDelete().tiType('Меняй правила <br/> и зарабатывай').tiPause(1500).tiDelete();
    }());

    $('.btn-showroom').on('click', function () {
        $('.popup--showroom').bPopup({
            closeClass: 'popup__close',
            onOpen: function() {
                setTimeout (function () {
                    $('.popup--showroom [class*=popup-an--js-]').addClass('popup-an--run');
                    setTimeout(function () {
                        $('.popup--showroom .popup-an-dom').addClass('popup-an-dom--run');
                    }, 500);
                }, 10);
            },
            onClose: function() {
                $('.popup--showroom [class*=popup-an--js-]').removeClass('popup-an--run');
                $('.popup--showroom .popup-an-dom').removeClass('popup-an-dom--run');
            }
        });
        return false;
    });

    $('.get__maps').on('click', function () {
        $('.popup--maps').bPopup({
            closeClass: 'popup__close',
            onOpen: function() {
                setTimeout (function () {
                    $('.popup--maps [class*=popup-an--js-]').addClass('popup-an--run');
                    setTimeout(function () {
                        $('.popup--maps .popup-an-dom').addClass('popup-an-dom--run');
                    }, 500);
                }, 100);
            },
            onClose: function() {
                $('.popup--maps [class*=popup-an--js-]').removeClass('popup-an--run');
                $('.popup--maps .popup-an-dom').removeClass('popup-an-dom--run');
            }
        });
        return false;
    });
    (function () {
        var wIh = window.innerHeight / 4,
            isIE = /*@cc_on!@*/false || !!document.documentMode,
            $tagline = $('#tagline'),
            $tagline2 = $('#tagline2'),
            $tagline3 = $('#tagline3'),
            $building = $('#building'),
            $building2 = $('#building2'),
            $building3 = $('#building3');

        $tagline.attr({'d': 'M480.5,0 480.5,' + wIh + ' 743.61111,' + wIh * 2 + ' 743.61111,' + (wIh + 600 + 5245)});
        // $tagline.attr({ 'd': 'M742.5,0 742.5,' + wIh + ' 419.5,500 419.5,' + (wIh + 500 + 145) });
        $tagline2.attr({'d': 'M242.5,-50 380.5,67 380.5,200 310.5,260 310.5,380 200.5,450 200.5,5500'});
        $tagline3.attr({'d': 'M2042.5,1200 1130.5,70 950.5,250 950.5,400 1050.5,500 1050.5,5500'});
        $building.attr({'d': 'M743.61111,0L743.61111,79.86111L633.83333,191.11111L373.83333,193.33332L195.55556,364.44443L312.22223,484.55555L350,444.44444L592.22223,682.22222L971.11112,306.66666L743.61112,82.33334'});
        $building2.attr({'d': 'M200.5,0 200.5,100 -10,300'});
        $building3.attr({'d': 'M1050.5,0 1050,100 1200,250 880.5,580 1500,1200'});

        function pathPrepare($el) {
            var lineLength = $el[0].getTotalLength();
            $el.css('stroke-dasharray', lineLength);
            $el.css('stroke-dashoffset', lineLength);

            if( isIE ) {
                $el.css('stroke-dasharray', 0);
                $el.css('stroke-dashoffset', 0);
            }
        }

        pathPrepare($tagline);
        pathPrepare($tagline2);
        pathPrepare($tagline3);
        pathPrepare($building);
        pathPrepare($building2);
        pathPrepare($building3);

        $('.slogan-page').each(function () {
            $(this).waypoint(function (direction) {
                TweenLite.to($tagline, 8, {
                    strokeDashoffset: 0,
                    ease: Linear.easeNone
                });
                TweenLite.to($tagline2, 5, {
                    strokeDashoffset: 0,
                    ease: Linear.easeNone
                });
                TweenLite.to($tagline3, 3, {
                    strokeDashoffset: 0,
                    ease: Linear.easeNone
                });
            }.bind(this), {
                offset: '150%%'
            });
        });

        $('.lofts').each(function () {
            $(this).waypoint(function (direction) {
                TweenLite.to($building, 2.5, {
                    strokeDashoffset: 0,
                    ease: Linear.easeNone
                });
                TweenLite.to($building2, 3, {
                    strokeDashoffset: 0,
                    ease: Linear.easeNone
                });
                TweenLite.to($building3, 3, {
                    strokeDashoffset: 0,
                    ease: Linear.easeNone
                });
                setTimeout(function () {
                    $('.house1').addClass('house-fade-in');
                }, 800);
                //10000 = 10 секунд
                setTimeout(function () {
                    $('.house2').addClass('house-fade-in');
                }, 1200);
                //10000 = 10 секунд
                setTimeout(function () {
                    $('.house3').addClass('house-fade-in');
                }, 1700);
                //10000 = 10 секунд
                setTimeout(function () {
                    $('.house4').addClass('house-fade-in');
                }, 2000);
            }.bind(this), {
                offset: '160%'
            });
        });
    }());

});