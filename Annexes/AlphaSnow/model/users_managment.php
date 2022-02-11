<?php

    /**
     * @file      users_managment.php
     * @brief
     * @author    Created by Paul-Loup GERMAIN
     * @version   10-FEB-2022
     */

    function isLoginCorrect($inputFirstName, $inputLastName, $inputEmailAddress, $inputPassword){
        $firstname = $inputFirstName['inputFirstName'];
        $lastname = $inputLastName['inputLastName'];
        $emailAddress = $inputEmailAddress['inputEmailAddress'];
        $newsPassword = $inputPassword['inputPassword'];
        $new_register_temp = array($firstname, $lastname, $emailAddress, $newsPassword);
        return $new_register_temp;

        require "model/file_connector.php";
    }

?>
