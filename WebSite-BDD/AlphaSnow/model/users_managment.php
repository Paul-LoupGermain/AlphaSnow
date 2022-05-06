<?php

    /**
     * @file      users_managment.php
     * @brief     This file is used to retrieve data from the json file for controller if the login matches the data
     * @author    Created by Paul-Loup GERMAIN
     * @update    Update Paul-Loup GERMAIN
     * @version   21-MAR-2022
     */

    function is_login_correct($userEmailAddress, $userPsw){
        $result = false;

        $strSeparator = '\'';
        $loginQuery='SELECT userHashPsw FROM users WHERE userEmailAddress='.$strSeparator.$userEmailAddress.$strSeparator;

        require_once "model/file_connector.php";
        $queryResult = executeQuerySelect($loginQuery);

        if (count($queryResult)==1){
            if (password_verify($userPsw, $queryResult[0][0])){
                $result=true;
            }
        }

        return $result;
    }

    function get_user_type($userEmailAddress){

        $strSeparator = '\'';
        $user_type_query = 'SELECT userType FROM users  WHERE userEmailAddress='.$strSeparator.$userEmailAddress.$strSeparator;

        require_once "model/file_connector.php";
        $queryResult = executeQuerySelect($user_type_query);

        return $queryResult[0][0];
    }

    function userRegister($inputUserEmail, $inputUserPsw)
    {
        $strSeparator = '\'';

        $loginQuery = 'SELECT userHashPsw FROM users ';
        $loginQuery .= 'WHERE userEmailAddress=' . $strSeparator . $inputUserEmail . $strSeparator;

        require_once 'model/file_connector.php';
        $queryResult = executeQuerySelect($loginQuery);

        if (count($queryResult) == 1) {
            return false;
        }

        $registerQuery = 'INSERT INTO users(userEmailAddress, userHashPsw, userType) VALUES ('.$strSeparator . $inputUserEmail . $strSeparator.','.$strSeparator . password_hash($inputUserPsw,PASSWORD_DEFAULT) . $strSeparator.',0)';

        executeQueryInsert($registerQuery);

        return true;
    }

