<?php

include_once("AMonster.php");

class SuperMutant extends AMonster {
    protected const RECOVER_HP = 10;
    public static $id = 0;

    public function SuperMutant () {
        $name = sprintf("SuperMutant #%d", $this->getId());
        parent::AMonster( $name );

        printf("%s: Roaarrr !\n", $this->getName());

        $this->setHp(170);
        $this->setAp(20);
        $this->getWeapon()->setDamage(60);
        $this->getWeapon()->setApcost(20);
    }

    public function __destructor() {
        printf("%s: Urgh !", $this->getName());
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