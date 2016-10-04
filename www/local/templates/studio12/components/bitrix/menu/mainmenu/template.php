<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
  <div class="menu">
               
           
                    

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		  <div class="menu__item active"> 
		  	<a href="<?=$arItem["LINK"]?>" class="menu__link"><?=$arItem["TEXT"]?></a>
          </div>
		<?else:?>
		<div class="menu__item">
			<a href="<?=$arItem["LINK"]?>" class="menu__link"><span><?=$arItem["TEXT"]?></span></a>
        </div>
		
	<?endif?>
	
<?endforeach?>
<div class="menu__item"><a class="menu__link" href="#">#блог</a></div>

                  
	</div>


<?endif?>