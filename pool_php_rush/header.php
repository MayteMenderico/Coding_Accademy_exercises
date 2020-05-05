<?php
	// Initialize the session
	session_start();
?>

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name=viewport content="width=device-width, initial-scale=1">
	<title></title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
        body{ 
        	font: 14px sans-serif; 
        	text-align: center; 
        	background-image: url("images/background_im.png");
 			background-color: #f8b195;
 			background-size: auto;}
    </style>
</head>

<body>
  <header>
  	<nav>
		<a href="#">
<!-- LOGO IMAGE with size 100x100 px -->
			<img src="images/logo1.png" alt="Responsive image" class="img-fluid">
		</a>
<!-- we create navigation bar, as a list, of names with links to corresponsing pages  -->
		<ul class="list-group list-group-horizontal nav justify-content-center"> 
			<li class="list-group-item"><a href="index.php">Home</a></li>
			<li class="list-group-item"><a href="includes/products.inc.php">Products</a></li>
			<li class="list-group-item"><a href="includes/categories.inc.php">Categories</a></li>
			<li class="list-group-item"><a href="includes/contacts">Contacts</a></li>
		</ul>
  	</nav>	
  	<br>	
	<div>
		<?php
		// Check if the user is logged in, if not then redirect him to login page
			if (isset($_SESSION['userid'])) {
				echo '<form action="includes/logout.inc.php" method="post">
				<button type="submit" name="logout-submit">Logout</button>
			</form>';
			}
			else {
				echo '<form action="includes/login.inc.php" method="post">
			<input type="text" name="mailuid" placeholder="E-mail/Username">
			<input type="password" name="pwd" placeholder="Password">		
				<button type="submit" name="login-submit"> Login</button>
		</form>
			<a href="signup.php">Signup</a>';
			}
		?>
		
			
		</div>


  </header>
</body>
</html>