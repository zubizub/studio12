import $ from 'jquery';
import slick from 'slick-carousel';

    (function () {
        var speed = 80, timeout = 100, typeItOptions = {
                cursor: false,
                speed: speed,
                autoStart: true
            }, $feature = $('.feature'), $heading = $('.heading'), $headingLine = $('.heading__line'), $words = $('.heading__word'), $firstWord = $words.filter(':first'), $lastWord = $words.filter(':last');
        $heading.height($heading.outerHeight());
        $firstWord.removeClass('invisible').typeIt($.extend({}, typeItOptions, {
            callback: function () {
                $lastWord.removeClass('invisible').typeIt($.extend({}, typeItOptions, {
                    callback: function () {
                        setTimeout(function () {
                            $(window).trigger('resize.heading');
                            $feature.removeClass('invisible');
                            $heading.height('auto');
                        }, timeout);
                    }
                }));
            }
        }));
        $(window).on('resize.heading', function () {
            var rel = Math.round($heading.outerHeight() / $headingLine.outerHeight());
            if (rel === 1) {
                $feature.addClass('feature--down');
            } else {
                $feature.removeClass('feature--down');
            }
        });
    }());
var $loftTypesTab = $('.loft-types__tab');


var $loftCategory = $('.loft-types__content').slick({
    dots: false,
    arrows: false,
    infinite: false,
    speed: 150,
    slidesToShow: 1,
    adaptiveHeight: false,
    swipe: false,
    touchMove: false,
    fade: true,
    asNavFor: '.loft-types__tabs',
    autoplay: true,
    autoplaySpeed: 10000
});

var $loftTabs = $('.loft-types__tabs').slick({
    dots: false,
    arrows: false,
    infinite: false,
    slidesToShow: $loftTypesTab.length,
    //slidesToScroll: 1,
    speed: 0,
    asNavFor: '.loft-types__content',
    focusOnSelect: true,
    vertical: true,
    //variableWidth: true,
    verticalSwiping: true,
    swipe: false,
    touchMove: false,
    responsive: [
        {
            breakpoint: 1100,
            settings: {
                speed: 150,
                slidesToShow: 1,
                vertical: false,
                verticalSwiping: false,
                variableWidth: true,
                //centerMode: true,
                centerPadding: '0px',
                swipe: true,
                touchMove: true
            }
        }
    ]
});

var $loftGallery = $('.loft-types__list').each(function() {
    var $items = $('.loft-types__item', this);

    $(this).slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: false,
        touchThreshold: 10
    });

    $items.on('click', function() {
        $(this).slick('slickNext');
    }.bind(this));
});





export {$loftCategory, $loftTabs, $loftGallery}