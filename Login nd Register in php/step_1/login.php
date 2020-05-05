<?php

require_once('../php/@system/SessionManager.php');

$session = new SessionManager();

$error = $session->getSMError('login');
$error_message = "";

if($error){
    $error_message = $error['data'];
    $session->setSMError('login', '');
}



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
    <div class="container-flex">
        <div class="display-error">
            <?=$error_message; ?>
        </div>
        <form method="POST" action="../php/@validation/user/select.php">
            <input type="email" name="email" />
            <input type="password" name="password" />
        
            <button type="submit">Submit </button>
        </form>
    </div>
</body>
</html>