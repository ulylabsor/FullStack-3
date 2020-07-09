<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Data Users &nbsp;&nbsp;
      <a href="?page=add-users"><button class="btn btn-outline-info">Tambah data</button></a>
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
            <th>Username</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Kontak</th>
            <th>Level</th>
            <th>Status</th>
            <th>Created_at</th>
            <th>Aksi</th>
         </tr>
      </thead>
      <tbody>
         <?php $no = 1; ?>
         <?php foreach (getUsers() as $data) : ?>
            <tr>
               <td><?= $no++ ?></td>
               <td><?= $data['username'] ?></td>
               <td><?= $data['nama_depan'] . ' ' . $data['nama_belakang'] ?></td>
               <td><?= $data['jk'] ?></td>
               <td><?= $data['kontak'] ?></td>
               <td><?= $data['level'] ?></td>
               <td><?= $data['status'] ?></td>
               <td><?= $data['created_at'] ?></td>
               <td>
                  <a href="?page=edit-users&id=<?= $data['id_user'] ?>" class="text-info">Edit</a> |
                  <?php
                  if ($data['level'] == 'admin') {
                     echo '';
                  } else { ?>
                     <a href="?page=act-users&aksi=delete&id=<?= $data['id_user'] ?>" onclick="return confirm('Yakin ingin menghapus data <?= $data['username'] ?>?')" class="text-danger">Delete</a>
                  <?php
                  }
                  ?>

               </td>
            </tr>
         <?php endforeach ?>
      </tbody>
   </table>
</div>