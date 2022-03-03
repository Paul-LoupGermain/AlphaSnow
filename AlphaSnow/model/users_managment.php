<?php

    /**
     * @file      users_managment.php
     * @brief     This file is used to retrieve data from the json file for controller if the login matches the data
     * @author    Created by Paul-Loup GERMAIN
     * @update    Update Paul-Loup GERMAIN
     * @version   10-FEB-2022
     */

    function is_login_correct($email_verify, $password_verify){
        $file_content = file_get_contents('data/data_account.json');
        $obj = json_decode($file_content,true);
        $error = false;
        //$email = $obj[0]['email'];

        foreach ($obj as $array){
            if(($email_verify == $array['email']) && ($password_verify == $array['password'])){
                require "view/home.php";
                $error = false;
            }else{
                $error = true;
            }
        }

        if ($error){
            require "view/lost.php";
        }
    }

    /*
    function save_register($email, $password){
        $file_content_register = file_get_contents('data/data_account.json');
        $obj_register = json_decode($file_content_register,true);

        $userData = array("email" => $email,"password" => $password);
        $obj_register .= $userData;

        $obj_encode = json_encode($obj_register);
        file_put_contents('data/data_account.json',$obj_encode);
    }*/


    require "file_connector.php";
    function save_register($email_register, $password_register) {
        $new_register_to_write = extract_register($email_register, $password_register);
        write_register_in_json($new_register_to_write);
        require "view/home.php";
    }

    function extract_register($email_register, $password_register) {
        $email = $email_register;
        $password = $password_register;
        $new_register_temp = array($email, $password);
        return $new_register_temp;
    }

