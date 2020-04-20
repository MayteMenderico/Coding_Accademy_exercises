<?php namespace planet\moon;

class Phobos {
    private $mars = NULL;

    public function Phobos($mars="") {
        echo "INITIALIZING";
        if(get_class($mars) === "planet\Mars") {
            $this->mars = $mars;
            echo "Phobos place in orbit.";
        } else {
            echo "No planet given.";
        }
    }

    public function getMars():planet\Mars {
        return $this->mars;
    }
}

?>