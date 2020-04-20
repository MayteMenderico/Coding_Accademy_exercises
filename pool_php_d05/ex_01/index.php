<?php


include_once("Animal.php");

$isidore = new Animal("Isidore", 4, Animal::MAMMAL);

printf("%s has %d legs and is a %s\n", $isidore->getName(), $isidore->getLegs(), $isidore->getType());

?>