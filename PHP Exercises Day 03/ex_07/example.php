<?php

include_once("Gecko.php");

$alex = new Gecko();

$alex->eat('vegetable');

$alex->work();
$alex->work();
$alex->work();
$alex->work();
$alex->work();
$alex->eat('vegetable');
$alex->eat('vegetable');
$alex->work();
$alex->work();

printf("My energy is: %d\n", $alex->getEnergy());
?>