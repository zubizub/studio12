<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Studio12");
?>

<div class="gallery-block" style="display: block;">
    <button class="gallery-block__close"></button>
    <div class="loft-types">
        <div class="wrapper">
            <div class="inner">
                <div class="loft-types__inner">
                    
  <?$APPLICATION->IncludeComponent(
    "bitrix:dw.catalog.categories", 
    "mini-slider-ajax", 
    array(
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000",
        "CACHE_TYPE" => "A",
        "IBLOCK_BINDING" => "section",
        "IBLOCK_ID" => "7",
        "LIMIT" => "50",
        "IBLOCK_TYPE" => "info",
        "COMPONENT_TEMPLATE" => "mini-slider",
        "SECTION" => "6"
    ),
    false
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


                <?$APPLICATION->IncludeComponent(
	"bitrix:dw.catalog.categories.ajax", 
	"mini-slider", 
	array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000",
		"CACHE_TYPE" => "A",
		"IBLOCK_BINDING" => "section-images",
		"IBLOCK_ID" => "7",
		"LIMIT" => "50",
		"IBLOCK_TYPE" => "info",
		"COMPONENT_TEMPLATE" => "mini-slider",
		"SECTION" => "15"
	),
	false
);?>

            </div>
        </div>
    </div>
</div>
<?
/*$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"mainmenu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y"
	)
);*/
?>
<div class="wrapper quarter-page">
	 <?
/*	 $APPLICATION->IncludeComponent(
	"bitrix:dw.catalog.index",
	".default",
	Array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_BINDING" => "element",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "quarters",
		"LIMIT" => "50",
		"SECTION" => ""
	)
);*/
?>
</div>
</div>

 <br><?// require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

 </div></div></div>