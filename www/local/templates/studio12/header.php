<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
       
    <meta charset="utf-8">
    <meta name="viewport" content="width=1100">
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
                <ul class="menu">
                    <li class="menu__item">
                        <a class="menu__link" href="/">#Главная</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="/quarters">#Лофтквартал</a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="/job">#Работавлофте</a>
                    </li>
                    <li class="menu__item">
                        <?if ($APPLICATION->GetCurPage()== '/'): ?>
                            <a class="menu__link queue__act" href="#">#Выбратьлофт</a>
                            <?else:?>
                            <a class="menu__link loft-btn" href="#loft-table">#Выбратьлофт</a>
                        <? endif; ?>
                    </li>
                </ul>
                <div class="note">
                            <div class="note__item">Креативный <br> лофт-квартал Studio#12 <br> — это уникальное <br> пространство  для <a class="link yellow" href="/quarters">#ЖИЗНИ</a>, <br> и <a class="link yellow" href="/job">#РАБОТЫ</a>.</div>
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