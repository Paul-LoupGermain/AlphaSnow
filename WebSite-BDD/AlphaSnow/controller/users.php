<?php

    /**
     * @file      users.php
     * @brief     This file is used to redirect the user to the login or register page
     * @author    Created by Paul-Loup GERMAIN
     * @update    Update Paul-Loup GERMAIN
     * @version   13-MAI-2022
     */

    /**
     * @param $login_request
     */
    function login($login_request)
    {
        if ((isset($login_request['input_email'])) && (isset($login_request['input_password'])))
        {
            $input_user_email = $login_request['input_email'];
            $input_user_psw = $login_request['input_password'];

            require_once "model/users_managment.php";
            if (is_login_correct($input_user_email, $input_user_psw))
            {
                $_SESSION['user_email_address']=$input_user_email;
                if (get_user_type($input_user_email) == 1)
                {
                    $_SESSION['user_type']=1;
                }
                require "view/home.php";
            }
            else
            {
                $login_error_message = "Erreur";
                require "view/login.php";
            }
        }
        else
        {
            $login_error_message = "Erreur";
            require "view/login.php";
        }
    }

    /**
     *
     */
    function logout(){
        session_destroy(); //destroy the session
        header("location:/index.php"); //to redirect back to "index.php" after logging out
        exit();
    }

    /**
     * @param $register
     */
    function register ($register)
    {
        // Check if form items are filled
        if (isset($register ['register_email']) && isset($register['register_password']) && isset($register['register_password_confirmation']))
        {
            if ($register ['register_email'] == '' || $register['register_password'] == '' || $register['register_password_confirmation'] == '')
            {
                $register_error_message="Le mail et/ou le password ne sont pas rempli(s).";
                require "view/register.php";
            }
            else
            {
                $input_user_email = $register ['register_email'];
                $input_user_psw = $register ['register_password'];
                $input_user_pswc = $register['register_password_confirmation'];

                if ($input_user_psw == $input_user_pswc)
                {
                    // Try to check if email and password match
                    require_once "model/users_managment.php";
                    if (user_register($input_user_email, $input_user_psw))
                    {
                        require "view/login.php";
                    }
                    else
                    {
                        $register_error_message="Le mail et le Password ne correspondent pas.";
                        require "view/register.php";
                    }
                }
                else
                {
                    $register_error_message="Les mots de passe ne correspondent pas";
                    require "view/register.php";
                }
            }
        }
        else
        {
            require "view/register.php";
        }
    }
