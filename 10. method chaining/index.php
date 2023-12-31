<?php

require_once("robot.php");
require_once("hewan.php");
require_once("orang.php");

// method chaining adalah cara menyambung 1 method ke method lain atau bbrp method sekaligus

$robot1 = new Robot("testing", 10);
$robot1->setSuara("okey dokey")->setBerat(15);
echo $robot1;

?>