<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<?
if (is_array($arResult['ITEMS']) && count($arResult['ITEMS']) > 0):
?>

<? //print_r($arResult['AJAX']);?>

<? if (!$arResult['AJAX']) : ?>

<div id="loft-table" class="section section--lofts is-colored">
    <div class="box" style="">
        <svg class="dynamic" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1165px" height="1500px" viewbox="0 0 1165 1500" enable-background="new 0 0 1165 1500" xml:space="preserve" preserveAspectRatio="xMinYMin meet" style='width: 100%; height: 5000px;'>
            <path class="path" id="building"></path>
            <path class="path" id="building2"></path>
            <path class="path" id="building3"></path>
        </svg>
    </div>
    <div class="section__inner">
        <div class="offers-loft">
            <? include ('svg.php'); ?>
            <div class="lots">
                <div class="lots__list">
                    <div class="lots__inner">
                        <div class="lot lot--header">
                            <div class="lot__value-1"><a href="#" class="lot-sort link-animate" data-sort="number">Лот</a></div>
                            <div class="lot__value-2"><a href="#" class="lot-sort link-animate" data-sort="type">Тип</a></div>
                            <div class="lot__value-3"><a href="#" class="lot-sort link-animate" data-sort="floor">Этаж</a></div>
                            <div class="lot__value-4"><a href="#" class="lot-sort link-animate" data-sort="area">Площадь, М2</a></div>
                            <div class="lot__value-5"><a href="#" class="lot-sort link-animate" data-sort="price">Цена за М2</a></div>
                            <div class="lot__value-6"><a href="#" class="lot-sort link-animate" data-sort="cost">Стоимость</a></div>
                            <div class="lot__value-7"><a href="#" class="lot-sort link-animate" data-sort="status">Статус</a></div>
                        </div>
                        <div class="ajaxLofts" id="ajaxLofts">


                        <?
endif;

  $i = 0;
  $count = 0;
  foreach ($arResult['ITEMS'] as $arItem):
?>
                        <!-- <pre><?//print_r($arItem['PROPS']);?></pre>  -->
                        <? unset ($additionClass);  if ($arItem['PROPS']['STATUS']['VALUE'] == 'Продано') { $additionClass = 'lot--disabled'; } ?>
                        <? if ($i >= 6) :?>

                        <div class="lots__hidden">
                            <?endif;?>

                            <a
                                    class="lot ajaxLotItem <?=$additionClass;?>"
                                    href="<?=$arItem['DETAIL_URL']?>"
                                    el="<?=$arItem['ID'];?>"
                                    lot="<?=$arItem['PROPS']['LOT']['VALUE'];?>"
                                    object-id="<?=$arItem['PROPS']['SITE_ID']['VALUE'];?>">
                                <div class="lot__value-1"
                                     data-lot-value="Лот"><?=$arItem['PROPS']['LOT']['VALUE'];?></div>
                                <div class="lot__value-2" data-lot-value="Тип">
                            <span class="lot__styles">
                              <span class="lot__style-1"><?=$arItem['PROPS']['TYPE']['VALUE'];?></span>
                              <span class="lot__style-2"><?=$arItem['PROPS']['ENTER']['VALUE'];?></span>
                            </span>
                                </div>
                                <div class="lot__value-3"
                                     data-lot-value="Этаж"><?=$arItem['PROPS']['AREA']['VALUE'];?></div>
                                <div class="lot__value-4"
                                     data-lot-value="Площадь, М2"><?=$arItem['PROPS']['STAGE']['VALUE'];?></div>
                                <div class="lot__value-5"
                                     data-lot-value="Цена за М2"><?=$arItem['PROPS']['SQUARE_COST']['VALUE'];?></div>
                                <div class="lot__value-6"
                                     data-lot-value="Стоимость"><?=$arItem['PROPS']['PRICE']['VALUE'];?></div>
                                <div class="lot__value-7"
                                     data-lot-value="Статус"><?=$arItem['PROPS']['STATUS']['VALUE'];?></div>
                            </a>
                            <? if ($i >= 6) :?>

                        </div>
                        <?$count++;endif;$i++;?>
                        <?
	endforeach;
?>

<? if (!$arResult['AJAX']) : ?>
                        </div>
                    </div>

                    <div class="lots__inner">
                        <div class="lots__inner">
                            <div class="lots__control"><a class="more-items">Еще <span><?=$count;?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ajaxPopup">

                <div class="popup popup--loft"></div>
                <div class="popup popup--email">

                    <div class="popup__inner">
                        <div class="popup__title">Отправить письмо</div>
                        <div class="popup__desc">Укажите адрес электронной почты,<br> на который необходимо отправить
                            письмо.
                        </div>
                        <form class="form" id="sendEmailForm" action="#">
                            <div class="form__row">
                                <input class="form__input" type="email" name="email" placeholder="E-mail" required>
                            </div>
                            <div class="form__row">
                                <input class="form__submit btn btn--md btn--yellow" type="submit" value="Отправить">
                            </div>
                        </form>
                    </div>
                    <button class="popup__close"></button>
                </div>
                <div class="popup popup--callback">
                    <div class="popup__inner">
                        <div class="popup__title">Обратный звонок</div>
                        <div class="popup__desc">Укажите свой контактный телефон, и наш специалист свяжется с вами в
                            удобное для вас время.
                        </div>
                        <form class="form" id="callbackForm" action="#">
                            <div class="form__group">
                                <div class="form__col">
                                    <div class="form__field">
                                        http://dev12.korovets.ru/quarters/?bitrix_include_areas=Y&clear_cache_session=Y&clear_cache=Y
                                        <input class="form__input" type="text" name="name" placeholder="Как Вас зовут"
                                               required>
                                    </div>
                                    <div class="form__field">
                                        <input class="form__input js-phone-mask" type="text" name="phone"
                                               placeholder="+7 (___) ___-__-__" required>
                                    </div>
                                    <div class="form__group form__group--inner">
                                        <div class="form__col">
                                            <div class="form__field form__select-wrap">
                                                <select class="form__select" name="fromClock" data-placeholder="С"
                                                        required>
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
                                                <select class="form__select" name="toClock" data-placeholder="До"
                                                        required>
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
                                        <textarea class="form__textarea" name="comments" placeholder="Комментарий"
                                                  required></textarea>
                                    </div>
                                    <div class="form__field">
                                        <input class="form__submit btn btn--md btn--yellow" type="submit"
                                               value="Отправить">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <button class="popup__close"></button>
                </div>

            </div>
        </div>

    </div>

    <div>
        <?
    endif;
endif;
?>
