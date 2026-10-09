<?php

class Produk {
    
    //property
    public string $kode; 
    public string $nama;
    public int $harga;
    public int $stok;
    
    public const pajak = 0.11;
}

//object
$produk = new produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = '10000000';
$produk->stok = '5';

//hitungpajak
$pajak = produk::pajak * 100;
$JumlahPajak = $produk->harga * produk::pajak;

//total
$total = $produk->harga + $JumlahPajak;

//hasil

echo "Produk:". $produk->nama;
echo "<br/>";

echo "Harga:". $produk->harga;
echo "<br/>";

echo "Stok:". $produk->stok;
echo "<br/>";

echo "Pajak:". $pajak. "%";
echo "<br/>";

echo "Total Harga Setelah Pajak: ". $total;