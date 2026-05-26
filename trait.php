<?php
trait pesan{
    public function psn1(){
        echo "MBG berguna apa tidak?  ";
    }
    public function psn2(){
        echo "Hai antek-antek asing !!!";
    }
    public function psn3(){
        echo "Saya, akan lawan !!";
    }
}

class Halo{
    use pesan;
}

class Halo2{
    use pesan;
}

$obj = new Halo();
$obj->psn1();
echo "<br>";

$obj = new Halo2();
$obj->psn1();
$obj->psn2();
$obj->psn3();
?>