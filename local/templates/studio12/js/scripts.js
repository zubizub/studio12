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
            infinite: true,
            speed: 0,
            slidesToShow: 1,
            adaptiveHeight: false,
            swipe: false,
            touchMove: false,
            fade: true,
            asNavFor: '.loft-types__tabs'
            //autoplay: true,
            //autoplaySpeed: 10000
        });
        $('.loft-types__tabs').slick({
            dots: false,
            arrows: false,
            infinite: true,
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
                    breakpoint: 1001,
                    settings: {
                        speed: 150,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        vertical: false,
                        verticalSwiping: false,
                        variableWidth: false,
                        centerMode: false,
                        centerPadding: '0px',
                        swipe: true,
                        touchMove: true,
                        infinite: true
                    }
                }]
        });
        $('.loft-types-slide-go').on('click', function () {
            $('.loft-types__tabs').slick('slickNext');
            return false;
        });
        $('.loft-types__slide').each(function () {
            var $list = $('.loft-types__list', this), $items = $('.loft-types__item', this), $num = $('.loft-types__page-num', this);
            $list.slick({
                dots: false,
                arrows: true,
                //prevArrow: $('.loft-types__list-prev', this),
                //nextArrow: $('.loft-types__list-next', this),
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
        $('.about-bg').slick({
            dots: false,
            infinite: true,
            arrows: false,
            // speed: 300,
            // fade: true,
            autoplay: true,
            autoplaySpeed: 5000,
            slidesToShow: 1,
            adaptiveHeight: false,
            touchThreshold: 10
        });
    }());
        $('.section--lofts').each(function () {
            var self = this,
                $box = $('.lots', self),
                $hidden = $('.lots__hidden', self),
                $more = $('.more-items', self);
            $more.on('click', function () {
                var offers = $('.ajaxLotItem ').length;
                var moreText = $hidden.is(':visible') ? 'Еще ' + offers : 'Свернуть';
                $box.toggleClass('is-open');
                $hidden.slideToggle(300);
                $(this).text(moreText);
                return false;
            });
        });    //
    (function () {
        $('.nav-toggle').on('click', function () {
            var timer;
            $('body').toggleClass('sidebar-open');
            $(window).trigger('resize');
        });
    }());

    $(".js-phone-mask").mask("+7 (999) 999-99-99");

    $('.form__select').each(function () {
        var $cont = $(this).closest('.form__select-wrap');

        $(this).select2({
            placeholder: 'Не выбран',
            dropdownParent: $cont,
            minimumResultsForSearch: Infinity
        });
    });
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
        $('.popup-gallery').perfectScrollbar();
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

    (function () {
        $('.slogan__title').typeIt({
            cursor: false,
            speed: 150,
            lifeLike: false,
            autoStart: true,
            loop: true
        }).tiType('<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Set</span><span class="slogan__line">Trends</span>').tiPause(1500).tiDelete().tiType('<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Fly</span>').tiPause(1500).tiDelete().tiType('<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Create</span>').tiPause(1500).tiDelete().tiType('<span class="slogan__line">Cha</span><span class="slogan__line">nge</span><span class="slogan__line slogan__line--emphasis">Rules</span><span class="slogan__line">and</span><span class="slogan__line">Earn</span>').tiPause(1500).tiDelete();
        $('.slogan__translation').typeIt({
            cursor: false,
            speed: 150,
            lifeLike: false,
            autoStart: true,
            loop: true
        }).tiType('Меняй правила <br/> и устанавливай тенденции!').tiPause(1300).tiDelete().tiType('Меняй правила <br/> и взлетай!').tiPause(1500).tiDelete().tiType('Меняй правила <br/> и твори').tiPause(3000).tiDelete().tiType('Меняй правила <br/> и зарабатывай').tiPause(1500).tiDelete();
    }());


    $('.btn-callback').on('click', function () {

        $('.popup--callback').bPopup({
            closeClass: 'popup__close',
            onOpen: function () {
                //console.log('callback-me');
                var action = 'feedbackForm';
                $.post("/quarters/ajax.php", {action: action})
                    .done(function (data) {
                        $('.popup--callback').html(data);
                        $(".js-phone-mask").mask("+7 (999) 999-99-99");

                        $('.form__select').each(function () {
                            var $cont = $(this).closest('.form__select-wrap');

                            $(this).select2({
                                placeholder: 'Не выбран',
                                dropdownParent: $cont,
                                minimumResultsForSearch: Infinity
                            });
                        });
                    });
            }


        });
        return false;
    });

    $('.btn-map-get').on('click', function() {
       $('.popup--map').bPopup({
           closeClass: 'popup__close'
       });
       return false;
    });

    $('.btn-showroom').on('click', function() {
       $('.popup--showroom').bPopup({
           closeClass: 'popup__close'
       });
       return false;
    });

    $('.get-gallery-block').on('click', function () {
        $('.gallery-block').show();
        $(".loft-types__content").slick('setPosition');
        $(".loft-types__list").slick('setPosition');
        $(".loft-types__tabs").slick('setPosition');
        setTimeout(function () {
            $(window).trigger("resize");
        }, 10);
        return false;
    });

    $('.gallery-block__close').on('click', function () {
        $('.gallery-block').hide();
        return false;
    });

    $('.btn-callback-room').on('click', function () {
        $('.popup--showroom').bPopup({
            closeClass: 'popup__close'
        });
        return false;
    });

    $('[data-loft]').on('click', function () {
        return false;
    });

    $(".loft-btn").on("click", function(){
        var anchor = $(this).attr("href");
        $("html, body").stop().animate({
            scrollTop: $(anchor).offset().top
        }, 300);
        return false;
    });

    (function () {
        var wIh = window.innerHeight / 4,
            $tagline = $('#tagline'),
            $tagline2 = $('#tagline2'),
            $tagline3 = $('#tagline3'),
            $building = $('#building'),
            $building2 = $('#building2'),
            $building3 = $('#building3');

        $tagline.attr({ 'd': 'M480.5,0 480.5,' + wIh + ' 743.61111,' + wIh * 2 + ' 743.61111,' + (wIh + 600 + 5245) });
        // $tagline.attr({ 'd': 'M742.5,0 742.5,' + wIh + ' 419.5,500 419.5,' + (wIh + 500 + 145) });
        $tagline2.attr({ 'd': 'M242.5,-50 380.5,67 380.5,200 310.5,260 310.5,380 200.5,450 200.5,1500' });
        $tagline3.attr({ 'd': 'M2042.5,1200 1130.5,70 950.5,250 950.5,400 1050.5,500 1050.5,1500' });
        $building.attr({ 'd': 'M743.61111,0L743.61111,79.86111L633.83333,191.11111L373.83333,193.33332L195.55556,364.44443L312.22223,484.55555L350,444.44444L592.22223,682.22222L971.11112,306.66666L743.61112,82.33334' });
        $building2.attr({ 'd': 'M200.5,0 200.5,100 -10,300' });
        $building3.attr({ 'd': 'M1050.5,0 1050,100 1200,250 880.5,580 1500,1200' });

        function pathPrepare($el) {
            var lineLength = $el[0].getTotalLength();
            $el.css('stroke-dasharray', lineLength);
            $el.css('stroke-dashoffset', lineLength);
        }

        pathPrepare($tagline);
        pathPrepare($tagline2);
        pathPrepare($tagline3);
        pathPrepare($building);
        pathPrepare($building2);
        pathPrepare($building3);

        $('.slogan-page').each(function() {
            $(this).waypoint(function(direction) {
                TweenLite.to($tagline, 8, {
                    strokeDashoffset: 0,
                    ease: Linear.easeNone
                });
                TweenLite.to($tagline2, 5, {
                    strokeDashoffset: 0,
                    ease: Linear.easeNone
                });
                TweenLite.to($tagline3, 3, {
                    strokeDashoffset: 0,
                    ease: Linear.easeNone
                });
            }.bind(this), {
                offset: '130%'
            });
        });

        $('.lofts').each(function() {
            $(this).waypoint(function(direction) {
                TweenLite.to($building, 2.5, {
                    strokeDashoffset: 0,
                    ease: Linear.easeNone
                });
                TweenLite.to($building2, 3, {
                    strokeDashoffset: 0,
                    ease: Linear.easeNone
                });
                TweenLite.to($building3, 3, {
                    strokeDashoffset: 0,
                    ease: Linear.easeNone
                });
                setTimeout(function () {
                    $('.house1').fadeIn(500);
                }, 800);
                //10000 = 10 секунд
                setTimeout(function () {
                    $('.house2').fadeIn(500);
                }, 1200);
                //10000 = 10 секунд
                setTimeout(function () {
                    $('.house3').fadeIn(500);
                }, 1700);
                //10000 = 10 секунд
                setTimeout(function () {
                    $('.house4').fadeIn(500);
                }, 2000);
                $('.lots-infographics__number').animateNumber({ number: 76 });
            }.bind(this), {
                offset: '130%'
            });
        });
    }());

});