<?php
class Buah{
    public $nama;
    public $warna;

    function __construct($nama,$warna){
        $this->nama = $nama;
        $this->warna = $warna;
    }

    function __destruct(){
        echo "Nama Buah : ". $this->nama."<br>";
        echo "Warna Buah : ". $this->warna."<br>";
    }
}

echo "DESCTRUCTOR <br>";

$apel = new Buah("Apel","Merah");
$apel = new Buah("Pisang","Kuning");



?>