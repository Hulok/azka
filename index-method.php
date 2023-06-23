<?php

    class produk {
        public  $kondisi = "kondisi",
                $merek = "merek",
                $nama = "nama",
                $warna = "warna",
                $kecepatan = "kecepatan";
        
        public function __construct($kondisi, $merek, $nama, $warna, $kecepatan){
            $this->kondisi = $kondisi;
            $this->merek = $merek;
            $this->nama = $nama;
            $this->warna = $warna;
            $this->kecepatan = $kecepatan;
        }

        public function inputDataMobil($merek){
            $this->merek=$merek;
        }

        
        public function getKondisiMobil($warna){
            $this->warna=$warna;
        }

        public function getCetak(){
            echo "kondisi mobil :" . $this->kondisi;
            echo "<br>";
            echo "merek mobil :" . $this->merek;
            echo "<br>";
            echo "nama mobil :" . $this->nama;
            echo "<br>";
            echo "nama mobil :" . $this->warna;
            echo "<br>";
            echo "kecepatan : " . $this->kecepatan;
            echo "<br>";
            echo "========================================== <br>";
        }
    }

    $mobil1 = new produk( "maju", "Toyota", "Fortuer", "kucing", "160km/j");
        // $mobil1->kondisi = "maju";
        // $mobil1->merek = "Toyota";
        // $mobil1->nama = "Fortuner";
        // $mobil1->warna = "kucing";
        // $mobil1->kecepatan = "160km/jam";
        // $mobil1-> getCetak();

    $mobil2 = new produk("mundur", "BMW", "X1", "harimau", "-160km/j");
        // $mobil2->kondisi = "mundur";
        // $mobil2->merek = "BMW";
        // $mobil2->nama = "X1";
        // $mobil2->warna = "harimau";
        // $mobil2->kecepatan = "-160km/jam";
        // $mobil2-> getCetak();
    echo $mobil1->getCetak();
    echo $mobil2->getCetak();

