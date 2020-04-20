<?php

include_once("Warrior.php");
include_once("Mage.php");

$warrior = new Warrior ("Jean-Luc") ;

$warrior->moveLeft();
$warrior->moveRight();
$warrior->moveDown();
$warrior->moveUp();


?>