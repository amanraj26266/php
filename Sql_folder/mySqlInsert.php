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

$sql = "INSERT INTO harsh1( id, name, color, price)Values(11,'apple','red',400),(12, 'orange', 'range', 300),(13, 'banana', 'yellow', 200 ),(15, 'grapes','green', 400)";

if($conn->query($sql)==TRUE){
    echo "record inserted successfully";

}else{  
    echo "could not insert the record: ".$conn->error;
}

$conn->close();
?>