<?php

    /**
     * @file      users_managment.php
     * @brief     This file is used to retrieve data from the json file for controller if the login matches the data
     * @author    Created by Paul-Loup GERMAIN
     * @update    Update Paul-Loup GERMAIN
     * @version   13-MAI-2022
     */

    function is_login_correct($user_email_address, $user_psw)
    {
        $result = false;

        $str_separator = '\'';
        $login_query='SELECT userHashPsw FROM users WHERE userEmailAddress='.$str_separator.$user_email_address.$str_separator;

        require_once "model/file_connector.php";
        $query_result = execute_query_select($login_query);

        if (count($query_result)==1)
        {
            if (password_verify($user_psw, $query_result[0][0]))
            {
                $result=true;
            }
        }

        return $result;
    }

    /**
     * @param $user_email_address
     * @return mixed
     */
    function get_user_type($user_email_address){

        $str_separator = '\'';
        $user_type_query = 'SELECT userType FROM users  WHERE userEmailAddress='.$str_separator.$user_email_address.$str_separator;

        require_once "model/file_connector.php";
        $query_result = execute_query_select($user_type_query);

        return $query_result[0][0];
    }

    /**
     * @param $input_user_email
     * @param $input_user_psw
     * @return bool
     */
    function user_register($input_user_email, $input_user_psw)
    {
        $str_separator = '\'';

        $login_query = 'SELECT userHashPsw FROM users ';
        $login_query .= 'WHERE userEmailAddress=' . $str_separator . $input_user_email . $str_separator;

        require_once 'model/file_connector.php';
        $query_result = execute_query_select($login_query);

        if (count($query_result) == 1)
        {
            return false;
        }

        $register_query = 'INSERT INTO users(userEmailAddress, userHashPsw, userType) VALUES ('.$str_separator . $input_user_email . $str_separator.','.$str_separator . password_hash($input_user_psw,PASSWORD_DEFAULT) . $str_separator.',0)';

        execute_query_insert($register_query);

        return true;
    }

