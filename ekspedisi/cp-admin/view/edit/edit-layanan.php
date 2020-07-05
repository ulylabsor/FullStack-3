<?php
$data = getLayananById($_GET['id']);
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Ubah Data Layanan</h1>
</div>

<form action="?page=act-layanan" method="POST" enctype="multipart/form-data">
   <input type="text" class="form-control" hidden name="idLayanan" value="<?= $data['id_layanan'] ?>">
   <div class="row">
      <div class="col-md-3">
         <div class="form-group">
            <label for="layanan">Layanan</label>
            <input type="text" class="form-control" id="layanan" name="layanan" value="<?= $data['layanan'] ?>">
         </div>
      </div>
      <div class="col-md-3">
         <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" id="link" name="link" value="<?= $data['link'] ?>">
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-md-3">
         <div class="form-group">
            <label for="icon">Icon</label>
            <img src="../Assets/icon/<?= $data['icon'] ?>"><br>
            <input type="file" id="icon" name="icon" value="">
         </div>
      </div>
      <div class="col-md-3">
         <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" rows="3" class="form-control"><?= $data['keterangan'] ?></textarea>
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col-md-6">
         <button type="submit" name="btn-EditLayanan" class="btn btn-primary btn-block mt-4">Simpan</button>
      </div>
   </div>
</form>