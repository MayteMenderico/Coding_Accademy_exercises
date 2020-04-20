<?php

abstract class AWeapon {
    private $name = "";
    private $apcost = 0;
    private $damage = 0;
    private $melee = false;
    
    public function AWeapon($name, $apcost, $damage, $melee = false) {
        try {
            $this->setName($name);
            $this->setApcost($apcost);
            $this->setDamage($damage);
            $this->setMelee($melee);
        } catch (Exception $e) {
            echo "Error in AWeapon constructor. Bad parameters.\n";
        }
    }  

    public function setName(string $name):void {
        $this->name = $name;
    }

    public function getName():string {
        return $this->name;
    }

    public function setApcost($apcost):void {
        if(gettype($apcost) == "integer"){
            $this->apcost = $apcost;
        } else {
            throw new Exception;
        }
        
    }

    public function getApcost():int {
        return $this->apcost;
    }

    public function setDamage(int $damage):void {
        if(gettype($damage) == "integer"){
            $this->damage = $damage;
        } else {
            throw new Exception;
        }
    }

    public function getDamage():int {
        return $this->damage;
    }

    public function setMelee(bool $melee):void {
        $this->melee = $melee;
    }

    public function getMelee():bool {
        return $this->melee;
    }
}

?>