<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Studio12");
?>
<div class="wrapper quarter-page">
    <div class="inner">
        <div class="head">
            <h1 class="heading">
                <div class="heading__line">
                    <div class="heading__word"><span class="lt-anim">Ж</span><span class="lt-anim">и</span><span class="lt-anim">т</span><span class="lt-anim">ь</span></div>
                </div>
				<div class="heading__line">
                    <div class="heading__word"><span class="lt-anim">в</span> <span class="lt-anim">л</span><span class="lt-anim">о</span><span class="lt-anim">ф</span><span class="lt-anim">т</span><span class="lt-anim">е</span></div>
                    <div class="feature">
                        <div class="feature__inner">
                            <div class="feature__top">
                                <div class="feature__item">
                                    <div class="feature__term">
                                        Свой лофт
                                    </div>
                                    <div class="feature__def quarters-bubble">
                                        от<br>40 м<sup>2</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature__pointer"></div>
                    </div>
                </div>
            </h1>
        </div>
        <div class="concept">
            <div class="row">
                <div class="concept__col col-1-3">
                    <!-- <div class="concept__head">Концепция  квартала #Живи  и <a class="link" href="#">#Работай</a></div> -->
                    <div class="concept__head">
                        Концепция квартала <span style="color: #ffffff">#Живи</span> <br>и <a style="color: #ffe500;"
                                                                                              class="link link-animate"
                                                                                              href="/job">#Работай</a>
                    </div>
                </div>
                <div class="concept-wrap">
                    <div class="concept-wrap__content">
                        <div class="concept-wrap__col">
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
                        <div class="concept-wrap__col">
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
    </div>
</div>


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
                "IBLOCK_BINDING" => "element",
                "IBLOCK_ID" => "7",
                "LIMIT" => "50",
                "IBLOCK_TYPE" => "info",
                "COMPONENT_TEMPLATE" => "mini-slider",
                "SECTION" => "9"
                ),
                false
                );?>

            </div>
        </div>
    </div>
</div>

<div class="reasons reasons--dark">
    <div class="wrapper">
        <div class="inner">
            <div class="reasons__content">
                <div class="reasons__title">5 причин #Жить в&nbsp;своем лофте:</div>
                <div class="reasons__row">
                    <div class="row reason-slide">

                        <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog.section",
                        "reasons",
                        array(
                        "ACTION_VARIABLE" => "action",
                        "ADD_PICT_PROP" => "-",
                        "ADD_PROPERTIES_TO_BASKET" => "Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "BACKGROUND_IMAGE" => "-",
                        "BASKET_URL" => "/personal/basket.php",
                        "BROWSER_TITLE" => "-",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "DETAIL_URL" => "",
                        "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "ELEMENT_SORT_FIELD" => "sort",
                        "ELEMENT_SORT_FIELD2" => "id",
                        "ELEMENT_SORT_ORDER" => "asc",
                        "ELEMENT_SORT_ORDER2" => "desc",
                        "FILTER_NAME" => "arrFilter",
                        "IBLOCK_ID" => "6",
                        "IBLOCK_TYPE" => "info",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "LABEL_PROP" => "-",
                        "LINE_ELEMENT_COUNT" => "3",
                        "MESSAGE_404" => "",
                        "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                        "MESS_BTN_BUY" => "Купить",
                        "MESS_BTN_DETAIL" => "Подробнее",
                        "MESS_BTN_SUBSCRIBE" => "Подписаться",
                        "MESS_NOT_AVAILABLE" => "Нет в наличии",
                        "META_DESCRIPTION" => "-",
                        "META_KEYWORDS" => "-",
                        "OFFERS_LIMIT" => "5",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Товары",
                        "PAGE_ELEMENT_COUNT" => "30",
                        "PARTIAL_PRODUCT_PROPERTIES" => "N",
                        "PRICE_CODE" => array(
                        ),
                        "PRICE_VAT_INCLUDE" => "Y",
                        "PRODUCT_ID_VARIABLE" => "id",
                        "PRODUCT_PROPERTIES" => array(
                        ),
                        "PRODUCT_PROPS_VARIABLE" => "prop",
                        "PRODUCT_QUANTITY_VARIABLE" => "",
                        "PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                        ),
                        "SECTION_CODE" => "",
                        "SECTION_ID" => "7",
                        "SECTION_ID_VARIABLE" => "SECTION_ID",
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array(
                        0 => "",
                        1 => "",
                        ),
                        "SEF_MODE" => "N",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "Y",
                        "SHOW_404" => "N",
                        "SHOW_ALL_WO_SECTION" => "N",
                        "SHOW_PRICE_COUNT" => "1",
                        "TEMPLATE_THEME" => "blue",
                        "USE_MAIN_ELEMENT_SECTION" => "N",
                        "USE_PRICE_COUNT" => "N",
                        "USE_PRODUCT_QUANTITY" => "N",
                        "COMPONENT_TEMPLATE" => "reasons"
                        ),
                        false
                        );?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="metro-place" style="position: relative;">

    <div class="metro-place__item">
        <div class="metro-place__slider">
            <div class="metro-place__slider-item">
                <a href="#" class="queue__act metro-place__link line-block">
                    <img class="metro-place__img" src="<?=SITE_TEMPLATE_PATH?>/img/Girl_12.jpg" alt="#">
                    <span class="metro-place__desc">#Жить в лофте</span>
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
                    <span class="line line-4"></span>
                </a>
            </div>

            line-block
        </div>
        <div class="wrapper metro-place__text">
            <div class="inner">
                <div class="about-lofts__row row">
                    <div class="col-1">
                        <div class="">
                            <div class="metro-place__title">Все виды лофтов<br>в одном вдохновляющем<br>пространстве!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="metro-place__item map-wrapper" style="position: relative;">
        <div class="googleStatic currentMap">
            <img class="general__image" src="<?=SITE_TEMPLATE_PATH?>/dist/img/metro-loc.png" alt="">
        </div>
        <div class="googleMap">
            <div id="gmap_canvas"></div>
            <script type='text/javascript'>
                google.maps.event.addDomListener(window, 'load', init_map);
            </script>
        </div>
        <div class="toggleMap">#Переключить</div>
    </div>
</div>
<div class="about-lofts quarter-page">
    <div class="wrapper">
        <div class="inner">
            <div class="about-lofts__row row">
                <div class="col-1-3 about-lofts__col-1">
                    <div class="about-slider-bub">
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
                        </div>
                        <div class="about-lofts__demo">
                            <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "about-loft-img.php"
                            )
                            );?>
                        </div>

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
                            );?>
                        </div>
                    </div>
                </div>
                <div class="concept-wrap">
                    <a class="about-lofts__more offer__label--desktop present-mobile" href="#">Презентация Studio#12 (PDF</a>
                    <div class="concept-wrap__content">
                        <div class="concept-wrap__col">
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
                            </div>
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


                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "presentation.php"
                                )
                            );?>
                        </div>
                        <div class="concept-wrap__col">
                            <div class="about-lofts__subtitle">Место<span class="resp-br-dash"> -<br></span>расположение <br>
                                квартала:
                            </div>
                            <div class="about-lofts__p">Москва, СВАО, <br>12-й пр. Марьиной Рощи 8 <br>
                                <small>10 мин. от метро “Марьина Роща”</small>
                            </div>
                            <div class="about-lofts__p">
                                <div class="about-lofts__pos">Комплекс апартаментов «Studio 12» находится вблизи:</div>
                                <div class="about-lofts__in">→ 1,5 км от ТТК</div>
                                <div class="about-lofts__in">→ ближайшие крупные автомагистрали Сущевский вал и Проспект Мира.
                                </div>
                            </div>
                            <div class="about-lofts__p">
                                <div class="about-lofts__pos">Пассажиры общественного транспорта доедут от квартала:</div>
                                <div class="about-lofts__in">→ 5-7 минут до станции метро «Марьина Роща»</div>
                                <div class="about-lofts__in">→ за 20-25 минут – до Рижского или Савёловского вокзалов.</div>
                            </div>
                        </div>
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
        <svg class="dynamic" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1165px" height="1500px" viewbox="0 0 1165 1500" enable-background="new 0 0 1165 1500" xml:space="preserve" preserveAspectRatio="xMinYMin meet" style='width: 100%; height: 5000px;'>
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
"COMPONENT_TEMPLATE" => ".default",
"SECTION" => ""
),
false
);?>
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

     