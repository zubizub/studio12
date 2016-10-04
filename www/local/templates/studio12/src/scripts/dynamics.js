var wh = window.outerHeight,
    ww = window.innerWidth,
    wIh = window.innerHeight / 4,
    wIh1 = window.innerHeight,
    bw = $('.box').width() / 2,
    sectionHeight = $('.section--slogan .box').height(),
    shStart = 1500,
    shIntro = 1500,
    sh = 1500,
    speed = 2,
    $start = $("#start"),
    $intro = $("#intro"),
    $head = $("#head"),
    $tagline = $("#tagline");

if ($start.length && $intro.length && $head.length && $tagline.length) {

}
    $start.attr({'d': 'M0,16 H582.5 V5000'});
    $intro.attr({'d': 'M582.5,0 582.5,80 742.5,250 742.5,290 387.5,290 387.5,370 582.5,560 582.5,5000'});
    $head.attr({'d': 'M582.5,0 V5000'});
    $tagline.attr({'d': 'M742.5,0 742.5,' + wIh + ' 419.5,500 419.5,' + (wIh+500+145)});

    $(window).on('resize.dynamics', function () {
        var wIh = window.innerHeight / 4;

        $start.attr({'d': 'M0,16 H582.5 V5000'});
        $intro.attr({'d': 'M582.5,0 582.5,80 742.5,250 742.5,290 387.5,290 387.5,370 582.5,560 582.5,5000'});
        $head.attr({'d': 'M582.5,0 V5000'});
        $tagline.attr({'d': 'M742.5,0 742.5,' + wIh + ' 419.5,500 419.5,' + (wIh+500+145)});
    });

    function pathPrepare($el) {
        var lineLength = $el[0].getTotalLength();
        $el.css("stroke-dasharray", lineLength);
        $el.css("stroke-dashoffset", lineLength);


        $(window).on('resize', function () {
            var lineLength = $el[0].getTotalLength();
            $el.css("stroke-dasharray", lineLength);
            $el.css("stroke-dashoffset", lineLength);
        });
    }

    pathPrepare($start);
    pathPrepare($intro);
    pathPrepare($head);
    pathPrepare($tagline);

    var startEnd = TweenLite.to($start, speed, {strokeDashoffset: 0, ease: Linear.easeNone});

    startEnd.eventCallback("onStart", function () {
        //$.fn.fullpage.setScrollingSpeed(7000);
        //$.fn.fullpage.moveTo(3);
        //$.fn.fullpage.setScrollingSpeed(700);
        //$('.intro-anim').add('#fp-nav').addClass('intro-anim--visible');
    }); //sets the onComplete
    startEnd.eventCallback("onComplete", function () {
        $('.intro-anim').addClass('intro-anim--visible');
        $.fn.fullpage.moveSectionDown();
        var introEnd = TweenLite.to($intro, speed, {strokeDashoffset: 0, ease: Linear.easeNone});
        introEnd.eventCallback("onComplete", function () {
            $('#fp-nav').addClass('intro-anim--visible');
            $.fn.fullpage.moveSectionDown();
            $(window).trigger('resize');
        });
});

$('.fullpage').fullpage({
    navigation: true,
    lockAnchors: true,
    sectionSelector: '.section',
    scrollingSpeed: 700,
    verticalCentered: false,
    responsiveWidth: 1001,
    //responsiveHeight: 720,
    anchors: ['s-start', 's-intro', 's-main', 's-about', 's-slogan', 's-lofts'],
    scrollOverflow: true,
    scrollOverflowOptions: [
        {
            click: false
        }
    ],
    onLeave: function (index, nextIndex, direction) {
        var leavingSection = $(this);
        //after leaving section 2
        if (index == 2 && direction == 'down') {
            TweenLite.to($head, 1, {strokeDashoffset: 0, ease: Linear.easeNone});
        }
        else if (index == 4 && direction == 'down') {
            TweenLite.to($tagline, 1, {strokeDashoffset: 0, ease: Linear.easeNone});
        }
        else if (nextIndex == 2 && direction == 'up') {
            return false;
        }
    }

});







