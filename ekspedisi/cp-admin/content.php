<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

if ($_SESSION['Level'] == 'admin') {
   //KONTEN LEVEL SEBAGAI ADMIN
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
         echo "<h1 class='text-danger text-center'>Halaman tidak ditemukan</h1>";
         break;
   }
} else {
   //KONTEN LEVEL SEBAGAI KURIR
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
      case 'tracking':
         echo "Halaman Trakcking Kurir";
         break;

         //AKSI FORM
      case 'act-myprofile':
         include 'modul/act-myprofile.php';
         break;
      case 'act-logout':
         include 'modul/act-logout.php';
         break;
      default:
         echo "<h1 class='text-danger text-center'>Halaman tidak ditemukan</h1>";
         break;
   }
}
