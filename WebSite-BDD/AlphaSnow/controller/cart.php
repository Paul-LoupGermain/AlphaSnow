<?php
/**
 * @file      cart.php
 * @brief     This file is the controler managing cart.
 * @author    Created by Pascal.BENZONANA
 * @author    Created by Nicolas.GLASSEY
 * @version   14-05-2020
 */

/**
 * @brief This function is designed to display the user's cart (in session)
 */
function cartDisplay()
{
    if (!isset($_SESSION['cart'])){

        $cartErrorMessage = "Votre panier est actuellement vide !";
    } else {
        if ($_SESSION['cart']->GetNbOfArticles() == 0){
            $cartErrorMessage = "Votre panier est actuellement vide !";
        }
    }
    require "view/cart.php";
}

/**
 * @brief This function is designed to add item(s) to the cart
 * @param $addItemRequest
 */
function cartUpdateItem($addItemRequest)
{
    if (isset($_SESSION['cart'])) {
        //we have to save the number of items because an item can be removed if a quantity is set to 0.
        $nbLinesItems = count($_SESSION['cart']->GetItems());
        for ($j = 0; $j < $nbLinesItems; $j++) {
            if (isset($addItemRequest['articleId' . $j]) && isset($addItemRequest['qty' . $j])) {

                //extract item request parameters
                $articleIdToUpdate = $addItemRequest['articleId' . $j];
                $articleQuantityToUpdate = $addItemRequest['qty' . $j];
                unset($_POST['articleId' . $j]);
                unset($_POST['qty' . $j]);

                require_once "model/cartManager.php";
                $_SESSION['cart'] = updateCart($_SESSION['cart'], $articleIdToUpdate, $articleQuantityToUpdate);
            }
        }
    }
    //require "view/cart.php";
    cartDisplay();
}

function cartAddItem($addItemRequest)
{
    if (isset($addItemRequest['inputUserArticleId']) && isset($addItemRequest['inputUserQuantityToAdd'])) {

        //extract item request parameters
        $articleIdToAdd = $addItemRequest['inputUserArticleId'];
        $articleQuantityToAdd = $addItemRequest['inputUserQuantityToAdd'];
        unset($_POST['inputUserArticleId']);
        unset($_POST['inputUserQuantityToAdd']);

        require "model/cartManager.php";
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = addCart(null, $articleIdToAdd, $articleQuantityToAdd);
        } else {
            $_SESSION['cart'] = addCart($_SESSION['cart'], $articleIdToAdd, $articleQuantityToAdd);
        }
    }
    //require "view/cart.php";
    cartDisplay();
}

function checkout(){
    unset($_SESSION['cart']);
    cartDisplay();
}