<?php

    /**
     * @file      index.php
     * @brief     This file is the rooter managing the link with controllers.
     * @author    Created by Paul-Loup GERMAIN
     * @version   21-MAR-2022
     */

    require "controller/navigation.php";
    require "controller/users.php";
    require "controller/articles.php";

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
                display_articles();
                break;
            case 'team' :
                team();
                break;
            case 'experience' :
                experience();
                break;
            case 'contact' :
                contact();
                break;
            case 'checkout' :
                checkout();
                break;
            case 'single' :
                display_article_detail($_GET);
                break;
            case 'gestion' :
                articles_admin();
                break;
            case 'gestion_delete' :
                gestion_delete($_GET);
                break;
            default :
                lost();
        }
    } else {
        home();
    }
