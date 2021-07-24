<?php

include('conn.php');

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email =  $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comment'];


$sql = "INSERT INTO user_enquiry (first_name,last_name, email, phone,comments)
VALUES ('".$firstname."','".$lastname."'  ,'".$email."','".$phone."','".$comments."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header('location:index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>