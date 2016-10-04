<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Studio12");
?>

 
          <div class="fullpage">
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
                      
                   
                  
                
                <div class="phone hidden-sm-md-up"><span class="phone__value">+7 495 780-40-40</span></div>
                <div class="footer footer--clear">
                  <div class="footer__inner">
                    <div class="nav">
                      <div class="nav__inner">
                        <div class="nav__item">
                          <div class="metro">
                            <div class="metro__icon"></div>
                            <div class="metro__caption">
                              <div class="metro__hint">10 мин. от метро:</div><a class="metro__station link" href="#">Марьина Роща</a>
                            </div>
                            <div class="metro__map">
                              <div class="metro__loc"><img class="metro__location" src="<?=SITE_TEMPLATE_PATH?>/dist/img/metro-map.png" alt="#"></div>
                            </div>
                          </div>
                        </div>
                        <div class="nav__item">Москва, СВАО, <br class="hidden-lg-xl-up"><a class="link" href="#">12-й пр. Марьиной Рощи&nbsp;8</a></div>
                        <div class="nav__item">+7 495 780-40-40<span class="hidden-lg-xl-down"> | </span><br class="hidden-lg-xl-up"><a class="link" href="#">Заказать обратный звонок</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>