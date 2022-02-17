<?php

    /**
     * @file      login.php
     * @brief     This file is used to lodge or redirect to register.
     * @author    Created by Mathias BOURQUI / Arlindo TAVARES-VARELA
     * @update    Update Paul-Loup GERMAIN
     * @version   10-FEB-2022
     */

    ob_start();
    $title = "AlphaSnow - Lost";
?>

<!-- Title Page -->
    <section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(view/content/images/home_slide_11.jpg);">
        <h2 class="l-text2 t-center">Erreur</h2>
    </section>

    <!-- content page -->
    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row">
                <h2 class="center">Oupsss... on vous a perdu en chemin ;(.</h2>
            </div>
        </div>
    </section>

<?php
    $content = ob_get_clean();
    require 'gabarit.php';
