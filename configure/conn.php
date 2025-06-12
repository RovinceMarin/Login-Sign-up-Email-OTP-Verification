<?php
$host = "localhost";      // Database host
$user = "root";           // Database username
$password = "";           // Database password (default is empty for XAMPP)
$dbname = "flexidesk"; // Replace with your actual DB name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>