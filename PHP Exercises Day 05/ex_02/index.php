<?php


include_once("Animal.php");

$isidore = new Animal("Isidore", 4, Animal::MAMMAL);
$theodore = new Animal("Theodore", 2, Animal::MAMMAL);
$theodore = new Animal("Alvin", 2, Animal::BIRD);

$isidore::getNumberOfAnimalsAlive();

?>