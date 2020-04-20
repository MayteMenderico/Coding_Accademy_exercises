<?php

if(isset($_GET['name'])){
    printf("Hello %s", $_GET['name']);

    
} else {
    echo "Hello platypus";
}

if(!isset($_GET['name'])){ ?>
<form method="GET">
    <input type="text" name="name">
    <button type="submit">Submit</button>
</form>

<?php
}
?>