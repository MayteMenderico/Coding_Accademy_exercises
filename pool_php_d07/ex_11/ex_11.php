<?php



spl_autoload_register(function ($class) {
    include_once($class.'.class.php');
});

$random = new Random();
$skill = new Skill();
$gecko = new Gecko([], $skill);

?>