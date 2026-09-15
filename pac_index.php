<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Package Page</title>
</head>
<?php
  session_start();
  if(!$_SESSION['admin']){
    header("location:login.php");
  }
?>
<body>
<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid text-white">
    <a href="../user/index.php" class="navbar-brand text-white">Tour&Travel</a>
    <span>
        <i class="fas fa-user-shield"></i>
        Hello,<?php echo $_SESSION['admin'];?> |
        <i class="fas fa-sign-out-alt"></i>
        <a href="../Authentication/login.php" class="text-decoration-none text-white">Logout</a> |
        <a href="../user/index.php" class="text-decoration-none text-white">Userpanel</a>
    </span>
  </div>
</nav>
    <div class="container my-3">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-4">

            
    <form action="pac_insert.php" method="post" enctype="multipart/form-data">
        <div class="m-2">
           <h2 class="text-center fw-bold text-warning">package Details</h2>
       </div>
       <div class="mb-3">
            <label  class="form-label">Title:</label>
            <input type="text" class="form-control" name="title"/>  
       </div>
      
       

       <div class="mb-2">
            <label  class="form-label">Package:</label>
            <select class="form-select" aria-label="Default select example" name="package">
                <option selected>Open this select menu</option>
                <option value="5000">5000</option>
                <option value="3000">3000</option>
                <option value="10000">10000</option>
                <option value="10000">15000</option>
                <option value="10000">20000</option>
            </select>                     
       </div>
       <div class="mb-2">
            <label  class="form-label">Image:</label>
            <input type="file" class="form-control" name="image" />                        
       </div>

       <div class="mb-2">
            <label  class="form-label">Description:</label>
            <input type="text" class="form-control" name="description"/>                        
       </div>

        <button class="btn btn-success fw-3 form-control my-3" name="submit">Add Data</button>
    </form>
    </div>
        </div>
    </div>

    <br>
    <br>
 <!-- fetch data -->
 <div class="container">
    <div class="row">
        <div class="col-md-12 m-auto">

    
 <table class="table border my-4">
  <thead class="bg-success text-white fs-5 font-monospace text-center">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Package</th>
      <th scope="col">Image</th>           
      <th scope="col">Description</th>
      <th scope="col">Action</th> 
      <th scope="col"></th>       
    </tr>
  </thead>

  <tbody>
    <?php
    include 'pac_config.php';
    $record= mysqli_query($con,"SELECT * FROM `package`");
    
    while($row=mysqli_fetch_array($record))
    echo"
    <tr>
    <td>$row[id]</td>
    <td>$row[title]</td>
    <td>$row[package]</td>  
    <td><img src='$row[image]' height='90px' width='200px'></td>
    <td>$row[description]</td>
    <td><a href='delete.php? ID=$row[id]' class='btn btn-danger'>Delete</a></td>
   
  </tr>
    ";
    ?>
  
  </tbody>
</table>                      
</div>
 </div>
 </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>