<?php

    /**
     * @file      users.php
     * @brief     This file is used to redirect the user to the login or register page
     * @author    Created by Paul-Loup GERMAIN
     * @update    Update Paul-Loup GERMAIN
     * @version   10-FEB-2022
     */

    /*
    function register($login_request){
        if ((isset($login_request['inputFirstName'])) && (isset($login_request['inputLastName'])) && (isset($login_request['inputEmailAddress'])) && (isset($login_request['inputPassword']))){
            $inputFirstName = $login_request['inputFirstName'];
            $inputLastName = $login_request['inputLastName'];
            $inputEmailAddress = $login_request['inputEmailAddress'];
            $inputPassword = $login_request['inputPassword'];

            require_once "model/users_managment.php";
            if (isLoginCorrect($inputFirstName, $inputLastName, $inputEmailAddress, $inputPassword)){
                $_SESSION['inputEmailAddress']=$inputEmailAddress;
                require "view/home.php";
            }else{
                $loginErrorMessage = "Erreur";
                require "view/login.php";
            }

        }else{
            $loginErrorMessage = "Erreur";
            require "view/register.php";
        }
        require "view/login.php";
    }
    */

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

