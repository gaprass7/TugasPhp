<?php
require_once 'Tugas5.php';
class Lingkaran extends bentuk2d{
    public $jari2;

    public function __construct($jari2){
        $this->jari2 = $jari2;
    }

    public function nama(){
        echo "Lingkaran";
    }

    public function luas(){
        $luas = 3.14 * $this->jari2 * $this->jari2;
        return $luas;
    }

    public function keliling(){
        $keliling = 2 * 3.14 * $this->jari2;
        return $keliling;
    }

    public function keterangan() {
        echo ' jari2 = '.$this->jari2. 'cm';
    }
    
}