<?php

class Gecko {
    private $name = "";
    private $age = 0;
    private $energy = 100;

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

    public function setEnergy(int $energy):void {
        if($energy < 0){
            $this->energy = 0;
        } else if ($energy > 100){
            $this->energy = 100;
        } else {
            $this->energy = $energy;
        }
        
    }

    public function getEnergy():int {
        return $this->energy;
    }

    private function sumEnergy(int $energy) {
        $this->setEnergy($this->getEnergy() + $energy);
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

    public function eat(string $food=""):void {
        if(preg_match_all('/[M|m][a-z|A-Z]*/m', $food, $matches, PREG_SET_ORDER, 0)){
            echo "Yummy!";
            self::sumEnergy(10);
        } else if (preg_match_all('/[V|v][a-z|A-Z]*/m', $food, $matches, PREG_SET_ORDER, 0)) {
            echo "Erk!";
            self::sumEnergy(-10);
        } else {
            echo "I can't eat this.";
        }

        echo "\n";
    }
}