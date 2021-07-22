<?php
session_start();
include('adminpartials/conn.php');

    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql= " SELECT * FROM admin WHERE email='$email' AND password='$password'";
    
    $result=mysqli_query($conn,$sql);
    $results=$conn->query($sql);
    $final=$results->fetch_assoc();

    $_SESSION['email']=$final['email'];
    $_SESSION['password']=$final['password'];
    
    if($email=$final['email'] AND $password=$final=['password']){
        header('location: index.php');
    }
    else{
      header('location: adminlogin.php');
    }
        

mysqli_close($conn);
?>