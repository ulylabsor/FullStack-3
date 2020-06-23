<?php
$angka1 = 11;
$angka2 = 5;

// OPERATOR ARITMATIKA
$tambah = $angka1 + $angka2;
$kurang = $angka1 - $angka2;
$kali   = $angka1 * $angka2;
$bagi   = $angka1 / $angka2;
$mod    = $angka1 % $angka2;

echo $tambah . "<br>";
echo $kurang . "<br>";
echo $kali . "<br>";
echo $bagi . "<br>";
echo $mod . "<br>";


echo "<br";
//OPERATOR ASSIGMENT (=)
$data = "OPERATOR ASSIGMENT";
echo "<br";

//OPERATOR PERBANDINGAN
// == (SAMA DENGAN)
// >= (LEBIH DARI SAMA DENGAN)
// <= (KURANG DARI SAMA DENGAN)
// > (LEBIH DARI)
// < (KURANG DARI)
// <>, != (TIDAK SAMA DENGAN)

$cek = 9 != 0; // HASILNYA (TRUE) ATAU (FALSE)
var_dump($cek);
echo "<hr>";


//OPERATOR LOGIKA
//AND &&
//OR ||
//NOT !
//XOR 

$data1 = 9 > 0; //TRUE
$data2 = 13 <> 13; //FALSE

$no = 1;
$cekData = ($data1 and $data2) and ($data1 or $data2); //FALSE
$range = ($no > 1 and $no < 10);
var_dump(!$cekData);
var_dump($range);
echo "<hr>";

//OPERATOR INCREMENT DAN DECREMENT
$x = 5;

echo $x--;
echo "<br>";
echo $x;

echo "<hr>";

$namaBarang         = "Asus ROG 1070";
$jenisBarang        = "Laptop";
$hargaSatuan        = 7000000;
$jumlahbeli         = 2;
$totalbayar         = $hargaSatuan * $jumlahbeli;

$diskon             = $totalbayar * 0.10;
$totalsetelahdiskon = $totalbayar - $diskon;
$bayar              = 13000000;
$kembalian          = $bayar - $totalsetelahdiskon;
echo "Nama Barang         : " . $namaBarang . "<br>";
echo "Jenis Barang        : " . $jenisBarang . "<br>";
echo "Harga Satuan        : Rp." . number_format($hargaSatuan, 0, ',', '.') . "<br>";
echo "Jumlah Beli         : " . $jumlahbeli . "<br>";
echo "Total Bayar         : Rp." . number_format($totalbayar, 0, ',', '.') . "<br>";
echo "Diskon              : Rp." . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total Setelah Diskon: Rp." . number_format($totalsetelahdiskon, 0, ',', '.') . "<br>";
echo "Bayar               : Rp." . number_format($bayar, 0, ',', '.') . "<br>";
echo "Kembalian           : Rp." . number_format($kembalian, 0, ',', '.') . "<br>";
