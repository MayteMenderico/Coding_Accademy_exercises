<?php namespace planet\moon;

class Phobos {
    private $mars = NULL;

    public function __construct($mars="") {
        if(get_class($mars) === "planet\Mars") {
            $this->mars = $mars;
            echo "Phobos place in orbit.\n";
        } else {
            echo "No planet given.\n";
        }
    }

    public function getMars():planet\Mars {
        return $this->mars;
    }
}

?>