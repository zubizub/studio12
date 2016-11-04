<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

</div></div></div>

<button class="nav-toggle" type="button">
    <div class="nav-toggle__bar"></div>
</button>

<div class="controls">
    <a class="controls__photos" href="#"></a>
    <a class="controls__queue" href="#"></a>
    <a class="controls__shoowroom" href="#"></a>
    <a class="controls__phone" href="#"></a>
    <a class="controls__place" href="#"></a>
    <a class="controls__metro-nav" href="#"></a>
</div>

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
                <div class="nav__item nav__item--photos"><span class="nav__item-text"><a class="link nav__link"
                                                                                         href="#">Фотографии</a> лофтов</span>
                </div>
                <div class="nav__item nav__item--queue"><span class="nav__item-text">1-ая очередь: <a
                        class="link nav__link" href="#">Январь/2017 г.</a></span></div>
                <div class="nav__item nav__item--shoowroom"><span class="nav__item-text">Shoowroom: <a
                        class="link nav__link" href="#">Studio#8</a></span></div>
            </div>
        </div>
    </div>
</div>

<div class="footer footer_fixed">
    <div class="footer__inner">
        <div class="nav">
            <div class="nav__inner">
                <div class="nav__item nav__item--place-yellow"><span class="nav__item-text">Москва, СВАО, <br><a
                        class="link nav__link" href="#">12-й пр. Марьиной Рощи&nbsp;8</a></span></div>
                <div class="nav__item nav__item--phone-yellow"><span class="nav__item-text">+7 495 780-40-40<span
                        class="hidden-lg-xl-down"> | </span><br><a class="link nav__link btn-callback" href="#">Заказать обратный
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
                                            <div class="offer__label offer__label--desktop">Супер-маркет лофтов</div>
                                            <!--<div class="offer__label offer__label--mobile">Супер-маркет лофтов</div>-->
                                            <img class="offer__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/intro-offer.png" alt="#">
                                        </a>
                                    </div>
                                </div>
                            </span>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<script src="<?=SITE_TEMPLATE_PATH?>/dist/js/vendor.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js" type="text/javascript"></script>
</body>
</html>

