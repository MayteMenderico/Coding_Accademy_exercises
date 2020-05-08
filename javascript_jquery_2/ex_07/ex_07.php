<?php

function connect_db($host, $username, $passwd, $port, $db) {
    $conn = NULL;   
    
    $conn = new mysqli($host.$port, $username, $passwd, $db) or die (error_log( sprintf("PDO ERROR: %s storage in %s\n", $onn->error, ERROR_LOG_FILE)));

    return $conn;
}

$mysqli = connect_db("localhost", "Client", "Barcelona.20", "", "ajax");

$getEmails = "SELECT * FROM email";
$getTodo = "SELECT * FROM todo";
$getNote = "SELECT * FROM notes";

$response = array(
    "email" => array(),
    "todo" => array(),
    "note" => array()
);

if($result = $mysqli->query($getEmails)){
    if(mysqli_num_rows($result) == 0){
        $response = array("success" => false);
    } else {
        while($obj = $result->fetch_object()){

            if($obj->email != null) array_push($response['email'], $obj->email);            
        }
    }
} else{
    return false;
}

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

if($result = $mysqli->query($getNote)){
    if(mysqli_num_rows($result) == 0){
        $response = array("success" => false);
    } else {
        while($obj = $result->fetch_object()){
            
            if($obj->name != null) array_push($response['note'], $obj->name." ".$obj->description);            
        }
    }
} else{
    return false;
}

echo json_encode($response);

?>