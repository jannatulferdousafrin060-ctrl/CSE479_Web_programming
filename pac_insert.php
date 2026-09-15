<?php
if(isset($_POST['submit'])){

    include 'pac_config.php';

    $title=$_POST['title'];
    $package=$_POST['package'];
    $image=$_FILES['image'];
    $image_loc=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_des="Uploadimg/".$image_name;
    move_uploaded_file($image_loc,"Uploadimg/".$image_name);
    $description=$_POST['description'];
     
    
    // insert product
    mysqli_query($con," INSERT INTO `package`(`title`, `package`, `image`,`description`) VALUES ('$title','$package','$image_des','$description')");
    header("location:pac_index.php");


}
?>


  