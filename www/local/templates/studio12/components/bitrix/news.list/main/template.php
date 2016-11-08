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

  <div class="dotSlider">
                          <? $i=0; $items = count($arResult['ITEMS']); foreach($arResult["ITEMS"] as $key => $arItem):?>

                          <? //print_r('<pre>'); print_r($arItem); print_r('</pre>'); ?>
                          <? $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))); ?>
                

<!--   <div class="content__item five-persent"> -->
<div>
    <div class="entry" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
      <!--<div class="entry__title fp title"><?=$arItem["NAME"]?></div>-->
      <div class="entry__content">
        <!--<div class="entry__desc text"><?=$arItem['PREVIEW_TEXT'];?></div>-->
        <div class="entry__desc fp title"><?=$arItem["NAME"]?></div>
        <div class="entry__num fg">-<?= $arItem['PROPERTIES']['DISCOUNT']['VALUE'];?>%</div>
      </div>
    </div>
</div>
<!-- <div class="slide">
              <div class="five-persent__left-block block_white" style="display: inline-block; width: 50%;">
                <div class="fp  title"  style="margin-bottom: 15px;"></div>
                <div class="text">
                  </div>
              </div>
              <div class="five-persent__right-block" style="display: inline-block; width: 50%; margin-left: -5px;">
                <span class="fg orange">-5%</span>
              </div>
            <!-- </div>
</div> -->

<? endforeach;?>

  
  </div>