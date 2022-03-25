<?php

    /**
     * @file      articles.php
     * @brief     This file links index.php to articles_managment.php.
     * @author    Created by Paul-Loup GERMAIN
     * @version   25-MAR-2022
     */


    /**
     * @brief This function calls the model and saves the json data in an associative array.
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
     * @brief This function calls the model and saves the json data in an associative array relative to the code.
     * @param $info
     */
    function display_article_detail($info){
        require_once "model/articles_managment.php";
        $detail = get_article_detail($info);
        require "view/single.php";
    }

    /**
     * @brief This function calls the model and saves the json data in an associative array.
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

    /**
     * @brief This function calls the model according to the code to delete a product.
     * @param $info_delete
     */
    function gestion_delete($info_delete){
        require_once "model/articles_managment.php";
        $delete = delete_article($info_delete);
        require "view/home.php";
    }