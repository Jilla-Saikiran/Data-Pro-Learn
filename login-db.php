<?php
include('conn.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql= " SELECT * FROM Register WHERE Email='$email' && Password='$password'";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        header('location:my-course.html');
    }
    else{
      header('location:login.php');
    }
        

mysqli_close($conn);
?>
