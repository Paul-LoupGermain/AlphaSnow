<?php

    /**
     * @file      users.php
     * @brief     This file is used to redirect the user to the login or register page
     * @author    Created by Paul-Loup GERMAIN
     * @update    Update Paul-Loup GERMAIN
     * @version   24-MAR-2022
     */

    /**
     * @brief This function checks if the user has filled in the register form fields correctly.
     * @param $array_of_user_inputs
     */
    function register($array_of_user_inputs){
        if ((isset($array_of_user_inputs['register_firstname'])) && (isset($array_of_user_inputs['register_lastname'])) && (isset($array_of_user_inputs['register_email'])) && (isset($array_of_user_inputs['register_password']))) {
            require_once "model/users_managment.php";
            save_register($array_of_user_inputs['register_email'],$array_of_user_inputs['register_password']);
        }else{
            require "view/register.php";
        }
    }

    /**
     * @brief This function checks if the user has filled in the login form fields correctly.
     * @param $login_request
     */
    function login($login_request){
        if ((isset($login_request['login_email'])) && (isset($login_request['login_password']))){
            $input_email_address = $login_request['login_email'];
            $input_password = $login_request['login_password'];
            require_once "model/users_managment.php";
            if (is_login_correct($input_email_address, $input_password)){
                $_SESSION['login_email']=$input_email_address;
                if (get_user_type($input_email_address) == 1){
                    $_SESSION['user_type']=1;
                }
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

    /**
     * @brief This function is used to disconnect from the session.
     */
    function logout(){
        session_destroy(); //destroy the session
        header("location:/index.php"); //to redirect back to "index.php" after logging out
        exit();
    }