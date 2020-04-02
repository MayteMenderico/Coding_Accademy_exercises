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
        $this-$destination = $destination;
    }

    public function getDestination() {
        return $this->destination;
    }
}

?>