<?php
function getLayanan()
{
   global $koneksi;
   $layanan = [];
   $sql = "SELECT * FROM tb_layanan";
   $query = mysqli_query($koneksi, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $layanan[] = $data;
   }
   return $layanan;
}
