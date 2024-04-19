<?php

include ("../../connect/connect.php");

$status = isset($_POST["status"])?$_POST["status"]:false;

if($status) {
    $result = mysqli_query($con, "INSERT INTO `Orders`(`Status`) VALUES ('$status')");
}

?>