<?php

function connect_db($host, $username, $passwd, $port, $db) {
    $conn = NULL;   
    
    $conn = new mysqli($host.$port, $username, $passwd, $db) or die (error_log( sprintf("PDO ERROR: %s storage in %s\n", $onn->error, ERROR_LOG_FILE)));

    return $conn;
}

$mysqli = connect_db("localhost", "Client", "Barcelona.20", "", "ajax");

$getTodo = "SELECT * FROM todo";

$response = array(
    "todo" => array()
);

if($result = $mysqli->query($getTodo)){
    if(mysqli_num_rows($result) == 0){
        $response = array("success" => false);
    } else {
        while($obj = $result->fetch_object()){

            if($obj->name != null) array_push($response['todo'], $obj->name);            
        }
    }
} else{
    return false;
}

echo json_encode($response);

?>