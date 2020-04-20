
<?php 

include_once("Skill.class.php");

class Gecko{
    public $friends = [];
    public $skill = NULL;

    public function Gecko(array $friends, Skill $skill){
        $this->friends = $friends;
        $this->skill = $skill;
    }

}

    
?>