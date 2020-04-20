<?php

include_once("Warrior.php");
include_once("Mage.php");

$warrior = new Warrior ("Jean-Luc") ;
$mage = new Mage("Robert");

$warrior->attack();
$mage->attack();


?>