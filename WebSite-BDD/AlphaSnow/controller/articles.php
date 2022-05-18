<?php

    /**
     * @file      articles.php
     * @brief     This file links index.php to articles_managment.php.
     * @author    Created by Paul-Loup GERMAIN
     * @version   18-MAI-2022
     */

    /**
     * @brief This function calls the model and saves the json data in an associative array.
     */
    function display_articles()
    {
        try
        {
            require_once "model/articles_managment.php";
            $articles = get_articles();
        }
        catch (ModelDataBaseException $ex)
        {
            $article_error_message = "Nous rencontrons temporairement un problème pour afficher nos produits.";
        }
        finally
        {
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

    /**
     * @brief This function calls the model according to the code to edit a product.
     * @param $info_edit
     */
    function edit_article($info_edit, $array_of_edit_article_inputs){
        require_once "model/articles_managment.php";
        $detail = get_article_detail($info_edit);
        if ((isset($array_of_edit_article_inputs['edit_article-marque'])) && (isset($array_of_edit_article_inputs['edit_article-model'])) && (isset($array_of_edit_article_inputs['edit_article-price'])) && (isset($array_of_edit_article_inputs['edit_article-description'])) && (isset($array_of_edit_article_inputs['edit_article-grande_description'])) && (isset($array_of_edit_article_inputs['edit_article-photo1']))) {
            save_edit_article($info_edit, $array_of_edit_article_inputs);
        }else{
            require "view/edit_article.php";
        }
    }

    /**
     * @brief This function checks if the user has filled in the register form fields correctly.
     * @param $array_of_article_inputs
     */
    function add_article($array_of_article_inputs){
        if ((isset($array_of_article_inputs['add_article-marque'])) && (isset($array_of_article_inputs['add_article-model'])) && (isset($array_of_article_inputs['add_article-price'])) && (isset($array_of_article_inputs['add_article-description'])) && (isset($array_of_article_inputs['add_article-grande_description'])) && (isset($array_of_article_inputs['add_article-photo1']))) {
            require_once "model/articles_managment.php";
            save_article($array_of_article_inputs);
        }else{
            require "view/add_article.php";
        }
    }