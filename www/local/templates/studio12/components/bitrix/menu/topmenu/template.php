<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
                <nav class="menu">
                        <ul class="menu__list">
                          

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		  <li class="menu__item" class="selected">
		  	<a href="<?=$arItem["LINK"]?>" class="menu__link"><?=$arItem["TEXT"]?></a>
          </li>
		<?else:?>
		<li class="menu__item">
			<a href="<?=$arItem["LINK"]?>" class="menu__link"><?=$arItem["TEXT"]?></a>
        </li>
		
	<?endif?>
	
<?endforeach?>


                         </ul>
                    </nav>
<?endif?>