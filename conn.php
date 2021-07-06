<?php

//var_dump($_POST); EXIT;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DPL";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if(!$conn){
  die("Connection failed: " . mysqli_connect_error());
}

?>