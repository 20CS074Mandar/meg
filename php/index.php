<?php
$host= 'mariadb';
$user= 'root';
$pass='root';

$conn = new mysqli($host,$user,$pass);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
} else {
   echo "Connected to MySQL server successfully!";
}
?>