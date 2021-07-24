<?php
include('conn.php');

    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone_number'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];

    

      

    $sql = "INSERT INTO user_register(first_name,	last_name, email, phone,password)
VALUES ('".$firstname."','".$lastname."','".$email."','".$phone."','".$password."')";

if (mysqli_query($conn, $sql)) {
  echo "successfully registered.Please Login";
  
} else {
  echo "Email Alredy existed.Please Login ";
}

mysqli_close($conn);
?>
