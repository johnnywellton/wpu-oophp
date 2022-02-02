<?php

class Produk
{
    public
        $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penulis;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen Jump", 21);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 35);
$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
