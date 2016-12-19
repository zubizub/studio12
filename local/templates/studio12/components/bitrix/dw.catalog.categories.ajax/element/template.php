<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<?
if (is_array($arResult['ITEMS']) && count($arResult['ITEMS']) > 0) {
?>
<? foreach ($arResult['ITEMS'] as $key => $arItem) {
		
	$croped = '/lib/p/index.php?src='.$arItem["PICTURE"]["SRC"].'&h=660&w=620';?>
				<div class="loft-types__item" style="background-image: url('<?=$croped?>');"></div>
				
		<? } ?>


<?
	}
?>

	