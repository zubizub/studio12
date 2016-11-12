var speed = 80,
    timeout = 100,
    typeItOptions = {
        cursor: false,
        speed: speed,
        autoStart: true
    },
    $feature = $('.feature'),
    $heading = $('.heading'),
    $headingLine = $('.heading__line'),
    $words = $('.heading__word'),
    $firstWord = $words.filter(':first'),
    $lastWord = $words.filter(':last');

$heading.height($heading.outerHeight());

$firstWord.removeClass('invisible').typeIt($.extend({}, typeItOptions, {
    callback: function() {
        $lastWord.removeClass('invisible').typeIt($.extend({}, typeItOptions, {
            callback: function() {
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
    if(rel === 1) {
        $feature.addClass('feature--down');
    }
    else {
        $feature.removeClass('feature--down');
    }
});