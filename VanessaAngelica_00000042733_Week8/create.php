<?php

$dsn = "mysql:host=localhost;dbname=unimedia_senin";
$pdo = new PDO($dsn, "root", "");

$sql = "SELECT * FROM kampus";

$hasil = $pdo -> prepare($sql);
$hasil -> execute();

While ($row = $hasil -> fetch()) {
    echo $row['ID'] . "<br>";
    echo $row['Nama'] . "<br>";
    echo $row['Alamat'] . "<br>";
    echo $row['Telepon'] . "<br>";
}