<?php
// ARRAY MULTIDIMENSI
$biodata = [
   [
      "nama"        => "Budi Aprisal",
      "nim"         => "127689009",
      "alamat"      => "Jln. Swadaya No.100 Palembang",
      "kontak"      => "092121221",
      "umur"        => 18,
      "ipk"         => 3.9,
      "pembimbing"  => ["Wahyu", "Yanto"]
   ],
   [
      "nama"        => "Raffi Ahmad",
      "nim"         => "1232345435",
      "alamat"      => "Jln. Letnan Murod 198",
      "kontak"      => "543543534",
      "umur"        => 23,
      "ipk"         => 3.4,
      "pembimbing"  => ["Eldi", "Bariq"]
   ],
   [
      "nama"        => "Joko Susilo",
      "nim"         => "45654656",
      "alamat"      => "Jln. Palembang",
      "kontak"      => "45645",
      "umur"        => 26,
      "ipk"         => 3.1,
      "pembimbing"  => ["Bambang", "Jeni"]
   ],
   [
      "nama"        => "Reni",
      "nim"         => "65676",
      "alamat"      => "Jln. Palu",
      "kontak"      => "64645",
      "umur"        => 26,
      "ipk"         => 3.1,
      "pembimbing"  => ["Bambang", "Jeni"]
   ]
];

echo $biodata[0]['nama'];
echo $biodata[0]['nim'];
echo $biodata[0]['alamat'];
echo $biodata[0]['kontak'];
echo $biodata[0]['umur'];
echo $biodata[0]['ipk'];
echo $biodata[0]['pembimbing'][0];
echo "<hr>";
echo $biodata[1]['nama'];
echo $biodata[1]['nim'];
echo $biodata[1]['alamat'];
echo $biodata[1]['kontak'];
echo $biodata[1]['umur'];
echo $biodata[1]['ipk'];
echo $biodata[1]['pembimbing'][0];
echo "<hr>";
echo $biodata[2]['nama'];
echo $biodata[2]['nim'];
echo $biodata[2]['alamat'];
echo $biodata[2]['kontak'];
echo $biodata[2]['umur'];
echo $biodata[2]['ipk'];
echo $biodata[2]['pembimbing'][0];
echo "<hr>";

// PERULANGAN FOR 
for ($i = 0; $i < count($biodata); $i++) {
   echo $biodata[$i]['nama'] . "<br>";
   echo $biodata[$i]['nim'] . "<br>";
   echo $biodata[$i]['alamat'] . "<br>";
   echo $biodata[$i]['kontak'] . "<br>";
   echo $biodata[$i]['umur'] . "<br>";
   echo $biodata[$i]['ipk'] . "<br>";
   echo $biodata[$i]['pembimbing'][0];
   echo $biodata[$i]['pembimbing'][1];
   echo "<hr>";
}

//PERULANGAN FOREACH
foreach ($biodata as $data) {
   echo $data['nama'] . "<br>";
   echo $data['nim'] . "<br>";
   echo $data['alamat'] . "<br>";
   echo $data['kontak'] . "<br>";
   echo $data['umur'] . "<br>";
   echo $data['ipk'] . "<br>";
   echo $data['pembimbing'][0];
   echo $data['pembimbing'][1];
   echo "<hr>";
}
