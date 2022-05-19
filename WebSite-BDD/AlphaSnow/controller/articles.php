<?php

    /**
     * @file      articles.php
     * @brief     This file links index.php to articles_managment.php.
     * @author    Created by Paul-Loup GERMAIN
     * @version   19-MAI-2022
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
     * @param $code
     */
    function display_article_detail($code)
    {
        try
        {
            require_once "model/articles_managment.php";
            $article_details = get_article_details($code);
        }
        catch (ModelDataBaseException $ex)
        {
            $article_error_message = "Nous rencontrons temporairement un problème pour afficher nos produits.";
        }
        finally
        {
            require "view/shop_detail.php";
        }
    }

    /**
     * @brief This function calls the model and saves the json data in an associative array.
     */
    function gestion()
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
            require "view/gestion.php";
        }
    }

    /**
     * @brief This function calls the model according to the code to delete a product.
     * @param $code
     */
    function delete_article($code)
    {
        try
        {
            require_once "model/articles_managment.php";
            $delete = article_delete($code);
        }
        catch (ModelDataBaseException $ex)
        {
            $article_error_message = "Nous rencontrons temporairement un problème pour afficher nos produits.";
        }
        finally
        {
            require "view/gestion.php";
        }
    }

    /**
     * @brief This function checks if the user has filled in the register form fields correctly.
     * @param $new_article
     */
    function add_article($new_article)
    {
        if ((isset($new_article['add_article-marque'])) && (isset($new_article['add_article-model'])) && (isset($new_article['add_article-price'])) && (isset($new_article['add_article-description'])) && (isset($new_article['add_article-grande_description'])) && (isset($new_article['add_article-photo'])))
        {
            require_once "model/articles_managment.php";
            save_article($new_article);
        }
        else
        {
            require "view/add_article.php";
        }
    }