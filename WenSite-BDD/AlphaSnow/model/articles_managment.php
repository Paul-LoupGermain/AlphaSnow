<?php

    /**
     * @file      articles_managment.php
     * @brief     This file check and display the articles.
     * @author    Created by Paul-Loup GERMAIN
     * @version   31-MAR-2022
     */

    /**
     * @brief This function saves the data from the json file into a variable.
     * @return array
     */
    function get_articles(){
        $file_content = file_get_contents('data/data_articles.json');
        $obj = json_decode($file_content,true);
        return $obj;
    }

    /**
     * @brief This function will look for the table corresponding to the product in relation to the code.
     * @param $info
     * @return array|null
     */
    function get_article_detail($info){
        $obj = get_articles();

        $article_detail = Null;
        $marque = Null;
        $model = Null;
        $code = Null;
        $price = Null;
        $description = Null;
        $description_grande = Null;
        $photo1 = Null;

        foreach ($obj as $item) {
            if ($info['code'] == $item['code']){
                $marque = $item['marque'];
                $model = $item['model'];
                $code = $item['code'];
                $price = $item['price'];
                $description = $item['description'];
                $description_grande = $item['description_grande'];
                $photo1 = $item['photo1'];

                $article_detail = array(
                    'marque' => $marque,
                    'model' => $model,
                    'code' => $code,
                    'price' => $price,
                    'description' => $description,
                    'description_grande' => $description_grande,
                    'photo1' => $photo1
                );
                break;
            }
        }
        return $article_detail;
    }


    /**
     * @brief This function will delete a product in relation to its code.
     * @param $info_delete
     */
    function delete_article($info_delete){
        $obj = get_articles();
        $indexObj = null;

        foreach ($obj as $index=>$item) {
            if ($info_delete['code'] == $item['code']){
                $indexObj = $index;

                break;
            }
        }
        unset($obj[$indexObj]);

        $obj = json_encode($obj);
        file_put_contents('data/data_articles.json', $obj);
    }

    require "file_connector.php";

    /**
     * @brief This function is used to make the link between "write_article_in_json" and "extract_article" to extract the data and write it.
     * @param $add_article
     */
    function save_article($add_article){
        $new_article_to_write = extract_article($add_article);
        write_article_in_json($new_article_to_write);
        require "view/home.php";
    }

    /**
     * @brief This function is used to extract the data.
     * @param $add_article
     * @return array
     */
    function extract_article($add_article) {
        $marque = $add_article['add_article-marque'];
        $model = $add_article['add_article-model'];
        $price = $add_article['add_article-price'];
        $description = $add_article['add_article-description'];
        $description_grande = $add_article['add_article-grande_description'];
        $photo1 = $add_article['add_article-photo1'];
        $code = rand();

        $type = 0;
        $new_article_temp = array($marque, $model, $code, $price, $description, $description_grande, $photo1, $type);
        return $new_article_temp;
    }


    /**
     * @brief This function is used to edit the data.
     * @param $info_edit
     * @param $array_of_edit_article_inputs
     */
    function save_edit_article($info_edit, $array_of_edit_article_inputs){
        $obj = get_articles();
        $indexObj = null;

        foreach ($obj as $index=>$item) {
            if ($info_edit['code'] == $item['code']){
                $indexObj = $index;
                break;
            }
        }

        $obj[$indexObj]['marque'] = $array_of_edit_article_inputs['edit_article-marque'];
        $obj[$indexObj]['model'] = $array_of_edit_article_inputs['edit_article-model'];
        $obj[$indexObj]['price'] = $array_of_edit_article_inputs['edit_article-price'];
        $obj[$indexObj]['description'] = $array_of_edit_article_inputs['edit_article-description'];
        $obj[$indexObj]['grande_description'] = $array_of_edit_article_inputs['edit_article-grande_description'];
        $obj[$indexObj]['photo1'] = $array_of_edit_article_inputs['edit_article-photo1'];

        $obj = json_encode($obj);
        file_put_contents('data/data_articles.json', $obj);
        require "view/home.php";
    }