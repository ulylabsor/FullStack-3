<?php
if (isset($_POST['btn-UbahProfil'])) {
   $idUser       = $_POST['idUser'];
   $namaDepan    = $_POST['namaDepan'];
   $namaBelakang = $_POST['namaBelakang'];
   $tglLahir     = date("Y-m-d", strtotime($_POST['tglLahir']));
   $jk           = $_POST['jk'];
   $kontak       = $_POST['kontak'];
   $email        = $_POST['email'];
   $alamat       = $_POST['alamat'];

   $foto       = $_FILES['foto']['name'];
   $sizefoto   = $_FILES['foto']['size'];
   $tempfoto   = $_FILES['foto']['tmp_name'];
   $x          = explode(".", $foto);
   $ekstensi   = strtolower(end($x));

   if ($foto == '') {
      $updateProfile = updateProfile($idUser, $namaDepan, $namaBelakang, $tglLahir, $jk, $kontak, $email, $alamat, $foto);
      if ($updateProfile) {
         notif('Selamat anda berhasil mengubah data Profil anda', 1);
         header("Location: ?page=myprofile");
      }
   } else {
      if (in_array($ekstensi, ['png', 'jpg'])) { //CEK FORMAT FILE (Format File yang boleh hanya png)
         if ($sizefoto <= 500000) { //CEK UKURAN FILE (Maksimu 500Kb)
            //Menghapus File yang ada di folder assets/icon
            $tampilProfile = getUsersById($idUser);
            $path = '../Assets/profile/' . $tampilProfile['foto'];
            $hapusFoto = unlink($path);

            $cek = move_uploaded_file($tempfoto, '../Assets/profile/' . $foto);  //UPLOAD FILE KE SYSTEM KITA
            $updateProfile = updateProfile($idUser, $namaDepan, $namaBelakang, $tglLahir, $jk, $kontak, $email, $alamat, $foto);
            if ($updateProfile) {
               notif('Selamat anda berhasil mengubah data profil anda', 1);
               header("Location: ?page=myprofile");
            }
         } else {
            notif('Ukuran file tidak boleh melebihi 500Kb', 2);
            header("Location: ?page=myprofile");
         }
      } else {
         notif('Format file hanya diperbolehkan PNG', 2);
         header("Location: ?page=myprofile");
      }
   }
}


if (isset($_POST['btn-Ubahpassword'])) {
   $idUser          = $_POST['idUser'];
   $username        = $_POST['username'];
   $email           = $_POST['email'];
   $password_lama   = md5($_POST['password_lama']);
   $password_baru   = $_POST['password_baru'];
   $ulangi_password = $_POST['ulangi_password'];

   if ($password_lama == '') {
      $update_user = updatePassword($idUser, $username, $email, $password_lama);

      if ($update_user) {
         notif('Selamat anda berhasil mengubah data profil anda', 1);
         header("Location: ?page=myprofile");
      }
   } else {

      $cekDataUser = cekDataUsers($idUser, $username, $password_lama);
      if ($cekDataUser > 0) {
         if ($password_baru == $ulangi_password) {
            $update_password = updatePassword($idUser, $username, $email, $password_lama, $password_baru);
            if ($update_password) {
               notif('Selamat anda berhasil mengubah data profil anda', 1);
               header("Location: ?page=myprofile");
            }
         } else {
            notif('Password baru yang anda inputkan tidak sama', 2);
            header("Location: ?page=myprofile");
         }
      } else {
         notif('Password lama tidak sesuai. Mohon diulangi', 0);
         header("Location: ?page=myprofile");
      }
   }
}
