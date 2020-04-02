<?php

class Mars {
    public $id = 0;

    public function Mars() {
        $this->$id++;
    }

    public static function getId():int {
        return $this->$id;
    }
}

?>