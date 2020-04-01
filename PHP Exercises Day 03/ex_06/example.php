<?php

include_once("Gecko.php");

$alex = new Gecko();

$alex->eat('vegetable');

printf("My energy is: %d\n", $alex->getEnergy());
?>