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
    <div class="bg-image" style="background-image: url('/local/templates/.default/imgs/bg_mb.jpg'); background-size: cover;
           height: 100vh">
        <div class="container  text-white d-flex flex-column min-vh-100">
            <!-- Content here -->


            <div class="d-flex flex-row-reverse bd-highlight bg-dark pt-3 pe-3">
                <button type="button" class=" p-2 bd-highlight btn btn-light">Войти</button>
            </div>

            <nav class="ps-1 navbar navbar-expand-lg navbar-dark bg-dark pt-3 ">
                <div class="container-fluid">
                    <a class="navbar-brand fw-bold" href="#">Волшебство звука</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse fw-bold" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Синтезаторы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Доставка</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

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

            

            