<?php
function get_angry_dog(int $nbr):string {
    $angry = "";

    for($x=0; $x < $nbr; $x++){
        $angry .= "woof";
    }

    return $angry;
}

?>