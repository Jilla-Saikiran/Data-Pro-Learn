<?php

include('adminpartials/conn.php');
$name = $_POST['name'];

$sql = "INSERT INTO categories (category_name) 
VALUES ('$name')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header('location:index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>