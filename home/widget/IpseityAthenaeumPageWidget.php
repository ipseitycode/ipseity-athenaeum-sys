<?php

class IpseityAthenaeumPageWidget {


    public function page($layoutLista) {
    ?>
        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="refresh" content="">

            <!-- <link rel="icon" href="../includes/assets/img/logo/logo-sem-fundo.png" type="image/png"> -->

	        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

            <link rel="stylesheet" type="text/css" href="assets/css/style.css?<?=time() ?>">
            <link rel="stylesheet" type="text/css" href="assets/css/IpseityAthenaeumSearchStyle.css?<?=time() ?>">
            <link rel="stylesheet" type="text/css" href="assets/css/IpseityAthenaeumBridgecardStyle.css?<?=time() ?>">

            <!-- <script type="text/javascript" src="../assets/js/ConsoleBackendSidebarScript.js"></script> -->
            <title>HOME</title>
        </head>
        <body> 
            <div class="page">
                <div class="page__header">
                <?
                    include 'IpseityAthenaeumSearchWidget.php';
                ?>
                </div>
                <div class="page__body">
                <?
                    $this->card($layoutLista);
                ?>
                </div>
                <div class="page__footer">
                
                </div>
            </div>
        </body>
    <?
    }

    public function card($layoutLista) {

        $mapStatus = [
            1 => 'danger',    // cancelado
            2 => 'success',   // fazendo
            3 => 'warning',   // atrasado
            4 => 'primary',   // concluido
            5 => 'secondary', // indefinido
        ];

        foreach (range('A', 'Z') as $letra) {

            $itensDaLetra = array_filter($layoutLista, function($item) use ($letra) {
                return strtoupper(substr($item['nome'], 0, 1)) === $letra
                    && $item['publicar'] != 0;
            });
            ?>

            <div class="bridgecard-widget">

                <div class="bridgecard-widget__letter">
                    <div class="bridgecard-widget__main-title">
                        Letra - <?= $letra ?>
                    </div>

                    <?php if (empty($itensDaLetra)): ?>
                        <div class="bridgecard-widget__main-subtitle">
                            Nenhum layout foi encontrado com essa letra
                        </div>
                    <?php endif; ?>
                </div>

                <?php if (!empty($itensDaLetra)): ?>
                    <div class="bridgecard-widget__area">

                        <?php foreach ($itensDaLetra as $item): 
                            $classeCor = $mapStatus[$item['status']] ?? 'light';
                        ?>

                            <div class="bridgecard-widget__small <?= $classeCor ?>">
                                <a href="../<?= $item['url'] ?>" class="bridgecard-widget__small_area">

                                    <div class="bridgecard-widget__small_icon">
                                        <div class="bridgecard-widget__small_icon-wrapper">
                                            <img src="https://busqe.com/ximages/widget/icons/icon-form-hash.png"
                                                draggable="false"
                                                alt="<?= $item['nome'] ?>">
                                        </div>
                                    </div>

                                    <div class="bridgecard-widget__small-description">
                                        <div class="bridgecard-widget__small-description_name">
                                            <?= $item['nome'] ?>
                                        </div>
                                        <div class="bridgecard-widget__small-description_info">
                                            <?= $item['url'] ?>
                                        </div>
                                    </div>

                                </a>
                            </div>

                        <?php endforeach; ?>

                    </div>
                <?php endif; ?>

            </div>

            <?php
        }
    }


}