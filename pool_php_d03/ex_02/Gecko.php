<?php

class Gecko {
    public $name = "";

    function Gecko(string $name = "") {
        if($name ===  "" || $name === NULL ) {
            echo "Hello !\n";
        } else {
            printf("Hello %s !\n", $name);
        }

        $this->name = $name;
    }

}