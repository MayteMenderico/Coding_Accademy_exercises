<?php

include_once("AWeapon.php");

class PowerFist extends AWeapon {

    public function PowerFist(string $name){
        parent::AWeapon($name, 8, 50, true);
    }

    public function attack():void {
        echo "SBAM\n";
    }
}

?>