<?php

function connect_db($host, $username, $passwd, $port, $db) {
    $conn = NULL;   
    
    $conn = new mysqli($host.$port, $username, $passwd, $db) or die (error_log( sprintf("PDO ERROR: %s storage in %s\n", $onn->error, ERROR_LOG_FILE)));

    return $conn;
}

$mysqli = connect_db("localhost", "Client", "Barcelona.20", "", "ajax");

$data = $_POST['information'];

$success = false;
foreach($data as $value){
    if($value['type'] == "email" || $value['type'] == "note" || $value['type'] == "todo"){
        switch($value['type']){
            case 'email':
                $query = sprintf("INSERT INTO email (email) VALUES (%s)", $value['content']);
            break;
            case 'note':
                $query = sprintf("INSERT INTO notes (name, description) VALUES (%s, %s)", $value['content'], $value['content']);
            break;
            case 'todo':
                $query = sprintf("INSERT INTO todo (name, status) VALUES (%s, 0)", $value['content']);
            break;
        }

        if($result = $mysqli->query($query)){
            $success = true;
        }
    }
}

echo json_encode($success);

?>