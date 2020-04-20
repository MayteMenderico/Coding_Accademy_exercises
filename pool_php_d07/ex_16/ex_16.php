<?php

class Scanner {

    public function scan($soldier) {
        $class = new ReflectionClass($soldier);

        if($class->getNamespaceName() == "Imperium") {
            echo "Praise be, Emperor, Lord.\n";
        } else {
            echo "Xenos spotted.\n";
        }
    }
}

?>