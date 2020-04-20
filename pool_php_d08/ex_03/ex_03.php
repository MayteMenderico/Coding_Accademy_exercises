<?php

ini_set("error_log", dirname(__FILE__)."/error_log.txt");

define("ERROR_LOG_FILE", ini_get('error_log'));

function connect_db($host, $username, $passwd, $port, $db) {
    $conn = NULL;   
    
    $conn = new mysqli($host.$port, $username, $passwd, $db) or die (error_log( sprintf("PDO ERROR: %s storage in %s\n", $onn->error, ERROR_LOG_FILE)));

    return $conn;
}

//connect_db("localhost", "MayteMenderico", "vCpba1UaGEb8Twkw*", "", "gecko");

?>