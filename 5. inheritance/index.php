<?php

require_once("robot.php");

$robot1 = new Robot("HIIHAAA", 20);

echo $robot1->getSuara(). "<br>";
echo $robot1->getBerat(). "<br>";
$robot1->setBerat(30);
echo $robot1->getBerat(). "<br>";

$roboth1 = new RobotHewan("huamm", 10);
echo $$roboth1->getSuara();
echo $roboth1->getKekuatan();


?>