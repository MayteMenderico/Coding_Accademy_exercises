<?php

class Character {
    protected const CLASSE = "Character";
    protected $name = "";
    protected $life = 0;
    protected $agility = 0;
    protected $strength = 0;
    protected $wit = 0;

    public function Character(string $name) {
        $this->name = $name;
        $this->life = 50;
        $this->agility = 2;
        $this->strength = 2;
        $this->wit = 2;
    }

    public function getClasse():string {
        return self::CLASSE;
    }

    public function getName():string {
        return $this->name;
    }

    public function getLife():int {
        return $this->life;
    }

    public function getAgility():int {
        return $this->agility;
    }

    public function getStrength():int {
        return $this->strength;
    }

    public function getWit():int {
        return $this->wit;
    }


    
} 

?>