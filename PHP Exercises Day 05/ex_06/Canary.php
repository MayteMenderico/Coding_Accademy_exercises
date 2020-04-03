<?php

include_once("Animal.php");

class Canary extends Animal {
    private $eggs = 0;

    public function Canary(string $name){
        parent::Animal($name, 2, Animal::BIRD);
        echo "Yellow and smart? Here I am!\n";
    }

    public function getEggsCount():int {
        return $this->eggs;
    }

    public function layEgg():void {
        $this->eggs += 1;
    }
}

?>