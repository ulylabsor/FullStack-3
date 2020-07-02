<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Tambah Data Users</h1>
</div>

<form action="?page=act-users" method="POST">
   <div class="row">
      <div class="col-md-4">
         <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username">
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
            <input type="text" class="form-control" id="namaDepan" name="namaDepan">
         </div>
      </div>
      <div class="col-md-4">
         <div class="form-group">
            <label for="namaBelakang">Nama Belakang</label>
            <input type="text" class="form-control" id="namaBelakang" name="namaBelakang">
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-2">
         <div class="form-group">
            <input type="radio" id="pria" name="jk" value="Pria"> <label for="pria">Laki - laki</label> &nbsp;&nbsp;
            &nbsp; <input type="radio" id="wanita" name="jk" value="Wanita"> <label for="wanita">Perempuan</label>
         </div>
      </div>
      <div class="col-md-2">
         <label for="level">Level Akun</label>
         <select name="level" id="level" class="form-control">
            <option value="customer">Customer</option>
            <option value="kurir">Kurir</option>
            <option value="admin">Admin</option>
         </select>
      </div>
      <div class="col-md-2">
         <div class="form-group">
            <input type="radio" id="aktif" name="status" value="Aktif"> <label for="aktif">Aktif</label> &nbsp;&nbsp;&nbsp;
            <input type="radio" id="nonaktif" name="status" value="Tidak Aktif"> <label for="nonaktif">Tidak Aktif</label>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-8">
         <button type="submit" name="btn-AddUsers" class="btn btn-primary btn-block mt-4">Simpan</button>
      </div>
   </div>
</form>