<?php
include('conn.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql= " SELECT * FROM user_register WHERE email='$email' && password='$password'";
    
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)==1){
        header('location:index.php');
    }
    else{
      header('location:login.php');
    }
        

mysqli_close($conn);
?>
