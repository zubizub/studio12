$(document).ready(function () {

$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};


    $(document).on('submit', '.popup .form', function () {
        var action = $(this).attr('id');
        var data = $(this).serialize();

        console.log(action);


         $.post("/quarters/ajax.php", {

                data: data,
                action: action
            })
            .done(function (data) {
               console.log(data);
               // $('.loft-types__content').html(data);
                var bPopup = $('.popup--callback').bPopup();
                var bPopup2 = $('.popup--email').bPopup();
                var bPopup3 = $('.popup--showroom').bPopup();
                bPopup.close();
                bPopup2.close();
                bPopup3.close();
                $('.popup .form').trigger('reset');
                $(".form__select").val(null).trigger("change");
            });

        return false;

    });


    $('.ajaxLotItem').on('click', function () {
        var el = $(this).attr('el');
        var lot = $(this).attr('lot');
        //console.log(el);
        var action = 'elementPopup';
        $('.popup--loft').bPopup({
            closeClass: 'popup__close',
            followSpeed: 100,
            onOpen: function () {

                $.post("/quarters/ajax.php", {
                        ELEMENT_ID: el,
                        action: action
                    })
                    .done(function (data) {
                        $('.popup--loft').html(data);
                        $(window).trigger("resize");
                        $('.popup--loft [class*=anim--js-]').addClass('anim--run');
                        setTimeout(function () {
                            $('.popup--loft .anim-dom').addClass('anim-dom--run');
                        }, 500);
                        $('.callback-me').on('click', function () {
                            $('.popup--callback').bPopup({
                                closeClass: 'popup__close',
                                onOpen: function () {
                                    var action = 'feedbackForm';
                                    $.post("/quarters/ajax.php", {lot: lot, action: action})
                                        .done(function (data) {
                                            $('.popup--callback').html(data);
                                            $(window).trigger("resize");
                                            $('.popup--callback [class*=anim--js-]').addClass('anim--run');
                                            setTimeout(function () {
                                                $('.popup--callback .anim-dom').addClass('anim-dom--run');
                                            }, 500);
                                            $('#lot').val(lot);
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
                                },
                                onClose: function() {
                                    $('.popup--callback [class*=anim--js-]').removeClass('anim--run');
                                    $('.popup--callback .anim-dom').removeClass('anim-dom--run');
                                }
                            });
                            return false;
                        });
                        $('.send_me_email').on('click', function () {
                            $('.popup--email').bPopup({
                                closeClass: 'popup__close',
                                onOpen: function () {
                                    console.log(el);
                                    var action = 'send_me_email';
                                    $.post("/quarters/ajax.php", {  ELEMENT_ID: el, action: action})
                                        .done(function (data) {
                                            $('.popup--email').html(data);
                                });
                            }
                            });
                            return false;
                        });
                    });
            },
            onClose: function() {
                $('.popup--loft [class*=anim--js-]').removeClass('anim--run');
                $('.popup--loft .anim-dom').removeClass('anim-dom--run');
            }
        });
        return false;
    });

    $('.btn-callback').on('click', function () {
        $('.popup--callback').bPopup({
            closeClass: 'popup__close',
            onOpen: function () {
                var action = 'feedbackForm';
                $.post("/quarters/ajax.php", {action: action})
                    .done(function (data) {
                        $('.popup--callback').html(data);
                        $(window).trigger("resize");
                        $('.popup--callback [class*=anim--js-]').addClass('anim--run');
                        setTimeout(function () {
                            $('.popup--callback .anim-dom').addClass('anim-dom--run');
                        }, 500);
                        $('.popup').each(function () {
                            var self = this;
                            $('.popup__close', this).on('click', function(){
                                $('.anim', self).removeClass('anim--run');
                                $('.anim-dom', self).removeClass('anim-dom--run');
                                $(this).removeClass('anim-dom--run');
                            });
                        });
                        $('#lot').val(lot);
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


    $('.lots .lot-sort').click(function(event) {
    
        event.preventDefault();
        var action = 'loft-sort';
        var sortBy = $(this).attr('data-sort');
        var direction = $(this).attr('data-direction');

        $(this).attr('data-direction','asc');

        if (direction == 'desc') { 
            $(this).attr('data-direction','asc');
        } else { 
            $(this).attr('data-direction','desc');
        }
        
        $(this).removeClass('active');
        $(this).addClass('active');

         $.post("/quarters/ajax.php?AJAX=1", {

                sortBy: sortBy,
                direction: direction,
                action: action,
                AJAX: 1

            })
            .done(function (data) {
               $('#ajaxLofts').html(data);
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
            });

        return false;

    });



});