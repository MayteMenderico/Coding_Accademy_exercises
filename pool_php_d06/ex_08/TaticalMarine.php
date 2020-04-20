<?php

include_once("ASpaceMarine.php");
include_once("PlasmaRifle.php");

class TaticalMarine extends ASpaceMarine {
    protected const RECOVER_AP = 12;

    public function TaticalMarine (string $name) {
        parent::ASpaceMarine($name);

        printf("%s on duty.\n", $this->getName());

        $this->equip(new PlasmaRifle("Plasma Rifle"));
        $this->setHp(100);
        $this->setAp(20);
    }

    protected function setHp(int $ammount):void {
        $this->hp = $ammount;

        if($this->getHp() <= 0) {
            printf("%s the Tactical Marine has fallen !\n", $this->getName());
        }
    }
}

?>