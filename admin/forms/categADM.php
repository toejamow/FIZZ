<?php

include ("../../connect/connect.php");

$name = isset($_POST["name"])?$_POST["name"]:false;

if($name) {
    $result = mysqli_query($con, "INSERT INTO `Category`(`Name`) VALUES ('$name')");
    
}

?>