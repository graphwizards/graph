<?php
session_start();
include "../connection.php";
if ($_SESSION["id"] == "") {
    # code...
    header("Location:login.html");
}
if (isset($_POST['submit'])) {
    # code...
    $username=$_POST['username'];
    $password=$_POST['password'];
    $result = mysqli_query($connect,"SELECT * FROM admin WHERE username='$username' and password = '$password'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
$_SESSION["name"] = $row['username'];
} else {
echo " invalid Username Password! ";
}
}
if(isset($_SESSION["id"])) {
     header("Location:index.php");
    }
?>