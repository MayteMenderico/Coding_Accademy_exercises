<?php

session_start();

if(isset($_SESSION['name'])){
    if(isset($_GET['name'])){
        $_SESSION['name'] = $_GET['name'];
    }
    printf("Hello %s", $_SESSION['name']);
} else{
    if(isset($_GET['name'])){
        printf("Hello %s", $_GET['name']);
        $_SESSION['name'] = $_GET['name'];
    } else {
        echo "Hello platypus";
    }
}



?>