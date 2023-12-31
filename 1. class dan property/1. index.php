<?php
// class
class Robot{
    // property
    public $suara = "ngik ngik";
    public $berat = 30;
}

$robot1 = new Robot;
// var_dump($robot1);
echo "suara robotnya ".$robot1->suara . " beratnya " . $robot1->berat. " kg";
?>