<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); 
$APPLICATION->SetTitle("Объект");
?>

<div class="wrapper lot-page">
            <div class="lot-page__inner">
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
<div class="popup popup--page">
<?
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
?>
		
		</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "object-footer.php"
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>