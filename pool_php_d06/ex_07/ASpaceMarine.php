<?php

include_once("IUnit.php");

abstract class ASpaceMarine implements IUnit {
    protected const RESISTANCE = 0;
    protected const RECOVER_AP = 9;
    private $name = "";
    private $hp = 0;
    private $ap = 0;
    private $damage = 0;
    private $apcost = 0;
    private $closeby = NULL;
    private $weapon = NULL;

    public function ASpaceMarine(string $name){
        $this->name = $name;
    }

    public function getName():string {
        return $this->name;
    }
    
    protected function setHp(int $ammount):void {
        $this->hp = $hp;
    }

    private function sumHp(int $ammount): void {
        $this->setHp( $this->getHp() + $ammount );
    }

    public function getHp():int {
        return $this->hp;
    }
    
    public function getAp():int {
        return $this->ap;
    }

    protected function setAp(int $ap):void {
        $this->ap = $ap;
        if($this->getAp() > 50) {
            $this->ap = 50;
        }
    }

    private function sumAp(int $ap):void {
        $this->setAp( $this->getAp() + $ap );
    }

    public function getDamage(){
        return $this->damage;
    }

    public function getApcost() {
        return $this->apcost;   
    }

    public function getCloseBy() {
        return $this->closeby;
    }

    public function getWeapon(){
        return $this->weapon;
    }

    public function equip($weapon){
        try {
            if(is_object($weapon)){
                if(get_parent_class($weapon) == "AWeapon"){
                    $this->weapon = $weapon;
                    printf("%s has been equipped with a %s.\n", $this->getName(), $weapon->getName());
                }
            } else{
                throw new Exception;
            }
        } catch(Exception $e) {
            echo 'Error in ASpaceMarine. Parameter is not an AWeapon.';
        }
    }

    public function attack($enemy=""):void {
        $isSucceed  = true;
        if($this->getWeapon() != NULL){
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
                            $enemy->receiveDamage( $this->getWeapon()->getDamage() );
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
                echo "Error in ASpaceMarine. Parameter is not an IUnit.";
            }
        } else {
            printf("%s: Hey, this is crazy. I’m not going to fight this empty handed.\n", $this->getName());
        }
    }

    private function moveCloseTo($enemy):variant_mod {
        try {
            if(is_object($enemy)){
                $implemented = class_implements($enemy);
                if(in_array("IUnit", $implemented)){
                    $this->closeby = $enemy;
                    printf("%s is moving closer to %s.\n", $this->getName(), $enemy->getName());
                } else{
                    throw new Exception;
                }
            } else{
                throw new Exception;
            }
        } catch(Exception $e){
            echo "Error in ASpaceMarine. Parameter is not an IUnit."; 
        }
    }

    private function receiveDamage(int $ammountDamage):void {
        $this->sumHp( $ammountDamage );
    }

    public function recoverAp(float $ammountAp):void {
        if($ammountAp > RECOVER_AP){
            $ammountAp = RECOVER_AP;
        } elseif ($ammountAp < 0) {
            $ammountAp = 0;
        }

        $this->sumAp($ammountAp - RESISTANCE);
    }
}

?>