<?php

for($x=0;$x<5;$x++){
    try {
        call_gecko();
    } catch(Exception $err) {
        printf("%s\n", $err->getMessage());
    }
}

?>