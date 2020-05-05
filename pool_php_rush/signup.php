<?php
	require "header.php";
?>

	<main>
		<h1>Signup</h1>
		<?php
			if (isset($_GET['error'])) {
				if ($GET['error'] == "emptyfields") {
					echo '<p style="color:red;"> Fill in all fields!</p>';
				}
				else if ($GET['error'] == "invaliduidmail") {
					echo '<p style="color:red;"> Invalid username and e-mail!</p>';					
				}
				else if ($GET['error'] == "invaliduid") {
					echo '<p style="color:red;"> Invalid username!</p>';					
				}
				else if ($GET['error'] == "invalidmail") {
					echo '<p style="color:red;"> Invalid e-mail!</p>';					
				}
				else if ($GET['error'] == "passwordcheck") {
					echo '<p style="color:red;"> Your passwords do not match!</p>';					
				}
				else if ($GET['error'] == "usertaken") {
					echo '<p style="color:red;"> Username exists!</p>';					
				}
			} else if ($_GET['signup'] == "success") {
				echo '<p style="color:green;"> Signup successful!</p>';

			}
		?>
		<form action="includes/signup.inc.php" method="post">
			<input type="text" name="name" placeholder="Username"><br><br>
			<input type="text" name="email" placeholder="E-mail"><br><br>
			<input type="password" name="password" placeholder="Password"><br><br>
			<input type="password" name="confirm_password" placeholder="Repeat Password"><br><br>
			<button type="submit" name="signup-submit">Signup</button>
		</form>
	</main>

<?php
	require "footer.php";
?>