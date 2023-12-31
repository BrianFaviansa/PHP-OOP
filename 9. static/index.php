<?php

require_once("robot.php");
require_once("hewan.php");
require_once("orang.php");

orang::bersuara();
echo orang::$suara;
?>