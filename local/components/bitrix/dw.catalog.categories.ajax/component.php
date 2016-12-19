<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams['IBLOCK_ID'] = intval($arParams['IBLOCK_ID']);
if (!$arParams['IBLOCK_ID'])
	return;

//$arParams['IBLOCK_BINDING'] = $arParams['IBLOCK_BINDING'] == 'element' ? 'element' : 'section';
//print_r($arParams);

$SECTION_ID = $_REQUEST['section'];
$ELEMENT_ID = $_REQUEST['ELEMENT_ID'];

if ($this->StartResultCache(false, ($arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups())))
{
	if(!CModule::IncludeModule("iblock"))
	{
		$this->AbortResultCache();
		return;
	}
	
	$arResult["ITEMS"] = array();
	



	if ($arParams['IBLOCK_BINDING'] == 'element')
	{

			  
				$arFilter = array('ACTIVE' => 'Y', 'IBLOCK_ID' => $arParams['IBLOCK_ID'], 'SECTION_ID' =>$SECTION_ID, "=ID"=>$ELEMENT_ID);
				$arSelect = Array("ID","IBLOCK_ID");	
				$dbRes = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);	
				

				while ($arRes = $dbRes->GetNextElement())
				{
		 				$arFields = $arRes->GetFields();  
						
						
					  	//print_r($arFields);
				
		 					
					//$arResult['ITEMS'][$section['ID']][] = array(
					$arResult['ITEMS'][] = array(
						'ID' => $arFields['ID'],
						'NAME' => $arFields['NAME'],
						'DESCRIPTION' => $arFields['DESCRIPTION'],
						'PREVIEW_TEXT' => $arFields['PREVIEW_TEXT'],
						'DETAIL_URL' => $arFields['DETAIL_PAGE_URL'],
						'PICTURE' => $arFields['PREVIEW_PICTURE'],
						
					);
				}
			
			
			
	//print_r('<pre>');print_r($arResult);print_r('</pre>');
			


			}

		if ($arParams['IBLOCK_BINDING'] == 'section-images')
	{



			$arFilter = array('ACTIVE' => 'Y', 'IBLOCK_ID' => $arParams['IBLOCK_ID'], 'SECTION_ID' =>intval($arParams["SECTION"]));
			
				$arSelect = Array("*");	
				$dbRes = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>150), $arSelect);	
					$arResult['SECTION_ID'][]=$arParams['SECTION'];
				while ($arRes = $dbRes->GetNextElement())
				{
		 				$arFields = $arRes->GetFields();  
						
						
			

					$arResult['ITEMS'][] = array(
						'ID' => $arFields['ID'],
						'PICTURE' => $arFields['DETAIL_PICTURE'] ? CFile::GetFileArray($arFields["DETAIL_PICTURE"]) : ($arFields['PREVIEW_PICTURE'] ? CFile::GetFileArray($arFields["PREVIEW_PICTURE"]) : array()),

						
					);
				}
			}
			
			
	//print_r('<pre>');print_r($arResult);print_r('</pre>');
			


			
		

	
	
	$this->IncludeComponentTemplate();
}

?>