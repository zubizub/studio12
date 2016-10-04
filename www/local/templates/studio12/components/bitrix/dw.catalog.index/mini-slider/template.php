<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<?
if (is_array($arResult['ITEMS']) && count($arResult['ITEMS']) > 0) {
?>
    <div class="metro-place__item">
              <div class="metro-place__slider">
                
                
            
<?
	foreach ($arResult['ITEMS'] as $arItem) {
?>
	<!-- <pre><?//print_r($arItem['PROPS']['EXTERIOR']);?></pre> -->
  <? $arItem['EXTERIOR'] = CFile::GetFileArray($arItem['PROPS']['EXTERIOR']['VALUE'][0]);  ?>
					<div class="metro-place__slider-item"><img class="metro-place__img" src="<?=$arItem['EXTERIOR']['SRC'];?>" alt="#"></div>
                          
					</a>

<?
	}
?>
		  </div>
</div>
<?
}
?>
