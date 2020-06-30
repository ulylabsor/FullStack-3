   <!-- layanan reg -->
   <div class="layanan-yes">
      <div class="container">
         <div class="cek-biaya-yes mt-5">
            <div class="row">
               <div class="col-lg-4">
                  <img src="./Assets/img/grab.jpg" style="width: 100%;  height: 100%; border-radius: 20px 0px 0px 20px;">
               </div>
               <form action="?page=act-login" method="POST">
                  <div class="col">
                     <div class="form-ongkir-yes">
                        <?php echo (isset($_SESSION['notif'])) ? $_SESSION['notif'] : '';
                        unset($_SESSION['notif'])
                        ?>
                        <h5>Login your<b> Account</b> </h5>
                        <p>
                           <h6>Apabila belum memiliki account silakan <a href="?page=register">daftar</a></h6>
                        </p>
                        <p>
                           <input class="form-control" type="text" name="username" placeholder="Username Anda">
                        </p>
                        <p>
                           <input class="form-control" type="password" name="password" placeholder="Password anda">
                        </p>
                        <p>
                           <div class="row justify-content-center">
                              <button type="submit" name="btnLogin" class="btn btn-success">LOGIN</button>
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