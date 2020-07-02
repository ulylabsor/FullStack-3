<?php
function getUsers()
{
   global $koneksi;
   $users = [];
   $sql = "SELECT * FROM users inner join profil on users.id_user=profil.id_userfk order by level desc";
   $query = mysqli_query($koneksi, $sql);
   while ($data = mysqli_fetch_assoc($query)) {
      $users[] = $data;
   }
   return $users;
}

function getUsersById($idUser)
{
   global $koneksi;
   $sql = "SELECT * FROM users inner join profil on users.id_user=profil.id_userfk Where id_user='$idUser' order by level desc";
   $query = mysqli_query($koneksi, $sql);
   $data = mysqli_fetch_assoc($query);
   return $data;
}

function insertUsers($user, $pass, $namaDepan, $namaBelakang, $jk, $level, $status)
{
   global $koneksi;
   $sqlUsers = "INSERT INTO users (username, password, level, status) VALUES ('$user','$pass','$level','$status')";
   $insertUsers = mysqli_query($koneksi, $sqlUsers);
   $idUser = mysqli_insert_id($koneksi);

   if ($insertUsers) {
      $sqlProfil = "INSERT INTO profil (nama_depan, nama_belakang, jk, id_userfk) VALUES ('$namaDepan','$namaBelakang','$jk','$idUser')";
      $insertProfil = mysqli_query($koneksi, $sqlProfil);
      return $insertProfil;
   }
}

function updateUsers($idUser, $user, $pass, $namaDepan, $namaBelakang, $jk, $level, $status)
{
   global $koneksi;
   $sqlUsers = "UPDATE users SET username='$user', password='$pass',level ='$level',status='$status' WHERE id_user='$idUser'";
   $updateUsers = mysqli_query($koneksi, $sqlUsers);
   if ($updateUsers) {
      $sqlProfil = "UPDATE profil SET nama_depan='$namaDepan',nama_belakang='$namaBelakang',jk='$jk' WHERE id_userfk = '$idUser'";
      $updateProfil = mysqli_query($koneksi, $sqlProfil);
      return $updateProfil;
   }
}


function deleteUsers($idUser)
{
   global $koneksi;
   $sqlUsers = "DELETE FROM users WHERE id_user='$idUser'";
   $deleteUsers = mysqli_query($koneksi, $sqlUsers);

   return $deleteUsers;
}
