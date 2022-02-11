<?php

    /**
     * @file      navigation.php
     * @brief     This file links index.php to home.php, lost.php.
     * @author    Created by Paul-Loup GERMAIN
     * @version   10-FEB-2022
     */

    /**
     * @brief This function is designed to redirect the user to the home page (depending on the action received by the index)
     */
    function home() {
        require "view/home.php";
    }

    /**
     * @brief This function is designed to inform the user that the resource requested doesn't exist (i. e. if the user modify the url manually)
     */
    function lost() {
        require "view/lost.php";
    }
