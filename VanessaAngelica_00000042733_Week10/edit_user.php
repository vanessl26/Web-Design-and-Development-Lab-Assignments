<?php


require "conn.php";

$item_name = $_POST['item_name'];
$item_description = $_POST['item_description'];
$user_id = $_POST['users'];


$sql = "UPDATE  item  SET  item_name  = ? , item_description = ? , user_id = ? WHERE item_id = ?";

$con = GetConnection();
$hasil = $con->prepare($sql);

$hasil->execute([$item_name, $item_description, $user_id,  $_POST['item_id']]);

header("Location: read.php");
