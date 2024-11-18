<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "school_db";
$port = "Port_id"; // MySQL custom port

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
