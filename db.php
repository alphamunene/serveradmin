<?php
$servername = "localhost";
$username = "allinux"; // Your DB username
$password = "linuxlinux.1"; // Your DB password
$dbname = "CAT1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
