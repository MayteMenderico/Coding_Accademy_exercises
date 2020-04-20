<?php

class Pony {
    private $gender = "";
    private $name = "";
    private $color = "";

    public function Pony(string $gender, string $name, string $color){
        $this->gender = $gender;
        $this->name = $name;
        $this->color = $color;
        

        echo "Don’t worry, I’m a pony!\n";
    }

    public function __call($method, $args){
        if(!method_exists($this, $method)){
            echo "I don't what to do...\n";
        }
    }

    public function __set($attr, $value){
        if(!isset($attr)){
            printf("There is no attribute: %s", $attr);
        } else {
            $checkVariable = new ReflectionProperty($this, $attr);
            if($checkVariable->isPrivate()){
                echo "It’s not right to set a private attribute!\n";
            } else{
                $this->$$attr = $value;
            }
        }
    }

    public function __get($attr) {
        if(!isset($attr)){
            printf("There is no attribute: %s", $attr);
        } else {
            $checkVariable = new ReflectionProperty($this, $attr);
            if($checkVariable->isPrivate()){
                echo "It’s not right to get a private attribute!\n";
                return false;
            } 
            
            return $this->$$attr;
        }
    }

    public function __destruct(){
        echo "I’m a dead pony.\n";
    }

    /*public function setGender(string $gender):void {
        $this->gender = $gender;
    }

    public function getGender():string {
        return $this->gender;
    }
    public function setName(string $name):void {
        $this->name = $name;
    }

    public function getName():string {
        return $this->name;
    }
    public function setColor(string $color):void {
        $this->color = $color;
    }

    public function getColor():string {
        return $this->color;
    } */
    
    public function speak():void {
        echo "Hiii hiii hiii\n";
    }
    

}


?>