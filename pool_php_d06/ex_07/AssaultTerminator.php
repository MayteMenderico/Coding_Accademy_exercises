<?php

include_once("ASpaceMarine.php");
include_once("PowerFist.php");

class AssaultTerminator extends ASapceMarine {
    protected const RESISTANCE = 3;

    public function AssaultTerminator(string $name) {
        parent::ASpaceMarine($name);

        printf("%s has teleported from space.\n", $this->getName());

        $this->equip(new PowerFist("Power Fist"));
        $this->setHp(150);
        $this->setAp(30);
    }

    protected function setHp(int $ammount):void {
        $this->hp = $hp;

        if($this->getHp() <= 0) {
            printf("BOUUUMMMM ! %s has exploded.\n", $this->getName());
        }
    }
}

?>