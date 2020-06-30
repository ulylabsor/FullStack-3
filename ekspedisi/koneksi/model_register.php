<?php
function registerCustomer($username, $password, $jk, $namaDepan, $namaBelakang)
{
   global $koneksi;
   $sqlUsers = "INSERT INTO users (username, password, level, status,created_at) VALUES ('$username','$password', 'customer','aktif',CURRENT_TIMESTAMP())";

   $insertUsers = mysqli_query($koneksi, $sqlUsers);
   $idUser = mysqli_insert_id($koneksi);
   if ($insertUsers) {
      $sqlProfil = "INSERT INTO profil (nama_depan, nama_belakang, jk, id_userfk) VALUES ('$namaDepan','$namaBelakang','$jk','$idUser')";
      $insertProfil = mysqli_query($koneksi, $sqlProfil);
      return $insertProfil;
   }
}
