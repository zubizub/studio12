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
    //(function () {
    //    var $loft = $('.loft');
    //    $('.lofts__link').on('mouseenter', function () {
    //        var loft = $(this).data('loft');
    //        $loft.removeClass('active').filter('[data-loft=' + loft + ']').addClass('active');
    //        return false;
    //    }).on('mouseleave', function () {
    //        $loft.removeClass('active');
    //        return false;
    //    });
    //    $slick_slider = $('.lofts__list');
    //    settings = {
    //        prevArrow: $('.lofts__list-prev'),
    //        nextArrow: $('.lofts__list-next')
    //    };
    //    $slick_slider.slick(settings);
    //    $(window).on('load resize', function () {
    //        if ($(window).width() > 1000) {
    //            if ($slick_slider.hasClass('slick-initialized')) {
    //                $slick_slider.slick('unslick');
    //            }
    //            return;
    //        }
    //        if (!$slick_slider.hasClass('slick-initialized')) {
    //            return $slick_slider.slick(settings);
    //        }
    //    });
    //    $('.section--lofts').each(function () {
    //        var self = this, $box = $('.lots', self), $hidden = $('.lots__hidden', self), $more = $('.more-items', self);
    //        $more.on('click', function () {
    //            var moreText = $hidden.is(':visible') ? 'Еще 9' : 'Свернуть';
    //            $box.toggleClass('is-open');
    //            $hidden.slideToggle(300);
    //            $(this).text(moreText);
    //            return false;
    //        });
    //    });    //
    //           //$('.lot').on('click', function() {
    //           //    $(window).trigger("resize");
    //           //    $('.popup--loft').bPopup({
    //           //        closeClass: 'popup__close'
    //           //    });
    //           //    return false;
    //           //});
    //           //
    //           //$('.send_me_email').on('click', function() {
    //           //    $('.popup--email').bPopup({
    //           //        closeClass: 'popup__close'
    //           //    });
    //           //    return false;
    //           //});
    //           //
    //           //$('.callback-me').on('click', function() {
    //           //    $('.popup--callback').bPopup({
    //           //        closeClass: 'popup__close'
    //           //    });
    //           //    return false;
    //           //});
    //}());
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
                $.fn.fullpage.reBuild();
                return false;
            });
        });    //
    (function () {
        $('.nav-toggle').on('click', function () {
            var timer;
            $('body').toggleClass('sidebar-open');
            $(window).trigger('resize');
            $.fn.fullpage.reBuild();
            //timer = setInterval( function() {
                                                      //    $(window).trigger('resize');
                                                      //}, 1);
                                                      //$('.sidebar').one('transitionend', function() {
                                                      //    clearInterval(timer);
                                                      //});
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



/*
    $('.btn-showroom').on('click', function () {

        $('.popup--showroom').bPopup({
            closeClass: 'popup__close',
            onOpen: function () {
                //console.log('callback-me');
                var action = 'showroomForm';
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
    });*/

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

    setTimeout(function () {
        $('.line-house').fadeIn(1000);
    }, 2400);    //10000 = 10 секунд

    $(".loft-btn").on("click", function(){
        var anchor = $(this).attr("href");
        $("html, body").stop().animate({
            scrollTop: $(anchor).offset().top
        }, 300);
        return false;
    });

    var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
    if( isMobile ) {
        $('.section--slogan').add('.section--start').add('.section--intro').add('.slogan-page').remove().css('display', 'none');
        $('.lots-infographics__number').animateNumber({ number: 76 });
        $('.number72').animateNumber({ number: 72 });
        $('.number142').animateNumber({ number: 142 });
        $('.number40').animateNumber({ number: 40 });
        $('.number300').animateNumber({ number: 300 });
        $('.number6').animateNumber({ number: 8 });
        $.fn.fullpage.destroy('all');
    }


});