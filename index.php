<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Booking Page</title>
</head>
<body>
<nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a href='../user/index.php' class="navbar-brand">Tour&Travel</a>
    
    <div class="d-flex">
    <a href=""class="text-success text-decoration-none pe-2"><i class="fas fa-home"></i>Home</a>
    <a href="../About/index.php"class="text-success text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i>About|</a>
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
            <div class="col-md-6 m-auto border border-primary mt-4">

            
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <div class="m-2">
           <h2 class="text-center fw-bold text-warning">Booking Details</h2>
       </div>
       <div class="mb-3">
            <label  class="form-label">Destination:</label>
            <select class="form-select" aria-label="Default select example" name="destination">
                <option selected>Open this select menu</option>
                <option value="Shylet">Shylet</option>
                <option value="CoxBazar">CoxBazar</option>
                <option value="Kuakata">Kuakata</option>
                <option value="Sajek">Sajek</option>
            </select>
       </div>
       <div>
       <div class="mb-2">
            <label  class="form-label">Depart Date:</label>
            <input type="date" class="form-control datetimepicker-input" name="depart_date" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>                        
       </div>

       <div class="mb-2">
            <label  class="form-label">Return Date:</label>
            <input type="date" class="form-control  datetimepicker-input" name="return_date" placeholder="Depart Date" data-target="#date1" data-toggle="datetimepicker"/>                        
       </div>

       <div class="mb-2">
            <label  class="form-label">Package:</label>
            <select class="form-select" aria-label="Default select example" name="package">
                <option selected>Open this select menu</option>
                <option value="5000">5000</option>
                <option value="3000">3000</option>
                <option value="3000">1500</option>
                <option value="10000">10000</option>
                <option value="10000">20000</option>
            </select>                     
       </div>
       <div class="mb-2">
            <label  class="form-label">Image:</label>
            <input type="file" class="form-control" name="image" />                        
       </div>

       <div class="mb-2">
            <label  class="form-label">NID:</label>
            <input type="text" class="form-control" name="nid"/>                        
       </div>

       <div class="mb-2">
            <label  class="form-label">Contract Number:</label>
            <input type="text" class="form-control" name="phone" />                        
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
      <th scope="col">Destination</th>
      <th scope="col">Depart Date</th>
      <th scope="col">Return Date</th>
      <th scope="col">Package</th>
      <th scope="col">Image</th>
      <th scope="col">NID</th>
      <th scope="col">Contract Number</th>
      <th scope="col">Payment</th>
    </tr>
  </thead>

  <tbody>
    <?php
    include 'config.php';
    $record= mysqli_query($con,"SELECT * FROM `booking`");
    
    while($row=mysqli_fetch_array($record))
    echo"
    <tr>
    <td>$row[id]</td>
    <td>$row[destination]</td>
    <td>$row[depart_date]</td>
    <td>$row[return_date]</td>
    <td>$row[package]</td>
    <td><img src='$row[image]' height='90px' width='200px'></td>
    <td>$row[nid]</td>
    <td>$row[phone]</td>
    <td><a href='../Payment/easy-payment.php? ID=$row[id]' class='btn btn-warning'>Payment</a></td>
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