<?php

    /**
     * @file      users.php
     * @brief     This file is used to redirect the user to the login or register page
     * @author    Created by Paul-Loup GERMAIN
     * @update    Update Paul-Loup GERMAIN
     * @version   10-FEB-2022
     */

    function register($array_of_user_inputs){
        if ((isset($array_of_user_inputs['register_firstname'])) && (isset($array_of_user_inputs['register_lastname'])) && (isset($array_of_user_inputs['register_email'])) && (isset($array_of_user_inputs['register_password']))) {
            require_once "model/users_managment.php";
            save_register($array_of_user_inputs);
        }else{
            require "view/register.php";
        }
    }

    function login($login_request){
        if ((isset($login_request['login_email'])) && (isset($login_request['login_password']))){
            $input_email_address = $login_request['login_email'];
            $input_password = $login_request['login_password'];
            require_once "model/users_managment.php";
            if (is_login_correct($input_email_address, $input_password)){
                $_SESSION['login_email']=$input_email_address;
                require "view/home.php";
            }else{
                $login_error_message = "Erreur";
                require "view/login.php";
            }
        }else{
            $login_error_message = "Erreur";
            require "view/login.php";
        }
    }
