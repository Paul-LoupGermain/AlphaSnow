<?php

    /**
     * @file      articles_managment.php
     * @brief     This file check and display the articles.
     * @author    Created by Paul-Loup GERMAIN
     * @version   20-MAI-2022
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
     * @return bool
     */
    function save_article($new_article)
    {
        $str_separator = '\'';
        $generate_code = rand(1000, 9999);
        $var1 = "B";
        $var2 = ''.$var1.$generate_code.'';

        $snows_query = 'INSERT INTO snows (code, marque, model, description, description_grande, price, photo) VALUES ('.$str_separator.$var2.$str_separator.', '.$str_separator.$new_article['add_article-marque'].$str_separator.', '.$str_separator.$new_article['add_article-model'].$str_separator.', '.$str_separator.$new_article['add_article-description'].$str_separator.', '.$str_separator.$new_article['add_article-grande_description'].$str_separator.', '.$str_separator.$new_article['add_article-price'].$str_separator.', '.$str_separator.'view/content/img/snow'.$new_article['add_article-photo'].$str_separator.');';

        require_once 'model/file_connector.php';

        execute_query_insert($snows_query);

        return true;
    }






    /**
     * @param $code
     * @param $edit_article
     * @return null
     */
    function save_edit_article($code, $edit_article)
    {
        $snows_query = 'SELECT code, marque, model, description, description_grande, price, photo FROM snows WHERE code = "'.$code.'"';
        require_once "model/file_connector.php";
        return execute_query_select($snows_query);
    }