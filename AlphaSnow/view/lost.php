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
    <p style="background-image: url('content/images/Error-404-Page-With-Astronaut-by-Filip-Vitas.jpg');">
    <div class="lost"><br><br><br><br><br>
        <h1 class="bold">Erreur</h1>
        <h2 class="bold">404</h2>
        <h3>Oups, Vous avez trébucher sur une peau de banane.</h3>
        <h4>Retourner au <a href="../index.php">Menu</a></h4><br><br><br><br><br>
    </div>
    </p>

<?php
    $content = ob_get_clean();
    require 'gabarit.php';
