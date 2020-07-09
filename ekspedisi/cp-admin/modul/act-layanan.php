<?php
if (isset($_POST['btn-AddLayanan'])) {
   $layanan    = htmlspecialchars($_POST['layanan']);
   $link       = htmlspecialchars($_POST['link']);
   $keterangan = htmlspecialchars($_POST['keterangan']);

   $icon       = $_FILES['icon']['name'];
   $sizeIcon   = $_FILES['icon']['size'];
   $tempIcon   = $_FILES['icon']['tmp_name'];
   $x          = explode(".", $icon);
   $ekstensi   = strtolower(end($x));

   if ($icon == '') {
      $insertLayanan = insertLayanan($keterangan, $icon, $link, $layanan);
      if ($insertLayanan) {
         notif('Selamat anda berhasil menambahkan data layanan', 1);
         header("Location: ?page=layanan");
      }
   } else {
      if (in_array($ekstensi, ['png'])) { //CEK FORMAT FILE (Format File yang boleh hanya png)
         if ($sizeIcon <= 500000) { //CEK UKURAN FILE (Maksimu 500Kb)

            move_uploaded_file($tempIcon, '../Assets/icon/' . $icon);  //UPLOAD FILE KE SYSTEM KITA
            $insertLayanan = insertLayanan($keterangan, $icon, $link, $layanan);
            if ($insertLayanan) {
               notif('Selamat anda berhasil menambahkan data layanan', 1);
               header("Location: ?page=layanan");
            }
         } else {
            notif('Ukuran file tidak boleh melebihi 500Kb', 2);
            header("Location: ?page=layanan");
         }
      } else {
         notif('Format file hanya diperbolehkan PNG', 2);
         header("Location: ?page=layanan");
      }
   }
}

if (isset($_POST['btn-EditLayanan'])) {
   $idLayanan  = $_POST['idLayanan'];
   $layanan    = $_POST['layanan'];
   $link       = $_POST['link'];
   $keterangan = $_POST['keterangan'];

   $icon       = $_FILES['icon']['name'];
   $sizeIcon   = $_FILES['icon']['size'];
   $tempIcon   = $_FILES['icon']['tmp_name'];
   $x          = explode(".", $icon);
   $ekstensi   = strtolower(end($x));

   if ($icon == '') {
      $updateLayanan = updateLayanan($idLayanan, $keterangan, $icon, $link, $layanan);
      if ($updateLayanan) {
         notif('Selamat anda berhasil mengubah data layanan', 1);
         header("Location: ?page=layanan");
      }
   } else {
      if (in_array($ekstensi, ['png'])) { //CEK FORMAT FILE (Format File yang boleh hanya png)
         if ($sizeIcon <= 500000) { //CEK UKURAN FILE (Maksimu 500Kb)
            //Menghapus File yang ada di folder assets/icon
            $tampilLayanan = getLayananById($idLayanan);
            $path = '../Assets/icon/' . $tampilLayanan['icon'];
            $hapusIcon = unlink($path);

            move_uploaded_file($tempIcon, '../Assets/icon/' . $icon);  //UPLOAD FILE KE SYSTEM KITA
            $updateLayanan = updateLayanan($idLayanan, $keterangan, $icon, $link, $layanan);
            if ($updateLayanan) {
               notif('Selamat anda berhasil mengubah data layanan', 1);
               header("Location: ?page=layanan");
            }
         } else {
            notif('Ukuran file tidak boleh melebihi 500Kb', 2);
            header("Location: ?page=layanan");
         }
      } else {
         notif('Format file hanya diperbolehkan PNG', 2);
         header("Location: ?page=layanan");
      }
   }
}

if (isset($_GET['aksi'])) {
   if ($_GET['aksi'] == 'delete') {
      $idLayanan = $_GET['id'];
      //Menghapus File yang ada di folder assets/icon
      $tampilLayanan = getLayananById($idLayanan);
      $path = '../Assets/icon/' . $tampilLayanan['icon'];
      $hapusIcon = unlink($path);

      if ($hapusIcon) {
         // menghapus data di tb_layanan
         $deleteLayanan = deleteLayanan($idLayanan);
         if ($deleteLayanan) {
            notif('Berhasil menghapus data Layanan', 1);
            header("Location: ?page=layanan");
         }
      }
   }
}
