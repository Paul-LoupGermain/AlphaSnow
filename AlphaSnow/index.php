<?php

    /**
     * @file      index.php
     * @brief     This file is the rooter managing the link with controllers.
     * @author    Created by Paul-Loup GERMAIN
     * @version   10-FEB-2022
     */

    require "controller/navigation.php";
    require "controller/users.php";

    session_start();

    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        switch ($action) {
            case 'home' :
                home();
                break;
            case 'login' :
                login($_POST);
                break;
            case 'register':
                register($_POST);
                break;
            case 'logout':
                logout();
                break;
            case 'shop' :
                shop();
                break;
            case 'team' :
                team();
                break;
            case 'experiance' :
                experiance();
                break;
            case 'contact' :
                contact();
                break;
            case 'checkout' :
                checkout();
                break;
            case 'single' :
                single();
                break;
            default :
                lost();
        }
    } else {
        home();
    }
