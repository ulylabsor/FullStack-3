<?php
$nilaiTugas = 100;
$nilaiUjian = 100;
$totalNilai = ($nilaiTugas + $nilaiUjian) / 2;
echo $totalNilai . "<br>";

if ($totalNilai > 100 or $totalNilai < 0) {
   echo "UNDEFINED";
} else if ($totalNilai >= 80) {
   echo "LULUS TERBAIK";
} else if ($totalNilai >= 60 and $totalNilai < 80) {
   echo "LULUS";
} else if ($totalNilai >= 50 and $totalNilai < 60) {
   echo "CUKUP";
} else {
   echo "ANDA GAGAL";
}

echo "<hr>";


$namaBarang         = "Asus ROG 1070";
$jenisBarang        = "Laptop";
$hargaSatuan        = 2160000;
$jumlahbeli         = 2;
$totalbayar         = $hargaSatuan * $jumlahbeli;

if ($totalbayar >= 100000 and $totalbayar < 150000) {
   $dk = 0.3; //DISKON 30%
   $diskon             = $totalbayar * $dk;
} else if ($totalbayar >= 150000 and $totalbayar < 200000) {
   $dk = 0.4; //DISKON 40%
   $diskon             = $totalbayar * $dk;
} else if ($totalbayar >= 200000 and $totalbayar <= 500000) {
   $dk = 0.5; //DISKON 50%
   $diskon             = $totalbayar * $dk;
} else if ($totalbayar > 500000) {
   $diskon             = 300000;
} else {
   $diskon = 0;
}

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
