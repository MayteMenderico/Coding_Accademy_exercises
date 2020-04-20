<?php

include_once("Character.php");

class Warrior extends Character {
    protected const CLASSE = "WARRIOR";

    public function Warrior(string $name) {
        parent::Character($name);
        
        $this->life = 100;
        $this->agility = 10;
        $this->strength = 8;
        $this->wit = 3;

        printf("%s: I’ll engrave my name in history!\n", $this->getName());
    }

    public function __destruct(){
        printf("%s: : Aarrg I can’t believe I’m dead...\n", $this->getName());
    }

    public function attack() {
        printf("%s: I’ll crush you with my hammer!\n", $this->getName());
    }

    public function moveRight():void {
        printf("%s: moves right like a bad boy.”\n", $this->getName());
    }

    public function moveLeft():void {
        printf("%s: moves left like a bad boy.”\n", $this->getName());
    }

    public function moveUp():void {
        printf("%s: moves up like a bad boy.”\n", $this->getName());
    }

    public function moveDown():void {
        printf("%s: moves down like a bad boy.”\n", $this->getName());
    }
}

?>