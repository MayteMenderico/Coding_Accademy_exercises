<?php

function my_password_change($myqsli, string $email, string $password):void {
    if($password == ""){
        throw new Exception();
    }
    $password = password_hash($password, PASSWORD_BCRYPT);

    $query = sprintf("SELECT * FROM users WHERE email='%s'", $email);
    if($result = $myqsli->query($query)){
        if(mysqli_num_rows($result) != 0){
            
            $query_update = sprintf("UPDATE users SET password='%s' WHERE email='%s'", $password, $email);

            $result = $myqsli->query($query_update);
        } else {
            throw new Exception();
        }
    }
}

?>