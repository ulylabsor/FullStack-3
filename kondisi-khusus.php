<?php
$tahun = date("Y");

echo $tahun;
echo "<br>";

echo ($tahun % 4 == 0) ? "TAHUN KABISAT" : "BUKAN TAHUN KABISAT";
