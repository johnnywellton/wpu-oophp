<?php

class Produk
{
    public
        $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $jenis;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $jenis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penulis;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $jmlHalaman;
        $this->jenis = $jenis;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->jenis} : {$this->judul} | {$this->getLabel()} (RM{$this->harga})";
        if ($this->jenis == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->jenis == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (RM{$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Mashashi Kishimoto", "Shonen Jump", 21, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 35, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
