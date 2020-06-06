<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $nop          = $_POST['nop'];
   $prodi        = $_POST['prodi'];
   $nama         = $_POST['nama'];
   $jk           = $_POST['jk'];
   $tempatLahir  = $_POST['tempatLahir'];
   $tanggalLahir = $_POST['tanggalLahir'];
   $agama        = $_POST['agama'];
   $alamat       = $_POST['alamat'];
   $noTelp       = $_POST['noTelp'];
   $email        = $_POST['email']; ?>

   <center>
      <table border="0" width="80%">
         <h4>
            <hr>Formulir Pendaftaran Mahasiswa Baru
            <hr>
         </h4>
         <tbody>
            <tr>
               <td width="40%">No. Pendaftaran</td>
               <td width="2%">:</td>
               <td width="55%">
                  <?= $nop ?>
               </td>
            </tr>
            <tr>
               <td width="40%">Program Studi yang dipilih</td>
               <td width="2%">:</td>
               <td width="55%">
                  <?= $prodi ?>
               </td>
            </tr>
            <tr>
               <td width="40%">Nama Siswa</td>
               <td width="2%">:</td>
               <td width="55%">
                  <?= $nama ?>
               </td>
            </tr>
            <tr>
               <td width="40%">Jenis Kelamin</td>
               <td width="2%">:</td>
               <td width="55%">
                  <?= $jk ?>
               </td>
            </tr>
            <tr>
               <td width="40%">Tempat Lahir</td>
               <td width="2%">:</td>
               <td width="55%">
                  <?= $tempatLahir ?>
               </td>
            </tr>
            <tr>
               <td width="40%">Tanggal Lahir</td>
               <td width="2%">:</td>
               <td width="55%">
                  <?= $tanggalLahir ?>
               </td>
            </tr>
            <tr>
               <td width="40%">Agama</td>
               <td width="2%">:</td>
               <td width="55%">
                  <?= $agama ?>
               </td>
            </tr>
            <tr>
               <td width="40%">Alamat Lengkap</td>
               <td width="2%">:</td>
               <td width="55%">
                  <?= $alamat ?>
               </td>
            </tr>
            <tr>
               <td width="40%">No. Telepon</td>
               <td width="2%">:</td>
               <td width="55%">
                  <?= $noTelp ?>
               </td>
            </tr>
            <tr>
               <td width="40%">Email</td>
               <td width="2%">:</td>
               <td width="55%">
                  <?= $email ?>
               </td>
            </tr>
         </tbody>
         <tfoot>
            <tr>
               <td colspan="2"></td>
               <!-- <td></td> -->
               <td>
                  <hr>
                  <a href="form-registrasi.php">RESET</a>
               </td>
            </tr>
         </tfoot>
      </table>
   </center>
<?php
}
