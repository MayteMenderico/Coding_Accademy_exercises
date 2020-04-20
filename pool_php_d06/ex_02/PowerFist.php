<?php

include_once("AWeapon.php");

class PowerFist extends AWeapon {

    public function PowerFist(){
        parent::AWeapon("Power Fist", 8, 50, true);
    }

    public function attack():void {
        echo "SBAM\n";
    }
}

?>