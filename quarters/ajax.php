<? require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); ?>
<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<? //$_REQUEST['ELEMENT_ID'] =33;?>
<? //print_r($_REQUEST['ELEMENT_ID']);?>
<? //print_r($_REQUEST['action']);?>

<? switch ($_REQUEST['action']) {
  case 'elementPopup':

    $APPLICATION->IncludeComponent("bitrix:catalog.element", "lot-item-static", Array(
  "ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
    "ADD_DETAIL_TO_SLIDER" => "N",	// Добавлять детальную картинку в слайдер
    "ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
    "ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
    "ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
    "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
    "BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
    "BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
    "BRAND_USE" => "N",	// Использовать компонент "Бренды"
    "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "CHECK_SECTION_ID_VARIABLE" => "N",	// Использовать код группы из переменной, если не задан раздел элемента
    "DETAIL_PICTURE_MODE" => "IMG",	// Режим показа детальной картинки
    "DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
    "DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
    "DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
    "DISPLAY_NAME" => "Y",	// Выводить название элемента
    "DISPLAY_PREVIEW_TEXT_MODE" => "E",	// Показ описания для анонса
    "ELEMENT_CODE" => "",	// Код элемента
    "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],	// ID элемента
    "IBLOCK_ID" => "5",	// Инфоблок
    "IBLOCK_TYPE" => "quarters",	// Тип инфоблока
    "LABEL_PROP" => "-",	// Свойство меток товара
    "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL на страницу, где будет показан список связанных элементов
    "LINK_IBLOCK_ID" => "",	// ID инфоблока, элементы которого связаны с текущим элементом
    "LINK_IBLOCK_TYPE" => "",	// Тип инфоблока, элементы которого связаны с текущим элементом
    "LINK_PROPERTY_SID" => "",	// Свойство, в котором хранится связь
    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
    "MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
    "MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
    "MESS_BTN_COMPARE" => "Сравнить",	// Текст кнопки "Сравнить"
    "MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
    "MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
    "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
    "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
    "OFFERS_LIMIT" => "0",	// Максимальное количество предложений для показа (0 - все)
    "PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
    "PRICE_CODE" => "",	// Тип цены
    "PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
    "PRICE_VAT_SHOW_VALUE" => "N",	// Отображать значение НДС
    "PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
    "PRODUCT_PROPERTIES" => "",	// Характеристики товара
    "PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
    "PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
    "PROPERTY_CODE" => array(	// Свойства
      0 => "LOT",
      1 => "AREA",
      2 => "STATUS",
      3 => "SQUARE_COST",
      4 => "BUILDING",
      5 => "TYPE",
      6 => "PRICE",
      7 => "STAGE",
      8 => "",
    ),
    "SECTION_CODE" => "",	// Код раздела
    "SECTION_CODE_PATH" => "",	// Путь из символьных кодов раздела
    "SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
    "SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
    "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
    "SEF_MODE" => "Y",	// Включить поддержку ЧПУ
    "SEF_RULE" => "",	// Правило для обработки
    "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
    "SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
    "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
    "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
    "SET_STATUS_404" => "N",	// Устанавливать статус 404
    "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
    "SHOW_404" => "N",	// Показ специальной страницы
    "SHOW_DEACTIVATED" => "N",	// Показывать деактивированные товары
    "SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
    "TEMPLATE_THEME" => "blue",	// Цветовая тема
    "USE_COMMENTS" => "N",	// Включить отзывы о товаре
    "USE_ELEMENT_COUNTER" => "Y",	// Использовать счетчик просмотров
    "USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
    "USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
    "USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
    "USE_VOTE_RATING" => "N",	// Включить рейтинг товара
  ),
  false
);
    break;
  
  case 'feedbackForm':?>
    

<div class="popup__inner popup-an popup-an--js-right">
                    <div class="popup__in popup-an-dom">
                      <div class="mobile-note">
                        <a href="tel:74957804040" class="mobile-note__phone call_phone_1">+7 495 780-40-40</a>
                      </div>
                      <div class="popup__title">Обратный звонок</div>
                      <div class="popup__desc">Укажите свой контактный телефон, и наш специалист свяжется с вами в удобное для вас время.</div>
                      <form class="form" id="callbackForm" action="#">
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
                              <input type="hidden" name="lot" value="" id="lot">
                              <input class="form__submit btn btn--md btn--yellow" type="submit" value="Отправить"
                                     onClick="callBackComagic($('#callbackForm'));">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>

                    </div>
<button class="popup__close popup-an-dom"></button>

    <?break;



  case 'loftGroup':?>
    


<div class="loft-types__slide">
                      <div class="loft-types__caption">
                        <div class="loft-types__title">Лофты с личным  входоми двориком <?= rand();?></div>
                        <div class="loft-types__page"><span class="loft-types__page-num">1</span><span class="yellow">–<span class="loft-types__page-total">3</span></span></div>
                      </div>
                      <div class="loft-types__list">
                        <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img//loft-type-2.jpg" alt="#">
                          <div class="loft-types__row"></div>
                        </div>
                        <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img//loft-type-1.jpg" alt="#">
                          <div class="loft-types__row"></div>
                        </div>
                        <div class="loft-types__item"><img class="loft-types__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img//loft-type-2.jpg" alt="#">
                          <div class="loft-types__row"></div>
                        </div>
                      </div>
                    </div>
    <?break;

      case 'callbackForm':?>
    

        <?
        //print_r($_REQUEST);
        parse_str($_REQUEST['data'], $output);

        //print_r($output);
        //$output[]

        $subject = "Обратный звонок. S#12: $output[lot]";
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";

        $text = "Перезвонить.<br/>
        Studio#12: $output[lot]<br/>
        Имя: $output[name]<br/>
        Телефон:$output[phone]<br/>
        Время звонка: c $output[fromClock] до $output[toClock]<br/>
        Комментарий: $output[comments].";

        //mail("nobody@example.com", $subject, $text, "From: webmaster@$SERVER_NAME", "-fwebmaster@$SERVER_NAME");
        //mail("zz-work1982@yandex.ru, sergokorovets@gmail.com, r.antonovskiy@kr-pro.ru", $subject, $text, $headers);
        mail("zz-work1982@yandex.ru, sergokorovets@gmail.com, lease@kr-pro.ru, info@kr-pro.ru", $subject, $text, $headers);
        

        ?>

    <?break;

      case 'callbackFormShowRoom':?>
    

        <?
        //print_r($_REQUEST);
        parse_str($_REQUEST['data'], $output);

        //print_r($output);
        //$output[]

        $subject = "Приехать в Shoowroom: Studio#8";
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";

        $text = "Бронирование времени.<br/>
        Имя: $output[name]<br/>
        Телефон:$output[phone]<br/>
        E-mail: $output[email]<br/>
        Комментарий: $output[comments].";

        //mail("nobody@example.com", $subject, $text, "From: webmaster@$SERVER_NAME", "-fwebmaster@$SERVER_NAME");
      //mail("zz-work1982@yandex.ru, sergokorovets@gmail.com", $subject, $text, $headers);
        mail("zz-work1982@yandex.ru, sergokorovets@gmail.com, lease@kr-pro.ru, info@kr-pro.ru", $subject, $text, $headers);
        

        ?>

    <?break;
      case 'send_me_email':?>
    
<? $element = $_REQUEST['ELEMENT_ID'];?>

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
    <input type="hidden" id="emailElement" name="element" value="<?=$element;?>">
  </form>
</div>
<button class="popup__close"></button>

<?break; ?>

<? case 'sendEmailForm':?>
        <?
        
        parse_str($_REQUEST['data'], $output);				 
        print_r($output);
        
        $subject = "Studio#12: лот $output[element]";
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";

        $text = "Здравствуйте.<br/>
        Высылаем по вашему запросу информацию по Studio#12: лот $output[element]<br/><br/>
        Спасибо за проявленный интерес.<br/>
        KR Properties - девелопер уникальных проектов";


        //mail("nobody@example.com", $subject, $text, "From: webmaster@$SERVER_NAME", "-fwebmaster@$SERVER_NAME");
        //mail("zz-work1982@yandex.ru, sergokorovets@gmail.com, r.antonovskiy@kr-pro.ru", $subject, $text, $headers);
        mail("zz-work1982@yandex.ru, sergokorovets@gmail.com, lease@kr-pro.ru, info@kr-pro.ru", $subject, $text, $headers);
        

        ?>

    <?  break;

    case 'loft-sort':?>

      <?$APPLICATION->IncludeComponent(
  "bitrix:dw.catalog.index", 
  ".default", 
  array(
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000",
    "CACHE_TYPE" => "A",
    "IBLOCK_BINDING" => "element",
    "IBLOCK_ID" => "5",
    "LIMIT" => "50",
    "IBLOCK_TYPE" => "quarters",
    "COMPONENT_TEMPLATE" => ".default",
    "SECTION" => ""
  ),
  false
);?>

    <? break;  
    case 'loadGallerySection':?>

    <? $SECTION = $_REQUEST['SECTION'];?>

  <? //print_r($SECTION);?>

      <?$APPLICATION->IncludeComponent(
  "bitrix:dw.catalog.categories", 
  "mini-slider-section", 
  array(
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000",
    "CACHE_TYPE" => "A",
    "IBLOCK_BINDING" => "section-images",
    "IBLOCK_ID" => "7",
    "LIMIT" => "50",
    "IBLOCK_TYPE" => "info",
    "COMPONENT_TEMPLATE" => ".default",
    "SECTION" => $SECTION,
  ),
  false
);?>

    <? break;

}



?>