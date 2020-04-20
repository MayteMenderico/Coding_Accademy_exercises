<?php

include_once("AMonster.php");

class RadScorpion extends AMonster {
    public static $id = -1;

    public function RadScorpion () {
        parent::AMonster(sprintf("RadScorpion #%d", $this->getId()));

        printf("%s: Crrr !", $this->getName());

        $this->setHp(80);
        $this->setAp(50);
        $this->getWeapon()->setDamage(25);
        $this->getWeapon()->setApcost(8);
    }

    public function __destructor() {
        printf("%s: SPROTCH !", $this->getName());
    }

    public function getId():int 
    {
        self::$id += 1;
        return self::$id;
    }

    public function attack($enemy=""):bool {
        if($this->getHp() == 0) return false;

        $isSucceed = true;
        try {
            if(is_object($enemy)){
                $implemented = class_implements($enemy);
                if(in_array("IUnit", $implemented)){
                    if($this->getWeapon()->getMelee() == true){
                        if(gettype($this->getCloseBy()) == NULL){
                            $isSucceed = false;
                        } else {
                            if($this->getCloseBy() != $enemy) {
                                $isSucceed = false;
                            }
                        }
                    }
                    
                    if($isSucceed) {
                        $this->getWeapon()->attack();
                        $this->sumAp( $this->getWeapon()->getApcost() * -1 );
                        printf("%s attacks %s with a %s.\n", $this->getName(), $enemy->getName(), $this->getWeapon()->getName());

                        $damageAmmount = $this->getWeapon()->getDamage();

                        if(get_parent_class($enemy) == "ASpaceMarine") {
                            if(get_class($enemy) != "AssaultTerminator"){
                                $damageAmmount * 2;
                            }
                        }
                        $enemy->receiveDamage( $damageAmmount );
                    } else {
                        $this->moveCloseTo($enemy);
                    }
                } else {
                    throw new Exception;
                }
            } else {
                throw new Exception;
            }
        } catch(Exception $err) {
            echo "Error in AMonster. Parameter is not an IUnit.";
        }
    }
}

?>