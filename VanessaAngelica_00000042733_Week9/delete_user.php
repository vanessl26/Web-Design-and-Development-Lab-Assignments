<?php

require "conn.php";

$sql = "delete from item where item_id = ?";

$con = GetConnection();
$hasil = $con->prepare($sql);
$hasil->execute([$_GET['itemid']]);

header("Location: read.php");
