<?php

    /**
     * @file      users.php
     * @brief     This file is used to redirect the user to the login or register page
     * @author    Created by Paul-Loup GERMAIN
     * @update    Update Paul-Loup GERMAIN
     * @version   06-MAI-2022
     */

    /**
     * @param $login_request
     */
    function login($login_request){
        if ((isset($login_request['input_email'])) && (isset($login_request['input_password']))){
            $input_user_email = $login_request['input_email'];
            $input_user_psw = $login_request['input_password'];

            require_once "model/users_managment.php";
            if (is_login_correct($input_user_email, $input_user_psw)){
                $_SESSION['userEmailAddress']=$input_user_email;
                if (get_user_type($input_user_email) == 1){
                    $_SESSION['userType']=1;
                }
                require "view/home.php";
            }else{
                $loginErrorMessage = "Erreur";
                require "view/login.php";
            }

        }else{
            $loginErrorMessage = "Erreur";
            require "view/login.php";
        }
    }


    function logout(){
        session_destroy(); //destroy the session
        header("location:/index.php"); //to redirect back to "index.php" after logging out
        exit();
    }

    function register ($register)
    {
        // Check if form items are filled
        if (isset($register ['email']) && isset($register['userPsw']) && isset($register['userPswv']))
        {
            if ($register ['email'] == '' || $register['userPsw'] == '' || $register['userPswv'] == ''){
                $registerErrorMessage="Le mail et/ou le password ne sont pas rempli(s).";
                require "view/register.php";
            }else{
                $inputUserEmail = $register ['email'];
                $inputUserPsw = $register ['userPsw'];
                $inputUserPswv = $register['userPswv'];

                if ($inputUserPsw == $inputUserPswv)
                {
                    // Try to check if email and password match
                    require_once "model/users_managment.php";
                    if (userRegister($inputUserEmail, $inputUserPsw))
                    {
                        require "view/login.php";
                    }
                    else
                    {
                        $registerErrorMessage="Le mail et le Password ne correspondent pas.";
                        require "view/register.php";
                    }
                }
                else
                {
                    $registerErrorMessage="Les mots de passe ne correspondent pas";
                    require "view/register.php";
                }
            }
        }
        else
        {
            require "view/register.php";
        }
    }
