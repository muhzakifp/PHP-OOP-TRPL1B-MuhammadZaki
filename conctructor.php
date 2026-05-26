<?php

class Buah{
    public $nama;
    public $warna;

    function __construct($nama, $warna){
        $this->nama = $nama;
        $this->warna = $warna;
    }

    function info(){
        echo "Nama Buah : ". $this->nama."<br>";
        echo "Warna Buah : ". $this->warna."<br>";
    }
}

echo "CONCTRUCTOR <br>";

$apel = new Buah("Apel", "Merah");
$apel->info();
$pisang = new Buah("Pisang", "Kuning");
$pisang->info();

?>