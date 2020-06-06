<form action="" method="POST">
   <label for="namaBarang">Nama Barang</label>
   <input type="text" name="namaBarang" id="namaBarang">
   <br><br>
   <label for="jenisBarang">Jenis Barang Barang</label>
   <input type="text" name="jenisBarang" id="jenisBarang">
   <br><br>
   <button type="submit" name="proses">Proses</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $namaBarang = $_POST['namaBarang'];
   $jenisBarang = $_POST['jenisBarang'];

   echo $namaBarang;
   echo "<br>";
   echo $jenisBarang;
}
?>