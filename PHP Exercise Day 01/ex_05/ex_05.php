<?php

function my_swap(&$a, &$b):void {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$var1 = 30; 
$var2 = 60;

printf("%d %d \n", $var1, $var2);

my_swap($var1, $var2);

printf("%d %d", $var1, $var2);

?>