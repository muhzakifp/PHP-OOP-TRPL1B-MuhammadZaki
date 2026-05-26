<?php
namespace admin;
class User{
    public $nama;

    public function __construct($nama){
        $this->nama = $nama;
    }
    public function informasi(){
        echo $this->nama." adalah admin ! "; 
    }
}

?>