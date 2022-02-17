<?php

    /**
     * @file      navigation.php
     * @brief     This file links index.php to home.php, lost.php.
     * @author    Created by Paul-Loup GERMAIN
     * @version   10-FEB-2022
     */

    /**
     * @brief This function is designed to redirect the user to the home page
     */
    function home() {
        require "view/home.php";
    }

    /**
     * @brief This function is designed to redirect the user to the lost page
     */
    function lost() {
        require "view/lost.php";
    }
