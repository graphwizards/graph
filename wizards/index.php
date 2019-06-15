<?php
session_start();
include "../connection.php";
if ($_SESSION["id"] == "") {
    # code...
    header("Location:login.html");
}

 echo "Welcome!". $_SESSION["name"];
 echo  "<a href='logout.php'>Logout</a>";
?>