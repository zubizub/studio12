<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

	<?
	foreach($arResult as $arItem):
		if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
			continue;
	?>
		<?if($arItem["SELECTED"]):?>
			  <!-- <div class="loft-types__tab"><a class="link" href="<?=$arItem["LINK"];?>"><?=$arItem["TEXT"]?></a></div> -->
			  <div class="loft-types__tab" filter="<?=$arItem["LINK"];?>"><?=$arItem["TEXT"]?></div>
			  	
	          
			<?else:?>
			<!-- <div class="loft-types__tab"><a class="link" href="<?=$arItem["LINK"];?>"><?=$arItem["TEXT"]?></a></div> -->
			<div class="loft-types__tab" filter="<?=$arItem["LINK"];?>"><?=$arItem["TEXT"]?></div>
			
		<?endif?>
		
	<?endforeach?>

<?endif?>