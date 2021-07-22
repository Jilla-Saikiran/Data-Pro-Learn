<?php

include('adminpartials/conn.php');

$course_id = $_POST['course_code'];
$category_id=$_POST['category'];
$course_name = $_POST['course_name'];
$course_details =  $_POST['course_details'];
$course_price= $_POST['course_price'];

$target="../uploads/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="../uploads".$file_name;
move_uploaded_file($file_tmp,$file_store);


$sql = "INSERT INTO courses (course_id,	category_id,course_name,course_details, price,course_img)
VALUES ('".$course_id."','".$category_id."','".$course_name."','".$course_details."','".$course_price."','".$file_path."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header('location:index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>