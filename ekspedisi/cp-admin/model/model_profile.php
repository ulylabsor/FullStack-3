<?php
function updateProfile($idUser, $namaDepan, $namaBelakang, $tglLahir, $jk, $kontak, $email, $alamat, $foto)
{
   global $koneksi;
   if ($foto == '') {
      $sqlProfile = "UPDATE profil SET nama_depan='$namaDepan', nama_belakang='$namaBelakang', tgl_lahir='$tglLahir',  jk='$jk', kontak='$kontak',email='$email',alamat='$alamat' WHERE id_userfk='$idUser'";
   } else {
      $sqlProfile = "UPDATE profil SET nama_depan='$namaDepan', nama_belakang='$namaBelakang',tgl_lahir='$tglLahir', jk='$jk', kontak='$kontak',email='$email',alamat='$alamat',foto='$foto' WHERE id_userfk='$idUser'";
   }
   $updateProfile = mysqli_query($koneksi, $sqlProfile);
   if ($updateProfile) {
      return $updateProfile;
   }
}


function updatePassword($idUser, $username, $email, $password_lama, $password_baru = '')
{
   global $koneksi;
   if ($password_lama == '') {
      $sqlprofile = "UPDATE users set username='$username' WHERE id_user='$idUser'";
      $update_username = mysqli_query($koneksi, $sqlprofile);
      if ($update_username) {
         $sqlemail = "UPDATE profil set email='$email' WHERE id_userfk='$idUser'";
         $update_email = mysqli_query($koneksi, $sqlemail);
         return $update_email;
      }
   } else {
      $passBaru = md5($password_baru);
      $sqlprofile = "UPDATE users set username='$username', password='$passBaru' WHERE id_user='$idUser'";
      $update_username = mysqli_query($koneksi, $sqlprofile);
      if ($update_username) {
         $sqlemail = "UPDATE profil set email='$email' WHERE id_userfk='$idUser'";
         $update_email = mysqli_query($koneksi, $sqlemail);
         return $update_email;
      }
   }
}


function cekDataUsers($idUser, $username, $passwordLama)
{
   global $koneksi;
   $sql = "SELECT * FROM users WHERE id_user = '$idUser' and username='$username' and password='$passwordLama'";
   $cek = mysqli_query($koneksi, $sql);
   return mysqli_num_rows($cek);
}
