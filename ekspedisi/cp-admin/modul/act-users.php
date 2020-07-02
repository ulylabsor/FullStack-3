<?php

if (isset($_POST['btn-AddUsers'])) {
   $username     = $_POST['username'];
   $password     = md5($_POST['password']);
   $namaDepan    = $_POST['namaDepan'];
   $namaBelakang = $_POST['namaBelakang'];
   $jk           = $_POST['jk'];
   $levelakun    = $_POST['level'];
   $status       = $_POST['status'];

   $insertUsers = insertUsers($username, $password, $namaDepan, $namaBelakang, $jk, $levelakun, $status);

   if ($insertUsers) {
      notif('Selamat anda berhasil menambahkan data users', 1);
      header("Location: ?page=users");
   }
}


if (isset($_POST['btn-EditUsers'])) {
   $idUser       = $_POST['idUser'];
   $username     = $_POST['username'];
   $password     = md5($_POST['password']);
   $namaDepan    = $_POST['namaDepan'];
   $namaBelakang = $_POST['namaBelakang'];
   $jk           = $_POST['jk'];
   $levelakun    = $_POST['level'];
   $status       = $_POST['status'];

   $updateUsers = updateUsers($idUser, $username, $password, $namaDepan, $namaBelakang, $jk, $levelakun, $status);

   if ($updateUsers) {
      notif('Selamat anda berhasil mengubah data users', 1);
      header("Location: ?page=users");
   }
}

if (isset($_GET['aksi'])) {
   if ($_GET['aksi'] == 'delete') {
      $idUser = $_GET['id'];

      $deleteUsers = deleteUsers($idUser);
      if ($deleteUsers) {
         notif('Berhasil menghapus data users', 1);
         header("Location: ?page=users");
      }
   }
}
