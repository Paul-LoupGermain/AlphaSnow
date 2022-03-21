<?php

    /**
     * @file      file_connector.php
     * @brief     This file is used to write the data to the json file
     * @author    Created by Paul-Loup GERMAIN
     * @update    Update by Paul-Loup GERMAIN
     * @version   03-MAR-2022
     */

    /**
     * @brief This function decode the json file into a "json_load" and add the new array into a "json_upload".
     * @param $register_to_write
     */
    function write_register_in_json($register_to_write) {
        $path_to_json_file = set_full_path("/data/data_account.json");
        $file = file_get_contents(set_full_path("/data/data_account.json"));
        $json_load = json_decode($file, true);
        $encoded_register = array(
            "email" => $register_to_write['0'],
            "password" => $register_to_write['1'],
            "user_type" => $register_to_write['2']
        );
        array_push($json_load, $encoded_register);
        $json_upload = json_encode($json_load);
        file_put_contents("../data/data_account.json", $json_upload);
        write_msg_in_file($path_to_json_file, $json_upload, false);
    }

    /**
     * @brief This function is used to return the path of the json file.
     * @param $f_name
     * @return string
     */
    function set_full_path($f_name) {
        $current_path = getcwd();
        $full_path_to_file = $current_path . "\\" . $f_name;
        return $full_path_to_file;
    }

    /**
     * @brief This function is used to write the arrays in the json file.
     * @param $file_full_path
     * @param $line_to_write
     * @param $erase
     */
    function write_msg_in_file($file_full_path, $line_to_write, $erase) {
        $str_writer = null;
        if($erase) {
            $str_writer = fopen($file_full_path, "w+");
        } else {
            $str_writer = fopen($file_full_path, "w+");
            $line_to_write = $line_to_write;
        }
        fwrite($str_writer, $line_to_write  . "\r\n");
        fclose($str_writer);
    }
