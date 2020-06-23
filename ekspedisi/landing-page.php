<!-- slider -->
<section class="slider">
   <div class="row text-center">
      <div class="col-lg-12">
         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="container">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <h1>KIRIM BARANG TANPA KHAWATIR</h1>
                     <p>
                        <h6>Tidak hanya cepat, kami juga sediakan pick up GRATIS untuk mempermudah jualan
                           <br>
                           OnlineShop kamu tanpa minimal paket. Tidak perlu lagi menumpuk dan mengantarkan
                           barang,
                           karena SiGesit kami yang akan melakukannya.
                        </h6>
                     </p>
                  </div>
                  <div class="carousel-item">
                     <h1>KIRIM BARANG TANPA KHAWATIR</h1>
                     <p>
                        <h6>Tidak hanya cepat, kami juga sediakan pick up GRATIS untuk mempermudah jualan
                           <br>
                           OnlineShop kamu tanpa minimal paket. Tidak perlu lagi menumpuk dan mengantarkan
                           barang,
                           karena SiGesit kami yang akan melakukannya.
                        </h6>
                     </p>
                  </div>
                  <div class="carousel-item">
                     <h1>KIRIM BARANG TANPA KHAWATIR</h1>
                     <p>
                        <h6>Tidak hanya cepat, kami juga sediakan pick up GRATIS untuk mempermudah jualan
                           <br>
                           OnlineShop kamu tanpa minimal paket. Tidak perlu lagi menumpuk dan mengantarkan
                           barang,
                           karena SiGesit kami yang akan melakukannya.
                        </h6>
                     </p>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
   </div>
   <img src="./Assets/visual/visual1.png" alt="visual1" width="100%" height="auto" class="visual1">
</section>
<!-- akhir slider -->

<!-- ongkir dan lacak -->
<section class="ongkir-lacak">
   <div class="container">
      <div class="bg-ongkir-lacak">
         <div class="row justify-content-center">
            <div class="col-lg-5">
               <div class="ongkir">
                  <h1>Hitung Ongkos Kirim</h1>
                  <p>
                     <h6>Hitung Estimasi Biaya Barang Anda, dengan memasukkan Kota Tujuan, Kota Pengirim dan
                        Berat Barang Anda</h6>
                  </p>
                  <p>
                     <input class="form-control" type="text" placeholder="Kota Asal">

                  </p>
                  <p>
                     <input class="form-control" type="text" placeholder="Kota Tujuan">

                  </p>
                  <p>
                     <input class="form-control" type="text" placeholder="Berat Barang (grams)">
                  </p>
                  <p>
                     <a href="#"><button type="button" class="btn btn-outline-light">Clear</button></a>
                     <a href="./informasi.html"> <button type="button" class="btn btn-primary">Cek
                           Biaya</button> </a>
                  </p>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="lacak">
                  <h1>Hitung Lacak Kiriman</h1>
                  <p>
                     <h6>Masukkan No Resi Anda</h6>
                  </p>
                  <p>
                     <input class="form-control" type="text" placeholder="No Resi Anda">
                  </p>
                  <img src="./Assets/img/delivery.png" alt="delivery" height="200px" width="auto">
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- akhir ongkir & lacak -->

<!-- ours service -->
<section class="our-service">
   <div class="container">
      <div class="row text-center">
         <div class="col">
            <h1>Ours <b>Service</b> </h1>
            <hr style="width: 50px; border-width: 4px; border-color: black; ">
         </div>
      </div>
      <div class="row justify-content-center">
         <?php
         foreach (getLayanan() as $x) :  ?>
            <div class="col-lg-4 text-center">
               <div class="reguler">
                  <img src="./Assets/icon/<?php echo $x['icon'] ?>" alt="logo-paket">
                  <p>
                     <h1><?php echo $x['layanan'] ?></h1>
                  </p>
                  <p>
                     <h6><?php echo $x['keterangan'] ?></h6>
                  </p>
                  <p>
                     <a href="<?php echo $x['link'] ?>"><button type="button" class="btn btn-primary">Pilih
                           Layanan</button></a>
                  </p>
               </div>
            </div>
         <?php endforeach ?>
      </div>
   </div>
</section>
<!-- akhir ours service -->


<!-- berita terikini -->
<section class="berita-terkini">
   <div class="row">
      <div class="col-xl-5 d-lg-block d-none">
         <img class="img-kurir-sepeda" src="./Assets/img/kurir-sepeda.png" alt="kuris-sepeda">
      </div>
      <div class="col">
         <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
               <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Berita Terkini</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Event</a>
            </li>
         </ul>
         <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
               <div class="row">
                  <div class="col-lg-2">
                     <img class="gambar-berita" src="./Assets/img/gambar1.jpg" alt="gambar1">
                  </div>
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-2">
                     <img class="gambar-berita" src="./Assets/img/gambar1.jpg" alt="gambar1">
                  </div>
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-2">
                     <img class="gambar-berita" src="./Assets/img/gambar1.jpg" alt="gambar1">
                  </div>
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-2">
                     <img class="gambar-berita" src="./Assets/img/gambar1.jpg" alt="gambar1">
                  </div>
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-2">
                     <img class="gambar-berita" src="./Assets/img/gambar1.jpg" alt="gambar1">
                  </div>
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-2">
                     <img class="gambar-berita" src="./Assets/img/gambar1.jpg" alt="gambar1">
                  </div>
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
               <div class="row">
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <h6>Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of
                        the
                        printing
                        Lorem Ipsum is simply dummy text of the printing </h6>
                     <hr>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- akhir berita terkini -->

<!-- apa kata mereka -->
<section class="review">
   <div class="container">
      <div class="row text-center">
         <div class="col-lg-12">
            <h1>Apa <b>Kata Mereka</b> <br> Tentang Kami </h1>
            <hr style="width: 50px; border-width: 4px; border-color: black; ">
         </div>
      </div>
      <div class="row text-center">
         <?php foreach (getReview() as $data) : ?>
            <div class="col-lg-4">
               <div class="review-konten">
                  <img src="./Assets/img/<?= $data['foto'] ?>" alt="person1">
                  <p>
                     <h1><?= $data['nama_depan'] . ' ' . $data['nama_belakang'] ?></h1>
                  </p>
                  <p>
                     <?php
                     $cekKoma = strpos($data['bintang'], '.');
                     $explode = explode('.', $data['bintang']);
                     if ($cekKoma) :
                        for ($i = 1; $i <= $explode[0]; $i++) : ?>
                           <img src="./Assets/icon/ic_star.png" alt="star">
                        <?php endfor ?>
                        <img src="./Assets/icon/Half_Star.png" alt="star" width="27">
                        (<?= $data['bintang'] ?>)
                        <?php else :

                        for ($i = 1; $i <= $explode[0]; $i++) : ?>
                           <img src="./Assets/icon/ic_star.png" alt="star">
                           (<?= $data['bintang'] ?>)
                        <?php endfor ?>
                     <?php endif ?>
                  </p>
                  <p>
                     <h6>"<?= $data['komentar'] ?>"</h6>
                  </p>
               </div>
            </div>
         <?php endforeach ?>
      </div>
      <hr>
      <div class="row text-center pt-3">
         <div class="col">
            <a href="./review.html"> <button type="button" class="btn btn-outline-primary">Add Review</button></a>
         </div>
      </div>
   </div>
</section>
<!-- akhir apa kata mereka -->