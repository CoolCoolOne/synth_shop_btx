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
    <div class="bg-image" style="background-image: url('/local/templates/.default/imgs/bg_mb_comp.jpg'); background-size: cover; background-attachment: scroll;
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
                            <? $APPLICATION->IncludeComponent(
                                "bitrix:search.title",
                                "bootstrap4_custom",
                                array(
                                    "COMPONENT_TEMPLATE" => "bootstrap_v4",
                                    "NUM_CATEGORIES" => "1",    // Количество категорий поиска
                                    "TOP_COUNT" => "5",    // Количество результатов в каждой категории
                                    "ORDER" => "date",    // Сортировка результатов
                                    "USE_LANGUAGE_GUESS" => "Y",    // Включить автоопределение раскладки клавиатуры
                                    "CHECK_DATES" => "N",    // Искать только в активных по дате документах
                                    "SHOW_OTHERS" => "N",    // Показывать категорию "прочее"
                                    "PAGE" => "#SITE_DIR#search/index.php",    // Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                                    "SHOW_INPUT" => "Y",    // Показывать форму ввода поискового запроса
                                    "INPUT_ID" => "title-search-input",    // ID строки ввода поискового запроса
                                    "CONTAINER_ID" => "title-search",    // ID контейнера, по ширине которого будут выводиться результаты
                                    "CATEGORY_0_TITLE" => "",    // Название категории
                                    "CATEGORY_0" => "",    // Ограничение области поиска
                                    "TEMPLATE_THEME" => "red",    // Цветовая тема
                                    "PRICE_CODE" => "",    // Тип цены
                                    "PRICE_VAT_INCLUDE" => "Y",    // Включать НДС в цену
                                    "PREVIEW_TRUNCATE_LEN" => "",    // Максимальная длина анонса для вывода
                                    "SHOW_PREVIEW" => "Y",    // Показать картинку
                                    "CONVERT_CURRENCY" => "N",    // Показывать цены в одной валюте
                                    "PREVIEW_WIDTH" => "75",    // Ширина картинки
                                    "PREVIEW_HEIGHT" => "75",    // Высота картинки
                                ),
                                false
                            ); ?>
                            <!-- <input type="" class="form-control" id="synthSearch" placeholder="Найти синтезатор.."> -->
                        </div>
                    </form>

                </div>

                <div class="d-flex justify-content-center align-items-center flex-column position-relative">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:sale.basket.basket.line",
                        "",
                        array(
                            "ACTION_VARIABLE" => "basketAction",
                            "ADDITIONAL_PICT_PROP_4" => "-",
                            "AUTO_CALCULATION" => "Y",
                            "BASKET_IMAGES_SCALING" => "adaptive",
                            "COLUMNS_LIST_EXT" => array("PREVIEW_PICTURE", "DISCOUNT", "DELETE", "DELAY", "TYPE", "SUM"),
                            "COLUMNS_LIST_MOBILE" => array("PREVIEW_PICTURE", "DISCOUNT", "DELETE", "DELAY", "TYPE", "SUM"),
                            "COMPATIBLE_MODE" => "Y",
                            "CORRECT_RATIO" => "Y",
                            "DEFERRED_REFRESH" => "N",
                            "DISCOUNT_PERCENT_POSITION" => "bottom-right",
                            "DISPLAY_MODE" => "extended",
                            "EMPTY_BASKET_HINT_PATH" => "/",
                            "GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
                            "GIFTS_CONVERT_CURRENCY" => "N",
                            "GIFTS_HIDE_BLOCK_TITLE" => "N",
                            "GIFTS_HIDE_NOT_AVAILABLE" => "N",
                            "GIFTS_MESS_BTN_BUY" => "Выбрать",
                            "GIFTS_MESS_BTN_DETAIL" => "Подробнее",
                            "GIFTS_PAGE_ELEMENT_COUNT" => "4",
                            "GIFTS_PLACE" => "BOTTOM",
                            "GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
                            "GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
                            "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
                            "GIFTS_SHOW_OLD_PRICE" => "N",
                            "GIFTS_TEXT_LABEL_GIFT" => "Подарок",
                            "HIDE_COUPON" => "N",
                            "LABEL_PROP" => array(),
                            "PATH_TO_ORDER" => "/personal/order/make/",
                            "PRICE_DISPLAY_MODE" => "Y",
                            "PRICE_VAT_SHOW_VALUE" => "N",
                            "PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
                            "QUANTITY_FLOAT" => "Y",
                            "SET_TITLE" => "Y",
                            "SHOW_DISCOUNT_PERCENT" => "Y",
                            "SHOW_FILTER" => "Y",
                            "SHOW_RESTORE" => "Y",
                            "TEMPLATE_THEME" => "blue",
                            "TOTAL_BLOCK_DISPLAY" => array("top"),
                            "USE_DYNAMIC_SCROLL" => "Y",
                            "USE_ENHANCED_ECOMMERCE" => "N",
                            "USE_GIFTS" => "Y",
                            "USE_PREPAYMENT" => "N",
                            "USE_PRICE_ANIMATION" => "Y"
                        )
                    ); ?>
                    <img src="/local/templates/.default/imgs/card.png" class="d-flex align-items-center" width="70" alt="товары">
                    <!-- <div
                        class=" text-white bg-dark fw-bold rounded-circle border border-4 border-white px-2 position-absolute top-0 end-0">
                        5</div> -->
                </div>
                <!-- 


             -->
            </div>