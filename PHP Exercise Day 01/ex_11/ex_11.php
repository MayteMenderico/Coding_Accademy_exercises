<?php

function my_print_args():void {
    for($x = 0; $x < func_num_args(); $x++) {
        echo func_get_arg($x)."\n";
    }
}

my_print_args();

?>