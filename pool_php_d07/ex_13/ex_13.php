<?php

function object_comparision($object1, $object2){
    if($object1 == $object2){
        echo "Objetcs are equal.\n";
    } else if(get_class($object1) == get_class($object1)){
        echo "Objects are the same.\n";
    } else{
        return;
    }
}

?>