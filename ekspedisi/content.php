<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

if (!empty($_SESSION)) {
   switch ($halaman) {
      case '':
         include 'landing-page.php';
         break;
      case 'home':
         include 'landing-page.php';
         break;
      case 'yes':
         include 'yes.php';
         break;
      case 'reg':
         include 'reg.php';
         break;
      case 'review':
         include 'review.php';
         break;
      case 'contact':
         include 'contact-us.php';
         break;
      case 'cod':
         include 'cod.php';
         break;
      case 'about':
         include 'about.php';
         break;
      case 'register':
         include 'view/view-register.php';
         break;

         //AKSI FORM
      case 'act-register':
         include 'modul/act-register.php';
         break;
      case 'act-logout':
         include 'modul/act-logout.php';
         break;
      default:
         echo "Halaman tidak ditemukan";
         break;
   }
} else {
   switch ($halaman) {
      case '':
         include 'landing-page.php';
         break;
      case 'home':
         include 'landing-page.php';
         break;
      case 'register':
         include 'view/view-register.php';
         break;
      case 'login':
         include 'view/view-login.php';
         break;

         //AKSI FORM
      case 'act-register':
         include 'modul/act-register.php';
         break;
      case 'act-login':
         include 'modul/act-login.php';
         break;
      default:
         echo "Anda harus login terlebih dahulu";
         break;
   }
}
