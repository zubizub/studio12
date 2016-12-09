<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
  <ul class="menu">
               
           
                    

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		  <li class="menu__item">
		  	<span class="menu__link active"><?=$arItem["TEXT"]?></span>
          </li>
		<?else:?>
		<li class="menu__item">
			<a href="<?=$arItem["LINK"]?>" class="menu__link link-animate"><?=$arItem["TEXT"]?></a>
        </li>
		
	<?endif?>
	
<?endforeach?>
		<li class="menu__item"><a class="menu__link link-animate queue__act" href="#">#ВЫБРАТЬЛОФТ</a></li>

                  
	</ul>


<?endif?>