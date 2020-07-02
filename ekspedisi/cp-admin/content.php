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
   case 'add-users':
      include 'view/add/add-users.php';
      break;
   case 'edit-users':
      include 'view/edit/edit-users.php';
      break;

      //AKSI FORM
   case 'act-users':
      include 'modul/act-users.php';
      break;
   case 'act-logout':
      include 'modul/act-logout.php';
      break;
   default:
      echo "Halaman tidak ditemukan";
      break;
}
