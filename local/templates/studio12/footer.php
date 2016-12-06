<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

</div></div></div>

<div class="logo-fix"></div>

<? print_r($APPLICATION->GetCurPage());?>

<?if ($APPLICATION->GetCurPage()== '/' || $APPLICATION->GetCurPage()== '/dev/'): ?>
<div class="mouse">
    <div class="mouse__item">
        <img style="margin-bottom: 9px;" src="<?=SITE_TEMPLATE_PATH?>/dist/img/scrollme.png" alt=""/><br/>
        <img style="margin-bottom: 13px;" src="<?=SITE_TEMPLATE_PATH?>/dist/img/scrollme.png" alt=""/>
    </div>
    <div class="mouse__item-img">
        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/scrollme-anim.png" alt=""/>
    </div>
    <div class="mouse__item mouse__item-text">
        крутите скролл
    </div>
</div>

<div class="header header_fixed">
    <div class="header__inner">
        <div class="nav">
            <div class="nav__inner">
                <div class="nav__item nav__item--photos"><span class="nav__item-text"><a class="link nav__link get-gallery-block" href="#">Фотографии</a> лофтов</span>
                </div>
                <div class="nav__item nav__item--queue"><span class="nav__item-text">1-ая очередь: <a class="link nav__link queue__act" href="#">Корпус 2-2</a></span></div>
                <div class="nav__item nav__item--shoowroom">
                    <!-- <span class="nav__item-text">Shoowroom: Studio#8</span> -->
                    <span class="nav__item-text">Как проехать в <a href="javascript:void(0);" class="btn-showroom">Showroom</a></span>
                    <!--<a class="link nav__link btn-callback-room" href="#">Studio#8</a>-->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer footer_fixed">
    <div class="footer__inner">
        <div class="nav">
            <div class="nav__inner">
                <div class="nav__item nav__item--place-yellow"><span class="nav__item-text">Москва, СВАО, <br>12-й пр. Марьиной Рощи&nbsp;8</span></div>
                <div class="nav__item nav__item--phone-yellow"><span class="nav__item-text"> <span class="call_phone_1">+7 495 780-40-40</span><span
                        class="hidden-lg-xl-down"> | </span><br><a class="link nav__link btn-callback" href="#">Заказать
                    обратный
                    звонок</a></span></div>
                <div class="nav__item">
                                <span class="nav__item-text">
                                    <div class="footer__side">
                                        <div class="offer">
                                            <div class="offer__title">
                                                <!--<span class="offer__title-desktop">Супер-маркет лофтов</span>--><span
                                                    class="offer__title-mobile">Креативный <br>лофт-квартал</span>

                                                <!-- <div class="bubble">
                                                    <div class="bubble__label">Акция</div>
                                                    <div class="bubble__value">-10%</div>
                                                    <div class="bubble__explain">от цены <br> лофта</div>
                                                    <div class="bubble__pointer"></div>
                                                </div> -->
                                            </div>
                                            <a class="offer__act" href="#s">
                                                <div class="offer__label offer__label--desktop">Выбрать лофт
                                                </div>
                                                <!--<div class="offer__label offer__label--mobile">Супер-маркет лофтов</div>-->
                                                <img class="offer__img"
                                                     src="<?=SITE_TEMPLATE_PATH?>/dist/img/intro-offer.png" alt="#">
                                            </a>
                                        </div>
                                    </div>
                                </span>
                </div>
            </div>
        </div>
    </div>
</div>
<? endif; ?>

<div class="modal popup--map">
    <div class="popup__inner">
        <img src="<?=SITE_TEMPLATE_PATH?>/dist/img/test-map.jpg" alt="#">
    </div>
    <button class="popup__close"></button>
</div>

<div class="popup popup--showroom">
    <div class="popup__cover">
        <span class="popup__cover-title">Посетить Showroom</span>
    </div>
    <div class="popup__inner">
        <div class="popup__desc">Выберите время для посещения Showroom Studio#8</div>
        <form class="form" id="callbackFormShowRoom" action="">
            <div class="form__group">
                <div class="form__col">
                    <div class="form__field">
                        <input class="form__input" type="text" name="name" placeholder="Как Вас зовут" required>
                    </div>
                    <div class="form__field">
                        <input class="form__input js-phone-mask" type="text" name="phone" placeholder="+7 (___) ___-__-__" required>
                    </div>
                    <div class="form__field">
                        <input class="form__input" type="email" name="email" placeholder="Введите ваш Email" required>
                    </div>
                </div>
                <div class="form__col">
                    <div class="form__field">
                        <textarea class="form__textarea" name="comments" placeholder="Комментарий" required></textarea>
                    </div>
                    <div class="form__field">
                        <input class="form__submit btn btn--md btn--yellow" type="submit" value="Отправить" 
                        onClick="callBackComagic($('#callbackFormShowRoom'));">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <button class="popup__close"></button>
</div>


<div class="gallery-block">
    <button class="gallery-block__close"></button>
    <div class="loft-types">
        <div class="wrapper">
            <div class="inner">
                <div class="loft-types__inner">
                    
  <?$APPLICATION->IncludeComponent(
    "bitrix:dw.catalog.categories", 
    "mini-slider", 
    array(
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000",
        "CACHE_TYPE" => "A",
        "IBLOCK_BINDING" => "section",
        "IBLOCK_ID" => "7",
        "LIMIT" => "50",
        "IBLOCK_TYPE" => "info",
        "COMPONENT_TEMPLATE" => "mini-slider",
        "SECTION" => "6"
    ),
    false
);?>


                </div>
            </div>
        </div>
    </div>
</div>

</div>

<button class="nav-toggle" type="button">
    <?if ($APPLICATION->GetCurPage()== '/'): ?>
    <div class="nav-toggle__bar"></div>
    <?else:?>
    <div class="nav-toggle__bar nav-toggle__bar_test"></div>
    <? endif; ?>
</button>

<?if ($APPLICATION->GetCurPage()== '/'): ?>
<div class="controls">
<?else:?>
<div class="controls controls--our">
    <? endif; ?>
    <a class="controls__phone btn-callback" href="#"></a>
    <!--<a class="controls__photos get-gallery-block" href="#"></a>-->
    <!--<a class="controls__queue" href="#"></a>-->
    <!--<a class="controls__shoowroom" href="#"></a>-->
    <!--<a class="controls__place" href="#"></a>-->
    <!--<a class="controls__metro-nav" href="#"></a>-->
</div>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter37374330 = new Ya.Metrika({
                    id:37374330,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37374330" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script src="<?=SITE_TEMPLATE_PATH?>/dist/js/vendor.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.backstretch.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/ajax.js" type="text/javascript"></script>
<?if ($APPLICATION->GetCurPage()== '/'): ?>
<?else:?>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.waypoints.min.js" type="text/javascript"></script>
<? endif; ?>
   

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73821457-3', 'auto');
  ga('send', 'pageview');

</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WP4D8R4');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WP4D8R4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<!-- Top100 (Kraken) Counter -->
<script>
(function (w, d, c) {
    (w[c] = w[c] || []).push(function() {
        var options = {
            project: 4450753
        };
        try {
            w['t4450753'] = new top100(options);
        } catch(e) { }
    });
    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src =
        (d.location.protocol == "https:" ? "https:" : "http:") +
        "//st.top100.ru/top100/top100.js";
    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(window, document, "_top100q");
</script>
<!-- END Top100 (Kraken) Counter -->


<!-- Top100 (Kraken) Counter -->
<script>
(function (w, d, c) {
  (w[c] = w[c] || []).push(function() {
      var goals = {
        'goal': 'call'
      };  
      var options = {
          project: 4450753,
          custom_vars: goals
      };
      try {
          w['t4450753'] = new top100(options);
      } catch(e) { }
  });
 
  var n = d.getElementsByTagName("script")[0],
      s = d.createElement("script"),
      f = function () { n.parentNode.insertBefore(s, n); };
  s.type = "text/javascript";
  s.async = true;
  s.src =
      (d.location.protocol == "https:" ? "https:" : "http:") +
      "//st.top100.ru/top100/top100.js";
 
  if (w.opera == "[object Opera]") {
      d.addEventListener("DOMContentLoaded", f, false);
  } else { f(); }
})(window, document, "_top100q");
</script>
<!-- END Top100 (Kraken) Counter -->

<?if ($APPLICATION->GetCurPage()== '/'): ?>
<script>
    (function () {
        var wh = window.outerHeight,
                ww = window.innerWidth,
                wIh = window.innerHeight / 4,
                wIh1 = window.innerHeight,
                bw = $('.box').width() / 2, sectionHeight = $('.section--slogan .box').height(),
                shStart = 1500,
                shIntro = 1500,
                sh = 1500,
                speed = 0,
                $start = $('#start'),
                $intro = $('#intro'),
                $head = $('#head'),
                $tagline = $('#tagline'),
                $tagline2 = $('#tagline2'),
                $tagline3 = $('#tagline3'),
                $building = $('#building'),
                $building2 = $('#building2'),
                $building3 = $('#building3');

        if ($start.length && $intro.length && $head.length && $tagline.length && $tagline2.length && $tagline3.length && $building.length && $building2.length && $building3.length) {
        }

        $start.attr({ 'd': 'M0,16 H582.5 V500' });
        $intro.attr({ 'd': 'M582.5,0 582.5,80 742.5,250 742.5,290 387.5,290 387.5,370 582.5,560 582.5,' + (wIh * 2 + 8000) });
        $head.attr({ 'd': 'M582.5,0 V7000' });
        $tagline.attr({ 'd': 'M480.5,0 480.5,' + wIh + ' 743.61111,' + wIh * 2 + ' 743.61111,' + (wIh + 600 + 5245) });
        // $tagline.attr({ 'd': 'M742.5,0 742.5,' + wIh + ' 419.5,500 419.5,' + (wIh + 500 + 145) });
        $tagline2.attr({ 'd': 'M242.5,-50 380.5,67 380.5,200 310.5,260 310.5,380 200.5,450 200.5,5000' });
        $tagline3.attr({ 'd': 'M2042.5,1200 1130.5,70 950.5,250 950.5,400 1050.5,500 1050.5,5000' });
        $building.attr({ 'd': 'M743.61111,0L743.61111,79.86111L633.83333,191.11111L373.83333,193.33332L195.55556,364.44443L312.22223,484.55555L350,444.44444L592.22223,682.22222L971.11112,306.66666L743.61112,82.33334' });
        $building2.attr({ 'd': 'M200.5,0 200.5,100 -10,300' });
        $building3.attr({ 'd': 'M1050.5,0 1050,100 1200,250 880.5,580 1500,1200' });
        $(window).on('resize.dynamics', function () {
            var wIh = window.innerHeight / 4;
            $start.attr({ 'd': 'M0,16 H582.5 V500' });
            $intro.attr({ 'd': 'M582.5,0 582.5,80 742.5,250 742.5,290 387.5,290 387.5,370 582.5,560 582.5,' + (wIh * 2 + 8000) });
            $head.attr({ 'd': 'M582.5,0 V7000' });
            $tagline.attr({ 'd': 'M480.5,0 480.5,' + wIh + ' 743.61111,' + wIh * 2 + ' 743.61111,' + (wIh + 600 + 5245) });
            //$tagline.attr({ 'd': 'M742.5,0 742.5,' + wIh + ' 419.5,500 419.5,' + (wIh + 500 + 145) });
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
                strokeDashoffset: 6000,
                ease: Linear.easeNone
            });
            introEnd.eventCallback('onComplete', function () {
                $('#fp-nav').addClass('intro-anim--visible');
                $.fn.fullpage.moveSectionDown();    //$(window).trigger('resize');
                //$.fn.fullpage.moveSectionDown();    //2
            });
        });

        $('.offer__act').add('.queue__act').on('click', function() {
            $.fn.fullpage.moveTo('s-lofts');
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
            }, 500);    //10000 = 10 секунд
            $('.lots-infographics__number').animateNumber({ number: 76 });
            return false;
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
                    TweenLite.to($head, 10, {
                        strokeDashoffset: 0,
                        ease: Linear.easeNone
                    });
                } else if (index == 4 && direction == 'down') {
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
                } else if (index == 5 && direction == 'down') {
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
                    }, 2000);    //10000 = 10 секунд
                } else if (nextIndex == 2 && direction == 'up') {
                    return false;
                } else if (nextIndex == 3 && direction == 'up') {
                    return false;
                }
                if (index == 5) {
                    setTimeout(function () {
                        //var offers = $('.ajaxLotItem ').length;

                        $('.lots-infographics__number').animateNumber({ number: 76 });
                    }, 500);
                } else {
                    $('.lots-infographics__number').animateNumber({ number: 0 });
                }
            },
            afterLoad: function (anchorLink, index) {
                if (index == 4) {
                    $('.number72').animateNumber({ number: 72 });
                    $('.number142').animateNumber({ number: 142 });
                    $('.number40').animateNumber({ number: 40 });
                    $('.number300').animateNumber({ number: 300 });
                    $('.number6').animateNumber({ number: 8 });
                } else {
                    $('.number').animateNumber({ number: 0 });
                }

                if (index == 3) {
                    setTimeout(function() {
                        $.fn.fullpage.moveSectionDown();
                    }, 1500);
                }

            }
        });
    }());
</script>
<?else:?>
    <script>
        (function () {
            var wh = window.outerHeight,
                    ww = window.innerWidth,
                    wIh = window.innerHeight / 4,
                    wIh1 = window.innerHeight,
                    bw = $('.box').width() / 2, sectionHeight = $('.section--slogan .box').height(),
                    shStart = 1500,
                    shIntro = 1500,
                    sh = 1500,
                    speed = 0,
                    $tagline = $('#tagline'),
                    $tagline2 = $('#tagline2'),
                    $tagline3 = $('#tagline3'),
                    $building = $('#building'),
                    $building2 = $('#building2'),
                    $building3 = $('#building3');

            if ($tagline.length && $tagline2.length && $tagline3.length && $building.length && $building2.length && $building3.length) {
            }
            $tagline.attr({ 'd': 'M480.5,0 480.5,' + wIh + ' 743.61111,' + wIh * 2 + ' 743.61111,' + (wIh + 600 + 5245) });
            // $tagline.attr({ 'd': 'M742.5,0 742.5,' + wIh + ' 419.5,500 419.5,' + (wIh + 500 + 145) });
            $tagline2.attr({ 'd': 'M242.5,-50 380.5,67 380.5,200 310.5,260 310.5,380 200.5,450 200.5,5000' });
            $tagline3.attr({ 'd': 'M2042.5,1200 1130.5,70 950.5,250 950.5,400 1050.5,500 1050.5,5000' });
            $building.attr({ 'd': 'M743.61111,0L743.61111,79.86111L633.83333,191.11111L373.83333,193.33332L195.55556,364.44443L312.22223,484.55555L350,444.44444L592.22223,682.22222L971.11112,306.66666L743.61112,82.33334' });
            $building2.attr({ 'd': 'M200.5,0 200.5,100 -10,300' });
            $building3.attr({ 'd': 'M1050.5,0 1050,100 1200,250 880.5,580 1500,1200' });
            $(window).on('resize.dynamics', function () {
                var wIh = window.innerHeight / 4;
                $tagline.attr({ 'd': 'M480.5,0 480.5,' + wIh + ' 743.61111,' + wIh * 2 + ' 743.61111,' + (wIh + 600 + 5245) });
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
                    offset: '100%'
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
                    offset: '100%'
                });
            });
        }());
    </script>
<? endif; ?>


</body>
</html>

