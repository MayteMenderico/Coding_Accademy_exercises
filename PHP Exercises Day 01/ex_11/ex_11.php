<?php

function my_print_args():void {
    $args = func_get_args();
    
    foreach($args[0] as $value){
        printf("%s\n", $value);
    }
    
}

my_print_args($argv);

?>