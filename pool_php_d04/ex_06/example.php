<?php

include_once("Mars.php");
include_once("Team.php");
include_once("Astronaut.php");

$spaceBro = new Team("SpaceBrothers");

$mutta = new Astronaut("Mutta");
$hibito = new Astronaut("Hibito");
$serika = new Astronaut("Serika");

$spaceBro->add($mutta);
$spaceBro->add($hibito);
$spaceBro->add($serika);
$spaceBro->add(3);

echo $spaceBro->countMembers()."\n";

$titi = new planet\Mars();

$mutta->doAction($titi);

$spaceBro->showMembers();
$spaceBro->remove($hibito);

echo $spaceBro->countMembers()."\n";

?>