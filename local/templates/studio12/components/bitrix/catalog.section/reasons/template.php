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
<?
if (!empty($arResult['ITEMS']))
{
	
	
	foreach ($arResult['ITEMS'] as $key => $arItem)
	{ ?>
			<? //print_r($arItem); ?>
			  <div class="col-1-5">
                        <div class="reason">
                          <div class="reason__name"><?=$arItem['NAME'];?></div>
                          <div class="reason__explain"><?=$arItem['PREVIEW_TEXT'];?></div>
                        </div>
                      </div>

<?	}
} ?>

	
