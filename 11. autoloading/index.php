<?php

// require_once("robot.php");
// require_once("hewan.php");
// require_once("orang.php");

// autoload class
spl_autoload_register(function($classname){
    include $classname . ".php";
});

$robot1 = new Robot("tik tik", 12);
echo $robot1->getSuara();
?>