<?php
interface Pembayaran{
  function bayar($nominal);
}

class Transaksi implements Pembayaran{
  public $barang, $harga;

  function __construct($barang,$harga){
    $this->barang = $barang;
    $this->harga = $harga;
  }

  function informasiBarang(){
    echo "Barang yang dibeli ".$this->barang."<br>";
    echo "Harga Barang ".$this->harga."<br>";
  }

  function bayar($nominal){
    echo "Anda membayar dengan nominal Rp ".$nominal."<br>";

    if($this->harga == $nominal){
      echo "Pembayaran berhasil !";
    }else if ($this->harga < $nominal){
      $kembalian = $nominal - $this->harga;
      echo "Uang anda lebih, dan sisa Rp".$kembalian;
    }else{
      $kurang = $this->harga - $nominal;
      echo "Uang anda kurang Rp ".$kurang;
    }
  }
}

$transaksi = new Transaksi("Musang ",100000);
$transaksi->informasiBarang();
$transaksi->bayar(100000);

?>