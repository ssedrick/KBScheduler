<?php
$servername = "localhost";
$username   = "php_user";
$password   = "php-user";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$conn->close();
?>
