$(function () {

    (function () {
        $('.number72').animateNumber({ number: 72 });
        $('.number142').animateNumber({ number: 142 });
        $('.number40').animateNumber({ number: 40 });
        $('.number300').animateNumber({ number: 300 });
        $('.number6').animateNumber({ number: 8 });
    }());

    (function () {
        var wIh = window.innerHeight / 4,
            $intro = $('#intro');
        $intro.attr({ 'd': 'M582.5,0 582.5,200 742.5,370 742.5,410 387.5,410 387.5,490 582.5,680 582.5,1500'});
        function pathPrepare($el) {
            var lineLength = $el[0].getTotalLength();
            $el.css('stroke-dasharray', 0);
            $el.css('stroke-dashoffset', 0);
        }
        pathPrepare($intro);
        //var introEnd = TweenLite.to($intro, 2, {
        //    strokeDashoffset: 0,
        //    ease: Linear.easeNone
        //});
        //introEnd.eventCallback('onComplete', function () {
        //    $('.section--intro').slideUp(1000);
        //    $('.fullpage').removeClass('fade-in');
        //    setTimeout(function () {
        //        $('body').removeClass('no-scroll');
        //        $('.fade-animate').removeClass('fade-in');
        //    }, 1000);
        //});
        //setTimeout(function () {
        //    $('.line-house').fadeIn(1000);
        //}, 500);
    }());
});