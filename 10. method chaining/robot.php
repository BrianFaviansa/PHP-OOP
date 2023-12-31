<?php
class Robot{

    // public, protected, private
    // kalau tidak ditulis otomatis public
    // protected hanya bisa diakses oleh classnya sendiri / yg mewarisi
    // private hanya bisa diakses oleh classnya sendiri 

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
        return $this;
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
    public function __toString(){
        return "ini kelas yg di to string";
    }
}
?>