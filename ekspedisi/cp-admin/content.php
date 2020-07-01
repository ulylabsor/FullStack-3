<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : '';
switch ($halaman) {
   case '':
      include 'view/dashboard.php';
      break;
   case 'home':
      include 'view/dashboard.php';
      break;
   case 'users':
      include 'view/users.php';
      break;

      //AKSI FORM
   case 'act-logout':
      include 'modul/act-logout.php';
      break;
   default:
      echo "Halaman tidak ditemukan";
      break;
}
