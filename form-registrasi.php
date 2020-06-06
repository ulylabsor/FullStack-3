   <center>
      <form action="proses-registrasi.php" method="POST">
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
                     <input type="text" title="Inputkan NOP" required minlength="3" maxlength="5" placeholder="Silahkan isi NOP" name="nop" size="20">
                  </td>
               </tr>
               <tr>
                  <td width="40%">Program Studi yang dipilih</td>
                  <td width="2%">:</td>
                  <td width="55%">
                     <select name="prodi" placeholder="Pilih Jurusan">
                        <option value="Sistem Komputer">Sistem Komputer</option>
                        <option value="Sistem Komputer">Sistem Komputer</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Analisis">Analisis</option>
                     </select>
                  </td>
               </tr>
               <tr>
                  <td width="40%">Nama Siswa</td>
                  <td width="2%">:</td>
                  <td width="55%">
                     <input type="text" name="nama" size="40" placeholder="Contoh : Budi Sudarsono">
                  </td>
               </tr>
               <tr>
                  <td width="40%">Jenis Kelamin</td>
                  <td width="2%">:</td>
                  <td width="55%">
                     <input type="radio" name="jk" value="Pria"> Pria
                     <input type="radio" name="jk" value="Wanita"> Wanita
                  </td>
               </tr>
               <tr>
                  <td width="40%">Tempat Lahir</td>
                  <td width="2%">:</td>
                  <td width="55%">
                     <input type="text" name="tempatLahir" size="40">
                  </td>
               </tr>
               <tr>
                  <td width="40%">Tanggal Lahir</td>
                  <td width="2%">:</td>
                  <td width="55%">
                     <input type="date" name="tanggalLahir" size="40">
                  </td>
               </tr>
               <tr>
                  <td width="40%">Agama</td>
                  <td width="2%">:</td>
                  <td width="55%">
                     <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghuchu">Konghuchu</option>
                     </select>
                  </td>
               </tr>
               <tr>
                  <td width="40%">Alamat Lengkap</td>
                  <td width="2%">:</td>
                  <td width="55%">
                     <textarea name="alamat" rows="5" cols="20"></textarea>
                  </td>
               </tr>
               <tr>
                  <td width="40%">No. Telepon</td>
                  <td width="2%">:</td>
                  <td width="55%">
                     <input type="text" name="noTelp" size="30">
                  </td>
               </tr>
               <tr>
                  <td width="40%">Email</td>
                  <td width="2%">:</td>
                  <td width="55%">
                     <input type="email" name="email" size="30">
                  </td>
               </tr>
            </tbody>
            <tfoot>
               <tr>
                  <td colspan="2"></td>
                  <!-- <td></td> -->
                  <td>
                     <hr>
                     <button type="submit" name="simpan">SIMPAN</button>
                     <button type="reset" name="hapus">RESET</button>
                  </td>
               </tr>
            </tfoot>
         </table>
      </form>
   </center>