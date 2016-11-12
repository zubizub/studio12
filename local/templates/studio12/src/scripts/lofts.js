var $loft = $('.loft');
$('.lofts__link').on('mouseenter', function() {
    var loft = $(this).data('loft');
    $loft.removeClass('active').filter('[data-loft=' + loft + ']').addClass('active');
    return false;
}).on('mouseleave', function() {
    $loft.removeClass('active');
    return false;
});


$slick_slider = $('.lofts__list');
settings = {
    prevArrow: $('.lofts__list-prev'),
    nextArrow: $('.lofts__list-next')
};
$slick_slider.slick(settings);
$(window).on('load resize', function() {
    if ($(window).width() > 1000) {
        if ($slick_slider.hasClass('slick-initialized')) {
            $slick_slider.slick('unslick');
        }
        return
    }

    if (!$slick_slider.hasClass('slick-initialized')) {
        return $slick_slider.slick(settings);
    }
});


$('.section--lofts').each(function () {

    var self = this,
        $box = $('.lots', self),
        $hidden = $('.lots__hidden', self),
        $more = $('.more-items', self);

    $more.on('click', function() {
        var moreText = $hidden.is(':visible') ? 'Еще 9' : 'Свернуть';
        $box.toggleClass('is-open');
        $hidden.slideToggle(300);
        $(this).text(moreText);
        return false;
    });
});
//
//$('.lot').on('click', function() {
//    $(window).trigger("resize");
//    $('.popup--loft').bPopup({
//        closeClass: 'popup__close'
//    });
//    return false;
//});
//
//$('.send_me_email').on('click', function() {
//    $('.popup--email').bPopup({
//        closeClass: 'popup__close'
//    });
//    return false;
//});
//
//$('.callback-me').on('click', function() {
//    $('.popup--callback').bPopup({
//        closeClass: 'popup__close'
//    });
//    return false;
//});