<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//call management classes
spl_autoload_register(function($class_name){
    $filename = sprintf("../../@system/%s.php", $class_name);
    if(file_exists($filename)){
        require_once($filename);
    }
});



?>