<?php

include_once("Gecko.php");

$alex = new Gecko("Thomas");

echo $alex->getName().'\n';

$alex->setAge(6);

printf("Gecko's age: %d \n", $alex->getAge());

echo $alex->status();
?>