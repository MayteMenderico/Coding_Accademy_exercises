<?php

include_once("BlueShark.php");
include_once("GreatWhite.php");
include_once("Shark.php");
include_once("Canary.php");

$bruce = new GreatWhite("Bruce");
$willy = new Shark("Willy");
$nemo = new Canary("Nemo");

$bruce->smellBlood(true);
$bruce->eat($willy);
?>
