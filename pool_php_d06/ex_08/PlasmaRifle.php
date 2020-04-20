<?php

include_once("AWeapon.php");

class PlasmaRifle extends AWeapon {

    public function PlasmaRifle(string $name){
        parent::AWeapon($name, 5, 21, false);

    }

    public function attack():void {
        echo "PIOU\n";
    }
}

?>