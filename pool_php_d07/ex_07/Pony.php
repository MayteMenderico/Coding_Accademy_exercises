<?php

class Pony {
    public $gender = "";
    public $name = "";
    public $color = "";

    public function Pony(string $gender, string $name, string $color){
        $this->gender = $gender;
        $this->name = $name;
        $this->color = $color;
        

        echo "Don’t worry, I’m a pony!\n";
    }

    public function __call($method, $args){
        if(!method_exists($this, $method)){
            echo "I don't what to do...";
        }
    }

    public function __destruct(){
        echo "I’m a dead pony.\n";
    }
    
    public function speak():void {
        echo "Hiii hiii hiii\n";
    }
}

?>