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
    
        // foreach ($layoutLista as $layout) {
        //     echo '<div class="page__body_layout">';
        //     echo '<div class="page__body_layout_title">';
        //     echo $layout['nome'];
            
        //     echo '</div>';
        //     echo '</div>';
        // }

        ?>
        <div class="bridgecard-widget">

            <div class="bridgecard-widget__letter">
                <div class="bridgecard-widget__main-title">
                    Letra A
                </div>
            </div>
            
            <div class="bridgecard-widget__area"> 

                
                <div class="bridgecard-widget__small danger">                                    
                    <a href="accordion-layout" class="bridgecard-widget__small_area">
                        <div class="bridgecard-widget__small_icon">
                            <div class="bridgecard-widget__small_icon-wrapper">
                                <img src="https://busqe.com/ximages/widget/icons/icon-code.png"  
                                draggable="false" 
                                alt="accordion-layout">
                            </div>
                        </div>
                        <div class="bridgecard-widget__small-description">
                            <div class="bridgecard-widget__small-description_name">
                                accordion                              
                            </div>
                            <div class="bridgecard-widget__small-description_info">
                                accordion-layout               
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>

        <div class="bridgecard-widget">

            <div class="bridgecard-widget__letter">
                <div class="bridgecard-widget__main-title">
                    Letra B
                </div>
            </div>
            
            <div class="bridgecard-widget__area"> 

                
                <div class="bridgecard-widget__small danger">                                    
                    <a href="accordion-layout" class="bridgecard-widget__small_area">
                        <div class="bridgecard-widget__small_icon">
                            <div class="bridgecard-widget__small_icon-wrapper">
                                <img src="https://busqe.com/ximages/widget/icons/icon-form-hash.png"  
                                draggable="false" 
                                alt="accordion-layout">
                            </div>
                        </div>
                        <div class="bridgecard-widget__small-description">
                            <div class="bridgecard-widget__small-description_name">
                                accordion                              
                            </div>
                            <div class="bridgecard-widget__small-description_info">
                                accordion-layout               
                            </div>
                        </div>
                    </a>
                </div>

            </div>

        </div>
    <?
    }
}