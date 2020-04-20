<?php 

function check_array_sum(array $array_sum) {
	$original_array = $array_sum;
	$highest = find_highest_value($array_sum);

	$highest_value = $highest["highest_value"];
	$array_sum = $highest["array"];

	$sum_to_goal = sum_to_goal($array_sum, $highest_value);

	$result = "";

	if(!$sum_to_goal) return false;

	foreach($original_array as $original){
		foreach($sum_to_goal as $key=>$summed){
			if($summed == $original){
				if($key == count($sum_to_goal)-1){
					$result .= sprintf("%d == %d ", $summed, $highest_value);
				} else {
					$result .= sprintf("%d + ", $summed);
				}
			}
		}
	}

	return $result;
}

function sum_to_goal(array $array_sum, int $goal){
	$sum = 0;
	$used_sum = [];
	$highest_value = 0;

	for(;;){
		if($sum >= $goal) break;
		if(count($array_sum) == 0) break;

		$highest = find_highest_value($array_sum);

		$highest_value = $highest["highest_value"];
		$array_sum = $highest["array"];

		$sum += $highest_value;

		if($sum > $goal){
			$sum -= $highest_value;
			$array_sum = find_highest_value($array_sum)['array'];
		} else {
			array_push($used_sum, $highest_value);
		}
	}

	if($sum < $goal) return false;

	return $used_sum;
}

function find_highest_value(array $array_sum):array {
	$highest_value = 0;

	foreach($array_sum as $value) {
		if($value > $highest_value){
			$highest_value = $value;
		}
	}

	for($x = 0; $x < count($array_sum); $x++){
		if($array_sum[$x] == $highest_value){
			array_splice($array_sum, $x, 1);
		}
	}

	return [
		"highest_value"=>$highest_value,
		"array" => $array_sum
	];
}

// echo check_array_sum([4, 6, 23, 10, 1, 3]);

/*
Create the function check_array_sum that takes as parameter an array of numbers and returns true if the
sum of certain elements of the array can be equal to the highest value of the array. If there are no combination
that can add up to the highest element of the array, the function returns false.
Example:
r Terminal - + x
<?php
require(“ex_09.php”);
$arr = [4, 6, 23, 10, 1, 3];
if (check_array_sum($arr) == true)
echo “4 + 6 + 10 + 3 == 23”;
will produce the following output:
r Terminal - + x
4 + 6 + 10 + 3 == 23
The array will not be empty and may contain negative values.
*/