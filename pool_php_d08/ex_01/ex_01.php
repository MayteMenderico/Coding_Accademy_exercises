<?php

function my_very_secure_hash(string $password):string {
    return md5($password);
}

?>