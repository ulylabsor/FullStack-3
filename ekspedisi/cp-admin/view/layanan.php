<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Data Layanan &nbsp;&nbsp;
      <a href="?page=add-layanan"><button class="btn btn-outline-info">Tambah data</button></a>
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
   <table class="table table-striped table-sm">
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
         <?php $no = 1; ?>
         <?php foreach (getLayanan() as $data) : ?>
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
   </table>
</div>