<?php

    /**
     * @file      articles_managment.php
     * @brief     This file check and display the articles.
     * @author    Created by Paul-Loup GERMAIN
     * @version   17-MAR-2022
     */


    function get_articles(){
        $file_content = file_get_contents('data/data_articles.json');
        $obj = json_decode($file_content,true);

        return $obj;
    }

    /**
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
        $photo = Null;

        foreach ($obj as $item) {
            if ($info['code'] == $item['code']){
                $marque = $item['marque'];
                $model = $item['model'];
                $code = $item['code'];
                $price = $item['price'];
                $description = $item['description'];
                $photo = $item['photo'];

                $article_detail = array(
                    'marque' => $marque,
                    'model' => $model,
                    'code' => $code,
                    'price' => $price,
                    'description' => $description,
                    'photo' => $photo
                );
                break;
            }
        }
        return $article_detail;
    }
