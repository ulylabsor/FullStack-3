<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <div class="row">
      <div class="col-md-5">
         <h1 class="h2">Data Layanan &nbsp;&nbsp;
      </div>
      <div class="col-md-3">
         <a href="?page=add-layanan"><button class="btn btn-outline-info">Tambah data</button></a>
      </div>
      <div class="col-md-4">
         <form action="" method="GET">
            <input type="text" hidden class="form-control" name="page" style="width: 100%;" value="layanan">
            <input type="text" class="form-control" name="cari" style="width: 100%;" placeholder=" Cari Data...">
            <button type="submit" class="btn btn-info btn-sm">Cari</button>
         </form>
      </div>
   </div>
   </h1>
   <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
         <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
         <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
         <span data-feather="calendar"></span>
         This week
      </button>
   </div>
</div>

<?php echo (isset($_SESSION['notif'])) ? $_SESSION['notif'] : '';
unset($_SESSION['notif'])
?>
<div class="table-responsive">
   <table class="table table-striped table-sm" id="myTable">
      <thead>
         <tr>
            <th>#</th>
            <th>Icon</th>
            <th>Layanan</th>
            <th>Keterangan</th>
            <th>link</th>
            <th>Aksi</th>
         </tr>
      </thead>
      <tbody>
         <?php
         $no = 1;
         $cari = isset($_GET['cari']) ? $_GET['cari'] : '';
         $banyakdata = count(getLayanan($cari));
         $totaldata = count(getLayanan());
         if ($banyakdata == 0) {
            echo "Data tidak ditemukan";
         } else if ($banyakdata == $totaldata) {
            echo "Menamilkan semua Data ($totaldata)";
         } else {
            echo "Menampilkan $banyakdata dari total $totaldata data";
         }
         ?>
         <?php foreach (getLayanan($cari) as $data) : ?>
            <tr>
               <td><?= $no++ ?></td>
               <td><?= $data['icon'] ?></td>
               <td><?= $data['layanan'] ?></td>
               <td><?= $data['keterangan'] ?></td>
               <td><?= $data['link'] ?></td>
               <td>
                  <a href="?page=edit-layanan&id=<?= $data['id_layanan'] ?>" class="text-info">Edit</a> |
                  <a href="?page=act-layanan&aksi=delete&id=<?= $data['id_layanan'] ?>" onclick="return confirm('Yakin ingin menghapus data layanan <?= $data['layanan'] ?>?')" class="text-danger">Delete</a>

               </td>
            </tr>
         <?php endforeach ?>
      </tbody>
      <tfoot></tfoot>
   </table>
</div>