$(function () {
    (function () {
        $('.about-lofts__slider-list').slick({
            dots: true,
            appendDots: $('.about-lofts__slider-dots'),
            infinite: true,
            arrows: false,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 10000,
            slidesToShow: 1,
            adaptiveHeight: true,
            touchThreshold: 10
        });
    }());
    (function () {
        $('.about__link').one('mouseenter', function () {
            $(this).addClass('inited');
        });
    }());
	(function () {
        var wh = window.outerHeight, ww = window.innerWidth, wIh = window.innerHeight / 4, wIh1 = window.innerHeight, bw = $('.box').width() / 2, sectionHeight = $('.section--slogan .box').height(), shStart = 1500, shIntro = 1500, sh = 1500, speed = 0, $start = $('#start'), $intro = $('#intro'), $head = $('#head'), $tagline = $('#tagline');
        if ($start.length && $intro.length && $head.length && $tagline.length) {
        }
        $start.attr({ 'd': 'M0,16 H582.5 V5000' });
        $intro.attr({ 'd': 'M582.5,0 582.5,80 742.5,250 742.5,290 387.5,290 387.5,370 582.5,560 582.5,5000' });
        $head.attr({ 'd': 'M582.5,0 V5000' });
        $tagline.attr({ 'd': 'M742.5,0 742.5,97 419.5,500 419.5,5000' });
        $(window).on('resize.dynamics', function () {
            var wIh = window.innerHeight / 4;
            $start.attr({ 'd': 'M0,16 H582.5 V5000' });
            $intro.attr({ 'd': 'M582.5,0 582.5,80 742.5,250 742.5,290 387.5,290 387.5,370 582.5,560 582.5,5000' });
            $head.attr({ 'd': 'M582.5,0 V5000' });
            $tagline.attr({ 'd': 'M742.5,0 742.5,97 419.5,500 419.5,5000' });
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
                's-lofts'
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
                } else if (nextIndex == 2 && direction == 'up') {
                    return false;
                }
            }
        });
    }());
    (function () {
    }());
    (function () {
    }());
    (function () {
    }());
    (function () {
        var speed = 80, timeout = 100, typeItOptions = {
                cursor: false,
                speed: speed,
                autoStart: true
            }, $feature = $('.feature'), $heading = $('.heading'), $headingLine = $('.heading__line'), $words = $('.heading__word'), $firstWord = $words.filter(':first'), $lastWord = $words.filter(':last');
        $heading.height($heading.outerHeight());
        $firstWord.removeClass('invisible').typeIt($.extend({}, typeItOptions, {
            callback: function () {
                $lastWord.removeClass('invisible').typeIt($.extend({}, typeItOptions, {
                    callback: function () {
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
            if (rel === 1) {
                $feature.addClass('feature--down');
            } else {
                $feature.removeClass('feature--down');
            }
        });
    }());
    (function () {
        (function ($) {
            var reverse = function (value) {
                return value.split('').reverse().join('');
            };
            var defaults = {
                numberStep: function (now, tween) {
                    var floored_number = Math.floor(now), target = $(tween.elem);
                    target.text(floored_number);
                }
            };
            var handle = function (tween) {
                var elem = tween.elem;
                if (elem.nodeType && elem.parentNode) {
                    var handler = elem._animateNumberSetter;
                    if (!handler) {
                        handler = defaults.numberStep;
                    }
                    handler(tween.now, tween);
                }
            };
            if (!$.Tween || !$.Tween.propHooks) {
                $.fx.step.number = handle;
            } else {
                $.Tween.propHooks.number = { set: handle };
            }
            var extract_number_parts = function (separated_number, group_length) {
                var numbers = separated_number.split('').reverse(), number_parts = [], current_number_part, current_index, q;
                for (var i = 0, l = Math.ceil(separated_number.length / group_length); i < l; i++) {
                    current_number_part = '';
                    for (q = 0; q < group_length; q++) {
                        current_index = i * group_length + q;
                        if (current_index === separated_number.length) {
                            break;
                        }
                        current_number_part = current_number_part + numbers[current_index];
                    }
                    number_parts.push(current_number_part);
                }
                return number_parts;
            };
            var remove_precending_zeros = function (number_parts) {
                var last_index = number_parts.length - 1, last = reverse(number_parts[last_index]);
                number_parts[last_index] = reverse(parseInt(last, 10).toString());
                return number_parts;
            };
            $.animateNumber = {
                numberStepFactories: {
                    /**
       * Creates numberStep handler, which appends string to floored animated number on each step.
       *
       * @example
       * // will animate to 100 with "1 %", "2 %", "3 %", ...
       * $('#someid').animateNumber({
       *   number: 100,
       *   numberStep: $.animateNumber.numberStepFactories.append(' %')
       * });
       *
       * @params {String} suffix string to append to animated number
       * @returns {Function} numberStep-compatible function for use in animateNumber's parameters
       */
                    append: function (suffix) {
                        return function (now, tween) {
                            var floored_number = Math.floor(now), target = $(tween.elem);
                            target.prop('number', now).text(floored_number + suffix);
                        };
                    },
                    /**
       * Creates numberStep handler, which format floored numbers by separating them to groups.
       *
       * @example
       * // will animate with 1 ... 217,980 ... 95,217,980 ... 7,095,217,980
       * $('#world-population').animateNumber({
       *    number: 7095217980,
       *    numberStep: $.animateNumber.numberStepFactories.separator(',')
       * });
       * @example
       * // will animate with 1% ... 217,980% ... 95,217,980% ... 7,095,217,980%
       * $('#salesIncrease').animateNumber({
       *   number: 7095217980,
       *   numberStep: $.animateNumber.numberStepFactories.separator(',', 3, '%')
       * });
       *
       * @params {String} [separator=' '] string to separate number groups
       * @params {String} [group_length=3] number group length
       * @params {String} [suffix=''] suffix to append to number
       * @returns {Function} numberStep-compatible function for use in animateNumber's parameters
       */
                    separator: function (separator, group_length, suffix) {
                        separator = separator || ' ';
                        group_length = group_length || 3;
                        suffix = suffix || '';
                        return function (now, tween) {
                            var floored_number = Math.floor(now), separated_number = floored_number.toString(), target = $(tween.elem);
                            if (separated_number.length > group_length) {
                                var number_parts = extract_number_parts(separated_number, group_length);
                                separated_number = remove_precending_zeros(number_parts).join(separator);
                                separated_number = reverse(separated_number);
                            }
                            target.prop('number', now).text(separated_number + suffix);
                        };
                    }
                }
            };
            $.fn.animateNumber = function () {
                var options = arguments[0], settings = $.extend({}, defaults, options), target = $(this), args = [settings];
                for (var i = 1, l = arguments.length; i < l; i++) {
                    args.push(arguments[i]);
                }
                // needs of custom step function usage
                if (options.numberStep) {
                    // assigns custom step functions
                    var items = this.each(function () {
                        this._animateNumberSetter = options.numberStep;
                    });
                    // cleanup of custom step functions after animation
                    var generic_complete = settings.complete;
                    settings.complete = function () {
                        items.each(function () {
                            delete this._animateNumberSetter;
                        });
                        if (generic_complete) {
                            generic_complete.apply(this, arguments);
                        }
                    };
                }
                return target.animate.apply(target, args);
            };
        }(jQuery));
    }());
    (function () {
        $('.metro-place__slider').slick({
            dots: false,
            infinite: true,
            arrows: false,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 10000,
            slidesToShow: 1,
            adaptiveHeight: false,
            touchThreshold: 10
        });
    }());
    (function () {
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
            responsive: [{
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
                }]
        });
        $('.loft-types__slide').each(function () {
            var $list = $('.loft-types__list', this), $items = $('.loft-types__item', this), $num = $('.loft-types__page-num', this);
            $list.slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: false,
                touchThreshold: 10
            }).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                // console.log($num, currentSlide, nextSlide);
                $num.text(nextSlide + 1);
            }).on('init', function (slick) {
                console.log(slick);
            });
            $items.on('click', function () {
                $list.slick('slickNext');
            });
        });
    }());
    (function () {
        var $loft = $('.loft');
        $('.lofts__link').on('mouseenter', function () {
            var loft = $(this).data('loft');
            $loft.removeClass('active').filter('[data-loft=' + loft + ']').addClass('active');
            return false;
        }).on('mouseleave', function () {
            $loft.removeClass('active');
            return false;
        });
        $slick_slider = $('.lofts__list');
        settings = {
            prevArrow: $('.lofts__list-prev'),
            nextArrow: $('.lofts__list-next')
        };
        $slick_slider.slick(settings);
        $(window).on('load resize', function () {
            if ($(window).width() > 1000) {
                if ($slick_slider.hasClass('slick-initialized')) {
                    $slick_slider.slick('unslick');
                }
                return;
            }
            if (!$slick_slider.hasClass('slick-initialized')) {
                return $slick_slider.slick(settings);
            }
        });
        $('.section--lofts').each(function () {
            var self = this, $box = $('.lots', self), $hidden = $('.lots__hidden', self), $more = $('.more-items', self);
            $more.on('click', function () {
                var moreText = $hidden.is(':visible') ? 'Еще 9' : 'Свернуть';
                $box.toggleClass('is-open');
                $hidden.slideToggle(300);
                $(this).text(moreText);
                return false;
            });
        });    //
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
    }());
    (function () {
        $('.nav-toggle').on('click', function () {
            var timer;
            $('body').toggleClass('sidebar-open');    //timer = setInterval( function() {
                                                      //    $(window).trigger('resize');
                                                      //}, 1);
                                                      //$('.sidebar').one('transitionend', function() {
                                                      //    clearInterval(timer);
                                                      //});
        });
    }());
    (function () {
        $('.photo-gallery').each(function () {
            $('.photo-gallery__content', this).slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: $('.photo-gallery__prev', this),
                nextArrow: $('.photo-gallery__next', this),
                arrows: true,
                slide: '.photo-gallery__item',
                infinite: true    //adaptiveHeight: true,
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
    }());
    (function () {
        $('.detail').each(function () {
            var self = this, $box = $('.detail__about', self), $hidden = $('.detail__hidden', self), $more = $('.detail__more', self);
            $more.on('click', function () {
                $box.toggleClass('is-open');
                $hidden.slideToggle(150);
                return false;
            });
        });
    }());
    (function () {
        $('.sidebar').perfectScrollbar();
    }());
    (function () {
        $('.slogan__title').typeIt({
            cursor: false,
            speed: 150,
            autoStart: true,
            loop: true,
            breakLines: false,
            breakDelay: 300
        });
    }());
});