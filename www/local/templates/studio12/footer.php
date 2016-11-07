<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

</div></div></div>


<div class="controls">
    <a class="controls__photos" href="#"></a>
    <a class="controls__queue" href="#"></a>
    <a class="controls__shoowroom" href="#"></a>
    <a class="controls__phone" href="#"></a>
    <a class="controls__place" href="#"></a>
    <a class="controls__metro-nav" href="#"></a>
</div>

<?if ($APPLICATION->GetCurPage()== '/'): ?>
<button class="nav-toggle" type="button">
    <div class="nav-toggle__bar"></div>
</button>

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
                        class="link nav__link btn-callback-room" href="#">Studio#8</a></span></div>
            </div>
        </div>
    </div>
</div>

<div class="footer footer_fixed">
    <div class="footer__inner">
        <div class="nav">
            <div class="nav__inner">
                <div class="nav__item nav__item--place-yellow"><span class="nav__item-text">Москва, СВАО, <br><a
                        class="link nav__link btn-map-get" href="#">12-й пр. Марьиной Рощи&nbsp;8</a></span></div>
                <div class="nav__item nav__item--phone-yellow"><span class="nav__item-text">+7 495 780-40-40<span
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
                    <div class="form__group form__group--inner">
                        <div class="form__col">
                            <div class="form__field form__select-wrap">
                                <select class="form__select" name="fromClock" data-placeholder="С" required>
                                    <option value=""></option>
                                    <option value="0:00">0:00</option>
                                    <option value="1:00">1:00</option>
                                    <option value="2:00">2:00</option>
                                    <option value="3:00">3:00</option>
                                    <option value="4:00">4:00</option>
                                    <option value="5:00">5:00</option>
                                    <option value="6:00">6:00</option>
                                    <option value="7:00">7:00</option>
                                    <option value="8:00">8:00</option>
                                    <option value="9:00">9:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                    <option value="23:00">23:00</option>
                                </select>
                            </div>
                        </div>
                        <div class="form__col">
                            <div class="form__field form__select-wrap">
                                <select class="form__select" name="toClock" data-placeholder="До" required>
                                    <option value=""></option>
                                    <option value="0:00">0:00</option>
                                    <option value="1:00">1:00</option>
                                    <option value="2:00">2:00</option>
                                    <option value="3:00">3:00</option>
                                    <option value="4:00">4:00</option>
                                    <option value="5:00">5:00</option>
                                    <option value="6:00">6:00</option>
                                    <option value="7:00">7:00</option>
                                    <option value="8:00">8:00</option>
                                    <option value="9:00">9:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                    <option value="23:00">23:00</option>
                                </select>
                            </div>
                        </div>
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

</div>
<script src="<?=SITE_TEMPLATE_PATH?>/dist/js/vendor.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.backstretch.min.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js" type="text/javascript"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/ajax.js" type="text/javascript"></script>
</body>
</html>

