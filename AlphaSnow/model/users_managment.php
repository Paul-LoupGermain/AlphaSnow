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

    function save_register($email, $password){
        $file_content = file_get_contents('data/data_account.json');
        $obj = json_decode($file_content,true);

        $userData = array("email" => $email,"password" => $password);
        $obj .= $userData;

        $obj_encode = json_encode($obj);
        file_put_contents('data/data_account.json',$obj_encode);
    }

    /*
    require "file_connector.php";
    function save_register($array_input_user_form) {
        $new_register_to_write = extract_register($array_input_user_form);
        write_register_in_json($new_register_to_write);
        require "view/home.php";
    }

    function extract_register($array_input_user_form) {
        $first_name = $array_input_user_form['register_firstname'];
        $last_name = $array_input_user_form['register_lastname'];
        $email = $array_input_user_form['register_email'];
        $password = $array_input_user_form['register_password'];
        $new_register_temp = array($first_name, $last_name, $email, $password);
        return $new_register_temp;
    }*/

