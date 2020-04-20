<?php 

function my_password_hash(string $password) {
	$salt = date("YmdHis", time());
	return [
		"hash" => md5($password . $salt),
		"salt" => $salt
	];
}

$result = my_password_hash("admin");

function my_password_verify(string $password, string $salt, string $hash) {
	if( $hash === md5($password . $salt) ) {
		return true;
	}
	return false;
}


/*
Prototype: bool my_password_verify(string $password, string $salt, string $hash);
Write a functionmy_password_hash that takes as parameter a password in plain-text and returns an array
containing the hashed password in MD5, as well as the “salt” used for hashing. The salt must be different
on each call.
Then write a function my_password_verify that takes as parameter a password in plain-text, a salt and a
hashed password. This function must return true or false, depending on whether the hashed password corresponds
to the plain-text password with the associated salt or not.
The array returned by the function my_password_hash has to look like this:
*/