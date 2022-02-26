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
          <a class="nav-link active" href="admin.php">Admin</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
   <a href="signin.php">
    	 <button type="submit" class="btn btn-primary">Login
         </button>
        </a>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/image01.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">

      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/image02.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/image03.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">    
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
     <footer>
       <p class="p-3 bg-dark text-white text-center">@vaccinationsupply</p>
     </footer>

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>