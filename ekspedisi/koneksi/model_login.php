<?php
function cekLogin($user, $pass)
{
   global $koneksi;
   $sql = "SELECT * FROM users WHERE username = '$user'";
   $query = mysqli_query($koneksi, $sql);
   $data = mysqli_fetch_assoc($query);

   $cekData = mysqli_num_rows($query);
   if ($cekData > 0) {
      if ($data['password'] == $pass) {
         if ($data['status'] == 'Aktif') {
            //BIKIN SESSION USERS
            $_SESSION['IdUser'] = $data['id_user'];
            $_SESSION['User']   = $data['username'];
            $_SESSION['Level']  = $data['level'];
            $_SESSION['Status'] = $data['status'];

            if ($data['level'] == 'customer') {
               header("Location: index.php");
            } else {
               header("Location: cp-admin");
            }
         } else {
            notif("Akun anda tidak aktif", 2);
            header("Location: ?page=login");
         }
      } else {
         notif("Password anda tidak sesuai", 0);
         header("Location: ?page=login");
      }
   } else {
      notif("Username tidak terdaftar", 0);
      header("Location: ?page=login");
   }
}
