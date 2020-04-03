<?php

include_once("Shark.php");
include_once("Canary.php");

$piupiu = new Canary("Titi");
$bruce = new Shark("Willy");

$bruce->status();
$bruce->smellBlood(true);
$bruce->status();

$piupiu->layEgg();
echo $piupiu->getEggsCount()."\n"
?>