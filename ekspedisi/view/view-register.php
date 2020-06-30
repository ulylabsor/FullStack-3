   <!-- layanan reg -->
   <div class="layanan-yes">
      <div class="container">
         <div class="cek-biaya-yes mt-5">
            <div class="row">
               <div class="col-lg-4">
                  <img src="./Assets/img/grab.jpg" style="width: 100%;  height: 100%; border-radius: 20px 0px 0px 20px;">
               </div>
               <form action="?page=act-register" method="POST">
                  <div class="col">
                     <div class="form-ongkir-yes">
                        <?php echo (isset($_SESSION['notif'])) ? $_SESSION['notif'] : '';
                        unset($_SESSION['notif'])
                        ?>
                        <h5>Register your<b> Account</b> </h5>
                        <p>
                           <h6>Apabila sudah memiliki account login <a href="?page=login">di sini</a></h6>
                        </p>
                        <p>
                           <input class="form-control" type="text" name="username" placeholder="Username Anda">
                        </p>
                        <p>
                           <input class="form-control" type="password" name="password" placeholder="Password anda">
                        </p>
                        <p>
                           <input type="radio" id="pria" name="jk">
                           <label for="pria">Pria</label> &nbsp;&nbsp;&nbsp;
                           <input type="radio" id="wanita" name="jk">
                           <label for="wanita">Wanita</label>
                        </p>
                        <p>
                           <input class="form-control" type="text" name="namaDepan" placeholder="Nama Depan anda">
                        </p>
                        <p>
                           <input class="form-control" type="text" name="namaBelakang" placeholder="Nama Belakang anda">
                        </p>
                        <p>
                           <input type="checkbox" id="agreement" name="agreement">
                           <label for="agreement">Saya menyetujui persyaratan dan ketentuan yang berlaku.</label>
                        </p>
                        <p>
                           <div class="row justify-content-center">
                              <button type="submit" name="btnRegister" class="btn btn-success">REGISTER</button>
                           </div>
                        </p>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- akhir layanan reg -->