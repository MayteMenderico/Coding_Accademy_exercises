<?php

require_once('../php/@system/SessionManager.php');

$session = new SessionManager();

$error = $session->getSMError('register');
$error_message = "";

if($error){
    $error_message = $error['data'];
    $session->setSMError('register', '');
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
    <script src='main.js'>php/@system/SessionManager.php</script>
</head>
<body>
    <div class="content-flex">
        <div class="display-error">
            <?=$error_message; ?>
        </div>
        <div class="form-register">
            <form action="../php/@validation/user/create.php" method="post">
                <input type="text" name="name" placeholder="name" minlength="3" maxlength="10" required>
                <input type="email" name="email" placeholder="email" required>
                <input type="password" name="password" placeholder="password" required>
                <input type="password" name="password_confirmation" placeholder="password_confirmation" required>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

</body>
</html>