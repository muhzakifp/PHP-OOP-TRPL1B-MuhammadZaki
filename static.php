<?php
class MenuMBG{
    public static $lauk = "Ayam basi";
    public static $minuman;

    public static function informasiMBG(){
        echo "Lauk MBG hari ini : ".self::$lauk;
        echo "<br>";
        echo "Minumannya : ".self::$minuman;
    }
}

MenuMBG::$lauk = "Ayam goreng dan sayur kacang "; //statis proporties
MenuMBG::$minuman = "Susu sashet"; // static proporties
MenuMBG::informasiMBG(); // static method

?>