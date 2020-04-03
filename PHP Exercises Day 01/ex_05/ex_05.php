<?php

function my_swap(&$a, &$b):void {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

?>