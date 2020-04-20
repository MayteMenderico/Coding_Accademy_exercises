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
}

?>