<?php

class IpseityAthenaeumAccordionWidget {


    public function accordion($configuration) {
    ?>
        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="refresh" content="">

            <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

            <link rel="stylesheet" type="text/css" href="../home/assets/css/style.css?<?=time() ?>">
            <link rel="stylesheet" type="text/css" href="../home/assets/css/IpseityAthenaeumSearchStyle.css?<?=time() ?>">
            <link rel="stylesheet" type="text/css" href="../home/assets/css/IpseityAthenaeumFrameStyle.css?<?=time() ?>">
            <link rel="stylesheet" type="text/css" href="assets/css/ipseity-<?=$configuration->getTitulo()?>-square.css?<?=time() ?>">
            <link rel="stylesheet" type="text/css" href="assets/css/ipseity-<?=$configuration->getTitulo()?>-bridge.css?<?=time() ?>">
            <link rel="stylesheet" type="text/css" href="assets/css/ipseity-<?=$configuration->getTitulo()?>-tower.css?<?=time() ?>">

            <title><?=$configuration->getTitulo()?></title>
        </head>
        <body>
            <div class="page">
                <div class="page__header">
                <?
                    include '../home/widget/IpseityAthenaeumSearchWidget.php';
                ?>
                </div>
                <div class="page__body">
                <?
                    $this->frame($configuration);
                ?>
                </div>
                <div class="page__footer">
                
                </div>
            </div>
        </body>
    <?
    }

    public function frame($configuration) {
    ?>

        <div class="frame-widget">
            <div class="frame-widget__letter">
                <div class="frame-widget__main-title">
                    ipseity-<?=$configuration->getTitulo()?>-square
                </div>
            </div>
            <div class="frame-widget__area">
                <?
                    include "assets/html/ipseity-" . $configuration->getTitulo() . "-square.html";
                ?>
            </div>
        </div>

        <div class="frame-widget">
            <div class="frame-widget__letter">
                <div class="frame-widget__main-title">
                    ipseity-<?=$configuration->getTitulo()?>-bridge
                </div>
            </div>
            <div class="frame-widget__area">
                <?
                    include "assets/html/ipseity-" . $configuration->getTitulo() . "-bridge.html";
                ?>
            </div>
        </div>

        <div class="frame-widget">
            <div class="frame-widget__letter">
                <div class="frame-widget__main-title">
                    ipseity-<?=$configuration->getTitulo()?>-tower
                </div>
            </div>
            <div class="frame-widget__area">
                <?
                    include "assets/html/ipseity-" . $configuration->getTitulo() . "-tower.html";
                ?>
            </div>
        </div>

        <?php
    }
}