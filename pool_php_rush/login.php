<?php

if(!isset($_SESSION)){
	if(isset($_COOKIE['token'])){
        session_id($_COOKIE['token']);
	}

	session_start();
}

$errorMessage = "";

if(isset($_SESSION['error']['login'])){
    $errorSession = $_SESSION['error']['login'];
    if($errorSession != ""){
        $errorMessage .= '<ul>';
        foreach($errorSession as $error){
            $errorMessage .=  sprintf("<li>%s</li>", $error);
        }
    
        $errorMessage .= '</ul>';
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
</head>
<body>
    <div class="container-register">
        <form class="form-register" method="post" action="includes/login.inc.php">
            <?php
                if($errorMessage != "") {
            ?>
            <div class="error-dialog">
                <?php
                    if($errorMessage != "") {
                        echo $errorMessage;

                        $_SESSION['error']['register'] = "";
                        $errorMessage = "";
                    }
                ?>
            </div>
            <?php
                }
            ?>
            <div class="form-group">
                <div class="form-label">Email</div>
                <div class="form-input"><input type="email" name="email" placeholder="E-mail" required/></div>
            </div>
            <div class="form-group">
                <div class="form-label">Password</div>
                <div class="form-input"><input type="password" name="password" placeholder="Password" minlength="3" maxlength="10" required/></div>
            </div>
            <div class="form-group">
                <div><input type="checkbox" name="stay_logged"> Remember Me ?  </div>
            </div>
            <div class="form-group-center">
                <div class="form-button">
                    <button class="btn btn-block">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>