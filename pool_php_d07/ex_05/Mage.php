<?php

include_once("Character.php");

class Mage extends Character {
    protected const CLASSE = "Mage";

    public function Mage(string $name) {
        parent::Character($name);

        $this->life = 70;
        $this->agility = 10;
        $this->strength = 3;
        $this->wit = 10;

        printf("%s: May the gods be with me\n", $this->getName());
    }

    public function __destruct(){
        printf("%s: : By the four gods, I passed away...\n", $this->getName());
    }

    public function attack() {
        printf("%s: Feel the power of my magic!\n", $this->getName());
    }

    public function moveRight():void {
        printf("%s: moves right furtively.\n", $this->getName());
    }

    public function moveLeft():void {
        printf("%s: moves left furtively.\n", $this->getName());
    }

    public function moveUp():void {
        printf("%s: moves up furtively.\n", $this->getName());
    }

    public function moveDown():void {
        printf("%s: moves down furtively.\n", $this->getName());
    }
}

?>