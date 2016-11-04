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





    <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>