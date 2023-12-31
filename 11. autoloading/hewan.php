<?php
require_once("robot.php");
class RobotHewan extends Robot{
    public function getKekuatan() {
        echo "saya hewan laut bisa berenang";
    }

    // overriding
    public function getSuara(){
        return "robot hewannya bersuara ....". $this->suara;
    }

}
?>