<?php 

function my_division_modulo($n1, $op, $n2) {
    if($op != '/' || $n2 == 0 ) throw new Exception("The given arguments aren’t good.");
    return abs( $n1 / $n2 );
}