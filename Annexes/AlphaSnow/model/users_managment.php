<?php

    /**
     * @file      users_managment.php
     * @brief
     * @author    Created by Paul-Loup GERMAIN
     * @version   10-FEB-2022
     */

    require "model/file_connector.php";

    function save_register($array_input_user_form) {
        $new_register_to_write = extract_register($array_input_user_form);
        write_register_in_json($new_register_to_write);
    }

    function extract_register($array_input_user_form) {
        $firstname = $array_input_user_form['inputFirstName'];
        $lastname = $array_input_user_form['inputLastName'];
        $emailAddress = $array_input_user_form['inputEmailAddress'];
        $newsLetter = $array_input_user_form['inputNewsLetter'];
        $new_register_temp = array($firstname, $lastname, $emailAddress, $newsLetter);
        return $new_register_temp;
    }

?>
