<?php

include_once("AMonster.php");

class RadScorpion extends AMonster {
    protected const RECOVER_HP = 10;
    public static $id = -1;

    public function RadScorpion () {
        parent::AMonster(sprintf("RadScorpion #%d", $this->getId()));

        printf("%s: Crrr !", $this->getName());

        $this->setHp(170);
        $this->setAp(20);
        $this->getWeapon()->setDamage(60);
        $this->getWeapon()->setApcost(20);
    }

    public function __destructor() {
        printf("%s: SPROTCH !", $this->getName());
    }

    public function getId():int 
    {
        self::$id += 1;
        return self::$id;
    }

    protected function setHp(int $ammount) {
        $this->hp = $ammount;

        if($this->getHp() > 170){
            $this->hp = 170;
        }
    }
}

?>