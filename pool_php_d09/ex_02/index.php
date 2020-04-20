<?php

if(isset($_GET['name'])){
    printf("Hello %s", $_GET['name']);

    
} else {
    echo "Hello platypus";
}

?>
<form method="GET">

    <input type="hidden" name="name" value="Martin">
    <button type="submit">PRESS ME!</button>
</form>