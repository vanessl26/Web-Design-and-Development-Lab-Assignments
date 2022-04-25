<?php

$dsn = "mysql:host=localhost;dbname=unimedia_senin";
$pdo = new PDO($dsn, "root", "");

$sql = "SELECT * FROM kampus Where Id = ?";

$hasil = $pdo -> prepare($sql);
$hasil -> execute([$_GET['Id']]);

$row = $hasil -> fetch();
?>

<h1>Ubah Data</h1>
<form action="edit_proses.php" method = "post" >
    <input type="hidden" name="Id" value="<?php echo $row['Id'] ?>">
    <p>Nama: <input type="text" name="Nama" value="<?php echo $row['Nama'] ?>"></p>
    <p>Alamat: <input type="text" name="Alamat" value="<?php echo $row['Alamat'] ?>"></p>
    <p>Telepon: <input type="text" name="Telepon" value="<?php echo $row['Telepon'] ?>"></p>
    <button type = "submit">Simpan</button>
</form>

<style>
    body {
        margin: 2vh 20%;
        background-color: #eee;
        font-family: arial;
        color: #54524d;
    }

    h1{
        text-align: center;
    }

    form p {
        font-size: 1.2rem;
    }

    form input{
        width: 100%;
        height: 5vh;
        border-radius: 0.3rem;
        font-size: 1rem;
        padding: 0 0.5vw;
    }

    button{
        margin: 0 45%;
        padding: 0.5rem;
        font-weight: bold;
        background-color: #ffc21c;
        border-radius: 0.3rem;
        font-size: 1.2rem;
    }

    button:hover{
        background-color: #1cb030;
        color: whitesmoke;
        transition: 0.5s;
    }
</style>

