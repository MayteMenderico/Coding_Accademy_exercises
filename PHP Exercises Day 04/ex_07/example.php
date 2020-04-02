<?php

include_once("Mars.php");
include_once("Team.php");
include_once("Astronaut.php");
include_once("Phobos.php");

$spaceBro = new Team("SpaceBrothers");

$mutta = new Astronaut("Mutta");
$hibito = new Astronaut("Hibito");
$serika = new Astronaut("Serika");

$spaceBro->add($mutta);
$spaceBro->add($hibito);
$spaceBro->add($serika);

$spaceBro->doActions(new planet\Mars);
$spaceBro->doActions(new chocolate\Mars);

?>