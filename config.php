<?php
$hostname     = "localhost"; 
$username     = "root";     
$password     = "";         
$databasename = "copodigital"; 

$conn = new mysqli($hostname, $username, $password, $databasename);
// Check connection
if ($conn->connect_error) {
  die("Database Connection failed: " . $conn->connect_error);
}

?>