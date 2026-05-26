<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Method to set the properties
  function set_details($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  // Method to display the properties
  function get_details() {
    echo "Nama Buah: " . $this->name . ".<br>
    Warna Buah: " . $this->color .".<br>";
  }
}

$apel = new Fruit();
$apel->set_details("Apel", "Merah");
$apel->get_details();

$pisang = new Fruit();
$pisang->set_details("Pisang","Kuning");
$pisang->get_details();
?>