<?php

class IpseityAthenaeumExampleWidget {


    public function example($configuration) {
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
            <link rel="stylesheet" type="text/css" href="assets/css/ipseity-<?=$configuration->getTitulo()?>.css?<?=time() ?>">

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
                    ipseity-<?=$configuration->getTitulo()?>
                </div>
            </div>
            <div class="frame-widget__area">
                <?
                    include "assets/html/ipseity-" . $configuration->getTitulo() . ".html";
                ?>
            </div>
        </div>

        <?php
    }
}