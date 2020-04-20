<?php

function my_print_args($argv):void {
    $args = $argv;
    
    foreach($args as $value){
        printf("%s\n", $value);
    }
    
}

my_print_args($argv);

?>