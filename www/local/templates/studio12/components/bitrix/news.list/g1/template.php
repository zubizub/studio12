<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>



<?//print_r('<pre>'); print_r($arResult['ITEMS']); print_r('</pre>');?>

<? foreach ($arResult['ITEMS'] as $key => $arItem) { ?>
  
 <div class="">
                  <a class="fancybox" rel="gallery1" href="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" title="">
                     <img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="" />
                  </a>
                </div>

<? } ?>            








  