<?php

class SpaceArena {
    private $registeredMonster = [];
    private $registeredMarines = [];
    private $isRound = false;
    private $marineAttack = 0;
    private $monsterAttack = 0;

    public function enlistMonster(array $enlistMonster):void {
        for($x=0; $x < count($enlistMonster); $x++){
            if(get_parent_class($enlistMonster[$x] != "AMonster")){
                error_log("Stop trying to cheat!");

                for($y = 0; $y < $x - 1;$y++) {
                    echo gettype($enlistMonster[$y]);
                    array_push($this->registeredMonster, $enlistMonster[$y]);
                }
                break;
            } else {
                array_push($this->registeredMonster, $enlistMonster[$x]);
            }
        }
    }

    public function enlistSpaceMarines(array $enlistSpaceMarines):void {
        for($x=0; $x < count($enlistSpaceMarines); $x++){
            if(get_parent_class($enlistSpaceMarines[$x] != "ASpaceMarine")){
                error_log("Stop trying to cheat!");

                for($y = 0; $y < $x - 1;$y++) {
                    array_push($this->registeredMarines, $enlistSpaceMarines[$y]);
                }
                break;
            } else {
                array_push($this->registeredMarines, $enlistSpaceMarines[$x]);
            }
        }
    }

    public function fight():bool {
        if(count($this->registeredMonster) == 0) {
            echo "No monster available to fight.\n";
            return false;
        }

        if(count($this->registeredMarines) == 0) {
            echo "Those cowards ran away.\n";
            return false;
        }

        if($this->checkAlives()){
            return false;
        }

        $warrior = null;
        $toAttack = null;

        if($this->isRound) {
            $warrior = $this->registeredMonster[$this->monsterAttack];
            
            $toAttack = $this->registeredMarines[ rand(0, count($this->registeredMarines)-1) ];
        } else {
            $warrior = $this->registeredMarines[$this->marineAttack];

            $toAttack = $this->registeredMonster[ rand(0, count($this->registeredMonster)-1) ];
        }

        if($warrior->getAp() > $warrior->getWeapon()->getApcost()){
            if($warrior->attack($toAttack)){

                if($this->isRound) {
                    $this->monsterAttack += 1;

                    if($this->monsterAttack >= count($this->registeredMonster)){
                        $this->monsterAttack = 0;
                    }
                } else {
                    $this->marineAttack += 1;

                    if($this->marineAttack >= count($this->registeredMarines)){
                        $this->marineAttack = 0;
                    }
                }

                $this->isRound = !$this->isRound;
            } else {
            }
        } else {
            $warrior->recoverAp();
            $this->isRound = !$this->isRound;
        }

        $this->fight();        

        return true;
    }

    private function checkAlives():bool {
        $witchTeam = null;
        $deathCount = 0;
        if($this->isRound) {
            $witchTeam = $this->registeredMonster;
        } else{
            $witchTeam = $this->registeredMarines;
        }

        for($x = 0; $x < count($witchTeam); $x++){
            if($witchTeam[$x]->getHp() < 0) {
                $deathCount++;
            }
        }

        if($deathCount == count($witchTeam)) {
            printf("The %s are victorious.", $this->isRound ?  "monster": "spaceMarines");
            
            return true;
        }

        return false;
    }
}

?>