<?php

include_once("../ex_03/ex_03.php");

function my_print_users($myqsli, $id=""):bool {
    $query = "SELECT name FROM users";
    
    if($id != ""){
        if(gettype($id) == "integer") {
            $query .= sprintf(" WHERE id=%d", $id);
        } else {
            echo "Invalid id given\n";
            return false;
        }
    }

    if($result = $myqsli->query($query)){
        if(mysqli_num_rows($result) == 0){
            echo "No users found\n";
        } else {
            while($obj = $result->fetch_object()){
                printf("%s\n", $obj->name);
            }

        }
    } else{
        return false;
    }
    
    return true;
}


$host = connect_db("localhost", "MayteMenderico", "vCpba1UaGEb8Twkw*", "", "gecko");

my_print_users( $host, 5 );

?>