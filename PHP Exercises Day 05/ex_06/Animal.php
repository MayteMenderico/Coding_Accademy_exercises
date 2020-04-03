<?php
class Animal {
    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;

    private static $alive = 0;
    private static $animalsType = [];
    private $name = "";
    private $legs = 4;
    private $type = 0;

    public function Animal(string $name, int $legs, int $type) {
        $this->name = $name;
        $this->legs = $legs;
        $this->type = $this->getConstant($type);

        $this->sumAlive(1);

        if($this->getAnimalsType($this->getType()) === 0){
            $this->setAnimalsType($this->getType(), 0);
        }
        $this->sumAnimalsType($this->getType(), 1);

        printf("My name is %s and I am a %s!\n", $this->name, $this->type);
    }

    public function setName(string $name) {
        $this->name = $name;
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
    
    public function getAlive():int {
        return self::$alive;
    }

    private function setAlive(int $ammount):void {
        self::$alive = $ammount;
    }

    private function sumAlive(int $ammount): void {
        $this->setAlive( $this->getAlive() + $ammount );
    }

    private function setAnimalsType(string $type, int $ammount):void {
        if(isset(self::$animalsType[$type])){
            self::$animalsType[$type] = $ammount;
        } else {
            self::$animalsType += array($type => $ammount);
        }
    }

    private function getAnimalsType(string $type):int {
        if(isset(self::$animalsType[$type])){
            return self::$animalsType[$type];
        } else {
            return 0;
        }
    }

    private function sumAnimalsType(string $type, int $ammount):void {
        $this->setAnimalsType( $type, $this->getAnimalsType($type) + 1 );
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

    public static function getNumberOfAnimalsAlive():void {
        $phrase = sprintf("There %s currently ", self::getAlive() === 1 ? "is" : "are");

        $counter = 0;
        foreach( self::$animalsType as $key=>$value ){
            $counter += $value;
            
            $type = strtolower($key);
            $animal = $value === 1 ? $type : $type."s";
            
            if($counter === self::getAlive()) {
                $phrase .= sprintf("%d %s ", $value, $animal);
            } else{
                $phrase .= sprintf("%d %s, ", $value, $animal);
            }
        }

        $phrase .= sprintf("alive in our world.");

        echo $phrase;
    }
}
?>