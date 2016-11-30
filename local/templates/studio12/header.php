<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="ru">

<head>

       
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?$APPLICATION->ShowTitle()?></title>
    <meta name="description" content="Studio21">
    <!--link(rel='apple-touch-icon', href='apple-touch-icon.png')-->

    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WP4D8R4');</script>
<!-- End Google Tag Manager -->

    <?$APPLICATION->ShowHead()?>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <link href="<?=SITE_TEMPLATE_PATH?>/dist/css/main.css" rel="stylesheet" type="text/css">
    <link href="<?=SITE_TEMPLATE_PATH?>/css/new.css" rel="stylesheet" type="text/css">
    <!--<![endif]-->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <script>
        (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
    </script>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TDW2RL');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "Qvq370lOI0dZKgxly3IKyQQGTGHuSvII"]);
__cs.push(["setCsHost", "//server.comagic.ru/comagic"]);
 __cs.push(["setDynamicalReplacement", true]);
</script>
<script type="text/javascript" async src="//app.comagic.ru/static/cs.min.js"></script>

<script type="text/javascript">
    
function callBackComagic (formData) {

 var obj = {};
        var formData = $(formData).serializeArray();

       obj[formData[0].name]=[formData[0].value]
        //obj['email']='';
        obj[formData[1].name]=[formData[1].value];
        obj['message']=[formData[4].value];
        
        /*console.log(formData);
        console.log(JSON.stringify(obj));*/


        Comagic.addOfflineRequest(obj);



};




</script>

</head>



 
  <body class="home-page">
		  <!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WP4D8R4"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

        <?$APPLICATION->ShowPanel();?>
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TDW2RL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
                        <a class="menu__link" href="/quarters">#ЖИТЬВЛОФТЕ</a>
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
                <div class="mobile-note">
                    <div class="mobile-note__place">Москва, СВАО,<br>12-й пр. Марьиной Рощи 8<br> м. Марьина Роща</div>
                    <a class="mobile-note__phone call_phone_1" href="tel:74957804040">+7 495 780-40-40</a>
                    <a href="#" class="mobile-note__phone-link btn-callback">Обратный звонок</a>
                    <!-- <span class="mobile-note__sr-link btn-callback-room">Showroom: Studio#8</span> -->
                    <span class="mobile-note__sr-link btn-callback-room">Как проехать в <a href="javascript:void(0);" class="btn-showroom">Showroom</a></span>
                </div>
                <div class="note">
                            <div class="note__item">Креативный <br> лофт-квартал Studio#12 <br> — это уникальное <br> пространство  для <a class="link yellow" href="/quarters">#ЖИЗНИ</a>, <br> и <a class="link yellow" href="/job">#РАБОТЫ</a>.</div>
                            <div class="note__item">Это первый <br> креативный кластер <br> европейского масштаба.</div>
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