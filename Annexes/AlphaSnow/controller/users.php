<?php

    /**
     * @file      users.php
     * @brief
     * @author    Created by Paul-Loup GERMAIN
     * @version   10-FEB-2022
     */

    function login(){
        require "view/login.php";
    }

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
    }

