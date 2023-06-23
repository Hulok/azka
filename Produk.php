<?php


// property adalah variable. method adalah function 
class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->judul, $this->penulis";
    }
}

// $produk1 = new Produk ();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Boboiboy";
// var_dump($produk2); new

$produk3 = new Produk();
$produk3->judul = "Boruto";
$produk3->penulis = "azka";
$produk3->penerbit = "orang";
$produk3->harga = 50000;
// var_dump($produk3);
echo "komik : $produk3->judul, $produk3->penulis";
echo "<br>";
echo $produk3->getLabel();