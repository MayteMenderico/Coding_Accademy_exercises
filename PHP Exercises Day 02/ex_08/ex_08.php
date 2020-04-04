<?php 

function my_order_class_name(...$objs) {
	$return = [];
	foreach($objs as $obj) {
		$type = my_gettype($obj);
		$length = strlen($type);

		if(!isset($return[$length])) $return[$length] = [];
		if(array_search($type, $return[$length]) === false) $return[$length][] = $type;
	}

	/* order by size */
	ksort($return);

	/* order by name */
	foreach($return as $key => $val) {
		natcasesort($return[$key]);
	}

	return array_values($return);
}

function my_gettype($var) {
	$type = gettype($var);
	return $type === 'object' ? get_class($var) : $type;
}

