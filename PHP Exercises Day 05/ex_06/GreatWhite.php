<?php

include_once("Shark.php");

class GreatWhite extends Shark {

    public function GreatWhite(string $name) {
        parent::Shark($name);
    }

    public function eat($animal) {
        if(gettype($animal) === "object"){
            if(is_subclass_of($animal, "Animal")){
                if($this->getFrenzy()){
                    if($animal->getType() !== "bird"){
                        if($animal != $this) {
                            printf("%s ate a %s named %s.\n", $this->getName(), $animal->getType(), $animal->getName());
                            $this->setFrenzy(false);

                            if(get_class($animal) === "Shark"){
                                printf("%s : The best meal one could wish for.\n", $this->getName())   ;
                            }
                        }
                    } else{
                        printf("%s : Next time you try to give me that to eat, I’ll eat you instead.\n", $this->getName());
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