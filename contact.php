<?php
include("config.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Vaccination</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="center.php">Center</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="about.php">About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" href="gallery.php">Gallery</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" href="contact.php">Contact</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" href="#">Admin</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Contact Us</h2>
  </div> 
<div class="w-50 m-auto"> 
    <form action="config.php" method="post" autocomplete="false">
        <div class="form-group">
           <label>First Name</label>
           <input type="text" name="firstname" autocomplete="false" class="form-control" required>
        </div>
         <div class="form-group">
           <label>Last Name</label>
           <input type="text" name="lastname" autocomplete="false" class="form-control" required >
        </div>
         <div class="form-group">
           <label>Email Id</label>
           <input type="email" name="email" autocomplete="false" class="form-control" required>
        </div>
         <div class="form-group">
           <label>Address</label>
           <input type="text" name="address" autocomplete="false" class="form-control" required>
        </div>
         <div class="form-group">
           <label>Mobile No</label>
           <input type="tel" name="mobileno" autocomplete="false" class="form-control" required>
        </div>
         <div class="form-group">
           <label>Comments</label>
           <textarea class="form-control" name="comment" autocomplete="false" required>
             </textarea>
        </div>
         <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>>

</section>

     <footer>
       <p class="p-3 bg-dark text-white text-center">@vaccinationsupply</p>
     </footer>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>