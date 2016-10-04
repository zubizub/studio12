<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<?
if (is_array($arResult['ITEMS']) && count($arResult['ITEMS']) > 0):
?>

<div class="section section--lofts is-colored">
              <div class="section__inner">
                <div class="header">
                  <div class="header__inner">
                    <div class="nav">
                      <div class="nav__inner">
                        <div class="nav__item nav__item--photos"><span class="nav__item-text"><a class="link nav__link" href="#">Фотографии</a> лофтов</span></div>
                        <div class="nav__item nav__item--queue"><span class="nav__item-text">1-ая очередь: <a class="link nav__link" href="#">Январь/2017 г.</a></span></div>
                        <div class="nav__item nav__item--shoowroom"><span class="nav__item-text">Shoowroom: <a class="link nav__link" href="#">Studio#8</a></span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="offers-loft">
                  <div class="lofts">
                    <div class="lofts__scheme">
                      <svg class="lofts__map" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1200px" height="750px" viewbox="0 0 1200 750" enable-background="new 0 0 1200 750" xml:space="preserve">
                        <image width="1200" height="750" xlink:href="<?=SITE_TEMPLATE_PATH?>/dist/img/loft-plan.png"></image><a class="lofts__link" xlink:href="#" data-loft="1">
                          <path class="lofts__path" d="M325.5,368l-39,24.5L257,466 l5,14.5l-7.75,10.5L283,570.33l142,31.33l1.88-5.13l294.79,61.13l28.67-140.33L729,512l-19-13.33l-11.33-2.33l1-6l-157-28l-4-59.33 L325.5,368L325.5,368Z"></path></a><a class="lofts__link" xlink:href="#" data-loft="2-3">
                          <path class="lofts__path" d="M203,549.5 68,524.5 22.5,448.5 25.72,444.28 19.5,430 109.5,334.5 172.15,320.01 250,355 273.39,425.16 257,466 259.01,471.84Z"></path></a><a class="lofts__link" xlink:href="#" data-loft="3">
                          <path class="lofts__path" d="M1071.67,739.67 921.67,705 933,530 897.7,522.1 884.5,561.5 818,547.5 857.01,360.41 922.5,358.5 918.45,422.34 937.47,425 942.16,358.9 977.5,251 1037.5,241 1084.5,265 1096.9,427.06 1109,434.33 1099.66,463.05 1103.69,515.67 1115,517.67 1106.03,546.26 1112.06,625.02 1123.67,629 1113.68,646.28 1115,663.5Z"></path></a><a class="lofts__link" xlink:href="#" data-loft="2-2">
                          <path class="lofts__path" d="M635.67,217.67 635.67,306.33 584.33,438.33 540.6,431.6 538.67,403 325.5,368 286.5,392.5 273.39,425.16 250,355 237.3,349.29 216.33,285 261,225 254.25,202.33 191,194.33 173.67,139 261.67,47.67 298.33,37 366.33,67 400.88,72.41 412.33,61.67 459.67,53.67 533.67,87 537,168.33 525.66,190.29 561.67,185Z"></path></a>
                      </svg>
                    </div>
                    <div class="lofts__list">
                      <div class="lofts__item">
                        <div class="loft loft--1" data-loft="1" style="background-image: url(img/loft-slide-1.jpg)">
                          <div class="loft__number">1</div>
                          <div class="loft__info">
                            <div class="loft__detail level-1">
                              <div class="loft__label">1 эт.</div>
                              <div class="loft__value">1 свободно</div>
                            </div>
                            <div class="loft__detail level-2">
                              <div class="loft__label">2 эт.</div>
                              <div class="loft__value">12 свободно</div>
                            </div>
                            <div class="loft__detail level-3">
                              <div class="loft__label">3 эт.</div>
                              <div class="loft__value">1 бронь</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lofts__item">
                        <div class="loft loft--2-3" data-loft="2-3" style="background-image: url(img/loft-slide-2.jpg)">
                          <div class="loft__number">2-3</div>
                          <div class="loft__info">
                            <div class="loft__detail level-1">
                              <div class="loft__label">1 эт.</div>
                              <div class="loft__value">1 свободно</div>
                            </div>
                            <div class="loft__detail level-2">
                              <div class="loft__label">2 эт.</div>
                              <div class="loft__value">12 свободно</div>
                            </div>
                            <div class="loft__detail level-3">
                              <div class="loft__label">3 эт.</div>
                              <div class="loft__value">1 бронь</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lofts__item">
                        <div class="loft loft--3" data-loft="3" style="background-image: url(img/loft-slide-3.jpg)">
                          <div class="loft__number">3</div>
                          <div class="loft__info">
                            <div class="loft__detail level-1">
                              <div class="loft__label">1 эт.</div>
                              <div class="loft__value">1 свободно</div>
                            </div>
                            <div class="loft__detail level-2">
                              <div class="loft__label">2 эт.</div>
                              <div class="loft__value">12 свободно</div>
                            </div>
                            <div class="loft__detail level-3">
                              <div class="loft__label">3 эт.</div>
                              <div class="loft__value">1 бронь</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="lofts__item">
                        <div class="loft loft--2-2" data-loft="2-2" style="background-image: url(img/loft-slide-4.jpg)">
                          <div class="loft__number">2-2</div>
                          <div class="loft__info">
                            <div class="loft__detail level-1">
                              <div class="loft__label">1 эт.</div>
                              <div class="loft__value">1 свободно</div>
                            </div>
                            <div class="loft__detail level-2">
                              <div class="loft__label">2 эт.</div>
                              <div class="loft__value">12 свободно</div>
                            </div>
                            <div class="loft__detail level-3">
                              <div class="loft__label">3 эт.</div>
                              <div class="loft__value">1 бронь</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="lots">
                    <div class="lots__info">
                      <div class="lots__info-col">
                        <div class="lots__info-wrap">
                          <div class="lots__info-num">13</div>
                          <div class="lots__info-desc">Доступных <br>предложений</div>
                        </div>
                      </div>
                      <div class="lots__info-col">
                        <div class="lots__info-wrap">
                          <div class="lots__info-desc">Площадь, м2 <br>от 40,60 до 95,90</div>
                        </div>
                      </div>
                      <div class="lots__info-col">
                        <div class="lots__info-wrap">
                          <div class="lots__info-desc">Стоимость <br>от 6 090 000,00 Р  до 15 401 600,00 Р</div>
                        </div>
                      </div>
                    </div>
                    <div class="lots__list">
                      <div class="lots__inner">
                        <div class="lot lot--header">
                          <div class="lot__value-1">Лот</div>
                          <div class="lot__value-2">Тип</div>
                          <div class="lot__value-3">Этаж</div>
                          <div class="lot__value-4">Площадь, М2</div>
                          <div class="lot__value-5">Цена за М2</div>
                          <div class="lot__value-6">Стоимость</div>
                          <div class="lot__value-7">Статус</div>
                        </div>


<?
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
                          <div class="lot__value-1" data-lot-value="Лот" ><?=$arItem['PROPS']['LOT']['VALUE'];?></div>
                          <div class="lot__value-2" data-lot-value="Тип">
                            <span class="lot__styles">
                              <span class="lot__style-1"><?=$arItem['PROPS']['TYPE']['VALUE'];?></span>
                              <span class="lot__style-2"><?=$arItem['PROPS']['ENTER']['VALUE'];?></span>
                            </span>
                          </div>
                          <div class="lot__value-3" data-lot-value="Этаж"><?=$arItem['PROPS']['STAGE']['VALUE'];?></div>
                          <div class="lot__value-4" data-lot-value="Площадь, М2"><?=$arItem['PROPS']['AREA']['VALUE'];?></div>
                          <div class="lot__value-5" data-lot-value="Цена за М2"><?=$arItem['PROPS']['SQUARE_COST']['VALUE'];?></div>
                          <div class="lot__value-6" data-lot-value="Стоимость"><?=$arItem['PROPS']['PRICE']['VALUE'];?></div>
                          <div class="lot__value-7" data-lot-value="Статус"><?=$arItem['PROPS']['STATUS']['VALUE'];?></div>
					</a>
<? if ($i >= 6) :?>

    </div>
  <?endif;$i++;$count++;?>
<?
	endforeach;
?>
				</div>
			
			<div class="lots__inner">
				<div class="lots__inner">
			        <div class="lots__control"><a class="more-items" href="#">Еще <span><?=$count;?></span></a></div>
			    </div>
			</div>
    </div>
</div>

<div id="ajaxPopup">

     <div class="popup popup--loft"></div>
     <div class="popup popup--email">

                <div class="popup__inner">
                  <div class="popup__title">Отправить письмо</div>
                  <div class="popup__desc">Укажите адрес электронной почты,<br> на который необходимо отправить письмо.</div>
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
                    <div class="popup__desc">Укажите свой контактный телефон, и наш специалист свяжется с вами в удобное для вас время.</div>
                    <form class="form" id="callbackForm" action="#">
                      <div class="form__group">
                        <div class="form__col">
                          <div class="form__field">http://dev12.korovets.ru/quarters/?bitrix_include_areas=Y&clear_cache_session=Y&clear_cache=Y
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
                  <button class="popup__close"></button></div>

                  </div>
</div>

	</div>
	
<div>
<?
endif;
?>
