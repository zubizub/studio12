


$(document).ready(function () {

$(document).on('click','.fullscreen-by-hash', function(){

        hash = $(this).attr('href');
       $('.gallery-block').show();
        arHash = hash.split('-');
       sectionCode = arHash[0].slice(1);
       slideIndex = parseInt(arHash[1]);
       //$(".loft-types__tab.slick-slide.slick-active[data-code='" + sectionCode + "']").click();
       $(".loft-types__tab.slick-slide[data-code='" + sectionCode + "']").click();
       //console.log(section);
       console.log(slideIndex);
    

        $('.loft-types__content').slick({
                slickGoTo: slideIndex
        });

});




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


    
    $('.fullscreen-hash').click(function(){

        var hash = window.location.hash;
        $('ul'+hash+':first').show();


 window.location.hash = id;



    })



      
/*$(document).on('click', '.loft-types__tab a', function () {
        var action = 'loadGallerySection';
        var section = $(this).attr('data-section');

        console.log(action);


         $.post("/quarters/ajax.php?SECTION="+section, {

                data: section,
                action: action,
                
            })
            .done(function (data) {
               console.log(data);
               //$('#slide'+section).slick('unslick');
               //$('#slide'+section+' .loft-types__list').html(data);
               $('.loft-types__content').html(data);
               //$('#slide'+section).slick('reinit');

                  $('#slide'+section+' .loft-types__list').slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: false,
            swipe: true,
            touchMove: true,
            fade: true,
           // asNavFor: '.loft-types__tabs'
            //autoplay: true,
            //autoplaySpeed: 10000
        });

            });

        return false;

    });
*/

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
                        $('.popup--loft [class*=popup-an--js-]').addClass('popup-an--run');
                        setTimeout(function () {
                            $('.popup--loft .popup-an-dom').addClass('popup-an-dom--run');
                            $('.popup--loft').has('.photo-gallery').addClass('popup--scroll');
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
                                            $('.popup--callback [class*=popup-an--js-]').addClass('popup-an--run');
                                            setTimeout(function () {
                                                $('.popup--callback .popup-an-dom').addClass('popup-an-dom--run');
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
                                    $('.popup--callback [class*=popup-an--js-]').removeClass('popup-an--run');
                                    $('.popup--callback .popup-an-dom').removeClass('popup-an-dom--run');
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
                                            $(window).trigger("resize");
                                            $('.popup--email [class*=popup-an--js-]').addClass('popup-an--run');
                                            setTimeout(function () {
                                                $('.popup--email .popup-an-dom').addClass('popup-an-dom--run');
                                            }, 500);
                                    });
                                },
                                onClose: function() {
                                    $('.popup--email [class*=popup-an--js-]').removeClass('popup-an--run');
                                    $('.popup--email .popup-an-dom').removeClass('popup-an-dom--run');
                                }
                            });
                            return false;
                        });
                    });
            },
            onClose: function() {
                $('.popup--loft [class*=popup-an--js-]').removeClass('popup-an--run');
                $('.popup--loft .popup-an-dom').removeClass('popup-an-dom--run');
                $('.popup--loft').removeClass('popup--scroll ');
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
                        $('.popup--callback [class*=popup-an--js-]').addClass('popup-an--run');
                        setTimeout(function () {
                            $('.popup--callback .popup-an-dom').addClass('popup-an-dom--run');
                        }, 500);

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
                $('.popup--callback [class*=popup-an--js-]').removeClass('popup-an--run');
                $('.popup--callback .popup-an-dom').removeClass('popup-an-dom--run');
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