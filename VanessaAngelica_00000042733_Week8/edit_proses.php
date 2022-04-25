<?php
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$telepon = $_POST['Telepon'];

$dsn = "mysql:host=localhost;dbname=unimedia_senin";
$pdo = new PDO($dsn, "root", "");

$sql = "UPDATE  kampus SET Nama = ?, Alamat = ? , Telepon = ? WHERE Id = ?";

$hasil = $pdo -> prepare($sql);
$hasil->execute([$nama, $alamat, $telepon,  $_POST['Id']]);

header ("Location: select.php");