<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<?
if (is_array($arResult['ITEMS']) && count($arResult['ITEMS']) > 0) {
?>


<?//print_r($arResult['ITEMS']);?>


			
<?
	
?>

<? $countElements = count($arResult["ITEMS"]);?>

 <div class="loft-types__slide" id="slide<? print_r($arResult[SECTION_ID]); ?>">
						<div class="loft-types__caption">
							<div class="loft-types__title">
		<? 	$res = CIBlockSection::GetByID($arResult[SECTION_ID]);
			if($ar_res = $res->GetNext())
			  echo $ar_res['NAME'];	?>
		
			</div>
							<div class="loft-types__page">
							<span class="loft-types__page-num">1</span><span class="yellow">–
							<!-- <span class="loft-types__page-total"><?=$countElements; ?></span></span></div> -->
							<span class="loft-types__page-total"><?=$countElements; ?></span></span></div>
						</div>
						<button class="loft-types__list-prev"></button>
						<button class="loft-types__list-next"></button>
						<div class="loft-types__list">
			
			
			<? foreach ($arResult['ITEMS'] as $key => $arItem) { ?>
			
			<? $croped = '/lib/p/index.php?src='.$arItem["PICTURE"]["SRC"].'&h=660&w=620';?>
				<div class="loft-types__item" style="background-image: url('<?=$croped?>');"></div>
				
		<? } ?>
</div>	 
		</div>	 


<?
	}
?>

	