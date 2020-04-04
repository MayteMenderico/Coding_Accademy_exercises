<?php 

require("ex_08.php");

class MyClass {};

$args = [
    true,
    76,
    false,
    12.5,
    'Coucou !',
    [1, 2, 3],
    new MyClass(),
    NULL
];

print_r(my_order_class_name(...$args));

