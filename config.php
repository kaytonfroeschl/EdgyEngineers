<?php
// Create connection
$conn = new mysqli("mysql.eecs.ku.edu", "c756b631", "er4Pho3i", "c756b631");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}