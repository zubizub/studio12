$(".photo-gallery").each(function() {

    $('.photo-gallery__content', this).slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.photo-gallery__prev', this),
        nextArrow: $('.photo-gallery__next', this),
        arrows: true,
        slide: '.photo-gallery__item',
        infinite: true
        //adaptiveHeight: true,
        //responsive: [
        //    {
        //        breakpoint: 800,
        //        settings: {
        //            slidesToShow: 1,
        //            slidesToScroll: 1,
        //            variableWidth: false,
        //            centerMode: false,
        //            adaptiveHeight: true
        //        }
        //    }
        //]
    });

});