<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blind";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ");
} 

?>