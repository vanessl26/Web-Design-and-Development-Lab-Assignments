<?php

require "conn.php";


$sql = "insert into item ( item_name, item_description, user_id) values (?,?, ?)";
$conn = GetConnection();
$hasil = $conn->prepare($sql);
$hasil->execute([$_POST['item_name'], $_POST['item_description'], $_POST['users']]);

header("Location: read.php");
