<?php
include 'db.php';
if(!empty($_POST)){
    $login = $_POST['login'];
    $query = "SELECT * FROM `users` WHERE `login` = '%$login'";
    $result = $link
}