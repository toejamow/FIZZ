<?php
session_start();
require ("../connect/connect.php");

$email = strip_tags(trim($_POST['email']));
$pass = strip_tags(trim($_POST['pass']));

$result = mysqli_query($con,"SELECT * FROM `Users` WHERE `Email` = '$email'");
$user = mysqli_fetch_assoc($result); // Конвертируем в массив
if(!empty($user)){
	echo "Данная эл. почта уже используется!";
	exit();
} else {
    mysqli_query($con,"INSERT INTO `Users`(`Email`, `Password_hash`, `Bonus_points`) VALUES ('$email','$pass','0')");
    echo "<script>alert('Регистрация прошла успешно!')</script>";
    $_SESSION["user_id"] = mysqli_insert_id($con);
    header('Location:index.php');
}



?>