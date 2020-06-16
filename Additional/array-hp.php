<?php
$dataHP                =  [
   [
      "imei"              => "443534565765",
      "namaHP"            => "Samsung S7 2019",
      "merk"              => "Samsung",
      "spesifikasi"       => [
         "layar"          => 3.5,
         "ram"            => 8,
         "penyimpanan"    => 64,
         "cameraDepan"    => "12 MP",
         "cameraBelakang" => "32 MP",
         "baterai"        => "5000 Mah",
         "warna"          => "Hitam"
      ],
      "harga" => 3400000
   ],
   [
      "imei"              => "6787687668",
      "namaHP"            => "Iphone 5",
      "merk"              => "Apple",
      "spesifikasi"       => [
         "layar"          => 2.5,
         "ram"            => 4,
         "penyimpanan"    => 32,
         "cameraDepan"    => "8 MP",
         "cameraBelakang" => "12 MP",
         "baterai"        => "5000 Mah",
         "warna"          => "Silver"
      ],
      "harga" => 4450000
   ]
];
?>

<h1>Data Handphone</h1>
<table border="1">
   <tr>
      <th>No</th>
      <th>Imei</th>
      <th>Nama HP</th>
      <th>Merk</th>
      <th>Spesifikasi</th>
      <th>Harga</th>
   </tr>
   <?php
   $no = 1;
   foreach ($dataHP as $data) : ?>
      <tr>
         <td><?= $no++ ?></td>
         <td><?= $data['imei'] ?></td>
         <td><?= $data['namaHP'] ?></td>
         <td><?= $data['merk'] ?></td>
         <td>
            <ul>
               <li>Layar : <?= $data['spesifikasi']['layar'] ?></li>
               <li>RAM : <?= $data['spesifikasi']['ram'] ?> Giga</li>
               <li>Penyimpanan : <?= $data['spesifikasi']['penyimpanan'] ?> Giga</li>
               <li>Kamera Depan : <?= $data['spesifikasi']['cameraDepan'] ?> MegaPixel</li>
               <li>Kamera Belakang : <?= $data['spesifikasi']['cameraBelakang'] ?> MegaPixel</li>
               <li>Baterai : <?= $data['spesifikasi']['baterai'] ?> MAH</li>
               <li>Warna : <?= $data['spesifikasi']['warna'] ?></li>
            </ul>
         </td>
         <td>Rp. <?= number_format($data['harga'], 0, ',', '.') ?></td>
      </tr>
   <?php endforeach ?>
</table>