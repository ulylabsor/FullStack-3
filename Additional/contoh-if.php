<?php

// IF ELSE IF
$nyebrang = 'berenang';

if ($nyebrang == 'jembatan') {
   echo "Selamat sampe tujuan menggunakan jembatan";
} else if ($nyebrang == 'perahu') {
   echo "Selamat sampe tujuan menggunakan perahu";
} else if ($nyebrang == 'terbang') {
   echo "Jatuh dari ketinggian";
} else {
   echo "Dia tengggelam";
}


echo "<hr>";

//IF MENGGUNAKAN TERNARY OPERATOR / IF KHUSUS
$solusi = ($nyebrang == 'jembatan') ? 'Selamat sampe tujuan menggunakan jembatan' : 'Tenggelam';

echo $solusi;


echo "<hr>";

//SWITCH CASE
switch ($nyebrang) {
   case 'jembatan':
      echo "Selamat sampe tujuan via jembatan";
      break;

   case 'perahu':
      echo "Selamat sampe tujuan via Perahu";
      break;

   case 'terbang':
      echo "Jatuh dari ketinggian";
      break;

   default:
      echo "Tenggelam";
      break;
}
