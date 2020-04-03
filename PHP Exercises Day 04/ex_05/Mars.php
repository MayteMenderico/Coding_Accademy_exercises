<?php namespace chocolate;

class Mars {
    public static $id = -1;

    public function Mars() {
        $this->id++;
    }

    public function getId():int 
    {
        self::$id += 1;
        return self::$id;
    }
}

?>

<?php namespace planet;

class Mars {
    private static $size = 0;

    public function Mars(int $size=0) {
        echo "incitialized";
        $this->setSize($size);
    }

    public function setSize(int $size) {
        $this->size = $size;
    }

    public static function getSize():int {
        return  self::$size;
    }
}
?>