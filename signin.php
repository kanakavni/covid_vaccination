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
          <a class="nav-link active" href="contact.php">Contact</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" href="eligible.php">Eligible</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" href="#">Admin</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
 
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h2>Login Form</h2>
      <form action="validation.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control">
        </div>
         <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control">
        </div>
            <button class="btn btn-primary">Login</button>
      </form>
    </div>
    <div class="col-lg-5">
      <h2>Signin Form</h2>
      <form action="validation.php" method="post">
        <div class="form-group">
           <label>Username</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" name="address" class="form-control">
        </div>
        <div class="form-group">
          <label>age</label>
          <input type="text" name="age" class="form-control">
        </div>
        <div class="form-group">
          <label>Email-Id</label>
          <input type="text" name="emailid" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile No</label>
          <input type="text" name="mobileno" class="form-control">
        </div>
         <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control">
        </div>
            <button class="btn btn-primary">Signin</button>
      </form>
    </div>
  </div>
</div>

<footer>
       <p class="p-3 bg-dark text-white text-center">@vaccinationsupply</p>
     </footer>

 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>