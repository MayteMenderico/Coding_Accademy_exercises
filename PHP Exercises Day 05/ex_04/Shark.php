<?php

include_once("Animal.php");

class Shark extends Animal {
    private $frenzy = false;

    public function Shark(string $name) {
        parent::Animal($name, 0, Animal::FISH);
        echo "A KILLER IS BORN!\n";
    }

    private function setFrenzy(bool $frenzy):void {
        $this->frenzy = $frenzy;
    }

    private function getFrenzy():bool {
        return $this->frenzy;
    }

    public function smellBlood(bool $isFrenzy):void{
        $this->setFrenzy($isFrenzy);
    }

    public function status() {
        if($this->getFrenzy()){
            printf("%s is smelling blood and wants to kill.\n", $this->getName());
        } else {
            printf("%s is swimming peacefully.\n", $this->getName());
        }
    }
}

?>