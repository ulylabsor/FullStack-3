<?php
function getUsers()
{
   global $koneksi;
   $users = [];
   $sql = "SELECT * FROM users inner join profil on users.id_user=profil.id_userfk";
   $query = mysqli_query($koneksi, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $users[] = $data;
   }
   return $users;
}
