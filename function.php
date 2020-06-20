<?php

function sayHay($nama, $data = "")
{
   return "Hay " . $nama . " " . $data . "<br>";
   // Hasilnya Hay Budi Selamat Datang di Synapse
}

sayHay("Budi", "Selamat Datang di Synapse");
// echo sayHay("Bariq", "Selamat datang di palembang");

// sayHay("Ana");
// sayHay("Sodiq");
// sayHay("Ibnu");
// sayHay("Juli");


function tambah($angka1, $angka2)
{
   return $angka1 + $angka2;
}

echo tambah(7, 3);
echo "<hr>";
$kali = 5 * tambah(7, 3);
echo $kali;

echo "<hr>";

function hitung($tgl)
{
   $awal = strtotime($tgl);

   $sekarang = time();

   $diff = $sekarang - $awal;

   $output = '
Usia anda adalah ' . floor($diff / (60 * 60 * 24 * 365)) . ' tahun atau<br>
Usia anda adalah ' . floor($diff / (60 * 60 * 24 * 30)) . ' bulan atau<br>
Usia anda adalah ' . floor($diff / (60 * 60 * 24)) . ' hari atau <br>
Usia anda adalah ' . floor($diff / (60 * 60)) . ' Jam atau <br>
Usia anda adalah ' . floor($diff / (60)) . ' Menit <br>
';

   return $output;
}

echo hitung("1995-04-17");
echo "<hr>";


function tanggal_indo($tanggal, $cetak_hari = false)
{
   $hari = [
      1 => "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"
   ];

   $bulan = [
      1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"
   ];

   $pisah = explode(" ", $tanggal);
   $tgl = explode("-", $pisah[0]);

   $tanggal_indo = $tgl[2] . ' ' . $bulan[(int) $tgl[1]] . ' ' . $tgl[0];

   if ($cetak_hari) {
      $day = date('N', strtotime($tanggal));
      return $hari[$day] . ', ' . $tanggal_indo;
   }
   return $tanggal_indo;
}

echo tanggal_indo(date("Y-m-d"), true);
echo "<hr>";


function luasSegitiga($alas, $tinggi)
{
   $luas = ($alas / 2) * $tinggi;
   return $luas;
}

echo luasSegitiga(10, 20);
echo "<br>";
echo luasSegitiga(20, 20);
