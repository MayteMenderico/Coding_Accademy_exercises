<?php

include_once("Shark.php");

class BlueShark extends Shark {

    public function BlueShark(string $name) {
        parent::Shark($name);
    }

    public function eat($animal) {
        if(gettype($animal) === "object"){
            if(is_subclass_of($animal, "Animal")){
                if($this->getFrenzy()){
                    if($animal->getType() === "fish"){
                        if($animal != $this) {
                            printf("%s ate a %s named %s.\n", $this->getName(), $animal->getType(), $animal->getName());
                            $this->setFrenzy(false);
                        }
                    } else{
                        printf("%s : It’s not worth my time.\n", $this->getName());
                    }                    
                }
            } else {
                printf("%s : It’s not worth my time.\n", $this->getName())   ;
            }
        } else {
            printf("%s : It’s not worth my time.\n", $this->getName())   ;
        }
    }

}

?>