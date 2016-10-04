import $ from 'jquery';
import slick from 'slick-carousel';


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
    autoplaySpeed: 30000
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