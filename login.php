<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-secondary">
<nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a href="../user/index.php" class="navbar-brand">Tour&Travel</a>
    
    <div class="d-flex">
    <a href="../user/index.php"class="text-success text-decoration-none pe-2"><i class="fas fa-home"></i>Home</a>
    <a href="about.php"class="text-success text-decoration-none pe-2"><i class="fas fa-home"></i>About</a>
    <a href="../About/index.php"class="text-success text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i>Comment|</a>
    <span class="text-success pe-2">
       <i class="fas fa-user-shield"></i>Hello,
       <?php
       session_start();
       if(isset($_SESSION['user'])){

        echo $_SESSION['user'];
        echo "
        <a href='form/logout.php' class='text-success text-decoration-none pe-2'>| Logout |</a>
        ";
       }else{
        echo "
        <a href='form/login.php' class='text-success text-decoration-none pe-2'>Login |</a>
        ";
       }
     
       ?>
       
       <a href="../Authentication/login.php" class="text-success text-decoration-none pe-2">Admin</a>
    </span>
 
</nav> 
<div class="container my-3">
        <div class="row">
            <div class="col-md-6 shadow m-auto font-momospace border border-primary mt-4">

            
    <form action="login1.php" method="post">
        <div class="m-2">
           <h2 class="text-center fw-bold text-warning">Admin Login</h2>
       </div>
       <div class="mb-3">
            <label  class="form-label">Email:</label>
            <input type="email" class="form-control" name="email"/> 
       </div>
       <div>
       <div class="mb-2">
            <label  class="form-label">Password:</label>
            <input type="password" class="form-control" name="userpassword"/> 
       </div>


        <button class="btn btn-success fw-3 form-control my-3">Login</button>
    </form>
    </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>