<?php
$servername = "localhost";
$username = "allinux"; 
$password = "password"; 
$dbname = "CAT1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Prepare and bind
$stmt = $conn->prepare("INSERT INTO Users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashed_password);

// Set parameters and execute
$username = 'newuser';
$email = 'newuser@example.com';
$hashed_password = password_hash('securepassword', PASSWORD_DEFAULT); // Hash the password
$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();
?>
