<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register Form</title>
</head>
<body>
<nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a href="../index.php" class="navbar-brand">Tour&Travel</a>
    
    <div class="d-flex">
    <a href=""class="text-success text-decoration-none pe-2"><i class="fas fa-home"></i>Home</a>
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
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 m-auto bg-white shadow  border-info">
                <p class="text-center">User Registration</p>
                <form action="insert.php" method="post">
                    <div class="mb-3">
                        <label for="">UserName:</label>
                        <input type="text" placeholder="Enter UserName" name="name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">UserEmail:</label>
                        <input type="email" placeholder="Enter UserName" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Phone:</label>
                        <input type="number" placeholder="Enter UserPhone Number" name="phone" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Password:</label>
                        <input type="password" placeholder="Enter UserPhone Number" name="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button name="submit" class="btn btn-success form-control">REGISTER</button>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-danger form-control"><a class="text-white text-decoration-none" href="login.php">Have An Account?</a> </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>