<?php
session_start();

var_dump($_SESSION['user']);

?>




<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div>Hello <?=$_SESSION['user']['name']; ?>
    
    <div>
        <a href="./logout.php">Logout</a>
    </div>
    <div>
        <a href="./modify_account.php">Settings</a>
    </div>
    <div>
        <a href="./admin.php">Admin Settings</a>
    </div>
    <div>
        <a href="./newsletter.php">Create newsletter</a>
    </div>
    <div>

    </div>
</body>
</html>