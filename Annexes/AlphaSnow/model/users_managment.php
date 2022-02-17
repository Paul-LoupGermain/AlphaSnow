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
        //$email = $obj[0]['email'];

        foreach ($obj as $array){
            if($email_verify == $array['email']){
                require "view/home.php";
            }else{
                require "view/lost.php";
            }
        }
    }

    /*
    function register($inputEmailAddress, $inputPassword){
    $firstname = $inputFirstName['inputFirstName'];
    $lastname = $inputLastName['inputLastName'];
    $emailAddress = $inputEmailAddress['inputEmailAddress'];
    $newsPassword = $inputPassword['inputPassword'];
    $new_register_temp = array($firstname, $lastname, $emailAddress, $newsPassword);
    return $new_register_temp;

    require "model/file_connector.php";
}

?>
*/