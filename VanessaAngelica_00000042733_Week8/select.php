<?php

$dsn = "mysql:host=localhost;dbname=unimedia_senin";
$pdo = new PDO($dsn, "root", "");

$sql = "select * from kampus";

$hasil = $pdo -> prepare($sql);
$hasil -> execute();
?>

<h1>Daftar Kampus</h1>
<a href="insert_form.php">Buat Data Baru</a>
<table border="1" align="center">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
    </tr>
    <?php
    $i = 1;
    while ($row = $hasil -> fetch()) :
    ?>
    <tr>
        <td><?php echo $row['Id'] ?></td>
        <td><?php echo $row['Nama'] ?></td>
        <td><?php echo $row['Alamat'] ?></td>
        <td><?php echo $row['Telepon'] ?></td>
        <td>
            <a href="edit_form.php?Id=<?php echo $row['Id'] ?>">Ubah</a>
            <a href="delete.php?Id=<?php echo $row['Id'] ?>">Hapus</a>
        </td>
    </tr>
    <?php
    $i++;
    endwhile;
    ?>
</table>

<style>
    body {
        margin: 2vh;
        background-color: #eee;
        font-family: arial;
        text-align: center;
        color: #54524d;
    }

    a{
        font-size: 1.5rem;
        font-weight: bold;
    }

    a:hover{
        color: red;
        transition: 0.5s;
    }

    table{
        margin-top: 2vh;
        background-color: white;
    }

    table th, table td{
        font-size: 1.5rem;
        padding: 0.5rem;
        color: #54524d;
    }
</style>