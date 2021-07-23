<?php

include('adminpartials/conn.php');
$name = $_POST['name'];


$target="../uploads/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="../uploads".$file_name;
move_uploaded_file($file_tmp,$file_store);

$sql = "INSERT INTO categories (category_name,category_img) 
VALUES ('$name','$file_path')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header('location:index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>