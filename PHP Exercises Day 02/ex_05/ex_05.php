<?php 

$map = [];

function my_add_elem_map($key, $value, &$map) {
	if(!isset($map[$key])) $map[$key] = $value;
	return $map;
}

function my_modify_elem_map($key, $value, &$map) {
	if(isset($map[$key])) $map[$key] = $value;
	return $map;
}

function my_delete_elem_map($key, &$map) {
	if(isset($map[$key])) unset($map[$key]);
	return $map;
}

function my_is_elem_valid($key, $value, &$map) {
	return isset($map[$key]) && $map[$key] === $value ? true : "You have to give good parameters.\r\n";
}

var_dump(my_add_elem_map("fruit","banana",$map));
var_dump(my_add_elem_map("fruit","orange",$map));
var_dump(my_modify_elem_map("car","golf",$map));
var_dump(my_delete_elem_map("animal",$map));
var_dump(my_is_elem_valid("fruit","banana",$map));
var_dump(my_is_elem_valid("fruit","orange",$map));
var_dump(my_is_elem_valid("car","golf",$map));


/*
Create three functions which can add, modify and delete a value in a map with its key. The functions will
return the map after changes.

Create another function to check if the value of a certain key is the same than the value given in parameters,
and if the key exists.

If the value and the key exist, return true, otherwise, return false.

Here is the error message (even formy_is_elem_valid): “You have to give good parameters.” followed by a new line.
*/