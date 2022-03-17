<?php

    /**
     * @file      article_detail.php
     * @brief     This file links index.php to articles_managment.php.
     * @author    Created by Paul-Loup GERMAIN
     * @version   17-MAR-2022
     */


    function display_article_detail($info){
        require_once "model/articles_managment.php";
        $detail = get_article_detail($info);

        require "view/single.php";
    }