<?php
$kampus_ID = $_GET['ID'];
$dsn = "mysql:host=localhost;dbname=unimedia_senin";
$pdo = new PDO($dsn, "root", "");

$sql ="insert into kampus (Nama, Alamat, Telepon) values (?, ?, ?)";

$hasil = $pdo -> prepare($sql);
$hasil -> execute([$_POST['Nama'], $_POST['Alamat'], $_POST['Telepon']]);

header ("Location: select.php");