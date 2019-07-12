<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?IncludeTemplateLangFile(__FILE__);?>
<?
CModule::IncludeModule("iblock");
$db_props = CIBlockElement::GetProperty(20, 83, "sort", "asc", array());
$PROPS = array();
while($ar_props = $db_props->Fetch()) {
    $PROPS[$ar_props['CODE']] = $ar_props['VALUE'];
}
//print_r($PROPS);
$body_bg = CFile::GetPath($PROPS["BG"]);
$logo = CFile::GetPath($PROPS["LOGO"]);
$phone = $PROPS["PHONE"];
$email = $PROPS["EMAIL"];
$adress = $PROPS["ADRESS"];
$inst = $PROPS["INST"];
$fb = $PROPS["FB"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?$APPLICATION->ShowHead()?>
    <meta http-equiv="Content-Type" content="text/html; charset=<?=LANG_CHARSET;?>"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="<?=$APPLICATION->ShowTitle();?>"/>
    <meta property="og:description" content="<?=$APPLICATION->ShowProperty("description");?>"/>
    <meta property="og:image" content="<?=SITE_TEMPLATE_PATH;?>/logo-net.jpg"/>
    <meta property="og:site_name" content="<?=$arSite['SITE_NAME']?>"/>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH;?>/favicon.ico"/>
    <?$APPLICATION->SetAdditionalCSS("/bitrix/templates/".SITE_TEMPLATE_ID."/megalos.css");?>
	<?
	$APPLICATION->ShowHead();
	$APPLICATION->ShowProperty('MetaOG');
	IncludeTemplateLangFile(__FILE__);
	$APPLICATION->ShowProperty('BeforeHeadClose');
	?>
</head>
<body>
<div class="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="wrp">
    <header class="header">
        <div class="header__logo">
            <div class="header__img">
                <img src="dist/img/logo.png" width="90" height="90" alt="">
            </div>
            <div class="header__logo-name">ALTA <br>GROUP</div>
        </div>
        <div class="header__title">
            <h1>Комплексный подход к водоочистке</h1>
            <h2>Проектирование и производство очистных сооружений</h2>
        </div>
        <div class="header__contacts">
            <a href="tel:+77172781048"><b>+7 7172 78-10-48</b></a>
            <a href="tel:+77780101048"><b>+7 778 010-10-48</b></a>
            <a href="mailto:info@megalos.kz">info@megalos.kz</a>
        </div>
        <div class="header__group">
            <a href="#" class="header__btn call">Заказать звонок</a>
            <a href="#" class="header__btn">Отправить запрос</a>
        </div>
    </header>
    <nav class="nav">
        <ul class="nav__menu">
            <li class="nav__item"><a class="nav__link" href="#">Оборудование</a></li>
            <li class="nav__item"><a class="nav__link" href="#">Документация</a></li>
            <li class="nav__item"><a class="nav__link" href="#">Проекты</a></li>
            <li class="nav__item"><a class="nav__link" href="#">Новости</a></li>
            <li class="nav__item"><a class="nav__link" href="#">О компании</a></li>
            <li class="nav__item"><a class="nav__link" href="#">Контакты</a></li>
        </ul>

    </nav>
    <main>
		