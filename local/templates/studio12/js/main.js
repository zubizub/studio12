$(function () {
    (function () {
        var wIh = window.innerHeight / 4,
            isIE = /*@cc_on!@*/false || !!document.documentMode,
            $intro = $('#intro');
            $intro.attr({ 'd': 'M582.5,0 582.5,200 742.5,370 742.5,410 387.5,410 387.5,490 582.5,680 582.5,1500'});

        function pathPrepare($el) {
            var lineLength = $el[0].getTotalLength();
            $el.css('stroke-dasharray', lineLength);
            $el.css('stroke-dashoffset', lineLength);

            if( isIE ) {
                $el.css('stroke-dasharray', 0);
                $el.css('stroke-dashoffset', 0);
            }
        }

        pathPrepare($intro);

        var introEnd = TweenLite.to($intro, 2, {
            strokeDashoffset: 0,
            ease: Linear.easeNone
        });

        introEnd.eventCallback('onComplete', function () {
            $('.section--intro').slideUp(1000);
            $('.fullpage').removeClass('fade-in');

            setTimeout(function () {
                $('body').removeClass('no-scroll');
                $('.fade-animate').removeClass('fade-in');
                $('.load-top-animate').addClass('animated fadeInLeft');
            }, 1000);

            setTimeout(function () {
                $('.top__item.js-vertical-anim').addClass('animated fadeInUp');
            }, 1850);
        });

        setTimeout(function () {
            $('.line-house').fadeIn(1000);
        }, 500);

    }());
});