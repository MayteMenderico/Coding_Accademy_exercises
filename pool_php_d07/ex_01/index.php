<?php

include_once("Character.php");

$perso = new Character("Jean-Luc");
echo $perso->getName().PHP_EOL ;
echo $perso->getLife().PHP_EOL ;
echo $perso->getAgility().PHP_EOL ;
echo $perso->getStrength().PHP_EOL ;
echo $perso->getWit().PHP_EOL ;
echo $perso->getClasse().PHP_EOL ;
// displays : " Jean - Luc " , "50" , "2" , "2" , "2" and " Character "

?>