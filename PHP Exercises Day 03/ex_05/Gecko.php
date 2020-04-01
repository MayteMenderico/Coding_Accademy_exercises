<?php

class Gecko {
    private $name = "";
    private $age = 0;

    function Gecko(string $name = "", int $age = 0) {
        if($name ===  "" || $name === NULL ) {
            echo "Hello !\n";
        } else {
            printf("Hello %s !\n", $name);
        }

        $this->setName($name);
        $this->setAge($age);
    }

    function __destruct() {
        if($this->name !==  "") {
            printf("Bye %s !\n", $this->name);
        } else {
            echo "Bye !\n>";
        }
    }

    public function setName(string $name):void {
        $this->name = $name;
    }

    public function getName():string {
        return $this->name;
    }

    public function setAge(int $age):void {
        $this->age = $age;
    }

    public function getAge():int {
        return $this->age;
    }

    public function status():string {
        switch(true) {
            case ($this->age == 0): return "Unborn Gecko\n"; 
            case ($this->age >= 1 && $this->age <= 2): return "Baby Gecko\n";
            case ($this->age >= 3 && $this->age <= 10): return "Adult Gecko\n";
            case ($this->age >= 11 && $this->age <= 13): return "Old Gecko\n";
            default: return "Impossible Gecko\n";
        }
    }

    public function hello($name=NULL):void {
        $phrase = "";
        if($name === NULL || $name === "" || !is_string($name)) {
            $phrase .= "Hello";
        } else {
            $phrase .= sprintf("Hello %s", $name);
        }

        if($this->getName() !== "") {
            $phrase .= sprintf(", I'm %s !", $this->getName());
        } else{
            $phrase .= " !";
        }

        printf("%s \n", $phrase);
    }
}