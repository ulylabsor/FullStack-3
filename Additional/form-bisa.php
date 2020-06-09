<html>

<head>
   <title>Form Profile</title>
   <!-- LINK CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
   <div class="container">
      <!-- Content here -->
      <div class="row">
         <div class="col-md-4">
            <h1 class="mt-3">My Profile</h1>
         </div>
         <div class="col-md-8">
            <img class="float-right" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100">
         </div>
      </div>

      <div class="row">
         <div class="col-md-3 border">
            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="..." class="img-thumbnail rounded-circle">
            <p class="text-center">Upload different photo...</p>
            <input type="file" name="photo">

            <div class="card mt-3">
               <div class="card-header">
                  Website
               </div>
               <ul class="list-group list-group-flush">
                  <li class="list-group-item"><a href="" target="_blank">mysite.com</a></li>
               </ul>
            </div>

            <ul class="list-group mt-4">
               <li class="list-group-item disabled">Activity
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center"><strong>Share</strong>
                  <span>125</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center"><strong>Like</strong>
                  <span>13</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center"><strong>Post</strong>
                  <span>37</span>
               </li>
               <li class="list-group-item d-flex justify-content-between align-items-center"><strong>Followers</strong>
                  <span>78</span>
               </li>
            </ul>
         </div>
         <div class="col-md-9 border">
            <nav>
               <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
               </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="row">
                     <div class="col">
                        <div class="form-group">
                           <label for="first-name">First Name</label>
                           <input type="text" class="form-control" id="first-name" name="first-name">
                        </div>
                     </div>
                     <div class="col">
                        <div class="form-group">
                           <label for="last-name">Last name</label>
                           <input type="text" class="form-control" id="last-name" name="last-name">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <div class="form-group">
                           <label for="password">Password</label>
                           <input type="password" class="form-control" id="password" name="password">
                        </div>
                     </div>
                     <div class="col">
                        <label for="jenis">Jenis Kelamin</label> <br>
                        <input type="radio" id="laki" name="jk" value="Pria">
                        <label for="laki" class="mr-3">Laki-Laki</label>
                        <input type="radio" id="perempuan" name="jk" value="Wanita">
                        <label for="perempuan">Perempuan</label>
                     </div>
                  </div>

               </div>
               <div class="row">
                  <div class="col">
                     <div class="form-group">
                        <label for="tgl">Tanggal lahir</label>
                        <input type="date" class="form-control" id="tgl" name="tgl">
                     </div>
                  </div>
                  <div class="col">
                     <div class="form-group">
                        <label for="gol-darah">golongan darah</label>
                        <select class="form-control" name="golongan-darah">
                           <option value="O">O</option>
                           <option value="A">A</option>
                           <option value="B">B</option>
                           <option value="AB">AB</option>
                           <option value="Nigrat">Biru</option>
                        </select>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <label for="alamat">alamat</label>
                     <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="3"></textarea>
                  </div>
               </div>
               <div class="row">
                  <div class="col mt-3">
                     <label for="hobi">Hobi</label><br>
                     <input type="checkbox" id="berenang" name="hobi[]" value="berenang">
                     <label for="berenang" class="mr-3">berenang</label>
                     <input type="checkbox" id="mancing" name="hobi[]" value="mancing">
                     <label for="mancing" class="mr-3">mancing</label>
                     <input type="checkbox" id="ngoding" name="hobi[]" value="ngoding">
                     <label for="ngoding" class="mr-3">ngoding</label>
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur">
                     </div>
                  </div>
                  <div class="col">
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                     </div>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary">Submit</button>
               <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
               <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
            </div>
         </div>
      </div>
   </div>



   <!-- LINK JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>


</html>