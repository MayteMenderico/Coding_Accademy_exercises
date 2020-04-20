<?php

include_once("Cat.php");

$isidore = new Cat("Isidore");

printf("%s has %d legs and is a %s.\n", $isidore->getName(), $isidore->getLegs(), $isidore->getType());
$isidore->meow();
?>