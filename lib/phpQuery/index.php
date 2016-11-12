55<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); ?>
<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<?

require('phpQuery/phpQuery.php');
CModule::IncludeModule('iblock');
CModule::IncludeModule('catalog');
define("STOP_STATISTICS", true);
$el = new CIBlockElement;

$html = file_get_contents('http://www.kr-pro.ru/studio-12/');

//print_r($html);

$doc = phpQuery::newDocument($html);

$div = $doc->find('div.available-offers-table');

$propCount =9;
$aQuarters = array();
$arResult = array();
$el = new CIBlockElement;
//print_r("row: ".$div->html().'<br/>');
$i=0;
$z=0;
	foreach ($div->find('a') as $key => $row) {

		$pq = pq($row);
				
		
		$href = $pq->attr('href');
		$building = $pq->attr('data-building');
		$aUrl = explode('/', $href);
		$id = $aUrl[2];
		//print_r("ID: ".$id.'<br/>');
		//print_r($building);
	
		//print_r("row: (".$i.")".$pq->html().'<br/>');
		foreach ($pq->find('span') as $key => $value) {
			
		 if (empty($building)) { $building=='0'; }
			$cell = pq($value);
			$cell->find('em')->remove();
			$cell->find('br')->remove();
			$data = trim($cell->html());
			
						
			
			
			if ($i == 1) {
				$data = preg_replace("/  +/", '--', $data);
				$data = rtrim($data, " \t");
				$data = preg_replace("/\s+/", ' ', $data);
				$aType = explode('--', $data);
				$arResult[$z][$i] = $aType[0];
			}


			
						
			else {
				$arResult[$z][$i] = $data;
			}
			//print_r($id);
			
			$i++;

				if ($i == 7) {
				$arResult[$z][7] = $id;
				$arResult[$z][8] = $aType[2];
				$i=8;
				
			
			}	

			

			if ($i ==8){
				$arResult[$z][9] = $building;
				$i = 0;
				$z++;
			}
		


	 



			//print_r("cell: (".$i.")".$data.'<br/>');

		}
		
				

	}


$PROP = array();

foreach ($arResult as $key => $arItem) {

	//print_r($arItem);
	$PROP['LOT'] = $arItem[0];
	$PROP['TYPE'] = $arItem[1];
	$PROP['STAGE'] = $arItem[2];
	$PROP['AREA'] = $arItem[3];
	$PROP['SQUARE_COST'] = $arItem[4];
	$PROP['PRICE'] = $arItem[5];
	$PROP['STATUS'] = $arItem[6];
	$PROP['SITE_ID'] = $arItem[7];
	$PROP['ENTER'] = $arItem[8];
	$PROP['BUILDING'] = $arItem[9];

print_r('<pre>');
print_r($PROP);
print_r('</pre>');

$LOT = 'LOT# '.$arItem[7];

	$arLoadProductArray = Array(
  "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
  "IBLOCK_ID"      => 5,
  "PROPERTY_VALUES"=> $PROP,
  "NAME"           => $LOT,
  "ACTIVE"         => "Y",            // активен
  //"PREVIEW_TEXT"   => "текст для списка элементов",
  //"DETAIL_TEXT"    => "текст для детального просмотра",
  //"DETAIL_PICTURE" => CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"]."/image.gif")
  );

/*if($PRODUCT_ID = $el->Add($arLoadProductArray)){
  echo "New ID: ".$PRODUCT_ID;
  }
else {
  echo "Error: ".$el->LAST_ERROR;
 }*/

}

print_r(count($arResult));

/*print_r('<pre>');
print_r($arResult);
print_r('</pre>');*/


?>
