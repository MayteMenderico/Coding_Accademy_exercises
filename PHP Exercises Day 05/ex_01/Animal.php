<?php
class Animal {
    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;

    private $name = "";
    private $legs = 4;
    private $type = 0;

    public function Animal(string $name, int $legs, int $type) {
        $this->name = $name;
        $this->legs = $legs;
        $this->type = $this->getConstant($type);

        printf("My name is %s and I am a %s!\n", $this->name, $this->type);
    }

    public function getName():string {
        return $this->name;
    }

    public function getLegs():int {
        return $this->legs;
    }

    public function getType():string {
        return $this->type;
    }    

    private function getConstant($search):string {
        $const = "";

        foreach( $this->getConstants() as $key=>$value){
            if($search === $value) {
                $const = $key;
            }
        }

        return strtolower($const);
    }

    private function getConstants() {
        $reflectionClass = new ReflectionClass($this);
        return $reflectionClass->getConstants();
    }
}
?>



