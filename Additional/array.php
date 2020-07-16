<?php
// variabel
$nama = 'Budi';
$umur = 12;
$alamat = 'Palembang';

$nama2 = "liwanda";
$umur2 = 13;
$alamat = 'palembang';


//array numeric
$data1 = [1 => 'budi', 12, 'Palembang'];

echo $data1[1];
echo "<hr>";

//array associative
$data2 = [
   'nama'   => 'budi',
   'umur'   => 12,
   'alamat' => 'Palembang'
];

echo $data2['nama'];
echo "<hr>";

// Arrayy Multi dimensi
$data3 = [
   0 => [
      'nama'   => 'budi',
      'umur'   => 12,
      'alamat' => 'Palembang'
   ],
   1 => [
      'nama'   => 'Liwanda',
      'umur'   => 13,
      'alamat' => 'Palembang'
   ],
   2 => [
      'nama'   => 'Sandi',
      'umur'   => 14,
      'alamat' => 'Palembang'
   ]
];

// echo $data3[1]['nama'];
// echo $data3[1]['umur'];
// echo $data3[1]['alamat'];

for ($i = 0; $i < count($data3); $i++) {
   echo $data3[$i]['nama'] . "<br>";
   echo $data3[$i]['umur'] . "<br>";
   echo $data3[$i]['alamat'] . "<br>";
}


echo "<hr>";

foreach ($data3 as $key => $value) {
   echo $key . ' = ' . $value['nama'] . "<br>";
   echo $key . ' = ' . $value['umur'] . "<br>";
   echo $key . ' = ' . $value['alamat'] . "<br>";
}
