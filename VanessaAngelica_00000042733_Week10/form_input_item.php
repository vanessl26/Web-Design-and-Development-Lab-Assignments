<?php

require "conn.php";
$sql = "select * from users";

$con = GetConnection();
$hasil = $con->query($sql);

?>

<form action="insert_item.php" style="width:80%; margin-left:5%" method="post">
    <div class = "container">
        <h1>New Item Data</h1>
        <p>Item Name<input type="text" name="item_name" required></p>
        <p>Item Description<input type="text" name="item_description" required></p>
        <p>User
            <select name="users">
                <?php while ($users = $hasil->fetch()) : ?>
                    <option value="<?= $users['user_id'] ?>"> <?= $users['user_name'] ?></option>
                <?php endwhile; ?>
            </select>
        </p>
        <button type="submit">Save</button>
    </div>  
</form>

<style>
    body {
        margin: 5vh 0;
        background-color: #eee;
        font-family: arial;
        color: #54524d;
    }

    .container{
        width: 80%;
        margin: 0 10%;
        background-color: white;
        border-radius: 1rem;
        padding: 2% 5%;
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

    select{
        width: fit-width;
        text-align: center;
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