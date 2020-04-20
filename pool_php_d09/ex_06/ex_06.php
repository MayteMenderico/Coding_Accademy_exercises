<?php

function remove_cookie(string $cookie){
    unset($_COOKIE[$cookie]);
    setcookie($cookie, NULL, -1);
}

remove_cookie('teste');

?>