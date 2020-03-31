<?php

$func = function(string $str):string {
    return strtoupper($str);
};

echo $func('hello world');

?>