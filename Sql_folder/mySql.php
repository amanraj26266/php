<?php 
$servername = "localhost"; 
$username = "root";
$password = "@Aman26266raj";
$dbname = "php_220";

$conn = new mysqli($servername, $username, $password, $dbname); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$conn->close();
?>