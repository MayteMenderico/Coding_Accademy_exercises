<?php 

function check_array_sum($numbers) {
	$max_key = 0;
	for($i = 1; $i < sizeof($numbers); $i++) {
		if( $numbers[$i] > $numbers[$max_key] ) $max_key = $i;
	}
	$highest = $numbers[$max_key];
	unset($numbers[$max_key]);



}


bool contains_sum(iter begin, iter end, int sum)
{
  while (begin != end)
  {
    --end;
    if (*end > sum)
      continue;
    if (contains_sum(begin, end, sum - *end))
      return true;
  }
  return sum == 0;
}


$arr = [4, 6, 23, 10, 1, 3];

if (check_array_sum($arr) == true) echo "4 + 6 + 10 + 3 == 23";

4 + 6 + 10 + 3 == 23


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