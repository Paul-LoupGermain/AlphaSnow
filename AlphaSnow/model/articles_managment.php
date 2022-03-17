<?php

    /**
     * @file      articles_managment.php
     * @brief     This file check and display the articles.
     * @author    Created by Paul-Loup GERMAIN
     * @version   11-MAR-2022
     */


    function get_articles(){
        $file_content = file_get_contents('data/data_articles.json');
        $obj = json_decode($file_content,true);


        return $obj;
    }


    /*
    foreach ($obj as $array){
        if(($email_verify == $array['email']) && ($password_verify == $array['password'])){
            return true;
        }
    }*/