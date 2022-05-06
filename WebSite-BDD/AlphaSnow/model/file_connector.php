<?php

    /**
     * @file      file_connector.php
     * @brief     This file is used to write the data to the json file
     * @author    Created by Paul-Loup GERMAIN
     * @update    Update by Paul-Loup GERMAIN
     * @version   30-MAR-2022
     */

    /**
     * @param $query
     * @return null
     */
    function executeQuerySelect($query) {
        $queryResult = null;

        $dbConnection = openDBConnection();
        if ($dbConnection != null) {
            $statment = $dbConnection->prepare($query);
            $statment->execute();
            $queryResult = $statment->fetchall();
        }
        $dbConnection = null;
        return $queryResult;
    }

    function executeQueryInsert($query)
    {
        $dbConnection = openDBConnection();

        if ($dbConnection !=null)
        {
            $statement=$dbConnection->prepare($query); //Query prepare
            $statement->execute(); // Execute query
        }
        $dbConnection = null; //Close connection
    }


    function openDBConnection(){
        $tempDBConnection = null;
        $sqlDrivers='mysql';
        $hostname='localhost';
        $port=3306;
        $charset='utf8';
        $dbName='snows';
        $userName='root';
        $userPws='@Nicolas11';
        $dsn = $sqlDrivers.':host='.$hostname.';dbname='.$dbName.';port='.$port.';charst='.$charset;

        try {
            $tempDBConnection = new PDO($dsn, $userName, $userPws);
        }catch (PDOException $exception){
            echo 'Connection failed'.$exception->getMessage();
        }
        return $tempDBConnection;
    }

    class ModelDataException{

    }
