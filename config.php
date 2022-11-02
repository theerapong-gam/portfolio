<?php
$servername = "localhost";
$dbname = "db_ogthee";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




?>