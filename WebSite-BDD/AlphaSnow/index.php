<?php

    /**
     * @file      index.php
     * @brief     This file is the rooter managing the link with controllers.
     * @author    Created by Paul-Loup GERMAIN
     * @version   18-MAI-2022
     */

    require "controller/navigation.php";
    require "controller/users.php";
    require "controller/articles.php";

    session_start();

    if (isset($_GET['action']))
    {
        $action = $_GET['action'];
        switch ($action)
        {
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
                $code = $_GET['code'];
                display_article_detail($code);
                break;
            case 'gestion' :
                gestion();
                break;
            case 'delete_article' :
                delete_article($_GET);
                break;
            case 'edit_article' :
                edit_article($_GET, $_POST);
                break;
            case 'add_article' :
                add_article($_POST);
                break;
            default :
                lost();
        }
    }
    else
    {
        home();
    }