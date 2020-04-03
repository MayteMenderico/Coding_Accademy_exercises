<?php

include_once("Animal.php");

class Cat extends Animal {
    private $color = "orange";
    
    public function Cat(string $name, string $color=""){
        parent::Animal($name, 4, Animal::MAMMAL);
        $this->setName($name);
        $this->setColor($color);
        
        printf("%s: MEEEOOWWWW\n", $this->getName());
        
    }

    public function setColor(string $color) {
        if($color !== ""){
            $this->color = $color;
        }
    }

    public function getColor():string {
        return $this->color;
    }

    public function meow():void {
        printf("%s the %s kitty is meowing.\n", $this->getName(), $this->getColor());
    }
}
?>