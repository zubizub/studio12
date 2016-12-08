<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

</div></div></div>

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

<div class="top <?if ($APPLICATION->GetCurPage()== '/'): ?>load-top-animate<? endif; ?>">
    <ul class="top__list">
        <li class="top__item">
            <span class="top__text">Москва, СВАО,</span><br>
            <a href="#" class="top__link">12-й пр. Марьиной Рощи 8</a>
        </li>
        <li class="top__item">
            <span class="top__text">+7 495 780-40-40</span><br>
            <a href="#" class="top__link">Обратный звонок</a>
        </li>
        <li class="top__item">
            <span class="top__text">Фотографии</span><br>
            <a href="#" class="top__link">лофтов</a>
        </li>
        <li class="top__item">
            <span class="top__text">Как проехать</span><br>
            <a href="#" class="top__link">в Showroom</a>
        </li>
        <li class="top__item">
            <span class="top__text">1-ая очередь:</span><br>
            <a href="#" class="top__link">Корпус 2-2</a>
        </li>
    </ul>
</div>
<button class="nav-toggle <?if ($APPLICATION->GetCurPage()== '/'): ?>fade-animate fade-in<? endif; ?>" type="button">
    <div class="nav-toggle__bar nav-toggle__bar_test"></div>
</button>
<div class="logo-fix <?if ($APPLICATION->GetCurPage()== '/'): ?>fade-animate fade-in<? endif; ?>"></div>
<div class="controls controls--our <?if ($APPLICATION->GetCurPage()== '/'): ?>fade-animate fade-in<? endif; ?>">
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
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/ajax.js" type="text/javascript"></script>
<?if ($APPLICATION->GetCurPage()== '/'): ?>
<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js" type="text/javascript"></script>
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


</body>
</html>

