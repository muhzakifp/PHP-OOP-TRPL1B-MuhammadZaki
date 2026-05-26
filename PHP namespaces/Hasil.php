<?php
require 'Admin.php';
require 'pelanggan.php';

$admin = new \Admin\User("Bahlil");
$pelanggan = new \pelanggan\User("Owi");
$admin->informasi();
echo"<br>";
$pelanggan->informasi();

?>