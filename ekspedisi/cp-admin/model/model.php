<?php
require 'model_users.php';

function notif($pesan, $jenis)
{
   if ($jenis == 1) {
      $_SESSION['notif'] = "<div class='alert alert-success'>$pesan</div>";
   } elseif ($jenis == 2) {
      $_SESSION['notif'] = "<div class='alert alert-warning'>$pesan</div>";
   } else {
      $_SESSION['notif'] = "<div class='alert alert-  '>$pesan</div>";
   }
}
