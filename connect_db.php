<?php
$host = "localhost";
$user = "root"; // Default XAMPP username
$password = ""; // Default is empty
$database = "vargas_signup_db"; // Change to your database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully"; // Uncomment to test
?>
