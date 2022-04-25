<?php
require "conn.php";

$sql = "SELECT * FROM users";
$con = GetConnection();

$hasil = $con->prepare($sql);
$hasil->execute();
?>

<div class="container">
    <h1>List of Users</h1>

    <table align="center" border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
        </tr>

        <?php
        $i = 1;
        while ($row = $hasil->fetch()) :
        ?>
            <!-- pisah php -->
            <tr>
                <td><?php echo $row['user_id'] ?></td>
                <td><?php echo $row['user_name'] ?></td>
                <td><?php echo $row['user_description'] ?></td>
            </tr>
            <!-- pisah php -->
        <?php
            $i++;
        endwhile;
        ?>
    </table>

    <button> <a href="form_input_user.php" style="text-decoration: none">New User</a></button>
    <button> <a href="read.php" style="text-decoration: none">Back</a></button>
</div>

<style>
    body {
        background-color: #eee;
        font-family: arial;
        text-align: center;
        color: #54524d;
        margin: 5% 0;
    }

    .container{
        height: 100%;
        width: 80%;
        margin: 0 auto;
        background-color: white;
        border-radius: 1rem;
    }

    h1{
        padding-top: 3vh;
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

    button{
        margin-top: 5vh;
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