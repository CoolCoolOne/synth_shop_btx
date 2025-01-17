<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php

use Bitrix\Main\Page\Asset;
?>

<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <?php $APPLICATION->ShowHead() ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <?php
    // Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/main.css');
    // // Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/assets/css/fontawesome-all.min.css');
    // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.min.js');
    // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/browser.min.js');
    // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.dropotron.min.js');
    // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/breakpoints.min.js');
    // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/util.js');
    // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');

    // Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />');

    ?>
    <!-- <title>WEB-РАЗРАБОТКА TRO-4 </title> -->
    <meta charset="utf-8" />

</head>

<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>