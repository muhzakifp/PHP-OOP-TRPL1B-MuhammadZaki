<?php
class MenuMBG implements Iterator{
    private $isiMenu = [];
    private $pointer = 0;

    public function __construct($isiMenu){
        $this->isiMenu = array_values($isiMenu);
    } 

    public function current():mixed{
        return $this->isiMenu[$this->pointer]; 
    }

    public function key():mixed{
        return $this->pointer;
    }

    public function next():void{
        $this->pointer++;
    }

    public function rewind():void{
        $this->pointer =0;
    }

    public function valid():bool{
        return $this->pointer < count($this->isiMenu);
    }
}
    
function tampilkanMenuMBG(iterable $menuMBG){
    foreach($menuMBG as $makananBergizi){
        echo $makananBergizi."<br>";
    }
}
    
$iteratorMenuMBG = new MenuMBG(["Ayam Goreng","Ikan sapu sapu","Sayur kacang","Susu Sashet"]);
echo " Menu MBG hari ini : <br>";
tampilkanMenuMBG($iteratorMenuMBG);
?>