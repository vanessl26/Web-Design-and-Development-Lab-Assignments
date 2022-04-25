<?php

session_start();

$username = $_POST['uname'];
$password = $_POST['upass'];

$k = new PDO("mysql:host=localhost;dbname=crudrelationdb", "root", "");
$sql = "SELECT * FROM users 
        WHERE user_name = ?";
$result = $k->prepare($sql);
$result->execute([$username]);

if($row = $result->fetch()){
    // username ada
    // cek password apakah sesuai
    if(password_verify($password, $row['password'])){
        // password cocok
        $_SESSION['username'] = $row['user_name'];
        header('Location: read.php');
    }
    else{
        //login gagal
        header('Location: login.php');
    }
}else{
    //login gagal
    header('Location: login.php');
}