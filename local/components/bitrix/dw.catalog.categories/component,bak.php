<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams['IBLOCK_ID'] = intval($arParams['IBLOCK_ID']);
if (!$arParams['IBLOCK_ID'])
	return;

$arParams['IBLOCK_BINDING'] = $arParams['IBLOCK_BINDING'] == 'element' ? 'element' : 'section';

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

			  //$arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'] , 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID' => $arParams['SECTION']);
			  $arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'] , 'SECTION_ID' => $arParams['SECTION']);
			  $db_list = CIBlockSection::GetList(Array("ID"=>"ASC"), $arFilter, true);

			
			 
			  while($ar_result = $db_list->GetNext())
			  {
			    $arSubsections[]["ID"] = $ar_result['ID'];
			    $arSubsections[]["NAME"] = $ar_result['NAME'];
			  }
			$sections = '';
			foreach ($arSubsections as $key => $section) {
				
				$arFilter = array('ACTIVE' => 'Y', 'IBLOCK_ID' => $arParams['IBLOCK_ID'], 'SECTION_ID' =>$section['ID']);
				$arSelect = Array("*", "PROPERTY_*");	
				$dbRes = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>150), $arSelect);	

				while ($arRes = $dbRes->GetNextElement())
				{
		 				$arFields = $arRes->GetFields();  
						$arProps = $arRes->GetProperties();
						
					  
				
		 					
					//$arResult['ITEMS'][$section['ID']][] = array(
					$arResult['ITEMS'][$section['ID']][] = array(
						'ID' => $arFields['ID'],
						'NAME' => $arFields['NAME'],
						'DESCRIPTION' => $arFields['DESCRIPTION'],
						'PREVIEW_TEXT' => $arFields['PREVIEW_TEXT'],
						'DETAIL_URL' => $arFields['DETAIL_PAGE_URL'],
						'SECTION_NAME' => $SECTION_NAME,
						'SECTION_ID' => $section['ID'],
						'PROPS' => $arProps,
						'PICTURE' => $arFields['DETAIL_PICTURE'] ? CFile::GetFileArray($arFields["DETAIL_PICTURE"]) : ($arFields['PREVIEW_PICTURE'] ? CFile::GetFileArray($arFields["PREVIEW_PICTURE"]) : array()),
						'MAIN_PHOTO' => ($arProps['MAIN_PHOTO']['VALUE']) ? CFile::GetFileArray($arProps['MAIN_PHOTO']['VALUE']): array(),
					);
				}
			}
			
			
	//print_r('<pre>');print_r($arResult);print_r('</pre>');
			


			}

		if ($arParams['IBLOCK_BINDING'] == 'section')
	{

			  //$arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'] , 'GLOBAL_ACTIVE'=>'Y', 'SECTION_ID' => '9,6');
			  $arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'] , 'GLOBAL_ACTIVE'=>'Y', "ACTIVE"=>"Y");
			  //$db_list = CIBlockSection::GetList(Array("ID"=>"DESC"), $arFilter, true);
			  $db_list = CIBlockSection::GetList(Array("SORT"=>"ASC"), $arFilter, true);

			
			 $excludeSection = array('6,9');
			  while($ar_result = $db_list->GetNext())
			  {
			  	if ($ar_result['ID'] !='9') {
				    $arSubsections[]["ID"] = $ar_result['ID'];
				    $arSubsections[]["NAME"] = $ar_result['NAME'];
			    }
			  }
			//$sections = '';

			//print_r($arSubsections);
			foreach ($arSubsections as $key => $section) {
				
				$arFilter = array('ACTIVE' => 'Y', 'IBLOCK_ID' => $arParams['IBLOCK_ID'], 'SECTION_ID' =>$section['ID']);
				$arSelect = Array("*", "PROPERTY_*");	
				$dbRes = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>150), $arSelect);	

				while ($arRes = $dbRes->GetNextElement())
				{
		 				$arFields = $arRes->GetFields();  
						$arProps = $arRes->GetProperties();
						
					  
				
		 					
					$arResult['ITEMS'][$section['ID']][] = array(
						'ID' => $arFields['ID'],
						'NAME' => $arFields['NAME'],
						'DESCRIPTION' => $arFields['DESCRIPTION'],
						'PREVIEW_TEXT' => $arFields['PREVIEW_TEXT'],
						'DETAIL_URL' => $arFields['DETAIL_PAGE_URL'],
						'SECTION_NAME' => $SECTION_NAME,
						'SECTION_ID' => $section['ID'],
						'PROPS' => $arProps,
						'PICTURE' => $arFields['DETAIL_PICTURE'] ? CFile::GetFileArray($arFields["DETAIL_PICTURE"]) : ($arFields['PREVIEW_PICTURE'] ? CFile::GetFileArray($arFields["PREVIEW_PICTURE"]) : array()),
						'MAIN_PHOTO' => ($arProps['MAIN_PHOTO']['VALUE']) ? CFile::GetFileArray($arProps['MAIN_PHOTO']['VALUE']): array(),
					);
				}
			}
			
			
	//print_r('<pre>');print_r($arResult);print_r('</pre>');
			


			}
		

	
	
	$this->IncludeComponentTemplate();
}

?>