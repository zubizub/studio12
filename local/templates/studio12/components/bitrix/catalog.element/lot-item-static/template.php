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
$this->setFrameMode(true);?>
<!-- <pre>
<?// print_r($arResult);?>
</pre> -->
<div class="popup__inner <?if ($APPLICATION->GetCurPage()== '/object/'): ?>anim anim--js-right<?else:?>popup-an popup-an--js-right<? endif; ?>">
  <div class="detail  <?if ($APPLICATION->GetCurPage()== '/object/'): ?>anim-dom<?else:?>popup-an-dom<? endif; ?>">
    <div class="detail__inner">
      <div class="detail__head">
        <h2>Studio #12</h2>
      </div>
      <div class="infograph">
        <div class="item">
          <h4><span class="num"><?=$arResult['PROPERTIES']['AREA']['VALUE'];?></span> м<sup>2</sup></h4>
          <p class="text">Площадь</p>
        </div>
        <div class="item">
          <h4><span class="num"><?=$arResult['PROPERTIES']['SQUARE_COST']['VALUE'];?></span></h4>
            <p class="text">Цена за м2</p>
        </div>
        <div class="item">
          <h4><span class="num"><?=$arResult['PROPERTIES']['PRICE']['VALUE'];?></span></h4>
          <p class="text">Стоимость</p>
        </div>
        
        <div class="item">
          <h4><span class="num"><?=$arResult['PROPERTIES']['STAGE']['VALUE'];?></span></h4>
          <p class="text">Этаж</p>
        </div>
      </div>
    </div>
    <? if (!empty($arResult['DETAIL_PICTURE'])) { ?>
    <div class="photo-gallery">
      <div class="photo-gallery__item">
        <img src="<?= $arResult['DETAIL_PICTURE']['SRC'];  ?>" alt="">
      </div>
    </div>

    <? } ?>
    <div class="detail__inner">
      <div class="detail__text"><?=$arResult['PROPERTIES']['TYPE']['VALUE'];?> <?=$arResult['PROPERTIES']['ENTER']['VALUE'];?></div>
      <div class="detail__about">
        <!--<a class="detail__more" href="/object/?ELEMENT_ID=<?=$arResult['ID'];?>"><span>Подробнее о предложении</span></a>-->
<? if (!$_GET['ELEMENT_ID']) { ?>
       <a class="detail__link" href="/object/?ELEMENT_ID=<?=$arResult['ID'];?>" target="_blank">Открыть в новом окне</a>
<? } ?>
        <div class="detail__hidden">
          <div class="detail__info">
            <div class="detail__label">Площадь</div>
            <div class="detail__value">179,70 м2</div>
          </div>
          <div class="detail__info">
            <div class="detail__label">Подпись</div>
            <div class="detail__value">Значение</div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="popup__footer <?if ($APPLICATION->GetCurPage()== '/object/'): ?>anim anim--js-left<?else:?>popup-an popup-an--js-left<? endif; ?>">
  <div class="popup__in <?if ($APPLICATION->GetCurPage()== '/object/'): ?>anim-dom<?else:?>popup-an-dom<? endif; ?>">
    <div class="popup__cell"><span><a class="send_me_email" href="#">Выслать на почту</a></span></div>
    <div class="popup__cell popup__cell--callback">
      <a class="popup__number" href="tel:+74957804040">7 (495) 780-40-40</a>
      <p><a class="callback-me" href="#">Обратный звонок</a></p>
    </div>
  </div>
</div>
<button class="popup__close <?if ($APPLICATION->GetCurPage()== '/object/'): ?>anim-dom<?else:?>popup-an-dom<? endif; ?>"></button>