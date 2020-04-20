<?php

include_once("../ex_03/ex_03.php");

function my_show_db($mysqli, string $table):array {
    $query = sprintf("SELECT * FROM %s", $table);

    if($result = $mysqli->query($query)){
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else{
        return NULL;
    }

    return NULL;
}

$result = my_show_db( connect_db("localhost", "MayteMenderico", "vCpba1UaGEb8Twkw*", "", "gecko"), "users");

foreach($result as $user){
    $count = 0;
    $line = "";

    foreach($user as $key=>$value){
        if($count != count($user)-1){
            $line .= sprintf("[%s]=>[%s], ", $key, $value);
        } else {
            $line .= sprintf("[%s]=>[%s]", $key, $value);
        }

        $count++;
    }

    echo $line."\n";
}

?>