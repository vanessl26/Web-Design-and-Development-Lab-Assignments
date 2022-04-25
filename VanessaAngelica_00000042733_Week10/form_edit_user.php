<?php
require "conn.php";

$sql = "SELECT item.item_id as itemid, item.item_name as itemname, item.item_description as itemdesc , users.user_name as username FROM item INNER JOIN 
users ON  item.user_id = users.user_id WHERE item.item_id = ? ";

$con = GetConnection();
$hasil = $con->prepare($sql);
$hasil->execute([$_GET['itemid']]);

$row = $hasil->fetch();

$kueri = "select * from users";

$hasil = $con->query($kueri);

?>

<div class="container">
    <h1>Edit Data</h1>
    <form action="edit_user.php" method="post">
        <input type="hidden" name="item_id" value="<?php echo $row['itemid'] ?>" required>

        <p>Item Name<input type="text" name="item_name" value="<?php echo $row['itemname'] ?>" required></p>
        <p>Item Description<input type="text" name="item_description" value="<?php echo $row['itemdesc'] ?>" required></p>
        <p>User Name (Change)</p>
        <select name="users">
            <?php while ($users = $hasil->fetch()) : 
                if($row['user_id']==$user_id){
                    $selected = 'selected = "selected"';
                }else{
                    $selected = '';
                }
                ?>
                <option <?= $selected ?> value="<?= $users['user_id'] ?>"> <?= $users['user_name'] ?></option>
            <?php endwhile; ?>
        </select>
        <br>
        <br>
        <button type=" submit">Save</button>
    </form>
</div>

<style>
    body {
        margin: 5vh 0;
        background-color: #eee;
        font-family: arial;
        color: #54524d;
    }

    .container{
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