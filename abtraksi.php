<?php

abstract class Mobil{
    public $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }

    abstract public function intro();
}

class Audi extends Mobil{
    public function intro(){
        return "Kualitas Jerman ! Mobil ini bermerek ".$this->nama;
    }
}

class Lamborgini extends Mobil{
    public function intro(){
        return "Kualitas Italia ! Mobil ini bermerk ".$this->nama;
    }
}

$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$lambo = new Lamborgini("Lamborghini");
echo $lambo->intro();
echo "<br>";

?>