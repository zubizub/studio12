	(function () {
        var wh = window.outerHeight, ww = window.innerWidth, wIh = window.innerHeight / 4, wIh1 = window.innerHeight, bw = $('.box').width() / 2, sectionHeight = $('.section--slogan .box').height(), shStart = 1500, shIntro = 1500, sh = 1500, speed = 0, $start = $('#start'), $intro = $('#intro'), $head = $('#head'), $tagline = $('#tagline'), $tagline2 = $('#tagline2'), $tagline3 = $('#tagline3'), $tagline4 = $('#tagline4'), $tagline5 = $('#tagline5'), $tagline6 = $('#tagline6');
        if ($start.length && $intro.length && $head.length && $tagline.length && $tagline2.length && $tagline3.length && $tagline4.length && $tagline5.length && $tagline6.length) {
        }
        $start.attr({ 'd': 'M0,16 H582.5 V5000' });
        $intro.attr({ 'd': 'M582.5,0 582.5,80 742.5,250 742.5,290 387.5,290 387.5,370 582.5,560 582.5,5000' });
        $head.attr({ 'd': 'M582.5,0 V5000' });
        $tagline.attr({ 'd': 'M742.5,0 742.5,97 419.5,500 419.5,2000' });
		$tagline2.attr({ 'd': 'M242.5,-50 380.5,67 380.5,200 310.5,260 310.5,380 -1500.5,2000' });
		$tagline3.attr({ 'd': 'M2042.5,1200 1130.5,70 950.5,250 950.5,400 5019.5,5000' });
				        $tagline4.attr({ 'd': 'M742.5,0 742.5,' + wIh + ' 419.5,500 419.5,2000' });
		$tagline5.attr({ 'd': 'M242.5,-50 380.5,67 380.5,200 310.5,260 310.5,380 -1500.5,2000' });
		$tagline6.attr({ 'd': 'M2042.5,1200 1130.5,70 950.5,250 950.5,400 5019.5,5000' });
        $(window).on('resize.dynamics', function () {
            var wIh = window.innerHeight / 4;
            $start.attr({ 'd': 'M0,16 H582.5 V5000' });
            $intro.attr({ 'd': 'M582.5,0 582.5,80 742.5,250 742.5,290 387.5,290 387.5,370 582.5,560 582.5,5000' });
            $head.attr({ 'd': 'M582.5,0 V5000' });
            $tagline.attr({ 'd': 'M742.5,0 742.5,97 419.5,500 419.5,2000' });
			$tagline2.attr({ 'd': 'M242.5,-50 380.5,67 380.5,200 310.5,260 310.5,380 -1500.5,2000' });
			$tagline3.attr({ 'd': 'M2042.5,1200 1130.5,70 950.5,250 950.5,400 5019.5,5000' });
			$tagline4.attr({ 'd': 'M742.5,0 742.5,' + wIh + ' 419.5,500 419.5,2000' });
		$tagline5.attr({ 'd': 'M242.5,-50 380.5,67 380.5,200 310.5,260 310.5,380 -1500.5,2000' });
		$tagline6.attr({ 'd': 'M2042.5,1200 1130.5,70 950.5,250 950.5,400 5019.5,5000' });
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
		pathPrepare($tagline4);
		pathPrepare($tagline5);
		pathPrepare($tagline6);
        var startEnd = TweenLite.to($start, 2, {
            strokeDashoffset: 4462,
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
                $.fn.fullpage.moveSectionDown();
                //$(window).trigger('resize');
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
            anchors: [
                's-start',
                's-intro',
                's-main',
                's-about',
                's-slogan',
                's-lofts',
				's-slogan2'
            ],
            scrollOverflow: true,
            scrollOverflowOptions: [{ click: false }],
            onLeave: function (index, nextIndex, direction) {
                var leavingSection = $(this);
                //after leaving section 2
                if (index == 2 && direction == 'down') {
                    TweenLite.to($head, 7, {
                        strokeDashoffset: 5,
                        ease: Linear.easeNone
                    });
                } else if (index == 4 && direction == 'down') {
                    TweenLite.to($tagline, 5, {
                        strokeDashoffset: 1,
                        ease: Linear.easeNone
                    });
					TweenLite.to($tagline2, 10, {
                        strokeDashoffset: 1,
                        ease: Linear.easeNone
                    });
					TweenLite.to($tagline3, 5, {
                        strokeDashoffset: 1,
                        ease: Linear.easeNone
                    });
                } else if (index == 6 && direction == 'down') {
                    TweenLite.to($tagline4, 5, {
                        strokeDashoffset: 1,
                        ease: Linear.easeNone
                    });
					TweenLite.to($tagline5, 10, {
                        strokeDashoffset: 1,
                        ease: Linear.easeNone
                    });
					TweenLite.to($tagline6, 5, {
                        strokeDashoffset: 1,
                        ease: Linear.easeNone
                    });
					alert("kjg");
                } else if (nextIndex == 2 && direction == 'up') {
                    return false;
                }
            }
        });
    }());







