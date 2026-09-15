<?php
if(isset($_POST['submit'])){

    include 'config.php';

    $destination=$_POST['destination'];
    $depart_date=$_POST['depart_date'];
    $return_date=$_POST['return_date'];
    $package=$_POST['package'];
    $image=$_FILES['image'];
    $image_loc=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_des="Uploadimage/".$image_name;
    move_uploaded_file($image_loc,"Uploadimage/".$image_name);
    $nid=$_POST['nid'];
    $phone=$_POST['phone'];
     
    
    // insert product
    mysqli_query($con," INSERT INTO `booking`(`destination`, `depart_date`, `return_date`, `package`, `image`, `nid`, `phone`) VALUES ('$destination','$depart_date','$return_date','$package','$image_des','$nid','$phone')");
    header("location:index.php");


}
?>


  