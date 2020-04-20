<?php

ini_set("error_log", dirname(__FILE__)."/error_log.txt");

define("ERROR_LOG_FILE", ini_get('error_log'));

if(count($argv) < 6){
    $error_message =  "Bad params! Usage: php connect_db.php host username password port db\n";
    echo $error_message;
    error_log($error_message);
    return;
}

function connect_db($host, $username, $passwd, $port, $db) {
    $conn = NULL;   
    
    $conn = new mysqli($host.$port, $username, $passwd, $db) or die (error_log( sprintf("PDO ERROR: %s storage in %s\n", $onn->error, ERROR_LOG_FILE)));

    return $conn;
}

$conn =connect_db($argv[1], $argv[2], $argv[3], $argv[4], $argv[5]);

if($conn->connect_errno == 0) {
    echo "Connection to DB successful\n";
} else {
    echo "Error connection to DB\n";
}

?>