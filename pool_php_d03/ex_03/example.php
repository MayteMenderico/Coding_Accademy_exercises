<?php

include_once("Gecko.php");

$alex = new Gecko("Thomas");
$raph = new Gecko();
$serguei = new Gecko('Serguei');

unset($serguei);
echo $alex->getName().'\n';
echo $raph->getName().'\n';

exit();
?>