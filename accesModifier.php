<?php
class MenuMBG{
    public $namaMakanan; //public acces
    protected $anggaran; // protected acces
    private $lokasiDapurMBG; //private acces

    public function __construct($namaMakanan){
       $this->namaMakanan = $namaMakanan;
    }

    public function setAnggaran($anggaran){
        $this->anggaran = $anggaran;
    }

    public function setLokasiDapurMBG($lokasi){
        $this->lokasiDapurMBG = $lokasi;
    }

    public function InformasiMBG(){
        echo "Informasi Menu Makanan Bergizi Gratis -- Omkee gass ! <br>";
        echo "Nama makanan : ".$this->namaMakanan."<br>";
        echo "Anggaran yang dikeluarkan Rp  ".$this->anggaran."<br>";
        echo "Lokasi dapur : ".$this->lokasiDapurMBG."<br>";
    }
}

$nasiRames = new MenuMBG("Nasi Rames");
$nasiRames->setAnggaran(500000);
$nasiRames->setLokasiDapurMBG("Gumilir");
$nasiRames->informasiMBG();


?>