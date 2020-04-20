<?php

include_once("Animal.php");

class Shark extends Animal {
    private $frenzy = false;

    public function Shark(string $name) {
        parent::Animal($name, 0, Animal::FISH);
        echo "A KILLER IS BORN!\n";
    }

    protected function setFrenzy(bool $frenzy):void {
        $this->frenzy = $frenzy;
    }

    protected function getFrenzy():bool {
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

    public function eat($animal) {
        if(get_parent_class($animal) == "Animal"){
            if($this->getFrenzy()){
                if($animal != $this) {
                    printf("%s ate a %s named %s.", $this->getName(), $animal->getType(), $animal->getName());
                    $this->setFrenzy(false);
                }
            }
        } else {
            printf("%s : It’s not worth my time.", $this->getName())   ;
        }
    }
}

?>