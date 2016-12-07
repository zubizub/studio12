<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Studio#12 Лофт-квартал в центре Москвы");
$APPLICATION->SetPageProperty("keywords", "Лофты, Работа в лофте, Жить в лофте, Креативный квартал, Студио12");
$APPLICATION->SetPageProperty("title", "Лофт-квартал Studio#12");
$APPLICATION->SetTitle("Studio#12");
?>


<div class="section section--intro">
    <div class="box" style="text-align: center;">
        <svg class="dynamic" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1165px" height="1500px" viewbox="0 0 1165 1500" enable-background="new 0 0 1165 1500" xml:space="preserve">
            <path class="path" id="intro"></path>
            <image class="line-house" style="display: none;" xmlns='http://www.w3.org/2000/svg' , xmlns:xlink='http://www.w3.org/1999/xlink' , overflow='visible' , width='335' , height='261' , xlink:href='/img/intro.png' , transform='matrix(1 0 0 1 391.6875 133)'/>
        </svg>
    </div>
</div><!-- .section--intro -->

<div class="fullpage fade-in">

    <div class="section section--about is-colored" data-anchor="s-about">
        <div class="wrapper">
            
<!-- ./dw.index begin -->
            <div class="about-bg">
                <div class="about-bg__item" style="background: url('/local/templates/studio12/img/1.jpg') no-repeat 0 0"></div>
                <div class="about-bg__item" style="background: url('/local/templates/studio12/img/2.jpg') no-repeat 0 0"></div>
                <div class="about-bg__item" style="background: url('/local/templates/studio12/img/3.jpg') no-repeat 0 0"></div>
                <div class="about-bg__item" style="background: url('/local/templates/studio12/img/4.jpg') no-repeat 0 0"></div>
                <div class="about-bg__item" style="background: url('/local/templates/studio12/img/5.jpg') no-repeat 0 0"></div>
            </div>
            <!-- ./end -->
            <div class="section__inner">
                <div class="section__content">
                    <div class="about">
                        <div class="about__items">
                            <div class="about__item"><a class="about__link" href="/quarters">

 <?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "jobH.php"
    )
);?>
                          <span>
                           <?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "jobSH.php"
    )
);?>
       

                          
                          </span>
                          </a>
                            </div>
                            <div class="about__item">
                                <a class="about__link" href="/job">
                                
 <?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "qH.php"
    )
);?>
                             
                                <span>
                                 <?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "qSH.php"
    )
);?>
                               
                                </span>
                                </a>
                            </div>
                            <div class="about__item about__desc"><span>Креативный лофт-квартал Studio#12 — <br
                                    class="mobile-br"> это уникальное пространство <br class="mobile-br"> для <a
                                    class="link" href="/quarters">#жизни</a>, и <a class="link" href="/job">#работы</a>.</span>
                            </div>
                        </div>
                        <div class="about-logo">
                            <img src="/local/templates/studio12/dist/img/logo.png" alt="#S12">
                        </div>
                        <div class="about__caption infographics">
                            <div class="about__desc">Креативный лофт-квартал Studio#12 — <br>это уникальное пространство <br>для
                                <a class="link" href="/quarters">#жизни</a>,<br> и <a class="link" href="/job">#работы</a>.
                            </div>
                        </div>
                        <div class="about__items infographics__list">
                            <div class="about__item infographics__item">
                                <div class="infographics__text"><span><span class="number number72">0</span> из <span
                                        class="number number142">0</span></span><br>Лотов в продаже
                                </div>
                            </div>
                            <div class="about__item infographics__item">
                                <div class="infographics__text"><span>от <span class="number number40">0</span> до <span
                                        class="number number300">0</span> м2</span><br>Площадь лотов
                                </div>
                            </div>
                            <div class="about__item infographics__item">
                                <div class="infographics__text"><span>от <span class="number number6">0</span> млн. руб.</span><br>Стоимость
                                    лотов
                                </div>
                            </div>
                        </div>
                        <a class="offer__act offer-mobile loft-btn" href="#loft-table">
                            <div class="offer__label">Выбрать лофт
                            </div>
                            <img class="offer__img" src="/local/templates/studio12/dist/img/intro-offer.png" alt="#">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="general">
            <div class="general__inner">
                <a href="/quarters">
                    <div class="general__item general__item--quarter">
                        <div class="general__title">Лофт <br> квартал</div>
                        <div class="general__desc">
                            <div class="general__desc-text">Единственный трехэтажный жилой комплекс недалеко от центра Москвы.</div>
                        </div>
                    </div>
                </a>
                <a href="/job">
                    <div class="general__item general__item--job">
                        <div class="general__title">Работа <br> в лофте</div>
                        <div class="general__desc">
                            <div class="general__desc-text">Просторные светлые офисы в формате лофт, идеально подойдут для бизнеса.</div>
                        </div>
                    </div>
                </a>
                <div class="general__map">
                  <div class="googleStatic currentMap">
                    <img class="general__image" src="<?=SITE_TEMPLATE_PATH?>/dist/img/metro-loc.png" alt="">
                  </div>
                  
                  <div class="googleMap" style="position: absolute;">
                    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCbLN91CEPgEXr7cSXbf2UYpKjzFQkD26k'></script><div style='overflow:hidden;height:360px;width:750px;'><div id='gmap_canvas' style='height:360px;width:750px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://www.add-map.net/'>adding google maps to website</a> <script type='text/javascript' src=''></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(55.79981942842895,37.620396735473605),mapTypeId: google.maps.MapTypeId.TERRAIN};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(55.79981942842895,37.620396735473605)});infowindow = new google.maps.InfoWindow({content:'<strong></strong><br>Марьина Роща 21 а<br> Moscow<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                  </div>
                  
                  <div style="background: #fee333; padding: 15px; position: absolute; display: inline-block; left: 3.5%; bottom: 5%; cursor: pointer; color: #000;" class="toogleMap">#Переключить</div>

                </div>
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



    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>