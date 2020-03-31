<?php

function print_array(array $my_array):void {
    foreach($my_array as $value){
        echo $value."<br />";
    } 
}

print_array(['valor1', 2, true, false, null, 20.6]);

?>