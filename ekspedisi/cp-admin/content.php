<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : '';
switch ($halaman) {
   case '':
      include 'view/dashboard.php';
      break;
   case 'home':
      include 'view/dashboard.php';
      break;
   case 'myprofile':
      include 'view/myprofile.php';
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
   case 'layanan':
      include 'view/layanan.php';
      break;
   case 'add-layanan':
      include 'view/add/add-layanan.php';
      break;
   case 'edit-layanan':
      include 'view/edit/edit-layanan.php';
      break;

      //AKSI FORM
   case 'act-users':
      include 'modul/act-users.php';
      break;
   case 'act-layanan':
      include 'modul/act-layanan.php';
      break;
   case 'act-myprofile':
      include 'modul/act-myprofile.php';
      break;
   case 'act-logout':
      include 'modul/act-logout.php';
      break;
   default:
      echo "Halaman tidak ditemukan";
      break;
}
