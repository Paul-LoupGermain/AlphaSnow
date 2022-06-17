<?php

    /**
     * @file      cartManager.php
     * @brief     This file is the model managing the cart.
     * @author    Created by Nicolas.GLASSEY
     * @version   15-05-2020
     */

    require_once "model/cart.php";
    require_once "model/cart_item.php";

    //region public functions
    function update_cart($cart, $article_id, $quantity){
        $cart_item = new cart_item($article_id, $quantity);
        if ($cart == null){
            $cart = new cart();
        }
        $cart->update_item_in_cart($cart_item);
        return $cart;
    }

    function add_cart($cart, $article_id, $quantity){
        $cart_item = new cart_item($article_id, $quantity);
        if ($cart == null){
            $cart = new cart();
        }
        $cart->add_item_in_cart($cart_item);
        return $cart;
    }


    //endregion public functions