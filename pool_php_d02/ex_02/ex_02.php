<?php 

function my_create_map(...$arrays) {
	$result = [];
	foreach ($arrays as $key => $array) {
		$return[$array[0]] = $array[1];
	}
	return $return;
}

