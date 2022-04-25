<?php

$username = $_POST['uname'];
$password = password_hash($_POST['upass'], PASSWORD_BCRYPT);
// $role = $_POST['role'];

$k = new PDO("mysql:host=localhost;dbname=crudrelationdb", "root", "");

$sql = "INSERT INTO users (user_name, password) 
        VALUES (?, ?)";
        
$result = $k->prepare($sql);
$result->execute([$username, $password]);
header('Location: login.php');
