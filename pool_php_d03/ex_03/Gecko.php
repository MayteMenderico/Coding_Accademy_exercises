<?php

class Gecko {
    private $name = "";

    function Gecko(string $name = "") {
        if($name ===  "" || $name === NULL ) {
            echo "Hello !\n";
        } else {
            printf("Hello %s !\n", $name);
        }

        $this->name = $name;
    }

    function __destruct() {
        if($this->name !==  "") {
            printf("Bye %s !\n", $this->name);
        } else {
            echo "Bye !\n";
        }
    }

    public function getName():string {
        return $this->name;
    }
}