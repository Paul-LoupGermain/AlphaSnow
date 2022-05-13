<?php

    /**
     * @file      file_connector.php
     * @brief     This file is the connection the website and the data base
     * @author    Created by Paul-Loup GERMAIN
     * @update    Update by Paul-Loup GERMAIN
     * @version   13-MAI-2022
     */

    /**
     * @param $query
     * @return null
     */
    function execute_query_select($query)
    {
        $query_result = null;

        $db_donnection = open_db_connection();
        if ($db_donnection != null)
        {
            $statment = $db_donnection->prepare($query);
            $statment->execute();
            $query_result = $statment->fetchall();
        }
        $db_donnection = null;
        return $query_result;
    }

    /**
     * @param $query
     */
    function execute_query_insert($query)
    {
        $db_donnection = open_db_connection();

        if ($db_donnection !=null)
        {
            $statement=$db_donnection->prepare($query); //Query prepare
            $statement->execute(); // Execute query
        }
        $db_donnection = null; //Close connection
    }

    /**
     * @return PDO|null
     */
    function open_db_connection(){
        $temp_db_connection = null;
        $sql_drivers='mysql';
        $host_name='localhost';
        $port=3306;
        $charset='utf8';
        $db_name='snows';
        $user_name='root';
        $user_pws='@Nicolas11';
        $dsn = $sql_drivers.':host='.$host_name.';dbname='.$db_name.';port='.$port.';charst='.$charset;

        try {
            $temp_db_connection = new PDO($dsn, $user_name, $user_pws);
        }catch (PDOException $exception){
            echo 'Connection failed'.$exception->getMessage();
        }
        return $temp_db_connection;
    }

    class ModelDataException{

    }
