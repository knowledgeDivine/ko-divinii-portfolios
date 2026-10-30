<?php
// XAMPP Default MySQL Connection Parameters
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "aok_energy";

// Establish MySQL Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection Status
if ($conn->connect_error) {
    die(json_encode([
        "status" => "error", 
        "message" => "Database Connection Failed: " . $conn->connect_error
    ]));
}
?>
