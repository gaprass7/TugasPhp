<?php
require_once 'Tugas5.php';
class Persegi extends bentuk2d{
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar){
        $this->p = $panjang;
        $this->l = $lebar;
    }

    public function nama(){
        echo "Persegi";
    }

    public function luas(){
        $luas = $this->p * $this->l;
        return $luas;
    }

    public function keliling(){
        $keliling = 2 * ($this->p + $this->l );
        return $keliling;
    }

    public function keterangan() {
        echo ' Panjang = '.$this->p. 'cm';
        echo ' Lebar = '.$this->l. 'cm';
    }
    
}