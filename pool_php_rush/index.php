<?php

if(!isset($_SESSION)){
	if(isset($_COOKIE['token'])){
        session_id($_COOKIE['token']);
	}

	session_start();
}

$errorMessage = "";
$userName = "";

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

if(isset($_SESSION['user'])) {
	if(isset($_SESSION['user']['name'])){
		$userName = $_SESSION['user']['name'];
	}
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Homepage</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src='./javascript/myscript.js'></script>
</head>
<body>
	<header>
		<div class="jumbotron header">
			<div>
				<div class="row">
					<div class="col-3">
						<img src="images/coffeeTime.png" width="200px" height="auto">
					</div>
					<div class="col-9">
						<div class="form-redir">
							<?php
								if($userName != "") {
									printf("Hello, %s", $userName);
								}
							?>
						</div>
						<div class="header-buttons">
							<div><a href="index.php"><div class="button">Home</div></a></div>
							<div><a href="about.php"><div class="button">About us</div></a></div>
							<div><a href="products.php"><div class="button">Products</div></a></div>
							<div><a href="#contact"><div class="button">Contact</div></a></div>
							<div><a href="perfil.php"><div class="button">Login</div></a></div>
							<div><a href="logout.php"><div class="button">Logout</div></a></div>
							<div><a href="admin.php"><div class="button">Admin</div></a></div>
							

						</div>
						<div class="form-redir"><a href="inscription.php">Don't have an account ? Click here to create one</a></div>
						<div class="row">

						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="container-register-noheight">
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
			<div class="form-group-center">
				<h1>Login</h1>
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
				<div><input type="checkbox" name="stay_logged"> Remember Me ?  </div>
			</div>
			<div class="form-group">
				<div class="form-redirect"><a href="inscription.php">Don't have an account ? Click here to create one</a></div>
			</div>
			<div class="form-group-center">
				<div class="form-button">
					<button type="submit">Submit</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>