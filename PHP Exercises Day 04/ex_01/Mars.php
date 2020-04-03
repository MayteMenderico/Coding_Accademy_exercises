<?php

class Mars 
{
    public static $id = -1;

    public function getId():int 
    {
        self::$id += 1;
        return self::$id;
    }
    
    
}

?>
