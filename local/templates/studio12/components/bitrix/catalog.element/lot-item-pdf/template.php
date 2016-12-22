<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<!-- <pre>
<?// print_r($arResult);?>
</pre> -->


<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="start" href="/">
</head>

<style>
    * {
        font-family: DejaVu Sans ;
        margin: 0;
        padding: 0;
        color: #000000;
        line-height: 1;
    }
    html {
        height: 100%;
    }
    body {
        position: relative;
        height: 100%;
        min-height: 800px;
    }
    .header {
        background-color: #ffe500;
        height: 60px;
        font-size: 0;
        position: relative;
        padding-left: 40px;
        margin-bottom: 25px;
    }
    .logo {
        margin: 8px 0 0 0;
        display: inline-block;
        vertical-align: middle;
    }
    .contact {
        display: inline-block;
        vertical-align: middle;
        margin: 21px 0 0 50px;
        font-size: 16px;
        font-weight: bold;
    }
    .kr-logo {
        width: 156px;
        height: 60px;
        position: absolute;
        top: 0;
        right: 0;
    }
    .big-logo {
        display: inline-block;
        font-size: 55px;
        font-weight: bold;
        color: #ffe500;
        text-transform: uppercase;
        position: relative;
        margin-bottom: 30px;
    }
    .big-logo span {
        display: block;
        left: 0;
        right: 0;
        bottom: 0;
        height: 3px;
        width: 353px;
        background: #ffe500;
        margin-top: -2px;
    }
    .info {
        padding-left: 40px;
    }
    .box {
        display: block;
        float: left;
        overflow: hidden;
    }
    .box:last-child {
        margin-right: 0;
    }
    .sub-desc {
        font-size: 18px;
        font-weight: bold;
    }
    .title {
        font-size: 14px;
        color: #aaaaaa;
        margin-top: 6px;
    }
    .table {
        margin-bottom: 25px;
        width: 100%;
    }
    .desc {
        font-size: 26px;
        font-weight: bold;
    }
    .about {
        padding-left: 40px;
        background-color: #eaeaea;
        padding-top: 30px;
        padding-bottom: 30px;
        margin-bottom: 40px;
    }
    .text {
        font-size: 24px;
        font-weight: bold;
        line-height: 1.1;
    }
    .map {
        padding: 0 40px;
    }
    .map img {
        width: 100%;
    }
    .footer {
        height: 10px;
        background-color: #ffe500;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }
    .footer span {
        height: 10px;
        width: 156px;
        background-color: #ea212d;
        position: absolute;
        bottom: 0;
        right: 0;
    }
</style>

<body>

    <div class="header">
        <img class="logo" src="logo.png" alt="STUDIO#12">
        <div class="contact"><a href="http://www.loftstudio12.ru" target="_blank" style="text-decoration: none;">www.loftstudio12.ru</a><span style="margin-left: 40px">8 (495) 780-40-40</span></div>
        <a href="http://www.kr-pro.ru" target="_blank">
            <img class="kr-logo" src="kr-logo.jpg" alt="STUDIO#12">
        </a>
    </div>

    <div class="info">
        <div class="big-logo">Studio#12 <span></span></div>
        <table class="table">
            <tr>
                <td style="width: 220px">
                    <div class="sub-desc">Марьина Роща</div>
                    <div class="title">Метро</div>
                </td>
                <td>
                    <div class="sub-desc">12-й проезд Марьиной Рощи д. 8</div>
                    <div class="title">Адрес</div>
                </td>
            </tr>
        </table>
        <table class="table">
            <tr>
                <td style="width: 25%">
                    <div class="desc"><?=$arResult['PROPERTIES']['AREA']['VALUE'];?> м<sup>2</sup></div>
                    <div class="title">Площадь</div>
                </td>
                <td style="width: 25%;">
                    <div class="desc">
                    <?= number_format(filter_var ($arResult['PROPERTIES']['SQUARE_COST']['VALUE'], FILTER_SANITIZE_NUMBER_FLOAT,  FILTER_FLAG_ALLOW_THOUSAND), 2, ',', ' ');?>                  
                      
                    </div>
                    <div class="title">Цена за м2</div>
                </td>
                <td style="width: 35%;">
                    <div class="desc">
                    <?= number_format(filter_var ($arResult['PROPERTIES']['PRICE']['VALUE'],FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_THOUSAND), 2, ',', ' ');?>
                                         
                    </div>
                    <div class="title">Общая стоимость</div>
                </td>
                <td style="width: 15%;">
                    <div class="desc"><?=$arResult['PROPERTIES']['STAGE']['VALUE'];?></div>
                    <div class="title">Этаж</div>
                </td>
            </tr>
        </table>
    </div>

    <div class="about">
        <table style="width: 100%;">
            <tr>
                <td>
                    <div class="text"><?=$arResult['PROPERTIES']['TYPE']['VALUE'];?></div>
                    <div class="text"><?=$arResult['PROPERTIES']['ENTER']['VALUE'];?></div>
                </td>
            </tr>
        </table>
    </div>

    <div class="map">
        <img src="map.jpg" alt="Карта">
    </div>

    <div class="footer"><span></span></div>

</body>
</html>







