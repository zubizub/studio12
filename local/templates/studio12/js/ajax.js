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
                        $('.detail').each(function () {
                            var self = this,
                                $box = $('.detail__about', self),
                                $hidden = $('.detail__hidden', self),
                                $more = $('.detail__more', self);
                            $more.on('click', function () {
                                $box.toggleClass('is-open');
                                $hidden.slideToggle(150);
                                return false;
                            });
                        });

                        $('.callback-me').on('click', function () {

                            $('.popup--callback').bPopup({
                                closeClass: 'popup__close',
                                onOpen: function () {
                                    //console.log('callback-me');
                                    var action = 'feedbackForm';
                                    $.post("/quarters/ajax.php", {lot: lot, action: action})
                                        .done(function (data) {
                                            $('.popup--callback').html(data);
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


                        $(".photo-gallery").each(function () {

                            $('.photo-gallery__content', this).slick({
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                prevArrow: $('.photo-gallery__prev', this),
                                nextArrow: $('.photo-gallery__next', this),
                                arrows: true,
                                slide: '.photo-gallery__item',
                                infinite: true
                                //adaptiveHeight: true,
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

                        $(window).trigger("resize");

                    });
            }
        });
        return false;
    });
    

    $('.lots .lot-sort').click(function(event) {
        event.preventDefault();
        var action = 'loft-sort';
        var sortBy = $(this).attr('data-sort');

        console.log(action);
        console.log(sortBy);


         $.post("/quarters/ajax.php", {

                sortBy: sortBy,
                action: action,
                AJAX: 1

            })
            .done(function (data) {
               console.log(data);
               // $('.loft-types__content').html(data);
                
                
            });

        return false;

    });



});