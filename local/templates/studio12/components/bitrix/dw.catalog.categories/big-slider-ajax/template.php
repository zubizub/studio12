<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<?
if (is_array($arResult['ITEMS']) && count($arResult['ITEMS']) > 0) {
?>

<?//print_r($arResult['ITEMS']);?>


			
			<div class="loft-types__content">

			

<?
	foreach ($arResult['ITEMS'] as $key => $arSection) {
?>
<? $countElements = count($arSection);?>

 <div class="loft-types__slide">
						<div class="loft-types__caption">
							<div class="loft-types__title">
		<? 	$res = CIBlockSection::GetByID($key);
			if($ar_res = $res->GetNext())
			  echo $ar_res['NAME'];	?>
		
			</div>
							<div class="loft-types__page">
							<span class="loft-types__page-num">1</span><span class="yellow">–
							<!-- <span class="loft-types__page-total"><?=$countElements; ?></span></span></div> -->
							<span class="loft-types__page-total"><?=$countElements; ?></span></span></div>
						</div>
						<button class="loft-types__list-prev"></button>
						<button class="loft-types__list-next"></button>\
						<div class="loft-types__list">

			<? foreach ($arSection as $key => $arItem) { ?>
			<? //print_r($arItem); ?>


							<? if (!$key) { ?>
							<div class="loft-types__item" data-bg="<?=$arItem['PICTURE']['SRC'];?>" style="background: url(<?=$arItem['PICTURE']['SRC'];?>"></div>
							<? } else { ?>

									<div class="loft-types__item" data-bg="<?=$arItem['PICTURE']['SRC'];?>"></div>
							<? } ?>

		<? } ?>
</div>	 
		</div>	 
<?
	}
?>


</div>
				<div class="loft-types__desc">
					<a href="#" class="loft-types-slide-go">→</a>
					<div class="loft-types__tabs">
					<? foreach ($arResult['ITEMS'] as $key => $value) { ?>

					<div class="loft-types__tab">
					<? 	$res = CIBlockSection::GetByID($key);
						if($ar_res = $res->GetNext())
						  echo $ar_res['NAME'];	?>
					</div>			
					<? } ?>

					</div>
					<a class="loft-types__act loft-btn" href="#loft-table">
						<div class="loft-types__label">Супер-маркет лофтов</div><img class="loft-types__icon" src="<?=SITE_TEMPLATE_PATH?>/dist/img/intro-offer.png" alt="#">
					</a>
				</div>
		
<?
}
?>
