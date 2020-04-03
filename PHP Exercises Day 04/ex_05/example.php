<?php

include_once("Mars.php");
include_once("Phobos.php");

$titi = new planet\Mars();
$toto = new planet\Mars();

new planet\moon\Phobos($titi);
new planet\moon\Phobos($toto);

?>