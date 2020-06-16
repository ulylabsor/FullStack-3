<?php
// ARRAY NUMERIC
$biodata = array(
   1 => "Budi Aprisal",
   2 => "127689009",
   3 => "Jln. Swadaya No.100 Palembang",
   4 => "092121221",
   5 => 18,
   6 => 3.9,
   7 => "Wahyu"
);

echo $biodata[3];
echo "<hr>";

//ARRAY ASSOCIATIVE
$biodata = [
   "nama"        => "Budi Aprisal",
   "nim"         => "127689009",
   "alamat"      => "Jln. Swadaya No.100 Palembang",
   "kontak"      => "092121221",
   "umur"        => 18,
   "ipk"         => 3.9,
   "pembingbing" => "Wahyu"
];

var_dump($biodata);

echo $biodata['nama'] . "<br>";
echo $biodata['nim'] . "<br>";
echo $biodata['alamat'] . "<br>";
echo $biodata['kontak'] . "<br>";
echo $biodata['umur'] . "<br>";
echo $biodata['ipk'] . "<br>";
echo $biodata['pembingbing'] . "<br>";

var_dump($_SERVER);
echo $_SERVER['SERVER_NAME'];
