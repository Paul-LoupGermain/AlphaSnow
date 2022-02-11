<?php

    /**
     * @file      file_connector.php
     * @brief
     * @author    Created by Paul-Loup GERMAIN
     * @version   10-FEB-2022
     */

    function write_register_in_json($register_to_write) {
        $path_to_json_file = set_full_path("/data/register.json");
        $encoded_register = json_encode($register_to_write);
        write_msg_in_file($path_to_json_file, $encoded_register, false);
    }

    function set_full_path($f_name) {
        $current_path = getcwd();
        $full_path_to_file = $current_path . "\\" . $f_name;
        return $full_path_to_file;
    }

    function write_msg_in_file($file_full_path, $line_to_write, $erase) {
        $str_writer = null;
        if($erase) {
            $str_writer = fopen($file_full_path, "w+");
        } else {
            $str_writer = fopen($file_full_path, "a+");
            $line_to_write = $line_to_write;
        }

        fwrite($str_writer, $line_to_write  . "\r\n");
        fclose($str_writer);
    }

?>
