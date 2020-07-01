<?php
if (isset($_POST['btnRegister'])) {
   $username     = $_POST['username'];
   $password     = md5($_POST['password']);
   $jk           = $_POST['jk'];
   $namaDepan    = $_POST['namaDepan'];
   $namaBelakang = $_POST['namaBelakang'];
   $agreement    = $_POST['agreement'];

   if ($agreement == '') {
      notif('Anda hrus menyetujui syarat dan ketentuan yang berlaku', 2);
      header("Location: ?page=register");
   } else {
      $register = registerCustomer($username, $password, $jk, $namaDepan, $namaBelakang);

      if ($register) {
         notif('Selamat anda berhasil registrasi', 1);
         header("Location: ?page=register");
      }
   }
}
