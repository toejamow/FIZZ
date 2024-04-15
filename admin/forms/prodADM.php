<?php

include ("../../connect/connect.php");

$name = isset($_POST["name"])?$_POST["name"]:false;
$descr = isset($_POST["descr"])?$_POST["descr"]:false;
$categ = isset($_POST["categ"])?$_POST["categ"]:false;
$price = isset($_POST["price"])?$_POST["price"]:false;
$image = isset($_FILES["image"]["tmp_name"])?$_FILES["image"]:false;

if ($name) {
    $image_name = $image["name"];
    $result = mysqli_query($con, "INSERT INTO `Product`(`Name`, `Description`, `Category_id`, `Price`, `Image`) VALUES ('$name','$descr','$categ', $price ,'$image_name')");
}

?>