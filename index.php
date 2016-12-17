<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Studio#12 Лофт-квартал в центре Москвы");
$APPLICATION->SetPageProperty("keywords", "Лофты, Работа в лофте, Жить в лофте, Креативный квартал, Студио12");
$APPLICATION->SetPageProperty("title", "Лофт-квартал Studio#12");
$APPLICATION->SetTitle("Studio#12");
?>


<div class="section section--intro">
    <div class="box" style="text-align: center;">
        <svg class="dynamic" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" width="1165" height="1500" overflow='visible'  viewbox="0 0 1165 1500" enable-background="new 0 0 1165 1500" xml:space="preserve" preserveAspectRatio="xMinYMin meet">
            <path class="path" id="intro"></path>
            <image class="line-house" style="display: none;" xmlns='http://www.w3.org/2000/svg' , xmlns:xlink='http://www.w3.org/1999/xlink' , overflow='visible' , width='335' , height='261' , xlink:href='/img/intro.png' , transform='matrix(1 0 0 1 391.6875 133)'/>
        </svg>
    </div>
</div><!-- .section--intro -->

<div class="fullpage fade-in">

    <div class="section section--about" data-anchor="s-about">
        <div class="wrapper">
            <div class="about-bg">
                <div class="about-bg__item"
                     style="background: url('/local/templates/studio12/img/1.jpg') no-repeat 0 0"></div>
                <div class="about-bg__item"
                     style="background: url('/local/templates/studio12/img/2.jpg') no-repeat 0 0"></div>
                <div class="about-bg__item"
                     style="background: url('/local/templates/studio12/img/3.jpg') no-repeat 0 0"></div>
                <div class="about-bg__item"
                     style="background: url('/local/templates/studio12/img/4.jpg') no-repeat 0 0"></div>
                <div class="about-bg__item"
                     style="background: url('/local/templates/studio12/img/5.jpg') no-repeat 0 0"></div>
            </div>
            <div class="section__inner">
                <div class="section__content">
                    <div class="info">
                        <img class="info__logo" src="<?=SITE_TEMPLATE_PATH?>/dist/img/side-logo.svg">
                        <div class="info__left">
                            <div class="info__text">Креативный<br> лофт-квартал<br> Studio#12 —<br> это уникальное<br>
                                пространство<br> на карте<br>
                                <a href="#" class="info__city-desktop yellow link-animate bold-animate get__maps">Москвы.</a>
                                <a href="#" class="info__city-mobile yellow link-animate bold-animate scrollToMap">Москвы.</a>
                            </div>
                        </div>
                        <div class="info__right">
                            <div class="count-slide">
                                <div class="count">
                                    <div class="count__numbers">
                                        <a href="#" class="count__anim link-animate queue__act">
                                            <span class="count__number yellow">72</span>
                                        </a>
                                        <span class="count__text">из</span>
                                        <span class="count__number">142</span>
                                    </div>
                                    <div class="count__desc">Лотов<br> в продаже</div>
                                </div>
                                <div class="count">
                                    <div class="count__numbers">
                                        <a href="#" class="count__anim link-animate queue__act">
                                            <span class="count__text yellow">от</span>
                                            <span class="count__number count__spacing yellow">40</span>
                                        </a>
                                        <span class="count__text">до</span>
                                        <span class="count__number">300</span>
                                        <span class="count__text">м2</span>
                                    </div>
                                    <div class="count__desc">Площадь<br> лотов</div>
                                </div>
                                <div class="count">
                                    <div class="count__numbers">
                                        <a href="#" class="count__anim link-animate queue__act">
                                            <span class="count__text yellow">от</span>
                                            <span class="count__number count__spacing yellow">8</span>
                                        </a>
                                        <span class="count__text">млн. руб.</span>
                                    </div>
                                    <div class="count__desc">Стоимость<br> лотов</div>
                                </div>
                            </div>
                            <div class="offer">
                                <a class="offer__act queue__act" href="#">
                                    <div class="offer__label offer__label--desktop">Выбрать лофт
                                    </div>
                                    <img class="offer__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/intro-offer.png"
                                         alt="#">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dep-wrap">
            <div class="dep-wrap__col">
                <a href="/quarters" class="dep dep--loft">
                    <div class="dep__inner">
                        <div class="dep__title yellow">
                            <span class="dep__text">Живи</span><br><span class="dep__text">в лофте</span>
                        </div>
                        <div class="dep__desc">Единственный<br>трехэтажный<br>жилой комплекс<br>недалеко от центра<br>Москвы.</div>
                        <span class="line line-1"></span>
                        <span class="line line-2"></span>
                        <span class="line line-3"></span>
                        <span class="line line-4"></span>
                    </div>
                </a>
            </div>
            <div class="dep-wrap__col">
                <a href="/job" class="dep dep--job">
                    <div class="dep__inner">
                        <div class="dep__title yellow">
                            <span class="dep__text">Работай</span><br><span class="dep__text">в лофте</span>
                        </div>
                        <div class="dep__desc">Просторные<br>светлые офисы<br>в формате лофт<br>идеально подойдут<br>для бизнеса.</div>
                        <span class="line line-1"></span>
                        <span class="line line-2"></span>
                        <span class="line line-3"></span>
                        <span class="line line-4"></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="general">
            <div class="general__map map-wrapper">
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
    </div><!-- .section--about -->

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
    "COMPONENT_TEMPLATE" => ".default"
    ),
    false
    );?>


    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>