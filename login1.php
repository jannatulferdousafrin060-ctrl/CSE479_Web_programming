<?php
  $con=mysqli_connect('localhost','root','','tourtravel');
  $email=$_POST['email'];
  $userpassword=$_POST['userpassword'];
  $result= mysqli_query($con, " SELECT * FROM `admin` WHERE email='$email' AND userpassword='$userpassword'");


  session_start();

  if(mysqli_num_rows($result)){

    $_SESSION['admin'] = $email;


    echo"
       <script>
         alert('Login successfully');
         window.location.href='../store.php';
       </script>

    ";
  }
  else{
    echo"
       <script>
         alert('Invalid Username/password');
         window.location.href='login.php';
       </script>

    ";
  }
?>