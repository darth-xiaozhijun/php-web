<?php
$servername = "localhost";
$usernmae = "root";
$password = "123456";

//连接mysql
$conn = new mysqli($servername,$usernmae,$password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
