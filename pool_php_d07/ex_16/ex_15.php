<?php namespace Imperium;

class Soldier {
    private $name = "";
    private $hp = 50;
    private $attack = 12;

    public function __construct(string $name){
        $this->setName($name);
    }

    public function __toString() {
        $class = new \ReflectionClass($this);
        return sprintf("%s the %s Space Marine : %d HP", $this->getName(), $class->getNamespaceName(), $this->getHp());

    }

    public function setName($name):void {
        $this->name = $name;
    }

    public function getName():string {
        return $this->name;
    }

    public function setHp($hp):void {
        $this->hp = $hp;
    }

    public function getHp():int {
        return $this->hp;
    }

    public function setAttack($attack):void {
        $this->attack = $attack;
    }

    public function getAttack():int {
        return $this->attack;
    }

    public function doDamage($soldier){
        $soldier->setHp( $soldier->getHp() - $this->attack );
    }
}

?>

<?php namespace Chaos;

class Soldier {
    private $name = "";
    private $hp = 70;
    private $attack = 12;

    public function __construct(string $name){
        $this->setName($name);
    }

    public function __toString() {
        $class = new \ReflectionClass($this);
        return sprintf("%s the %s Space Marine : %d HP", $this->getName(), $class->getNamespaceName(), $this->getHp());

    }

    public function setName($name):void {
        $this->name = $name;
    }

    public function getName():string {
        return $this->name;
    }

    public function setHp($hp):void {
        $this->hp = $hp;
    }

    public function getHp():int {
        return $this->hp;
    }

    public function setAttack($attack):void {
        $this->attack = $attack;
    }

    public function getAttack():int {
        return $this->attack;
    }

    public function doDamage($soldier){
        $soldier->setHp( $soldier->getHp() - $this->attack );
    }
}

?>

<?php

$spaceMarine = new \Imperium\Soldier("Gessart");
$chaosSpaceMarine = new \Chaos\Soldier("Ruphen");

echo $spaceMarine.PHP_EOL;
echo $chaosSpaceMarine.PHP_EOL;

$spaceMarine->doDamage($chaosSpaceMarine);

echo $spaceMarine.PHP_EOL;
echo $chaosSpaceMarine.PHP_EOL;

?>