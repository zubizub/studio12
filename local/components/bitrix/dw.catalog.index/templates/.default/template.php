<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<?
if (is_array($arResult['ITEMS']) && count($arResult['ITEMS']) > 0):
?>

<? //print_r($arResult['AJAX']);?>

<? if (!$arResult['AJAX']) : ?>

<div id="loft-table" class="section section--lofts">
    <div class="box" style="">
        <svg class="dynamic" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1165px" height="1500px" viewbox="0 0 1165 1500" enable-background="new 0 0 1165 1500" xml:space="preserve" preserveAspectRatio="xMinYMin meet" style='width: 100%; height: 5000px;'>
            <path class="path" id="building"></path>
            <path class="path" id="building2"></path>
            <path class="path" id="building3"></path>
        </svg>
    </div>
    <div class="section__inner">
        <div class="offers-loft">
            <? include ('svg.php'); ?>
            <div class="lots">
                <div class="lots__list">
                    <div class="lots__inner">
                        <select class="lot-sort-mobile">
                            <option selected>Сортировать лоты</option>
                            <option data-sort="number" data-direction="asc">По номеру лота</option>
                            <option data-sort="type" data-direction="asc">По типу</option>
                            <option data-sort="floor" data-direction="asc">Этаж</option>
                            <option data-sort="area" data-direction="asc">Площадь, М2</option>
                            <option data-sort="price" data-direction="asc">Цена за М2</option>
                            <option data-sort="cost" data-direction="asc">По стоимости</option>
                            <option data-sort="status" data-direction="asc">Статус</option>
                        </select>
                        <div class="lot lot--header">
                            <div class="lot-sort-wrap">
                                <div class="lot__value-1"><a href="#" class="lot-sort link-animate" data-sort="number" data-direction="asc">Лот</a></div>
                                <div class="lot__value-2"><a href="#" class="lot-sort link-animate" data-sort="type" data-direction="asc">Тип</a></div>
                                <div class="lot__value-3"><a href="#" class="lot-sort link-animate" data-sort="floor" data-direction="asc">Этаж</a></div>
                                <div class="lot__value-4"><a href="#" class="lot-sort link-animate" data-sort="area" data-direction="asc">Площадь, М2</a></div>
                                <div class="lot__value-5"><a href="#" class="lot-sort link-animate" data-sort="price" data-direction="asc">Цена за М2</a></div>
                                <div class="lot__value-6"><a href="#" class="lot-sort link-animate" data-sort="cost" data-direction="asc">Стоимость</a></div>
                                <div class="lot__value-7"><a href="#" class="lot-sort link-animate" data-sort="status" data-direction="asc">Статус</a></div>
                            </div>
                        </div>
                        <div class="ajaxLofts" id="ajaxLofts">


                        <?
endif;

  $i = 1;
  $count = 0;
  $hideCount = count($arResult['ITEMS']);
  foreach ($arResult['ITEMS'] as $arItem):
?>
                        <!-- <pre><?//print_r($arItem['PROPS']);?></pre>  -->
                        <? unset ($additionClass);  if ($arItem['PROPS']['STATUS']['VALUE'] == 'Продано') { $additionClass = 'lot--disabled'; } ?>


                        <? if ($i == 7) :?>

                        <div class="lots__hidden">
                            <?endif;?>

                            <a class="lot ajaxLotItem <?=$additionClass;?>" href="<?=$arItem['DETAIL_URL']?>" el="<?=$arItem['ID'];?>" lot="<?=$arItem['PROPS']['LOT']['VALUE'];?>" object-id="<?=$arItem['PROPS']['SITE_ID']['VALUE'];?>">
                                <div class="lot__inner">
                                    <div class="lot__value-1">
                                        <span class="lot__number"><?=$arItem['PROPS']['LOT']['VALUE'];?></span>
                                        <span class="lot__desc">Лот</span>
                                    </div>
                                    <div class="lot__value-2">
                                        <span class="lot__styles">
                                          <span class="lot__style-1"><?=$arItem['PROPS']['TYPE']['VALUE'];?></span>
                                          <span class="lot__style-2"><?=$arItem['PROPS']['ENTER']['VALUE'];?></span>
                                        </span>
                                    </div>
                                    <div class="lot__group">
                                        <div class="lot__value-3">
                                            <span class="lot__desc">Этаж</span>
                                            <?=$arItem['PROPS']['STAGE']['VALUE'];?>
                                        </div>
                                        <div class="lot__value-4">
                                            <span class="lot__desc">Площадь М2</span>
                                            <?=$arItem['PROPS']['AREA']['VALUE'];?>
                                        </div>
                                        <div class="lot__value-5">
                                            <span class="lot__desc">За М2</span>
                                            <?= number_format($arItem['PROPS']['SQUARE_COST']['VALUE'], 2, ',', ' ');?>
                                            <?//=$arItem['PROPS']['SQUARE_COST']['VALUE'];?>
                                        </div>
                                    </div>
                                    <div class="lot__value-6">
                                        <span class="lot__desc">Стоимость</span>
                                        <span class="lot__price">
                                        <?= number_format($arItem['PROPS']['PRICE']['VALUE'], 2, ',', ' ');?>
                                        <?//=$arItem['PROPS']['PRICE']['VALUE'];?>
                                            
                                        </span>
                                    </div>
                                    <div class="lot__value-7">
                                        <span class="lot__desc">Статус</span>
                                        <?=$arItem['PROPS']['STATUS']['VALUE'];?>
                                    </div>
                                </div>
                            </a>
                            <? if ($i == $hideCount) :?>

                        </div>
                        <?endif;$count++;$i++;?>
                        <?
    endforeach;
?>

<? if (!$arResult['AJAX']) : ?>
                        </div>
                    </div>

                    <div class="lots__inner">
                        <div class="lots__inner lots__inner--controls">
                            <div class="lots__control"><a class="more-items">Еще <span><?=$count-6;?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="ajaxPopup">


                <div class="popup popup--loft"></div>
                <div class="popup popup--email"></div>
                <div class="popup popup--callback"></div>

            </div>
        </div>

    </div>

    <div>
        <?
    endif;
endif;
?>
