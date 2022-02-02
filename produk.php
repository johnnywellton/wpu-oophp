<?php

class Produk
{
    public
        $judul,
        $penulis,
        $penerbit,
        $harga;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    // public function sayHello()
    // {
    //     return "Hello World!";
    // }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "FIFA21";
// $produk2->tambahProperty = "Testing";
// var_dump($produk2);


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "J.K. Rowling";
$produk3->penerbit = "Shonen";
$produk3->harga = "21";
// var_dump($produk3);

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getLabel();
