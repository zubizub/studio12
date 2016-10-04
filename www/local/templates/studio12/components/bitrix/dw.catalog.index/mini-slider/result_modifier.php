<?

$items = $arResult['ITEMS'];
unset($arResult['ITEMS']);

foreach ($items as $key => $arItem) {
	
	if ($arItem['PROPS']['SLIDER_LIFE_FLAG']['VALUE'] == 'Y') {
		$arResult['ITEMS'][] = $arItem;
	}
}


//print_r($arResult['ITEMS']); 


