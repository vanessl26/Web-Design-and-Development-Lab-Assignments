<?php


$dsn = "mysql:host=localhost;dbname=unimedia_senin";
$pdo = new PDO($dsn, "root", "");

$sql = "delete from kampus where Id = ?";

$hasil = $pdo -> prepare($sql);
$hasil -> execute([$_GET['Id']]);

header("Location: select.php");
