<?php

if(isset($_COOKIE['name'])){
    if(isset($_GET['name'])){
        $_COOKIE['name'] = $_GET['name'];
        setcookie("name", $_GET['name'], time() + 24*60*60);
    }
    printf("Hello %s", $_COOKIE['name']);
} else{
    if(isset($_GET['name'])){
        printf("Hello %s", $_GET['name']);
        setcookie("name", $_GET['name'], time() + 86400);
    } else {
        echo "Hello platypus";
    }
}



?>