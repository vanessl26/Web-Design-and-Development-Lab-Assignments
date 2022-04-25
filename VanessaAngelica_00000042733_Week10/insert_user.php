<?php

require "conn.php";



$sql = "insert into users ( user_name, user_description) values (?,?)";
$conn = GetConnection();
$hasil = $conn->prepare($sql);
$hasil->execute([$_POST['user_name'], $_POST['user_description']]);

header("Location: read.php");
