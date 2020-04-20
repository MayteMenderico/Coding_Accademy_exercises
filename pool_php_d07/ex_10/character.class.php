<?php

class Character {
    protected static $id = 0;
    private $name = "";
    private $strength = 0;
    private $magic = 0;
    private $intelligence = 0;
    private $life = 100;

    public function Character(string $name="") {
        if($name == NULL || $name == "") {
            self::$id += 1;
            $this->name = sprintf("Character%d", self::$id);
        } else {
            $this->name = $name;
        }
    }

    public function __toString():string {
        return sprintf("My name is %s\n", $this->getName());
    }

    protected function getName():string {
        return $this->name;
    }

    protected function getStrength():int {
        return $this->strength;
    }

    protected function getMagic():int {
        return $this->magic;
    }

    protected function getIntelligence():int {
        return $this->intelligence;
    }

    protected function getLife():int {
        return $this->life;
    }

}

?>