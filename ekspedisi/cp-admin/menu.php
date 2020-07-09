<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
   <div class="sidebar-sticky pt-3">
      <ul class="nav flex-column">
         <?php
         if ($_SESSION['Level'] == 'admin') : ?>
            <li class="nav-item">
               <a class="nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'home' ? 'active' : '' : 'active' ?>" href="index.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'users' ? 'active' : '' : '' ?>" href="?page=users">
                  <span data-feather="users"></span>
                  Data Users
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'layanan' ? 'active' : '' : '' ?>" href="?page=layanan">
                  <span data-feather="list"></span>
                  Data Layanan
               </a>
            </li>
         <?php else : ?>
            <li class="nav-item">
               <a class="nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'home' ? 'active' : '' : 'active' ?>" href="index.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
               </a>
            </li>
            <li class="nav-item">
               <a class="nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'tracking' ? 'active' : '' : '' ?>" href="?page=tracking">
                  <span data-feather="list"></span>
                  Data Tracking
               </a>
            </li>
            <!-- <li class="nav-item">
               <a class="nav-link <?= isset($_GET['page']) ? $_GET['page'] == 'layanan' ? 'active' : '' : '' ?>" href="?page=layanan">
                  <span data-feather="list"></span>
                  Data Layanan
               </a>
            </li> -->
         <?php endif ?>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
         <span>Navigation</span>
         <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
         </a>
      </h6>
      <ul class="nav flex-column mb-2">
         <li class="nav-item">
            <a class="nav-link" href="?page=myprofile">
               <span data-feather="file-text"></span>
               My Profile
            </a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="?page=act-logout">
               <span data-feather="file-text"></span>
               Logout
            </a>
         </li>
      </ul>
   </div>
</nav>