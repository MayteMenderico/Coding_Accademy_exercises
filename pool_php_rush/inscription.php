<?php

if(!isset($_SESSION)){
    session_start();
}

$errorMessage = "";

if(isset($_SESSION['error']['register'])){
    $errorSession = $_SESSION['error']['register'];
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
        <form class="form-register" method="post" action="includes/signup.inc.php">
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
                <div class="form-label">Name</div>
                <div class="form-input"><input type="text" name="name" placeholder="Name" minlength="3" maxlength="10" required/></div>
            </div>
            <div class="form-group">
                <div class="form-label">Email</div>
                <div class="form-input"><input type="email" name="email" placeholder="E-mail" required/></div>
            </div>
            <div class="form-group">
                <div class="form-label">Password</div>
                <div class="form-input"><input type="password" name="password" placeholder="Password" minlength="3" maxlength="10" required/></div>
            </div>
            <div class="form-group">
                <div class="form-label">Confirm Password</div>
                <div class="form-input"><input type="password" name="confirm_password" placeholder="Confirm Password" minlength="3" maxlength="10" required/></div>
            </div>
            <div class="form-group">
                <div><input type="checkbox" name="stay_logged"> Remember Me ?  </div>
            </div>
			<div class="form-group">
				<div class="form-redirect"><a href="index.php">Already has an account ? Login here</a></div>
			</div>
            <div class="form-group-center">
                <div class="form-button">
                    <button class="btn btn-block btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>