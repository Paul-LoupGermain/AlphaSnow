<?php

    /**
     * @file      articles.php
     * @brief     This file links index.php to articles_managment.php.
     * @author    Created by Paul-Loup GERMAIN
     * @version   21-MAR-2022
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

    /**
     * @brief .
     * @param $info
     */
    function display_article_detail($info){
        require_once "model/articles_managment.php";
        $detail = get_article_detail($info);

        require "view/single.php";
    }


    /**
     * @brief .
     */
    function articles_admin(){
        try {
            require_once "model/articles_managment.php";
            $articles = get_articles();
        }
        catch (ErrorException $ex){
            $article_error_message = "Nous rencontrons temporairement un problème pour afficher nos produits.";
        } finally {
            require "view/gestion.php";
        }
    }
