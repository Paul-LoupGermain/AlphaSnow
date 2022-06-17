<?php

    /**
     * @file      cart.php
     * @brief     This file is the controler managing cart.
     * @author    Created by Paul-Loup Germain
     * @version   17-JUIN-2022
     */

    /**
     * @brief This function is designed to display the user's cart (in session)
     */
    function cart_display()
    {
        if (!isset($_SESSION['cart']))
        {
            $cart_error_message = "Votre panier est actuellement vide !";
        }
        else
        {
            if ($_SESSION['cart']->get_nb_of_articles() == 0)
            {
                $cart_error_message = "Votre panier est actuellement vide !";
            }
        }
        require "view/checkout.php";
    }

    /**
     * @brief This function is designed to add item(s) to the cart
     * @param $add_item_request
     */
    function cart_update_item($add_item_request)
    {
        if (isset($_SESSION['cart']))
        {
            //we have to save the number of items because an item can be removed if a quantity is set to 0.
            $nb_lines_items = count($_SESSION['cart']->get_items());
            for ($j = 0; $j < $nb_lines_items; $j++)
            {
                if (isset($add_item_request['code' . $j]))
                {
                    //extract item request parameters
                    $article_id_to_update = $add_item_request['code' . $j];
                    unset($_POST['code' . $j]);
                    require_once "model/cart_managment.php";
                    $_SESSION['cart'] = update_cart($_SESSION['cart'], $article_id_to_update);
                }
            }
        }
        //require "view/cart.php";
        cart_display();
    }

    /**
     * @param $add_item_request
     */
    function cart_add_item($add_item_request)
    {
        if (isset($add_item_request['input_user_article_id']))
        {
            //extract item request parameters
            $article_id_to_add = $add_item_request['input_user_article_id'];
            unset($_POST['code']);

            require "model/cart_managment.php";
            if (!isset($_SESSION['cart']))
            {
                $_SESSION['cart'] = add_cart(null, $article_id_to_add);
            }
            else
            {
                $_SESSION['cart'] = add_cart($_SESSION['cart'], $article_id_to_add);
            }
        }
        //require "view/cart.php";
        cart_display();
    }

    function checkout()
    {
        unset($_SESSION['cart']);
        cart_display();
    }