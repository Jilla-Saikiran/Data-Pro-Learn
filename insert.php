<?php

include('conn.php');

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email =  $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comment'];


$sql = "INSERT INTO Enquiry (First_Name,	Last_Name, Email, Phone,Comments)
VALUES ('".$firstname."','".$lastname."'  ,'".$email."','".$phone."','".$comments."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header('location:index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>