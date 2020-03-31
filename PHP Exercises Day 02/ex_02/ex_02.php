<?php 

function my_create_map(...$arrays) {
	$result = [];
	foreach ($arrays as $key => $array) {
		$return[$array[0]] = $array[1];
	}
	return $return;
}

$array1 = ["pi", 3.14];
$array2 = ["answer", 42];

var_dump(my_create_map($array1, $array2));