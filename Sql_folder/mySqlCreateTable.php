<?php
$servername = "localhost"; 
$username = "root";
$password = "@Aman26266raj";
$dbname = "php_220";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed". $conn->connect_error);
}
echo "connected succesfully <br>";

$sql=" CREATE TABLE IF NOT EXISTS harsh1(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    color VARCHAR(30) NOT NULL,
    price VARCHAR(30) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

)";

if($conn->query($sql)==TRUE){
    echo "TABLE fruits created successfully";

}else{  
    echo "ERROR CREATING TABLE:".$conn->error;
}

$conn->close();
?>