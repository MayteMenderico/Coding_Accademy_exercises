<?php

function my_change_user($myqsli, array $names=[]){
    foreach($names as $key=>$name){
        $query = sprintf("SELECT id FROM users WHERE name='%s'", $name);

        $nome = sprintf("%s42", ucfirst($name));
        $query_update = sprintf("UPDATE users SET name='%s' WHERE name='%s'", $nome, $name);

        echo $query_update;
        if($result = $myqsli->query($query)){
            if($result = $myqsli->query($query_update)){
            }
        } else {
            throw new PDOException("User not found");
        }
    }
}

?>