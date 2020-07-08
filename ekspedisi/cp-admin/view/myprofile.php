<?php
$data = getUsersById($_SESSION['IdUser']);
?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Edit Profile &nbsp;&nbsp;</h1>
</div>
<?php echo (isset($_SESSION['notif'])) ? $_SESSION['notif'] : '';
unset($_SESSION['notif'])
?>
<nav class="mt-4">
   <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">My Profile</a>
      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Ubah Password</a>
   </div>
</nav>

<div class="tab-content" id="nav-tabContent">
   <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <form action="?page=act-myprofile" method="POST" enctype="multipart/form-data">
         <input type="text" name="idUser" id="idUser" hidden class="form-control" value="<?= $data['id_user'] ?>">
         <div class="row mt-4">
            <div class="col-md-3">
               <div class="card rounded-0">
                  <div class="card-body p-2">
                     <img src="../Assets/profile/<?= $data['foto'] ?>" alt="..." class="img-thumbnail" width="300">
                     <input type="file" name="foto">

                  </div>
               </div>
            </div>
            <div class="col-md-9">

               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="namaDepan">Nama Depan</label>
                        <input type="text" name="namaDepan" id="namaDepan" class="form-control" value="<?= $data['nama_depan'] ?>">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="namaBelakang">Nama Belakang</label>
                        <input type="text" name="namaBelakang" id="namaBelakang" class="form-control" value="<?= $data['nama_belakang'] ?>">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-3">
                     <div class="form-group">
                        <input type="radio" name="jk" id="pria" value="Pria" <?= $data['jk'] == 'Pria' ? 'checked' : '' ?>> <label for="pria">Laki -Laki</label> &nbsp;&nbsp;&nbsp;
                        <input type="radio" name="jk" id="wanita" value="Wanita" <?= $data['jk'] == 'Wanita' ? 'checked' : '' ?>> <label for="wanita">Perempuan</label>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="form-group">
                        <label for="tglLahir">Tanggal Lahir</label>
                        <input type="date" name="tglLahir" id="tglLahir" class="form-control" value="<?= $data['tgl_lahir'] ?>">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="kontak">Kontak</label>
                        <input type="text" name="kontak" id="kontak" class="form-control" value="<?= $data['kontak'] ?>">
                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= $data['email'] ?>">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="email">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="4" class="form-control"><?= $data['alamat'] ?></textarea>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 ">
                     <div class="form-group">
                        <button type="submit" name="btn-UbahProfil" style="width: 50%;" class="btn btn-success">Simpan</button>
                     </div>
                  </div>
               </div>

            </div>
      </form>
   </div>
</div>


<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
   <form action="?page=act-myprofile" method="POST">
      <input type="text" name="idUser" id="idUser" hidden class="form-control" value="<?= $data['id_user'] ?>">
      <div class="row">
         <div class="col-md-6">
            <div class="form-group">
               <label for="username">Username</label>
               <input type="text" name="username" id="username" class="form-control" value="<?= $data['username'] ?>">
            </div>
         </div>
         <div class="col-md-6">
            <div class="form-group">
               <label for="email">Email</label>
               <input type="email" name="email" id="email" class="form-control" value="<?= $data['email'] ?>">
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4">
            <div class="form-group">
               <label for="password_lama">Password lama</label>
               <input type="text" name="password_lama" id="password_lama" class="form-control">
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               <label for="password_baru">Password baru</label>
               <input type="text" name="password_baru" id="password_baru" class="form-control">
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               <label for="ulangi_password">Ulangi password</label>
               <input type="text" name="ulangi_password" id="ulangi_password" class="form-control">
            </div>
         </div>
      </div>


      <div class="row">
         <div class="col-md-6 ">
            <div class="form-group">
               <button type="submit" name="btn-Ubahpassword" style="width: 50%;" class="btn btn-success">Simpan</button>
            </div>
         </div>
      </div>
   </form>
</div>