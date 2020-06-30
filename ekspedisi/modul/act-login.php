<?php
if (isset($_POST['btnLogin'])) {
   $username     = $_POST['username'];
   $password     = $_POST['password'];

   $cekLogin = cekLogin($username, $password);
}
