<?php
$server   = 'localhost';
$username = 'root';
$password = 'zxcv';
$namaDB   = 'db_ekspedisi2';

$koneksi = mysqli_connect($server, $username, $password, $namaDB);

if (!$koneksi) {
   die(mysqli_errno($koneksi));
}
