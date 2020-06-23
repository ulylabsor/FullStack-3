<?php
$halaman = isset($_GET['page']) ? $_GET['page'] : '';

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

   default:
      echo "Halaman tidak ditemukan";
      break;
}
