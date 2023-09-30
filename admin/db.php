<?php
$servername = "localhost";  // Replace with your server name or IP address
$username = "tcfcDBmanager"; // Replace with your database username
$password = "}rwYFP\$6t\$j64)M"; // Replace with your database password
$dbname = "tcfcDB";   // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
    echo "Connected successfully";
  ?>    