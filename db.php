<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "barangat_lumbia";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character encoding
$conn->set_charset("utf8");
?>s