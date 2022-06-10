<?php
/**
 * @file      cartManager.php
 * @brief     This file is the model managing the cart.
 * @author    Created by Nicolas.GLASSEY
 * @version   15-05-2020
 */

//require_once "Cart.php";
//require_once "CartItem.php";

//region public functions
function updateCart($cart, $articleId, $quantity){
    $cartItem = new CartItem($articleId, $quantity);
    if ($cart == null){
        $cart = new Cart();
    }
    $cart->UpdateItemInCart($cartItem);
    return $cart;
}

function addCart($cart, $articleId, $quantity){
    $cartItem = new CartItem($articleId, $quantity);
    if ($cart == null){
        $cart = new Cart();
    }
    $cart->AddItemInCart($cartItem);
    return $cart;
}


//endregion public functions