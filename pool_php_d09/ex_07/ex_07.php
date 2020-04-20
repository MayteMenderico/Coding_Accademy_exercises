<?php

function modify_cookie(string $cookie, $value):void {
    setcookie($cookie, $value, time() + 86400);
}

?>