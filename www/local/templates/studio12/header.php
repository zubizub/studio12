<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
       
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta name="description" content="Studio21">
    <!--link(rel='apple-touch-icon', href='apple-touch-icon.png')-->
    <?$APPLICATION->ShowHead()?>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <link href="<?=SITE_TEMPLATE_PATH?>/dist/css/main.css" rel="stylesheet" type="text/css">
    <!--<![endif]-->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <script>
        (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
    </script>
    
</head>



 
  <body class="home-page">
        <?$APPLICATION->ShowPanel();?>
    <div class="container">
        <div class="container__inner">
            <div class="sidebar">
                <div class="sidebar__inner">
                    <div class="sidebar__header"><a class="side-logo" href="#"><img class="side-logo__img" src="<?=SITE_TEMPLATE_PATH?>/dist/img/side-logo.png"></a></div>
                    <div class="sidebar__body">
              <!--.component menu-->
               <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"mainmenu", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "mainmenu"
	),
	false
);?>
                <div class="note">
                            <div class="note__item">Креативный <br> лофт-квартал Studio#12 <br> — это уникальное <br> пространство  для <a class="link yellow" href="#">#ЖИЗНИ</a>, <br> и <a class="link yellow" href="#">#РАБОТЫ</a>.</div>
                            <div class="note__item">Это первый <br> креативный кластер <br> европейского масштаба <br> <a class="link yellow" href="#">на карте Москвы.</a></div>
                        </div>
                    </div>
                    <div class="sidebar__footer">
                        <div class="copyright">
                            <div class="copyright__legend">Дизайн и разработка сайта:</div>
                            <div class="copyright__name">Korovets studio</div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="main">