<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

   <title>Hello, world!</title>
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <h1 class="mt-3">My Profile</h1>
         </div>
         <div class="col-md-8">
            <img src="https://www.ketux.lt/wp-content/uploads/2019/04/1525068825bootstrap-logo-png-logo-228.png" class="float-right rounded-circle" alt="" height="90">
         </div>
      </div>

      <div class="row">
         <div class="col-md-3">
            <img src="https://cdn.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" alt="..." class="img-thumbnail rounded-circle">
            <p class="text-center">Upload different photo...</p>
            <input type="file">

            <div class="card mt-3">
               <div class="card-header">
                  Website
               </div>
               <ul class="list-group list-group-flush">
                  <li class="list-group-item"><a href="http://link.com">link.com</a></li>
               </ul>
            </div>

            <ul class="list-group mt-4">
               <li class="list-group-item d-flex justify-content-between align-items-center text-muted">Activity <span>14</span></li>
               <li class="list-group-item d-flex justify-content-between align-items-center"><strong>Share <span>125</span></strong></li>
               <li class="list-group-item d-flex justify-content-between align-items-center"><strong>Like <span>13</span></strong></li>
               <li class="list-group-item d-flex justify-content-between align-items-center"><strong>Post <span>37</span></strong></li>
               <li class="list-group-item d-flex justify-content-between align-items-center"><strong>Followers <span>78</span></strong></li>
            </ul>
         </div>
         <div class="col-md-9">
            <nav>
               <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">My Profile</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">My Password</a>
               </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
               <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <hr>
                  <form>
                     <div class="row">
                        <div class="col">
                           <div class="form-group">
                              <label for="firstName">First Name</label>
                              <input type="text" class="form-control" id="firstName" name="firstName">
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-group">
                              <label for="lastName">Last Name</label>
                              <input type="text" class="form-control" id="lastName" name="lastName">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col">
                           <div class="form-group">
                              <label for="phone">Phone</label>
                              <input type="text" class="form-control" id="phone" name="phone">
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-group">
                              <label for="mobile">Mobile</label>
                              <input type="text" class="form-control" id="mobile" name="mobile">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col">
                           <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" name="email">
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-group">
                              <label for="location">Location</label>
                              <input type="text" class="form-control" id="location" name="location">
                           </div>
                        </div>
                     </div>

                     <button type="submit" class="btn btn-success" name="prosesMyProfile">Save</button>
                     <button type="reset" class="btn btn-secondary" name="proses">Reset</button>
                  </form>
               </div>
               <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <hr>
                  <form>
                     <div class="row">
                        <div class="col">
                           <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" class="form-control" id="username" name="username">
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-group">
                              <label for="oldPassword">Old Password</label>
                              <input type="password" class="form-control" id="oldPassword" name="oldPassword">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col">
                           <div class="form-group">
                              <label for="newPassword">New Password</label>
                              <input type="text" class="form-control" id="newPassword" name="newPassword">
                           </div>
                        </div>
                        <div class="col">
                           <div class="form-group">
                              <label for="newPassword2">New Password Again</label>
                              <input type="text" class="form-control" id="newPassword2" name="newPassword2">
                           </div>
                        </div>
                     </div>


                     <button type="submit" class="btn btn-success" name="prosesMyPassword">Save</button>
                     <button type="reset" class="btn btn-secondary" name="proses">Reset</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>