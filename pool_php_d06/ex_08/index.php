<?php

include_once("SpaceArena.php");
include_once("AssaultTerminator.php");
include_once("TaticalMarine.php");
include_once("RadScorpion.php");
include_once("SuperMutant.php");

$arena = new SpaceArena();

$arena->enlistMonster([new RadScorpion(), new SuperMutant(), new RadScorpion()]);
$arena->enlistSpaceMarines([new TaticalMarine("Joe"), new AssaultTerminator("Abaddon"), new TaticalMarine("Rose")]);

$arena->fight();

?>