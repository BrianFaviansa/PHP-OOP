<?php
class Robot{
    // property
    public $suara;
    public $berat;

    // konstruktor => otomatis dijalankan saat objek baru dari class dibuat
    public function __construct($suara, $berat) {
        $this->suara = $suara;
        $this->berat = $berat;
    }

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

// inheritance || pewarisan
class RobotHewan extends Robot{
    public function getKekuatan() {
        echo "saya hewan laut bisa berenang";
    }
}
?>