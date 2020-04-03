<?php

include_once("Shark.php");

$bruce = new Shark("Bruce");
$willy = new Shark("Willy");

$bruce->smellBlood(true);
$bruce->eat($bruce);
?>