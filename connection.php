<?php

$connect = mysqli_connect('localhost','root','');
$db=mysqli_select_db($connect,'graph');

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "";
?>