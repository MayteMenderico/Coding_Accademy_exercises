<?php

function sequence(int $nbr):void {
    $num = "1";

    for($x = 0; $x <= $nbr; $x++) {
       echo $num."<br/>";
       $num = lookAndSay($num);
    }
}


function lookAndSay($str) {
 
	return preg_replace_callback('#(.)\1*#', function($matches) {
 
		return strlen($matches[0]).$matches[1];
    }, $str);
}

?>