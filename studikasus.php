<?php

class mobil1{
    public $kondisi;
    public $merk;
    public $nama;
    public $warna;
    public $kecepatan;

    public function setkondisi ($kondisi){
        $this->kondisi=$kondisi;
    }
    public function setmerk ($merk){
        $this->merk=$merk;
    }
    public function setnama ($nama){
        $this->nama=$nama;
    }
    public function setwarna ($warna){
        $this->warna=$warna;
    }
    public function setkecepatan ($kecepatan){
        $this->kecepatan=$kecepatan;
    }
    public function Echo(){
        echo "kondisi mobil".$this->kondisi."<br>";
        echo "merk mobil".$this->merk."<br>";
        echo "nama mobil".$this->nama."<br>";
        echo "warna mobil".$this->warna."<br>";
        echo "kecepatan mobil".$this->kecepatan."<br>";
        echo "<br>====================================<br>";
    }
}
$enol = new mobil1;
$enol->setkondisi("diam");
$enol->setmerk("kawasaki");
$enol->setnama("w175");
$enol->setwarna("pink");
$enol->setkecepatan("9999999999");
$enol->Echo();

class mobil2{
    public $kondisi;
    public $merk;
    public $nama;
    public $warna;
    public $kecepatan;

    public function setkondisi ($kondisi){
        $this->kondisi=$kondisi;
    }
    public function setmerk ($merk){
        $this->merk=$merk;
    }
    public function setnama ($nama){
        $this->nama=$nama;
    }
    public function setwarna ($warna){
        $this->warna=$warna;
    }
    public function setkecepatan ($kecepatan){
        $this->kecepatan=$kecepatan;
    }




    public function Echo(){
        echo "kondisi mobil".$this->kondisi."<br>";
        echo "merk mobil".$this->merk."<br>";
        echo "nama mobil".$this->nama."<br>";
        echo "warna mobil".$this->warna."<br>";
        echo "kecepatan mobil".$this->kecepatan."<br>";
        echo "<br>====================================<br>";
    }
}
$enol = new mobil2;
$enol->setkondisi("mundur");
$enol->setmerk("yamaha");
$enol->setnama("aerox");
$enol->setwarna("hitam");
$enol->setkecepatan("100000000000");
$enol->Echo();

