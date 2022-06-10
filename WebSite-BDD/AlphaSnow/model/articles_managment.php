<?php

    /**
     * @file      articles_managment.php
     * @brief     This file check and display the articles.
     * @author    Created by Paul-Loup GERMAIN
     * @version   10-JUIN-2022
     */

    /**
     * @brief This function saves the data from the data base into a variable.
     * @return null
     */
    function get_articles()
    {
        $snows_query = 'SELECT code, marque, model, description, description_grande, price, photo FROM snows';
        require_once "model/file_connector.php";
        return execute_query_select($snows_query);
    }

    /**
     * @brief This function will look for the table corresponding to the product in relation to the code.
     * @param $code
     * @return null
     */
    function get_article_details($code)
    {
        $snows_query = 'SELECT code, marque, model, description, description_grande, price, photo FROM snows WHERE code = "'.$code.'"';
        require_once "model/file_connector.php";
        return execute_query_select($snows_query);
    }

    /**
     * @brief This function delete the article from the data base
     * @param $code
     * @return null
     */
    function article_delete($code)
    {
        $snows_query = 'DELETE FROM snows WHERE code = "'.$code.'"';
        require_once "model/file_connector.php";
        return execute_query_select($snows_query);
    }

    /**
     * @brief This function add the new article to the data base.
     * @param $new_article
     * @param $filename
     * @return bool
     */
    function save_article($new_article, $filename)
    {
        $str_separator = '\'';
        $generate_code = rand(1000, 9999);
        $var1 = "B";
        $var2 = ''.$var1.$generate_code.'';

        $snows_query = 'INSERT INTO snows (code, marque, model, description, description_grande, price, photo) VALUES ('.$str_separator.$var2.$str_separator.', '.$str_separator.$new_article['add_article-marque'].$str_separator.', '.$str_separator.$new_article['add_article-model'].$str_separator.', '.$str_separator.$new_article['add_article-description'].$str_separator.', '.$str_separator.$new_article['add_article-grande_description'].$str_separator.', '.$str_separator.$new_article['add_article-price'].$str_separator.', '.$str_separator.'view/content/img/snow'.$filename.$str_separator.');';

        require_once 'model/file_connector.php';

        execute_query_insert($snows_query);

        return true;
    }

    /**
     * @brief This function is used to edit the data.
     * @param $code
     * @param $edit_article
     */
    function save_edit_article($code, $edit_article, $filename)
    {
        $strSeparator = '\'';

        $marque = $edit_article['edit_article-marque'];
        $model = $edit_article['edit_article-model'];
        $price = $edit_article['edit_article-price'];
        $description = $edit_article['edit_article-description'];
        $description_grande = $edit_article['edit_article-grande_description'];

        $columnsToModify = "marque = ".$strSeparator.$marque.$strSeparator.", model = ".$strSeparator.$model.$strSeparator.", price = ".$price.", description = ".$strSeparator.$description.$strSeparator.", description_grande = ".$strSeparator.$description_grande.$strSeparator.", photo = ".$strSeparator.'view/content/img/snow'.$filename.$strSeparator;
        $query = 'UPDATE snows SET '.$columnsToModify.' WHERE code = '.$strSeparator.$code.$strSeparator;

        require_once 'model/file_connector.php';
        $query_result = execute_query_update($query);

        return $query_result;
    }