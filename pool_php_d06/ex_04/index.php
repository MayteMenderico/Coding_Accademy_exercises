<?php

include_once("AMonster.php");

$monster = new AMonster("Adolfo");
$monster2 = new AMonster("Batata");

$monster->attack($monster2);

?>