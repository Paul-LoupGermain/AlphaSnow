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
        $description_grande = Null;
        $photo1 = Null;
        $photo2 = Null;

        foreach ($obj as $item) {
            if ($info['code'] == $item['code']){
                $marque = $item['marque'];
                $model = $item['model'];
                $code = $item['code'];
                $price = $item['price'];
                $description = $item['description'];
                $description_grande = $item['description_grande'];
                $photo1 = $item['photo1'];
                $photo2 = $item['photo2'];

                $article_detail = array(
                    'marque' => $marque,
                    'model' => $model,
                    'code' => $code,
                    'price' => $price,
                    'description' => $description,
                    'description_grande' => $description_grande,
                    'photo1' => $photo1,
                    'photo2' => $photo2
                );
                break;
            }
        }
        return $article_detail;
    }

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
