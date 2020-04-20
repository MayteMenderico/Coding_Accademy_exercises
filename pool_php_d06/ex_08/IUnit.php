<?php

interface IUnit {
    public function equip($equip);
    public function attack($typeEnemy);
    public function receiveDamage(int $ammountDamage):void ;
    public function moveCloseTo($target);
    public function recoverAp():bool ;
}

?>