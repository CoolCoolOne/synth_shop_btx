<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?php

use Bitrix\Main\Page\Asset;
?>

<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<!DOCTYPE HTML>

<html>

<head>
    <?php $APPLICATION->ShowHead() ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <?php
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
    Asset::getInstance()->addString('<meta charset="utf-8" />');
    Asset::getInstance()->addCss(TRO_TEMPLATE_PATH . '/css/bootstrap.min.css');
    Asset::getInstance()->addJs(TRO_TEMPLATE_PATH . '/js/bootstrap.bundle.min.js');

    // debug(TRO_TEMPLATE_PATH. '/css/bootstrap.min.css');
    ?>
</head>

<body>
    <div class="bg-image" style="background-image: url('/local/templates/.default/imgs/bg_mb.jpg'); background-size: cover; background-attachment: scroll;
           background-repeat: no-repeat;
  background-position: center center;
  background-attachment: fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
        <div class="container  text-white d-flex flex-column min-vh-100">
            <!-- Content here -->


            <div class="d-flex flex-row-reverse bd-highlight bg-dark pt-3 pe-3">
                <button type="button" class=" p-2 bd-highlight btn btn-light">Войти</button>
            </div>

           
            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "custom_main_menu",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "COMPONENT_TEMPLATE" => "custom_main_menu",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                )
            ); ?>

            <div class="d-flex justify-content-between py-2 gap-2 bg-dark px-3 rounded-bottom border-bottom">

                <div>
                    <img src="/local/templates/.default/imgs/logo.png" class="img-fluid rounded " width="150" alt="...">
                </div>

                <div class="d-flex">
                    <form class="d-flex align-items-center">
                        <div class="form-group">
                            <input type="" class="form-control" id="synthSearch" placeholder="Найти синтезатор..">
                        </div>
                    </form>

                </div>

                <div class="d-flex justify-content-center align-items-center flex-column position-relative">

                    <img src="/local/templates/.default/imgs/card.png" class="d-flex align-items-center" width="70" alt="товары">
                    <div
                        class=" text-white bg-dark fw-bold rounded-circle border border-4 border-white px-2 position-absolute top-0 end-0">
                        5</div>
                </div>
                <!-- 


             -->
            </div>