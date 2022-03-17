<?php

    /**
     * @file      articles.php
     * @brief     This file links index.php to articles_managment.php.
     * @author    Created by Paul-Loup GERMAIN
     * @version   17-MAR-2022
     */


    /**
     * @brief .
     */
    function display_articles(){
        try {
            require_once "model/articles_managment.php";
            $articles = get_articles();
        }
        catch (ErrorException $ex){
            $article_error_message = "Nous rencontrons temporairement un problème pour afficher nos produits.";
        } finally {
            require "view/shop.php";
        }
    }
