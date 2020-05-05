<?php

session_start();

unset($_SESSION['user']);
session_destroy();

if(isset($_COOKIE['token'])){
    setcookie('token', false, -1);
}

header("Location: index.php");


?>