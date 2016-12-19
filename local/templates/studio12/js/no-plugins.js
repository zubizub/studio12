$(function () {
    $(window).on('load', function(){
        $('.head').addClass('lt-anim-run');
    });
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
    });
    (function () {
        $('.nav-toggle').on('click', function () {
            $('body').toggleClass('sidebar-open');
            setTimeout(function() {
                $(".concept-wrap__content").slick('setPosition');
                $(".reason-slide").slick('setPosition');
            }, 300);
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
    $(".loft-btn").on("click", function () {
        var anchor = $(this).attr("href");
        $("html, body").stop().animate({
            scrollTop: $(anchor).offset().top
        }, 300);
        return false;
    });
    $('.map-wrapper').each(function () {
        var self = this;
        $('.toggleMap', this).on('click',  function(){
            $('.googleStatic, .googleMap', self).toggleClass("currentMap");
            $('.map-place__link').toggleClass('currentGmaps');
            return false;
        });
    });
    $('.popup--maps').each(function () {
        $('.map-place__link', this).on('click', function () {
            $('.toggleMap').trigger('click');
            $(this).toggleClass('currentGmaps');
            return false;
        });
    });
    (function() {
        var topHeight = $(".top").outerHeight();

        $('.queue__act, .house1, .feature').click(function () {
            $('html,body').animate({
                scrollTop: $(".lots").offset().top - topHeight
            }, 'slow');
            return false;
        });

        $('.scrollToMap').click(function () {
            $('html,body').animate({
                scrollTop: $(".map-wrapper").offset().top
            }, 'slow');
            return false;
        });
    })();
});