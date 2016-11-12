import $ from 'jquery';
import slick from 'slick-carousel';

//export const PI = 3.14;

export function skin(selector) {

    $('.loft-types__list').each(function() {
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
    
}