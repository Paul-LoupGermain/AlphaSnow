<?php

    /**
     * @file      articles.php
     * @brief     This file links index.php to articles_managment.php.
     * @author    Created by Paul-Loup GERMAIN
     * @version   10-JUIN-2022
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
            require "view/home.php";
        }
    }

    /**
     * @brief This function checks if the user has filled in the register form fields correctly.
     * @param $new_article
     */
    function add_article($new_article)
    {
        if ((isset($new_article['add_article-marque'])) && (isset($new_article['add_article-model'])) && (isset($new_article['add_article-price'])) && (isset($new_article['add_article-description'])) && (isset($new_article['add_article-grande_description'])))
        {
            if (is_numeric($new_article['add_article-price']))
            {
                try
                {
                    $filename = "/".$_FILES["add_article-photo"]["name"];
                    $tempname = $_FILES["add_article-photo"]["tmp_name"];
                    $folder = "view/content/img/snow/".$filename;
                }
                catch (ModelDataBaseException $ex)
                {
                    $articleErrorMessage = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
                }

                if ($_FILES['add_article-photo']['size'] < 1000000)
                {
                    if (is_uploaded_file($_FILES['add_article-photo']['tmp_name']))
                    {
                        $mimeType = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $_FILES['add_article-photo']['tmp_name']);

                        $allowed_file_types = ['image/png', 'image/jpeg'];
                        if (!in_array($mimeType, $allowed_file_types))
                        {
                            $articleErrorMessage = '/!\ Erreur /!\ Format fichier incorrect : que png ou jpeg !';
                        }
                        else
                        {
                            if (move_uploaded_file($tempname, $folder))
                            {
                                require_once "model/articles_managment.php";
                                save_article($new_article, $filename);
                                require "view/home.php";
                            }
                            else
                            {
                                $msg = "Failed to upload image";
                            }
                        }
                        require "view/add_article.php";
                    }
                }
            }
            else
            {
                $error_message = 'Price accepte que les chiffres';
                require "view/add_article.php";
            }
        }
        else
        {
            require "view/add_article.php";
        }
    }

    /**
     * @brief This function calls the model according to the code to edit a product.
     * @param $code
     * @param $edit_article
     */
    function edit_article($code, $edit_article)
    {
        require "model/articles_managment.php";

        if ((isset($edit_article['edit_article-marque'])) && (isset($edit_article['edit_article-model'])) && (isset($edit_article['edit_article-price'])) && (isset($edit_article['edit_article-description'])) && (isset($edit_article['edit_article-grande_description'])))
        {
            if (is_numeric($edit_article['edit_article-price']))
            {
                try
                {
                    $filename = "/".$_FILES["edit_article-photo"]["name"];
                    $tempname = $_FILES["edit_article-photo"]["tmp_name"];
                    $folder = "view/content/img/snow/".$filename;
                }
                catch (ModelDataBaseException $ex)
                {
                    $articleErrorMessage = "Nous rencontrons temporairement un problème technique pour afficher nos produits. Désolé du dérangement !";
                }

                if ($_FILES['edit_article-photo']['size'] < 1000000)
                {
                    if (is_uploaded_file($_FILES['edit_article-photo']['tmp_name']))
                    {
                        $mimeType = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $_FILES['edit_article-photo']['tmp_name']);

                        $allowed_file_types = ['image/png', 'image/jpeg'];
                        if (!in_array($mimeType, $allowed_file_types))
                        {
                            $articleErrorMessage = '/!\ Erreur /!\ Format fichier incorrect : que png ou jpeg !';
                        }
                        else
                        {
                            if (move_uploaded_file($tempname, $folder))
                            {
                                require_once "model/articles_managment.php";
                                save_edit_article($code, $edit_article, $filename);
                                require "view/home.php";
                            }
                            else
                            {
                                $msg = "Failed to upload image";
                            }
                        }
                        $details = get_article_details($code);
                        require "view/edit_article.php";
                    }
                }
            }
            else
            {
                $error_message = 'Price accepte que les chiffres';
                $details = get_article_details($code);
                require "view/edit_article.php";
            }
        }
        else
        {
            $details = get_article_details($code);
            require "view/edit_article.php";
        }
    }