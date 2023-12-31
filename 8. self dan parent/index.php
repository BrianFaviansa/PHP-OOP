<?php

require_once("robot.php");

$robot1 = new Robot("HIIHAAA", 20);
echo $robot1->getSuara();
$roboth1 = new RobotHewan("Hahiii", 25);
echo $roboth1->getSuara();
echo $roboth1->testing();
echo $roboth1->testing2();

?>