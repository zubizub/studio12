<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Studio12");
?>
<button class="nav-toggle" type="button">
    <div class="nav-toggle__bar nav-toggle__bar_test"></div>
</button>
  <div class="wrapper job-page">
	<div class="inner">
		<div class="header header_stabled">
			<div class="header__inner">
				<div class="nav nav--light">
					<div class="nav__inner">
						<div class="nav__item nav__item--photos">
 <span class="nav__item-text"><a class="link nav__link" href="#">Фотографии</a> лофтов</span>
						</div>
						<div class="nav__item nav__item--queue">
 <span class="nav__item-text">1-ая очередь: <a class="link nav__link" href="#">Январь/2017 г.</a></span>
						</div>
						<div class="nav__item nav__item--shoowroom">
 <span class="nav__item-text">Shoowroom: <a class="link nav__link btn-callback-room" href="#">Studio#8</a></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="head">
			<h1 class="heading"><span class="heading__line"><span class="heading__word invisible">Работа </span></span><span class="heading__line"><span class="heading__word invisible"> в лофте</span>
			<div class="feature invisible">
				<div class="feature__inner">
					<div class="feature__top">
						<div class="feature__item">
							<div class="feature__term">
								 Свой лофт
							</div>
							<div class="feature__def">
								 от 30 м<sup>2</sup>
							</div>
						</div>
					</div>
					<div class="feature__bottom">
						<div class="feature__item">
							<div class="feature__term">
								 Окупаемость
							</div>
							<div class="feature__def">
								 менее <br>
								 7 лет!
							</div>
						</div>
					</div>
				</div>
				<div class="feature__pointer">
				</div>
			</div>
 </span></h1>
		</div>
		<div class="concept">
			<div class="row">
				<div class="concept__col col-1-3">
					 <!-- <div class="concept__head">Концепция  квартала #Живи  и <a class="link" href="#">#Работай</a></div> -->
					<div class="concept__head">
						 Концепция квартала #Живи и <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"pagemenu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "pagemenu",
		"COMPONENT_TEMPLATE" => "pagemenu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "pagemenu",
		"USE_EXT" => "N"
	)
);?>
					</div>
				</div>
				<div class="concept__col col-1-3">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "desc.php"
	)
);?>
				</div>
				<div class="concept__col col-1-3">
					 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "desc2.php"
	)
);?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="loft-types">
	<div class="wrapper">
		<div class="inner">
			<div class="loft-types__inner">
				<div class="loft-types__content">
					<div class="loft-types__slide">
						<div class="loft-types__list">
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 1<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 2<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 3<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="loft-types__slide">
						<div class="loft-types__list">
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 1<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 2<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 3<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="loft-types__slide">
						<div class="loft-types__list">
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 1<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 2<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 3<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="loft-types__slide">
						<div class="loft-types__list">
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 1<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 2<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 3<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="loft-types__slide">
						<div class="loft-types__list">
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 1<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-2.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 2<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
							<div class="loft-types__item">
 <img src="/local/templates/studio12/dist/img//loft-type-1.jpg" class="loft-types__img" alt="#">
								<div class="loft-types__row">
									<div class="loft-types__caption">
										<div class="loft-types__title">
											 Все виды лофтов <br>
											 в одном вдохновляющем <br>
											 пространстве!
										</div>
										<div class="loft-types__page">
											 3<span class="yellow">–3</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="loft-types__desc">
					<div class="loft-types__tabs">


							 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"loft-menu",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "loftmenu",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "loft-menu"
	),
	false
);?>
					</div>
 <a class="loft-types__act" href="#">
					<div class="loft-types__label">
						 Выбрать
					</div>
 <img src="/local/templates/studio12/dist/img/intro-offer.png" class="loft-types__icon" alt="#"></a>
				</div>
			</div>
		</div>
	</div>
</div>
          <div class="reasons reasons--dark">
            <div class="wrapper">
              <div class="inner">
                <div class="reasons__content">
                  <div class="reasons__title">5 причин #жить в&nbsp;своем лофте:</div>
                  <div class="reasons__row">
                    <div class="row">

                <?$APPLICATION->IncludeComponent("bitrix:catalog.section", "reasons", Array(
	"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
		"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
		"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BACKGROUND_IMAGE" => "-",	// Установить фоновую картинку для шаблона из свойства
		"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",	// Не подключать js-библиотеки в компоненте
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
		"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
		"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
		"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
		"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
		"IBLOCK_ID" => "6",	// Инфоблок
		"IBLOCK_TYPE" => "info",	// Тип инфоблока
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"LABEL_PROP" => "-",	// Свойство меток товара
		"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
		"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
		"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
		"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
		"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Товары",	// Название категорий
		"PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
		"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
		"PRICE_CODE" => "",	// Тип цены
		"PRICE_VAT_INCLUDE" => "Y",	// Включать НДС в цену
		"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
		"PRODUCT_PROPERTIES" => "",	// Характеристики товара
		"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
		"PRODUCT_QUANTITY_VARIABLE" => "",	// Название переменной, в которой передается количество товара
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_ID_VARIABLE" => "SECTION_ID",	// Название переменной, в которой передается код группы
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"SECTION_USER_FIELDS" => array(	// Свойства раздела
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
		"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"USE_MAIN_ELEMENT_SECTION" => "N",	// Использовать основной раздел для показа элемента
		"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
		"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
	),
	false
);?>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="metro-place">

          	  <?$APPLICATION->IncludeComponent(
	"bitrix:dw.catalog.index",
	"mini-slider",
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000",
		"CACHE_TYPE" => "A",
		"IBLOCK_BINDING" => "element",
		"IBLOCK_ID" => "5",
		"LIMIT" => "50",
		"IBLOCK_TYPE" => "quarters",
		"COMPONENT_TEMPLATE" => "mini-slider"
	),
	false
);?>

            <div class="metro-place__item"><img class="metro-place__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img//metro-loc.png" alt="#"></div>
          </div>
          <div class="about-lofts job-page">
            <div class="wrapper">
              <div class="inner">
                <div class="about-lofts__row row">
                  <div class="col-1-3">
                    <div class="about-lofts__subtitle"> <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "about-loft-title.php"
	)
);?>
                    </div><div class="about-lofts__demo">
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "about-loft-img.php"
	)
);?></div>

                    <div class="about-lofts__access">
                    	<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "about-loft-desc.php"
	)
);?></div>
                  </div>
                  <div class="col-1-3">
                    <div class="about-lofts__subtitle">
                    	<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "about-loft-props-title.php"
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "about-loft-props.php"
	)
);?>
</div>
                  <a class="about-lofts__more" href="#">Презентация Studio#12</a>
                  </div>
                  <div class="col-1-3">
                    <div class="about-lofts__subtitle">Месторасположение <br> квартала:</div>
                    <div class="about-lofts__p">Москва, СВАО, <br><a class="link yellow" href="#">12-й пр. Марьиной Рощи 8 <br></a><small>10 мин. от метро “Марьина Роща”</small></div>
                    <div class="about-lofts__p">
                      <div class="about-lofts__pos">Комплекс апартаментов «Studio 12»  находится вблизи:</div>
                      <div class="about-lofts__in">→  1,5 км от ТТК</div>
                      <div class="about-lofts__in">→  ближайшие крупные автомагистрали Сущевский вал и Проспект Мира.</div>
                    </div>
                    <div class="about-lofts__p">
                      <div class="about-lofts__pos">Пассажиры общественного транспорта доедут от квартала:</div>
                      <div class="about-lofts__in">→  5-7 минут до станции  метро «Марьина Роща»</div>
                      <div class="about-lofts__in">→  за 20-25 минут – до Рижского или Савёловского вокзалов.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

		<div class="section section--slogan slogan-page">
			<div class="section__content">
				<div class="slogan">
					<div class="slogan__title"></div>
					<div class="slogan__translation"></div>
				</div>
			</div>
			<div class="box">
				<svg class="dynamic" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1165 5000"
					 style="width: 100%; height: auto">
					<path class="path" id="tagline"></path>
					<path class="path" id="tagline2"></path>
					<path class="path" id="tagline3"></path>
				</svg>
			</div>
		</div><!-- .section--slogan -->


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
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
          <? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>