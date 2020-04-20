<?php

class Dolly {
    public $age = 0;
    public $animal = "Sheep";
    public $doctor = "Doctor";

    public function Dolly(int $age, string $animal, string $doctor){
        $this->age = $age;
        $this->animal = $animal;
        $this->doctor = $doctor;
    }

    public function __clone() {
        echo "I will survive !\n";
    }
}

function clone_object($object) {
    return clone($object);
}

?>