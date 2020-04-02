<?php

class Astronaut {
    private $name = "";
    public $snacks = 0;
    public $destination = NULL;
    public $id = 0;

    public function Astronaut(string $name) {
        $this->setName($name);
        
        printf("%s ready for launch !\n", $this->getName());
    }

    public function __destruct() {
        if($this->getDestination() === NULL){
            printf("%s: I may done nothing, but I have %d Mars to eat at least !\n", $this->getName(), $this->getSnacks());
        } else{
            printf("%s: Mission Aborted !\n", $this->getName());
        }
    }

    public function setName(string $name):void {
        $this->name = $name;
    }

    public function getName():string {
        return $this->name;
    }

    public function setId(int $id):void {
        $this->id = $id;
    }

    public function getId():int {
        return $this->id;
    }

    public function setDestination($destination):void {
        $this->destination = $destination;
    }

    public function getDestination() {
        return $this->destination;
    }

    public function getSnacks():int {
        return $this->snacks;
    }

    public function sumSnacks():void {
        $this->snacks = $this->snacks++;
    }

    public function doAction($action=""):void {
        if($this->getDestination() === NULL){
            if($this->getName() === "Matta") {
                if(gettype($action) === "object") {
                    if(get_class($action) === "planet\Mars"){
                        printf("%s: started a mission !\n", $this->getName());
                        $this->setDestination(get_class($action));
                    } else if(get_class($action) === "chocolate\Mars"){
                        printf("%s: is eating mars number %d !\n", $this->getName(), $action::getId());
                        $this->sumSnacks();
                    } 
                } else {
                    if($action === ""){
                        printf("%s: Nothing to do");
                    } else{
                        printf("%s: %s !", $this->getName(), $action);
                    }
                }
            } else {
                printf("%s: %s !", $this->getName(), $action);
            }
        } else {
            printf("%s: Already working !\n", $this->getName());
        }
    }

}

?>