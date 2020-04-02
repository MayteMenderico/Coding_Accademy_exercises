<?php 

include_once("Astronaut.php");
include_once("Mars.php");

$astro = new Astronaut("Apollo");

$astro->doAction(new planet\Mars);
$astro->doAction(new chocolate\Mars);
$astro->doAction(new chocolate\Mars);

unset($astro);

?>