<?php


function getDB($echo_mode = false) 
{
    $host = 'localhost'; //database host is localhost
    $port = 3306; //default port for MySQL is 3306
    $dbname = 'skincare'; //we want to connect to the skincare database
    $username = 'skincare_ceo'; //user name for the database is the skincare_ceo
    $password = 'skincare_ceo_password'; //password for the database attached to skincare_ceo
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); //tell mysqli to throw exceptions when there are errors
    try {
        $db = new mysqli($host, $username, $password, $dbname, $port); 
        error_log("Database connection successful to " . $host); 
        if ($echo_mode) echo "Database connection successful to " . $host; 
        return $db;
    } catch (mysqli_sql_exception $e) {
        error_log("Database connection failed: " . $e->getMessage());
        if ($echo_mode) echo "Database connection failed: " . $e->getMessage();
    }
}

//test the connection by entering in the browser: http://localhost:3000/database.php
//or in the terminal: php -S localhost:3000 -t inventory and then going to http://localhost:3000/database.php

?>
