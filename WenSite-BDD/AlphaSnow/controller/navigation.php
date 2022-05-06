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

    /**
     * @brief This function is designed to redirect the user to the team page
     */
    function team(){
        require "view/team.php";
    }

    /**
     * @brief This function is designed to redirect the user to the experiance page
     */
    function experience(){
        require "view/experiance.php";
    }

    /**
     * @brief This function is designed to redirect the user to the contact page
     */
    function contact(){
        require "view/contact.php";
    }

    /**
     * @brief This function is designed to redirect the user to the checkout page
     */
    function checkout(){
        require "view/checkout.php";
    }
