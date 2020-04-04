<?php 
require("ex_06.php");

$map = array();

my_create_continent("Europe", $map);
my_create_country ("France", "Europe", $map);
my_create_city("Marseille", "13000", "France", "Europe", $map);

var_dump($map);