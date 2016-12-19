<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<?
if (is_array($arResult['ITEMS']) && count($arResult['ITEMS']) > 0) {
?>

<?//print_r($arResult['ITEMS']);?>


			
			<div class="loft-types__content">

			


<? $countElements = count($arSection);?>

 <div class="loft-types__slide" id="slide<? print_r($arParams[SECTION]); ?>">
						<div class="loft-types__caption">
							<div class="loft-types__title">
		<? 	$res = CIBlockSection::GetByID($arParams['SECTION']);
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
			<? $i =0;?>
			<? foreach ($arResult["ITEMS"] as $key => $arItem) { ?>
			<? //print_r($arItem); ?>
				
			
							<? if (!$key) { ?>
							<div class="loft-types__item" data-bg="<?=$arItem['PICTURE']['SRC'];?>" style="background: url(<?=$arItem['PICTURE']['SRC'];?>"></div>
							<? } else { ?>

									<div class="loft-types__item" data-bg="<?=$arItem['PICTURE']['SRC'];?>"></div>
							<? } ?>

				
		<? } ?>
</div>	 
		</div>	 

</div>
				<div class="loft-types__desc">
					<a href="#" class="loft-types-slide-go">→</a>

					<div class="loft-types__tabs">
					<? foreach ($arResult['SECTION_ID'] as $key => $value) { ?>

					<div class="loft-types__tab">
					<? 	$res = CIBlockSection::GetByID($value);
						if($ar_res = $res->GetNext())
						  /*echo '<a href="javascript:void(0);" data-section="'.$ar_res[ID].'">'.
						$ar_res['NAME']. '</a>';*/

						  echo $ar_res['NAME'];
							?>
					</div>			
					<? } ?>

					</div>
					
			<? if ($arParams['IBLOCK_BINDING'] == 'element'): ?>
					<a class="loft-types__act loft-btn" href="#loft-table">
						<div class="loft-types__label">Выбрать лофт</div><img class="loft-types__icon" src="<?=SITE_TEMPLATE_PATH?>/dist/img/intro-offer.png" alt="#">
					</a>
			<? endif; ?>
				</div>
		
<?
}
?>
