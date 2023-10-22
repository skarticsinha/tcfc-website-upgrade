<?php
$servername = "localhost";  // Replace with your server name or IP address
$username = "orioles1_tcfcDBmanager"; // Replace with your database username
$password = "tcfc@DB.access01"; // Replace with your database password
$dbname = "orioles1_tcfcDB";   // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 