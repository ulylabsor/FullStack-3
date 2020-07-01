<?php
if (isset($_POST['btnLogin'])) {
   $username     = $_POST['username'];
   $password     = md5($_POST['password']);

   cekLogin($username, $password);
}
