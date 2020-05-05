<?php

if(!isset($_SESSION)){
	if(isset($_COOKIE['token'])){
        session_id($_COOKIE['token']);
        session_start();
        header("Location: index.php");
	} else{
		session_start();
	}
}

if(isset($_SESSION)) {
    if(isset($_SESSION['user'])){
        if($_SESSION['user']['admin']) {
            echo "You are an administrator";
        } else {
            header("Location: index.php");

        }
    }
}


?>