<?php

class Apothecary {
    public static function heal($soldier) {
        if(get_parent_class($soldier) == "Imperium" || get_class($soldier) == "Imperium") {
            echo "No servant of the Emperor shall fall if I can help it.\n";
        } else {
            echo "The enemies of the Emperor shall be destroyed!\n";
        }
    }
}

class Imperium { }
class SpaceMarine extends Imperium { }
class Heretic { }
Apothecary::heal(new Imperium() ) ;
Apothecary::heal(new SpaceMarine() ) ;
Apothecary::heal(new Heretic() ) ;

?>