<?php
class Buah{
    public $nama;
    public $warna;

    function __construct($nama, $warna){
        $this->nama = $nama;
        $this->warna = $warna;
    }

    public function intro(){
        echo "ini adalah buah ".$this->nama." berwarna ".$this->warna."<br>";
    }
}

class Strawberry extends Buah{
    public $lebar;

    public function __construct($nama, $warna,$lebar){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->lebar = $lebar;
    }
    public function intro(){
       echo "ini adalah buah ".$this->nama." berwarna ".$this->warna." dengan lebar ".$this->lebar."<br>";
    }
}

$s = new Strawberry("Strawberry","Merah",50);
$s->intro();
?>