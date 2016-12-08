<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams['IBLOCK_ID'] = intval($arParams['IBLOCK_ID']);
if (!$arParams['IBLOCK_ID'])
	return;

$arParams['IBLOCK_BINDING'] = $arParams['IBLOCK_BINDING'] == 'element' ? 'element' : 'section';

$ajaxFlag = $_REQUEST['AJAX'];
$sortBy = $_REQUEST['sortBy'];
$direction = $_REQUEST['direction'];

function ajaxSort ($sortBy,$direction = 'asc') {

	
		switch ($sortBy) {
			
			case 'number': 	$arSort = array('PROPERTY_LOT' => $direction);   	break;
			case 'area':   	$arSort = array('PROPERTY_AREA' => $direction);  	break;
			case 'type':	$arSort = array('PROPERTY_TYPE' => $direction);		break;
			case 'floor':	$arSort = array('PROPERTY_FLOOR' => $direction);	break;
			case 'price':	$arSort = array('PROPERTY_SQUARE_COST' => $direction);	break;
			case 'cost':	$arSort = array('PROPERTY_PRICE' => $direction);	break;
			case 'status':	$arSort = array('PROPERTY_STATUS' => $direction);	break;
		
			
			default:
				$arSort = array();
				break;
		}

//		print_r($arSort);
	return $arSort;

}

//ajaxSort($sortBy);

if ($this->StartResultCache(false, ($arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups())))
{
	if(!CModule::IncludeModule("iblock"))
	{
		$this->AbortResultCache();
		return;
	}
	
	$arResult["AJAX"] = $ajaxFlag;

	$arResult["ITEMS"] = array();
	if ($arParams['IBLOCK_BINDING'] == 'element')
	{
		




		$arFilter = array('ACTIVE' => 'Y', 'IBLOCK_ID' => $arParams['IBLOCK_ID']);
		//$arSelect = Array("ID", "IBLOCK_ID", "*", "PROPERTY_*");
		$arSelect = Array("*", "PROPERTY_*");
		//$dbRes = CIBlockElement::GetList(array('SORT' => 'ASC'), $arFilter);
		$dbRes = CIBlockElement::GetList(ajaxSort($sortBy), $arFilter, false, Array("nPageSize"=>150), $arSelect);
		

		while ($arRes = $dbRes->GetNextElement())
		{
 				$arFields = $arRes->GetFields();  
				$arProps = $arRes->GetProperties();
				//print_r($arFields);
				//print_r($arFields['ID']);
				//print_r($arProps);
				
				 $arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'], 'GLOBAL_ACTIVE'=>'Y', 'ID'=>$arFields['IBLOCK_SECTION_ID']);
				  $db_list = CIBlockSection::GetList(Array(), $arFilter, true);
				  while($ar_result = $db_list->GetNext())
				  {
				   $SECTION_NAME = $ar_result['NAME'];
				  }
			  
		//print_r($arFields);
 					
			$arResult['ITEMS'][] = array(
				'ID' => $arFields['ID'],
				'NAME' => $arFields['NAME'],
				'DESCRIPTION' => $arFields['DESCRIPTION'],
				'PREVIEW_TEXT' => $arFields['PREVIEW_TEXT'],
				'DETAIL_URL' => $arFields['DETAIL_PAGE_URL'],
				'SECTION_NAME' => $SECTION_NAME,
				'PROPS' => $arProps,
				'PICTURE' => $arFields['DETAIL_PICTURE'] ? CFile::GetFileArray($arFields["DETAIL_PICTURE"]) : ($arFields['PREVIEW_PICTURE'] ? CFile::GetFileArray($arFields["PREVIEW_PICTURE"]) : array()),
				'MAIN_PHOTO' => ($arProps['MAIN_PHOTO']['VALUE']) ? CFile::GetFileArray($arProps['MAIN_PHOTO']['VALUE']): array(),
			);
		}
	}
	else
	{
		$arFilter = array('ACTIVE' => 'Y', 'IBLOCK_ID' => $arParams['IBLOCK_ID'], 'DEPTH_LEVEL' => 1);
		//$arParams['LIMIT'] = intval($arParams['LIMIT'])+1;
		//$dbRes = CIBlockSection::GetList(Array("SORT"=>"ASC"), true, false, array("*", "UF_*"), array("nPageSize"=>$arParams['LIMIT']));
		$dbRes = CIBlockSection::GetList(Array("SORT"=>"ASC"), true, false, array("*", "UF_*"), array("nPageSize"=>$arParams['LIMIT']));
		$dbRes->SetUrlTemplates();
		
		while ($arRes = $dbRes->GetNext())
		{


			$filter = array('ACTIVE' => 'Y', 'IBLOCK_ID' => $arParams['IBLOCK_ID'], 'DEPTH_LEVEL' => 1, 'ID'=>$arRes['ID']);
			$aRes = CIBlockSection::GetList(Array("SORT"=>"ASC"), $filter, false,  array("*", "UF_*"));
		
			while ($arRes = $aRes->GetNext()) {


			$arResult['ITEMS'][] = array(
				'NAME' => $arRes['NAME'],
				'SECTION_ID' => $arRes['ID'],
				'DESCRIPTION' => $arRes['DESCRIPTION'],
				'DETAIL_URL' => $arRes['SECTION_PAGE_URL'],
				'PICTURE' => CFile::GetFileArray($arRes["PICTURE"]),				
				'UF_PROMO_PHOTO' => CFile::GetFileArray($arRes["UF_PROMO_PHOTO"]),
				'UF_SECTION_TITLE' => $arRes['UF_SECTION_TITLE'],
				'UF_SECTION_DESC' => $arRes['UF_SECTION_DESC'],
				'UF_SECTION_PROMOTEXT' => $arRes['UF_SECTION_PROMOTEXT'],
				'UF_SECTION_BRAND' => $arRes['UF_SECTION_BRAND'],

			);

			}

		}
	}
	
	$this->IncludeComponentTemplate();
}

?>