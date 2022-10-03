<?php
require_once 'Tugas5.php';
class Segitiga extends bentuk2d{
    public $alas;
    public $tinggi;
    public $sisi;

    public function __construct($alas, $tinggi, $sisi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi = $sisi;
    }

    public function nama(){
        echo "Segitiga";
    }

    public function luas(){
        $luas = 0.5 * $this->alas * $this->tinggi;
        return $luas;
    }

    public function keliling(){
        $keliling = $this->sisi + $this->sisi + $this->sisi;
        return $keliling;
    }

    public function keterangan() {
        echo ' Alas = '.$this->alas.' cm <br/> Tinggi = '.$this->tinggi.' cm <br/> Sisi = '.$this->sisi.' cm'; 
    }


}