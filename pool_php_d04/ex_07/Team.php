<?php

class Team {
    private $name = "";
    private $astronauts = [];

    public function Team(string $name){
        $this->setName($name);
    }

    public function setName(string $name):void {
        $this->name = $name;
    }

    public function getName():string {
        return $this->name;
    }

    public function getAstronauts() {}

    public function add($astronaut):void {
        if(gettype($astronaut) === "object") {
            if(get_class($astronaut) === "Astronaut") {
                array_push($this->astronauts, $astronaut);
            } else {
                printf("%s : Sorry, you are not part of the team.\n", $this->getName());
            }
        } else {
            printf("%s : Sorry, you are not part of the team.\n", $this->getName());
        }
        
    }

    public function remove($astronaut):void {
        if(get_class($astronaut) === "Astronaut"){
            for($x=0; $x < count($this->astronauts); $x++) {
                if($this->astronauts[$x] === $astronaut){
                    array_splice($this->astronauts, $x, 1);
                    break;
                }
            }
        }
    }

    public function countMembers():int {
        return count($this->astronauts);
    }

    public function showMembers():void {
        $phrase = "";

        if(count($this->astronauts) > 0) {
            $phrase = sprintf("%s: ", $this->getName());
        }

        foreach($this->astronauts as $key => $astronaut) {
            if($astronaut->getDestination() === NULL) {
                $phrase .= sprintf("%s on stand by", $astronaut->getName());
            } else {
                $phrase .= sprintf("%s on a mission", $astronaut->getName());
            }

            if($key === count($this->astronauts) - 1 ){
                $phrase .= ".";
            } else {
                $phrase .= ", ";
            }
        }

        echo $phrase."\n";
    }

    public function doActions($action=""):void {
        if($action === ""){
            printf("%s: Nothing to do.\n", $this->getName());
        } else {
            foreach($this->astronauts as $key => $astronaut) {
                $astronaut->doAction($action);
            }
        }
    }
}

?>