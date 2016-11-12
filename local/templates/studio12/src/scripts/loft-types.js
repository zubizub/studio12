 var $loftTypesTab = $('.loft-types__tab');


 $('.loft-types__content').slick({
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

 $('.loft-types__tabs').slick({
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
     touchThreshold: 10,
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

 $('.loft-types__slide').each(function() {
     var $list = $('.loft-types__list', this),
         $items = $('.loft-types__item', this),
         $num = $('.loft-types__page-num', this);

     $list.slick({
         dots: false,
         arrows: false,
         infinite: true,
         speed: 300,
         slidesToShow: 1,
         adaptiveHeight: false,
         touchThreshold: 10
     }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
         // console.log($num, currentSlide, nextSlide);
         $num.text(nextSlide + 1);
     }).on('init', function(slick) {
         console.log(slick);
     });

     $items.on('click', function() {
         $list.slick('slickNext');
     });
 });



