<?php
// class
class Robot{
    // property
    public $suara = "ngik ngik";
    public $berat = 30;

    // method
    public function bersuara() {
        echo "suara robotnya ". $this->suara;
    }
    public function berat_robot() {
        return $this->berat;
    }
}

$robot1 = new Robot;
// var_dump($robot1);
// echo "suara robotnya ".$robot1->suara . " beratnya " . $robot1->berat. " kg";
$robot1->bersuara();
echo $robot1->berat_robot();
?>