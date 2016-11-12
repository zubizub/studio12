$('.detail').each(function () {

    var self = this,
        $box = $('.detail__about', self),
        $hidden = $('.detail__hidden', self),
        $more = $('.detail__more', self);

    $more.on('click', function() {
        $box.toggleClass('is-open');
        $hidden.slideToggle(150);
        return false;
    });
});