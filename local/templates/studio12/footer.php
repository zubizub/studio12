<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

</div></div></div>

<div class="logo-fix"></div>

<?if ($APPLICATION->GetCurPage()== '/'): ?>
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
                    <span class="nav__item-text">Shoowroom: Studio#8</span>
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

                                                <div class="bubble">
                                                    <div class="bubble__label">Акция</div>
                                                    <div class="bubble__value">-10%</div>
                                                    <div class="bubble__explain">от цены <br> лофта</div>
                                                    <div class="bubble__pointer"></div>
                                                </div>
                                            </div>
                                            <a class="offer__act" href="#s">
                                                <div class="offer__label offer__label--desktop">Супер-маркет лофтов
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
        <form class="form" id="callbackFormShowRoom" action="#">
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
                        <input class="form__submit btn btn--md btn--yellow" type="submit" value="Отправить">
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
                    <div class="loft-types__content">
                        <div class="loft-types__slide">
                            <div class="loft-types__caption">
                                <div class="loft-types__page"><span class="loft-types__page-num">1</span><span class="yellow">–<span class="loft-types__page-total">7</span></span></div>
                            </div>
                            <div class="loft-types__list">
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/cam01.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/cam02.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/cam03.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/cam04.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/cam05.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/cam06.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/cam07.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                            </div>
                        </div>
                        <div class="loft-types__slide">
                            <div class="loft-types__caption">
                                <div class="loft-types__page"><span class="loft-types__page-num">1</span><span class="yellow">–<span class="loft-types__page-total">10</span></span></div>
                            </div>
                            <div class="loft-types__list">
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/pcam1.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/pcam2.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/pcam3.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/pcam4.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/pcam5.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/pcam6.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/pcam7.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/pcam8.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/pcam9.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/pcam10.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                            </div>
                        </div>
                        <div class="loft-types__slide">
                            <div class="loft-types__caption">
                                <div class="loft-types__page"><span class="loft-types__page-num">1</span><span class="yellow">–<span class="loft-types__page-total">11</span></span></div>
                            </div>
                            <div class="loft-types__list">
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/kcam01.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/kcam02.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/kcam03.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/kcam04.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/kcam05.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/kcam06.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/kcam07.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/kcam08.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/kcam09.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/kcam10.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/kcam11.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                            </div>
                        </div>
                        <div class="loft-types__slide">
                            <div class="loft-types__caption">
                                <div class="loft-types__page"><span class="loft-types__page-num">1</span><span class="yellow">–<span class="loft-types__page-total">10</span></span></div>
                            </div>
                            <div class="loft-types__list">
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lcam02.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lcam03.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lcam04.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lcam05.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lcam06.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lcam07.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lcam08.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lcam09.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lcam10.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lcam11.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                            </div>
                        </div>
                        <div class="loft-types__slide">
                            <div class="loft-types__caption">
                                <div class="loft-types__page"><span class="loft-types__page-num">1</span><span class="yellow">–<span class="loft-types__page-total">9</span></span></div>
                            </div>
                            <div class="loft-types__list">
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/zcam1.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/zcam2.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/zcam3.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/zcam4.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/zcam5.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/zcam6.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/zcam7.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/zcam8.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/zcam9.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                            </div>
                        </div>
                        <div class="loft-types__slide">
                            <div class="loft-types__caption">
                                <div class="loft-types__page"><span class="loft-types__page-num">1</span><span class="yellow">–<span class="loft-types__page-total">6</span></span></div>
                            </div>
                            <div class="loft-types__list">
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/studio12_1.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/studio12_2.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/studio12_3.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/studio12_4.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/studio12_5.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/studio12_6.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                            </div>
                        </div>
                        <div class="loft-types__slide">
                            <div class="loft-types__caption">
                                <div class="loft-types__page"><span class="loft-types__page-num">1</span><span class="yellow">–<span class="loft-types__page-total">7</span></span></div>
                            </div>
                            <div class="loft-types__list">
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lgam01.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lgam02.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lgam03.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lgam04.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lgam05.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lgam06.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/lgam07.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                            </div>
                        </div>
                        <div class="loft-types__slide">
                            <div class="loft-types__caption">
                                <div class="loft-types__page"><span class="loft-types__page-num">1</span><span class="yellow">–<span class="loft-types__page-total">4</span></span></div>
                            </div>
                            <div class="loft-types__list">
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/vcam1.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/vcam2.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/vcam3.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                                <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/img/vcam4.jpg" alt="#">
                                    <div class="loft-types__row"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loft-types__desc popup-gallery">
                        <a href="#" class="loft-types-slide-go">→</a>
                        <div class="loft-types__tabs">
                            <div class="loft-types__tab">Классические  брутальные лофты</div>
                            <div class="loft-types__tab">Просторные уютные студии</div>
                            <div class="loft-types__tab">Комфортные двухуровневые лофты</div>
                            <div class="loft-types__tab">Лофты с личным  входоми двориком</div>
                            <div class="loft-types__tab">Залитые солнцем мансарды</div>
                            <div class="loft-types__tab">Лофт-квартал Studio#12</div>
                            <div class="loft-types__tab">Лофты с личным входом и двориком</div>
                            <div class="loft-types__tab">Входная группа</div>
                        </div>
                    </div>
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
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73821457-3', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>

