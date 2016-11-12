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


<ul class="gallery2Switch">
<?
//print_r($arParams);
  $i=0;
  $arSections = array();
  $arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'], 'GLOBAL_ACTIVE'=>'Y', );
  $db_list = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter, true);
  
    while($ar_result = $db_list->GetNext())
  { ?>

<? $arSections[$i] = $ar_result['ID'];?>
     
     <li class="switch <?= ($i ==0) ? 'active' : '';?>">  
      <a href="javascript:void(0);" data-switch="<?=$i;$i++;?>" class="fp fs20"><?=$ar_result['NAME'];?></a>
    </li>
  <? } ?>
</ul>


<? //print_r($arSections);?>


<? foreach ($arSections as $key => $section) { ?>

  
         <? if ($key == 0)  { $active = "";} ?>
         <? unset($show); if ($key == '0')  { $show = "display: block;";} ?>

                    <div class="group<?=$key;?> galleryGroup" style="width:100%; <?=$show;?>">
                      <div class="slider<?=$key;?>">
<? //print_r($section);
      $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","*");
      $arFilter = Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "SECTION_ID" => $section);
      $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
      while($ob = $res->GetNextElement()){ 
       $arFields = $ob->GetFields();  ?>
      
      <div class="">
        <a class="fancybox" rel="gallery2" href="<?=CFile::GetPath($arFields['PREVIEW_PICTURE']);?>">
              <img src="<?=CFile::GetPath($arFields['PREVIEW_PICTURE']);?>" alt="#" />
          </a>
      </div>
      <? 
      } 
      ?>

  </div>
</div>

<? } ?>






  