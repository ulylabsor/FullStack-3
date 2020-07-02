<?php
$data = getUsersById($_GET['id']);
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Ubah Data Users</h1>
</div>

<form action="?page=act-users" method="POST">
   <input type="text" class="form-control" hidden name="idUser" value="<?= $data['id_user'] ?>">
   <div class="row">
      <div class="col-md-4">
         <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="<?= $data['username'] ?>">
         </div>
      </div>
      <div class="col-md-4">
         <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-4">
         <div class="form-group">
            <label for="namaDepan">Nama Depan</label>
            <input type="text" class="form-control" id="namaDepan" name="namaDepan" value="<?= $data['nama_depan'] ?>">
         </div>
      </div>
      <div class="col-md-4">
         <div class="form-group">
            <label for="namaBelakang">Nama Belakang</label>
            <input type="text" class="form-control" id="namaBelakang" name="namaBelakang" value="<?= $data['nama_belakang'] ?>">
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-2">
         <div class="form-group">
            <input type="radio" id="pria" name="jk" value="Pria" <?= $data['jk'] == 'Pria' ? 'checked' : '' ?>> <label for="pria">Laki - laki</label> &nbsp;&nbsp;
            &nbsp; <input type="radio" id="wanita" name="jk" value="Wanita" <?= $data['jk'] == 'Wanita' ? 'checked' : '' ?>> <label for="wanita">Perempuan</label>
         </div>
      </div>
      <div class="col-md-2">
         <label for="level">Level Akun</label>
         <select name="level" id="level" class="form-control">
            <option value="customer" <?= $data['level'] == 'customer' ? 'selected' : '' ?>>Customer</option>
            <option value="kurir" <?= $data['level'] == 'kurir' ? 'selected' : '' ?>>Kurir</option>
            <option value="admin" <?= $data['level'] == 'admin' ? 'selected' : '' ?>>Admin</option>
         </select>
      </div>
      <div class="col-md-2">
         <div class="form-group">
            <input type="radio" id="aktif" name="status" value="Aktif" <?= $data['status'] == 'Aktif' ? 'checked' : '' ?>> <label for="aktif">Aktif</label> &nbsp;&nbsp;&nbsp;
            <input type="radio" id="nonaktif" name="status" value="Tidak Aktif" <?= $data['status'] == 'Tidak Aktif' ? 'checked' : '' ?>> <label for="nonaktif">Tidak Aktif</label>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-8">
         <button type="submit" name="btn-EditUsers" class="btn btn-primary btn-block mt-4">Simpan</button>
      </div>
   </div>
</form>