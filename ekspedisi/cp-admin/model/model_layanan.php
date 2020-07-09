<?php
function getLayanan($cari = '')
{
   global $koneksi;
   $layanan = [];
   if ($cari == '') {
      $sql = "SELECT * FROM tb_layanan";
   } else {
      $sql = "SELECT * FROM tb_layanan WHERE layanan like '%$cari%' OR keterangan like '%$cari%' or link like '%$cari%'";
   }
   $query = mysqli_query($koneksi, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $layanan[] = $data;
   }
   return $layanan;
}

function getLayananById($idLayanan)
{
   global $koneksi;
   $sql = "SELECT * FROM tb_layanan Where id_layanan='$idLayanan'";
   $query = mysqli_query($koneksi, $sql);
   $data = mysqli_fetch_assoc($query);
   return $data;
}


function insertLayanan($keterangan, $icon, $link, $layanan)
{
   global $koneksi;
   if ($icon == '') {
      $sqlLayanan = "INSERT INTO tb_layanan(keterangan,link,layanan) values ('$keterangan,','$link','$layanan')";
   } else {
      $sqlLayanan = "INSERT INTO tb_layanan(keterangan,link,layanan,icon) values ('$keterangan,','$link','$layanan','$icon')";
   }
   $insertLayanan = mysqli_query($koneksi, $sqlLayanan);
   return $insertLayanan;
}


function updateLayanan($idLayanan, $keterangan, $icon, $link, $layanan)
{
   global $koneksi;
   if ($icon == '') {
      $sqlLayanan = "UPDATE tb_layanan SET keterangan='$keterangan', link='$link', layanan='$layanan' WHERE id_layanan='$idLayanan'";
   } else {
      $sqlLayanan = "UPDATE tb_layanan SET keterangan='$keterangan', link='$link', layanan='$layanan', icon='$icon' WHERE id_layanan='$idLayanan'";
   }
   $updateLayanan = mysqli_query($koneksi, $sqlLayanan);
   return $updateLayanan;
}


function deleteLayanan($idLayanan)
{
   global $koneksi;
   $sqlLayanan = "DELETE FROM tb_layanan WHERE id_layanan='$idLayanan'";
   $deleteLayanan = mysqli_query($koneksi, $sqlLayanan);

   return $deleteLayanan;
}
