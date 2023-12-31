<?php

require_once("robot.php");

$robot1 = new Robot("HIIHAAA", 20);
$robot2 = new Robot("Ngik ngok", 30);

echo $robot1->getSuara(). "<br>";
echo $robot2->getSuara(). "<br>";
echo $robot1->getBerat(). "<br>";
echo $robot2->getBerat(). "<br>";
$robot1->setBerat(30);
echo $robot1->getBerat(). "<br>";



?>