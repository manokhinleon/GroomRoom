<?php
if(empty($_POST))
    exit();
$name = $_POST["fio"];
$login = $_POST["login"];
$email = $_POST["email"];
$password = md5($_POST["password"]);

include 'db.php';
$query = "INSERT INTO `users` (`name`, `login`, `emtail`, `password`) VALUES ('$name','$login','$email','$password')";
$link->query($qiery) or die($link->error);
$link->close();
?>