<html>

<head>
   <title>Form Profile</title>
   <!-- LINK CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.3.45/css/materialdesignicons.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
   <style>
      body {
         font-family: 'Roboto', sans-serif;
      }
   </style>
</head>

<body>
   <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-0">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item p-1">
                  <a class="nav-link text-gray" href="#">User List</a>
               </li>
               <li class="nav-item p-1" style="background-color: deepskyblue;">
                  <a class="nav-link text-gray" href="#">User Profile</a>
               </li>
               <li class="nav-item p-1">
                  <a class="nav-link text-gray" href="#">Statistic</a>
               </li>
               <li class="nav-item p-1">
                  <a class="nav-link text-gray" href="#">Contact</a>
               </li>
               <li class="nav-item p-1">
                  <form class="form-inline my-2 my-lg-0">
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                           <span class="input-group-text" id="basic-addon2"><span class="mdi mdi-search-web"></span></span>
                        </div>
                     </div>
                  </form>
               </li>
            </ul>

         </div>
      </nav>

      <nav class="mt-4">
         <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Overview</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Account</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Project</a>
         </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
         <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row mt-4">
               <div class="col-md-3">
                  <div class="card rounded-0">
                     <div class="card-body p-2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS4xO03xqPRE2s_T0rxz3yH4miE9IbqGPteDkZUERZW6alOjTPl&usqp=CAU" alt="..." class="img-thumbnail">

                        <ul class="list-group mt-2 rounded-0">
                           <li class="list-group-item mb-1" style="background-color: #f5f5f5;" aria-disabled="true"> <i class="mdi mdi-basket mr-1"></i> Project
                              <span class="badge badge-primary badge-pill float-right">10</span>
                           </li>
                           <li class="list-group-item mb-1" style="background-color: #f5f5f5;"><i class="mdi mdi-email mr-1"></i> Messages
                              <span class="badge badge-primary badge-pill float-right">11</span>
                           </li>
                           <li class="list-group-item mb-1" style="background-color: #f5f5f5;"><i class="mdi mdi-account-multiple mr-1"></i> Friends
                              <span class="badge badge-primary badge-pill float-right">14</span>
                           </li>
                           <li class="list-group-item" style="background-color: #f5f5f5;"><i class="mdi mdi-autorenew mr-1"></i> Settings
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-9">
                  <div class="row">
                     <div class="col-md-8">
                        <h3>Ted Stinson</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero dolorum accusantium, nesciunt sapiente sed labore, natus officiis sint fugiat culpa maiores ducimus aliquam nemo nisi commodi fugit consequuntur animi ullam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem delectus ad, voluptatibus laudantium rem nam perferendis in consequuntur error, odit et. Vitae, rem recusandae similique minima blanditiis possimus velit quasi.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum voluptate</p>
                     </div>
                     <div class="col-md-4">
                        <div class="card border-0" style="background-color: #f5f5f5;">
                           <div class="card-body p-3 ">
                              <h5 class="mb-3">Sales Summary</h5>
                              <ul class="list-unstyled mb-0">
                                 <li class="d-flex justify-content-between align-items-center mb-3"><strong>Today Sold</strong>
                                    <span style="color: deepskyblue;">19</span>
                                 </li>
                                 <li class="d-flex justify-content-between align-items-center mb-3"><strong>Weekly Sales</strong>
                                    <span style="color: deepskyblue;">35</span>
                                 </li>
                                 <li class="d-flex justify-content-between align-items-center"><strong>Total Sold</strong>
                                    <span style="color: deepskyblue;">1989</span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-12">
                        <ul class="list-inline">
                           <li class="list-inline-item"><span class="mdi mdi-google-plus" style="font-size: 30px;"></span> @TedStinson &nbsp;&nbsp;</li>
                           <li class="list-inline-item"><span class="mdi mdi-twitter mdi-20px" style="font-size: 30px;"></span> t_stinson &nbsp;&nbsp;</li>
                           <li class="list-inline-item"><span class="mdi mdi-facebook" style="font-size: 30px;"></span> ted_stinson &nbsp;&nbsp;</li>
                           <li class="list-inline-item"><span class="mdi mdi-skype" style="font-size: 30px;"></span> stinson_ted &nbsp;&nbsp;</li>
                        </ul>
                     </div>
                  </div>
                  <div class="row mt-5">
                     <div class="col-md-12">
                        <ul class="nav nav-pills p-2" id="pills-tab" role="tablist" style="background-color: skyblue;">
                           <li class="nav-item" role="presentation">
                              <a class="nav-link active rounded-0" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Latest Customer</a>
                           </li>
                           <li class="nav-item" role="presentation">
                              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Feeds</a>
                           </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                           <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                              <table class="table table-striped">
                                 <thead class="text-muted">
                                    <tr>
                                       <td scope="col">Company</td>
                                       <td scope="col">Decription</td>
                                       <td scope="col">Amount</td>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td scope="row">Smart House</td>
                                       <td>Office Furniture Purchase</td>
                                       <td>$52560.10</td>
                                    </tr>
                                    <tr>
                                       <td scope="row">Smart House</td>
                                       <td>Office Furniture Purchase</td>
                                       <td>$52560.10</td>
                                    </tr>
                                    <tr>
                                       <td scope="row">Smart House</td>
                                       <td>Office Furniture Purchase</td>
                                       <td>$52560.10</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                           <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                        </div>

                     </div>
                  </div>
               </div>

            </div>
         </div>
         <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
         <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
      </div>
   </div>


   <!-- LINK JS -->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>


</html>