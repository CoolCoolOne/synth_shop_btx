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
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/main.css');
    // Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/assets/css/fontawesome-all.min.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/browser.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.dropotron.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/breakpoints.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/util.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');

    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />');

    ?>
    <!-- <title>WEB-РАЗРАБОТКА TRO-4 </title> -->
    <meta charset="utf-8" />

</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            <!-- Logo -->
            <h1><a href="index.html" id="logo">TRO-4<em>  [web-студия]</em></a></h1>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li class="current"><a href="index.html">Главная</a></li>
                    <li>
                        <a href="#">Dropdown</a>
                        <ul>
                            <li><a href="#">Lorem dolor</a></li>
                            <li><a href="#">Magna phasellus</a></li>
                            <li><a href="#">Etiam sed tempus</a></li>
                            <li>
                                <a href="#">Submenu</a>
                                <ul>
                                    <li><a href="#">Lorem dolor</a></li>
                                    <li><a href="#">Phasellus magna</a></li>
                                    <li><a href="#">Magna phasellus</a></li>
                                    <li><a href="#">Etiam nisl</a></li>
                                    <li><a href="#">Veroeros feugiat</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Veroeros feugiat</a></li>
                        </ul>
                    </li>
                    <li><a href="left-sidebar.html">Left Sidebar</a></li>
                    <li><a href="right-sidebar.html">Right Sidebar</a></li>
                    <li><a href="two-sidebar.html">Two Sidebar</a></li>
                    <li><a href="no-sidebar.html">No Sidebar</a></li>
                </ul>
            </nav>

        </div>





