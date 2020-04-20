<?php

include_once("AMonster.php");
include_once("ASpaceMarine.php");
include_once("PlasmaRifle.php");
include_once("PowerFist.php");

$marine = new ASpaceMarine("Ryan");
$monster = new AMonster("Pimpão"); 
$monster2 = new AMonster("Dollynho");

$monster2->equip();
$monster2->attack($marine);
$monster2->attack($marine);
?>