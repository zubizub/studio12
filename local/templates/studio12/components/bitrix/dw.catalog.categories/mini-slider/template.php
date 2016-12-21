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
<? 	$res = CIBlockSection::GetByID($key);
			if($ar_res = $res->GetNext()){
			  echo $ar_res['NAME'];	
			  $code = $ar_res['CODE'];
			}
			  ?>
 
 <!-- <div class="loft-types__slide" id="slide<? print_r($key); ?>"> -->
 <div class="loft-types__slide" id="section-<?=$code; ?>">
						<div class="loft-types__caption">
							<div class="loft-types__title">
		
			
		
			</div>
							<div class="loft-types__page">
							<span class="loft-types__page-num">1</span><span class="yellow">–
							<!-- <span class="loft-types__page-total"><?=$countElements; ?></span></span></div> -->
							<span class="loft-types__page-total"><?=$countElements; ?></span></span></div>
						</div>
						<button class="loft-types__list-prev"></button>
						<button class="loft-types__list-next"></button>
						<div class="loft-types__list" id="slideList<?=$code;?>">
			<? $i =0;?>
			<? foreach ($arSection as $key => $arItem) { ?>
			<? //print_r($arItem); ?>
				<?/* if (!$i) { ?>
			
							<div class="loft-types__item" style="background-image: url('<?=$arItem['PICTURE']['SRC'];?>');">
							</div>
				<? }; $i++; */?>
			
			
							<? $croped = '/lib/p/index.php?src='.$arItem["PICTURE"]["SRC"].'&w=620&h=660&zc=1';?>

							<?$hash = $code.'-'.$key; ?>
<? global $USER; ?>



							<? if (!$key) { ?>
							<div class="loft-types__item" data-bg="<?=$croped;?>" style="background-image: url(<?=$croped;?>)">
								
							<?if ($USER->GetID() == 1) { ?>
								<a href="#<?=$hash;?>"  class="fullscreen-by-hash"style="color:#ffffff; font-size: 20px;  position: absolute; z-index: 400; top: 30px; right: 30px;">click-me-please</a>
							<? } ?>
							</div>
							<? } else { ?>

									
							<div class="loft-types__item" data-bg="<?=$croped;?>">
									
							<?if ($USER->GetID() == 1) { ?>
								<a href="#<?=$hash;?>"  class="fullscreen-by-hash"style="color:#ffffff; font-size: 20px;  position: absolute; z-index: 400; top: 30px; right: 30px;">click-me-please</a>
							<? }?>
							</div>
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

					<? $res = CIBlockSection::GetByID($key);
						if($ar_res = $res->GetNext()){
							$CODE = $ar_res['CODE'];
							$NAME = $ar_res['NAME'];

							} ?>
					<div class="loft-types__tab" data-code="<?=$CODE;?>">
						<?=$NAME;?>
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
