<?php
// class
class Robot{
    // property
    public $suara;
    public $berat;

    // konstruktor => otomatis terpanggil saat class nya dibuat objek

    // get dan set
    public function setSuara($suara) {
        $this->suara = $suara;
    }
    public function getSuara() {
        return $this->suara;
    }
    public function setBerat($berat) {
        $this->berat = $berat;
    }
    public function getBerat() {
        return $this->berat;
    }

}

$robot1 = new Robot;
$robot2 = new Robot;

$robot1->setSuara("HIIHAAA");
echo $robot1->getSuara();
$robot2->setSuara("Ngik ngok");
echo $robot2->getSuara();

?>