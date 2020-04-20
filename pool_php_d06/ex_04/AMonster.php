<?php

include_once("IUnit.php");
include_once("PowerFist.php");

abstract class AMonster implements IUnit {
    private $name = "";
    private $hp = 0;
    private $ap = 0;
    private $damage = 0;
    private $apcost = 0;
    private $closeby = NULL;
    private $weapon = NULL;

    public function AMonster(string $name){
        $this->name = $name;$this->name = $name;
        $this->weapon = new PowerFist("Power Fist");
    }

    public function getName():string {
        return $this->name;
    }
    
    public function getHp():int {
        return $this->hp;
    }
    
    public function getAp():int {
        return $this->ap;
    }

    private function setAp(int $ap):bool {
        if($this->getHp() == 0) return false;

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

    public function equip($weapon=""){
        if($this->getHp() == 0) return false;

        echo "Monsters are proud and fight with their own bodies.\n";
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
            echo "Error in AMonster. Parameter is not an IUnit.";
        }
    }

    private function receiveDamage(int $ammountDamage):void {
        $this->sumHp( $ammountDamage );
    }

    private function moveCloseTo($enemy):void {
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
            echo "Error in AMonster. Parameter is not an IUnit."; 
        }
    }
    public function recoverAp(float $ammountAp):bool{
        if($this->getHp() == 0) return false;

        if($ammountAp > 7){
            $ammountAp = 7;
        } elseif ($ammountAp < 0) {
            $ammountAp = 0;
        }

        $this->sumAp($ammountAp);
    }
    
}

?>