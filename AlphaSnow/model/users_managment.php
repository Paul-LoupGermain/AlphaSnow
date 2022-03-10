<?php

    /**
     * @file      users_managment.php
     * @brief     This file is used to retrieve data from the json file for controller if the login matches the data
     * @author    Created by Paul-Loup GERMAIN
     * @update    Update Paul-Loup GERMAIN
     * @version   02-MAR-2022
     */

    /**
     * @brief This function is used to check if the user has entered the correct login.
     * @param $email_verify
     * @param $password_verify
     */
    function is_login_correct($email_verify, $password_verify){
        $file_content = file_get_contents('data/data_account.json');
        $obj = json_decode($file_content,true);
        foreach ($obj as $array){
            if(($email_verify == $array['email']) && ($password_verify == $array['password'])){
                return true;
            }
        }
    }

    require "file_connector.php";

    /**
     * @brief This function is used to make the link between "write_register_in_json" and "extract_register" to extract the data and write it.
     * @param $email_register
     * @param $password_register
     */
    function save_register($email_register, $password_register) {
        $new_register_to_write = extract_register($email_register, $password_register);
        write_register_in_json($new_register_to_write);
        require "view/home.php";
    }

    /**
     * @brief This function is used to extract the data.
     * @param $email_register
     * @param $password_register
     * @return array
     */
    function extract_register($email_register, $password_register) {
        $email = $email_register;
        $password = $password_register;
        $new_register_temp = array($email, $password);
        return $new_register_temp;
    }
