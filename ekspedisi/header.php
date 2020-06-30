<!-- header -->
<section class="header sticky-top">
   <div class="row">
      <div class="col">
         <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
               <a class="navbar-brand" href="index.php"><img src="./Assets/logo/logo syn cepat.png" alt=""></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                     <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'home' ? 'active' : '' : '' ?>" href="?page=home">HOME <span class="sr-only">(current)</span></a>
                     <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'yes' ? 'active' : '' : '' ?>" href="?page=yes">YES</a>
                     <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'reg' ? 'active' : '' : '' ?>" href="?page=reg">REGULER</a>
                     <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'cod' ? 'active' : '' : '' ?>" href="?page=cod">COD</a>
                     <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'contact' ? 'active' : '' : '' ?>" href="?page=contact">CONTACT US</a>
                     <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'about' ? 'active' : '' : '' ?>" href="?page=about">ABOUT</a>
                     <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'register' ? 'active' : '' : '' ?>" href="?page=register">REGISTER</a>

                     <?php
                     if (isset($_SESSION['user'])) { ?>
                        <a class="nav-item nav-link"><?= $_SESSION['user'] ?></a>
                        <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'act-logout' ? 'active' : '' : '' ?>" href="?page=act-logout">LOGOUT</a>
                     <?php
                     } else { ?>
                        <a class="nav-item nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'login' ? 'active' : '' : '' ?>" href="?page=login">LOGIN</a>
                     <?php
                     }
                     ?>
                  </div>
               </div>
            </div>
         </nav>
      </div>
   </div>
</section>
<!-- akhir header -->