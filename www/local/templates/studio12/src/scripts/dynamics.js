        (function () {
            var wh = window.outerHeight, ww = window.innerWidth, wIh = window.innerHeight / 4, wIh1 = window.innerHeight, bw = $('.box').width() / 2, sectionHeight = $('.section--slogan .box').height(), shStart = 1500, shIntro = 1500, sh = 1500, speed = 0, $start = $('#start'), $intro = $('#intro'), $head = $('#head'), $tagline = $('#tagline'), $tagline2 = $('#tagline2'), $tagline3 = $('#tagline3'), $building = $('#building'), $building2 = $('#building2'), $building3 = $('#building3');
            if ($start.length && $intro.length && $head.length && $tagline.length && $tagline2.length && $tagline3.length && $building.length && $building2.length && $building3.length) {
            }
            $start.attr({ 'd': 'M0,16 H582.5 V' + ( 700 + wIh ) });
            $intro.attr({ 'd': 'M582.5,0 582.5,80 742.5,250 742.5,290 387.5,290 387.5,370 582.5,560 582.5,7000' });
            $head.attr({ 'd': 'M582.5,0 V7000' });
		$tagline.attr({ 'd': 'M582.5,0 582.5,' + (wIh / 2) + ' 743.61111,' + (wIh / 2) + ' 743.61111,' + (wIh + 600 + 5245) });
            $tagline2.attr({ 'd': 'M242.5,-50 380.5,67 380.5,200 310.5,260 310.5,380 200.5,450 200.5,5000' });
            $tagline3.attr({ 'd': 'M2042.5,1200 1130.5,70 950.5,250 950.5,400 1050.5,500 1050.5,5000' });
            $building.attr({ 'd': 'M743.61111,0L743.61111,79.86111L633.83333,191.11111L373.83333,193.33332L195.55556,364.44443L312.22223,484.55555L350,444.44444L592.22223,682.22222L971.11112,306.66666L743.61112,82.33334' });
            $building2.attr({ 'd': 'M200.5,0 200.5,100 -10,300' });
            $building3.attr({ 'd': 'M1050.5,0 1050,100 1200,250 880.5,580 1500,1200' });
            $(window).on('resize.dynamics', function () {
                var wIh = window.innerHeight / 4;
                $start.attr({ 'd': 'M0,16 H582.5 V' + ( 700 + wIh ) });
                $intro.attr({ 'd': 'M582.5,0 582.5,80 742.5,250 742.5,290 387.5,290 387.5,370 582.5,560 582.5,7000' });
                $head.attr({ 'd': 'M582.5,0 V7000' });
		$tagline.attr({ 'd': 'M582.5,0 582.5,' + (wIh * 5) + ' 743.61111,' + (wIh * 4) + ' 743.61111,' + (wIh + 600 + 5245) });
                $tagline2.attr({ 'd': 'M242.5,-50 380.5,67 380.5,200 310.5,260 310.5,380 200.5,450 200.5,5000' });
                $tagline3.attr({ 'd': 'M2042.5,1200 1130.5,70 950.5,250 950.5,400 1050.5,500 1050.5,5000' });
                $building.attr({ 'd': 'M743.61111,0L743.61111,79.86111L633.83333,191.11111L373.83333,193.33332L195.55556,364.44443L312.22223,484.55555L350,444.44444L592.22223,682.22222L971.11112,306.66666L743.61112,82.33334' });
                $building2.attr({ 'd': 'M200.5,0 200.5,100 -10,300' });
                $building3.attr({ 'd': 'M1050.5,0 1050,100 1200,250 880.5,580 1500,1200' });
            });
            function pathPrepare($el) {
                var lineLength = $el[0].getTotalLength();
                $el.css('stroke-dasharray', lineLength);
                $el.css('stroke-dashoffset', lineLength);
                $(window).on('resize', function () {
                    var lineLength = $el[0].getTotalLength();
                    $el.css('stroke-dasharray', lineLength);
                    $el.css('stroke-dashoffset', 0);
                });
            }
            pathPrepare($start);
            pathPrepare($intro);
            pathPrepare($head);
            pathPrepare($tagline);
            pathPrepare($tagline2);
            pathPrepare($tagline3);
            pathPrepare($building);
            pathPrepare($building2);
            pathPrepare($building3);
            var startEnd = TweenLite.to($start, 2, {
                strokeDashoffset: 0,
                ease: Linear.easeNone
            });
            startEnd.eventCallback('onStart', function () {
            });
            //sets the onComplete
            startEnd.eventCallback('onComplete', function () {
                $('.intro-anim').addClass('intro-anim--visible');
                $.fn.fullpage.moveSectionDown();
                var introEnd = TweenLite.to($intro, 2, {
                    strokeDashoffset: 3750,
                    ease: Linear.easeNone
                });
                introEnd.eventCallback('onComplete', function () {
                    $('#fp-nav').addClass('intro-anim--visible');
                    $.fn.fullpage.moveSectionDown();    //$(window).trigger('resize');
                });
            });
            $('.fullpage').fullpage({
            autoplay: false,
            navigation: true,
            lockAnchors: true,
            sectionSelector: '.section',
            scrollingSpeed: 700,
            verticalCentered: false,
            responsiveWidth: 1001,
            slidesNavigation: false,
            //responsiveHeight: 720,
            afterRender: function () {
                setInterval(function () {
                    $.fn.fullpage.moveSlideRight();
                }, 1000);
            },
            anchors: ['s-start', 's-intro', 's-main', 's-about', 's-slogan', 's-lofts'],
            scrollOverflow: true,
            scrollOverflowOptions: [
                {
                    click: false
                }
            ]
            ,
            onLeave: function (index, nextIndex, direction) {
                var leavingSection = $(this);
                //after leaving section 2
                if (index == 2 && direction == 'down') {
                    TweenLite.to($head, 1, { strokeDashoffset: 0, ease: Linear.easeNone });
                }
                else if (index == 4 && direction == 'down') {
                    TweenLite.to($tagline, 2.5, { strokeDashoffset: 0, ease: Linear.easeNone });
                    TweenLite.to($tagline2, 5, { strokeDashoffset: 0, ease: Linear.easeNone });
                    TweenLite.to($tagline3, 3, { strokeDashoffset: 0, ease: Linear.easeNone });
                }
                else if (index == 5 && direction == 'down') {
                    TweenLite.to($building, 2.5, { strokeDashoffset: 0, ease: Linear.easeNone });
                    TweenLite.to($building2, 5, { strokeDashoffset: 0, ease: Linear.easeNone });
                    TweenLite.to($building3, 3, { strokeDashoffset: 0, ease: Linear.easeNone });
                    setTimeout(function () { $('.house1').fadeIn(500) }, 800); //10000 = 10 секунд
                    setTimeout(function () { $('.house2').fadeIn(500) }, 1200); //10000 = 10 секунд
                    setTimeout(function () { $('.house3').fadeIn(500) }, 1700); //10000 = 10 секунд
                    setTimeout(function () { $('.house4').fadeIn(500) }, 2000); //10000 = 10 секунд
                }
                else if (nextIndex == 2 && direction == 'up') {
                    return false;
                }
                if (index == 5) {
                    setTimeout(function () { $('.lots-infographics__number').animateNumber({ number: 72 }) }, 2000);
                }
                else {
                    $('.lots-infographics__number').animateNumber({ number: 0 });
                }
            },

            afterLoad: function (anchorLink, index) {
                var loadedSection = $(this);

                //using index
                if (index == 4) {
                    $('.number72').animateNumber({ number: 72 });
                    $('.number142').animateNumber({ number: 142 });
                    $('.number40').animateNumber({ number: 40 });
                    $('.number300').animateNumber({ number: 300 });
                    $('.number6').animateNumber({ number: 6 });
                }
                else {
                    $('.number').animateNumber({ number: 0 });
                }
                var height = $('body').innerHeight();
                var width = $('body').innerWidth();
                if (index == 6) {
                    $('.header_fixed').css('display', 'none');
                }
                else if (index != 6 && height < 750) {
                    $('.header_fixed').css('display', 'none');
                }

                else if (index != 6 && height > 750 && width > 1000) {
                    $('.header_fixed').css('display', '');
                }
                else if (index == 3) {
                }

            }
        });
        $(window).resize(function () {
            var height = $('body').innerHeight();
            var width = $('body').innerWidth();

            if (height < 750) {
                $('.header_fixed').css('display', 'none');
                $('.header_stable').css('display', 'none');
                $('.footer_fixed').css('display', 'none');
                $('.mouse').css('display', 'none');
                $('.controls').css('display', 'inline-block');
            }
            else if (width < 1000) {
                $('.header_fixed').css('display', 'none');
                $('.header_stable').css('display', 'none');
                $('.footer_fixed').css('display', 'none');
                $('.mouse').css('display', 'none');
                $('.controls').css('display', 'inline-block');
            }
            else {
                $('.header_fixed').css('display', '');
                $('.header_stable').css('display', '');
                $('.footer_fixed').css('display', '');
                $('.mouse').css('display', '');
                $('.controls').css('display', '');
            }
        });
        $(document).ready(function () {
            var height = $('body').innerHeight();
            var width = $('body').innerWidth();
            if (height < 750) {
                $('.header_fixed').css('display', 'none');
                $('.header_stable').css('display', 'none');
                $('.footer_fixed').css('display', 'none');
                $('.mouse').css('display', 'none');
                $('.controls').css('display', 'inline-block');
            }
            else if (width < 1000) {
                $('.header_fixed').css('display', 'none');
                $('.header_stable').css('display', 'none');
                $('.footer_fixed').css('display', 'none');
                $('.mouse').css('display', 'none');
                $('.controls').css('display', 'inline-block');
            }
            else {
                $('.header_fixed').css('display', '');
                $('.header_stable').css('display', '');
                $('.footer_fixed').css('display', '');
                $('.mouse').css('display', '');
                $('.controls').css('display', '');
            }
        });
        
		        $('.more-items').click(function () {

            setTimeout(function () { $.fn.fullpage.reBuild() }, 200);
        });

        setTimeout(function () { $('.line-house').fadeIn(1000) }, 2400); //10000 = 10 секунд
		
		}());