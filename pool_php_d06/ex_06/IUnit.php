<?php

interface IUnit {
    public function equip($equip);
    public function attack($typeEnemy);
    public function receiveDamage($ammountDamage);
    public function moveCloseTo($target);
    public function recoverAp($ammoutAp);
}

?>