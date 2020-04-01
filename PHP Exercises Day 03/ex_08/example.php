<?php

include_once("Gecko.php");

$alex = new Gecko();
$friend = new Gecko('Tom');
$snake = new Snake();

$alex->eat('vegetable');

$alex->fraternize($snake);

printf("My energy is: %d\n", $alex->getEnergy());
?>