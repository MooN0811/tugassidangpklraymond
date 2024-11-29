<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtugas_laporan";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
