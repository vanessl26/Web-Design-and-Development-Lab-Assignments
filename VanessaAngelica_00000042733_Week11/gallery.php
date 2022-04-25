<?php
require "conn.php";

$sql = "select * from gallery";
$con = GetConnection();

$hasil = $con->prepare($sql);
$hasil->execute();
?>
<div class="container">
    <h1>Photo Gallery</h1>
    <button><a href="upload_form.php" style="text-decoration: none">Add Photo</a></button>

    <table align="center" border="1">
        <tr>
            <th>Photo ID</th>
            <th>Title</th>
            <th>Image</th>

            <?php
            $i = 1;
            while ($row = $hasil->fetch()) :
            ?>
                <!-- pisah php -->
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['judul'] ?></td>
            <td><img style="max-width: 150px;" src="<?php echo $row['foto']?>"/></td>
        </tr>
        <!-- pisah php -->
    <?php
        $i++;
        endwhile;
    ?>
    </table>
    <br>
</div>
    
<style>
    body {
        margin: 5vh 0;
        background-color: #eee;
        font-family: arial;
        color: #54524d;
    }

    .container{
        width: 80%;
        margin: 0 5%;
        background-color: white;
        border-radius: 1rem;
        padding: 2% 5%;
    }

    h1{
        text-align: center;
    }

    a{
        color: #54524d;
    }

    a:hover{
        color: whitesmoke;
    }

    button{
        margin: 0 45% 3vh 45%;
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