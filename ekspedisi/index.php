<?php
session_start();

require 'koneksi/conn.php';
require 'koneksi/model.php';
?>
<!doctype html>
<html lang="en">

<head>
   <?php include 'kepalak.php' ?>
</head>

<body>
   <?php include 'header.php' ?>


   <?php include 'content.php' ?>


   <?php include 'footer.php' ?>


   <!-- JAVASCRIPT -->
   <?php include 'kaki.php' ?>
</body>

</html>