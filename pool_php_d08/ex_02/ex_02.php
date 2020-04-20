<?php

function my_password_hash(string $password):array {
    $salt = rand();
    return [
        "hash" => md5($salt.$password),
        "salt" => $salt
    ];
} 

function my_password_verify(string $password, string $salt, string $hash):bool {
    if(md5($salt.$password) == $hash){
        return true;
    } else {
        return false;
    }
}

?>